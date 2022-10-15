<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Mailer\Mailer;

/**
 * Admins Controller
 *
 * @property \App\Model\Table\AdminsTable $Admins
 * @method \App\Model\Entity\Admin[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AdminsController extends AppController
{
    //Called before the controller action. You can use this method to
    //configure and customize components or perform logic that needs to happen before each controller action.
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        // Configure the login action to not require authentication, preventing
        // the infinite redirect loop issue
        $this->Authentication->addUnauthenticatedActions(['login', 'resetPasswordEmail']);


        $this->viewBuilder()->setLayout('adminManageLayout');
    }


    public function dashboard()
    {
        $pageTitle = "Dashboard";

        //1.get number of bookings each month
        $monthBooking_query = $this->fetchTable('Bookings')->find();
        $month_booking=$monthBooking_query->select([
            'month'=>$monthBooking_query->func()->extract('month','date'),
            'bookings'=>$monthBooking_query->func()->count('date'),
        ])
            ->group($monthBooking_query->func()->extract('month','date'))
            ->orderAsc($monthBooking_query->func()->extract('month','date'))
            ->toArray();
//        $month_booking = [];
//        foreach ($monthBooking_result as $oneMonth) {
//            $month_booking[] = [
//                'month'=>$oneMonth->month,
//                'bookings'=>$oneMonth->bookings
//            ];
//        }




        //2.get number for each referer
        $referer_query = $this->fetchTable('Clients')->find();
        $referer_query->select([
            'value' => $referer_query->func()->count('referrer_source'),
            'name' => 'referrer_source'
        ])
            ->group('referrer_source');
        $referer_source = $referer_query->toArray();
//        $referer_source = [];
//        foreach ($referer_result as $oneReferrer) {
//            $referer_source[] = [
//                'name' => $oneReferrer->name,
//                'value' => $oneReferrer->value
//            ];
//        }


        //3.get the total number of clients
        $client_query = $this->fetchTable('Clients')->find();
        $client_counts = $client_query->all()->count();

        //4.get the number of today's bookings
        $todayBooking_query = $this->fetchTable('Bookings')->find()->where([
            'date =' => date("Y-m-d")
        ]);
        $toadyBooking_counts = $todayBooking_query->all()->count();

        $this->set(compact('pageTitle'));
        $this->set(compact('client_counts', 'toadyBooking_counts', 'referer_source', 'month_booking'));

    }

    public function login()
    {
        // Set the login layout.
        $this->viewBuilder()->setLayout('adminLoginLayout');

        $this->request->allowMethod(['get', 'post']);
        $result = $this->Authentication->getResult();
        // regardless of POST or GET, redirect if user is logged in
        if ($result && $result->isValid()) {
            // redirect to /admins/dashboard after login success
            $redirect = $this->request->getQuery('redirect', [
                'controller' => 'Admins',
                'action' => 'dashboard',
            ]);

            return $this->redirect($redirect);
        }
        // display error messages if user submitted and authentication failed
        if ($this->request->is('post') && !$result->isValid()) {
            $this->Flash->error(__('Invalid username or password'));
            $loginResult = $result->isValid();
            $this->set(compact('loginResult'));
        }

    }

    public function logout()
    {
        $result = $this->Authentication->getResult();
        // regardless of POST or GET, redirect if user is logged in
        if ($result && $result->isValid()) {
            $this->Authentication->logout();
            return $this->redirect(['controller' => 'Admins', 'action' => 'login']);
        }
    }

    public function resetPasswordEmail()
    {
        $this->viewBuilder()->setLayout('adminLoginLayout');
        if ($this->request->is('post')) {
            $code=$this->request->getData('code');
            $validCode=$this->request->getData('validCode');
            $adminId=$this->request->getData('adminId');
            if($code==$validCode){
                return $this->redirect(['controller' => 'Admins', 'action' => 'reset','?'=>['legalPage'=>true,'id'=>$adminId]]);
            }

        }
    }

    /**
     * Reset method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function reset()
    {
        $legalPage = $this->request->getQuery('legalPage','');
        $adminId = $this->request->getQuery('id','');
        if($legalPage){
            $this->viewBuilder()->setLayout('adminLoginLayout');
            if ($this->request->is('post')) {
                $password=$this->request->getData('password');

                $admin = $this->Admins->get($adminId);
                $admin = $this->Admins->patchEntity($admin, $this->request->getData());
                $admin->password = hash('sha256', $password);
                if ($this->Admins->save($admin)) {

                    return $this->redirect(['action' => 'login','?'=>['action'=>'resetPwdSuccess']]);
                }
            }

        }else{
            return $this->redirect(['controller' => 'Admins', 'action' => 'resetPasswordEmail']);

        }


    }

    public function sendCode()
    {
        if( $this->request->is('ajax') ) {
            $email=$this->request->getData('email');

            if (!empty($email)) {
                $query = $this->Admins->find()->where([
                    'email' => $email,
                ]);
                $result = $query->first();
                if (isset($result)) {
                    $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
                    $code=substr(str_shuffle($permitted_chars), 0, 6);

                    //send email
                    $mailer = new Mailer('default');
                    // Setup email parameters
                    $mailer
                        ->setEmailFormat('html')
                        ->setTo($email)
                        ->setFrom("wliu0025@u22s1043.monash-ie.me")
                        ->setSubject('Verification Code for reset password')
                        ->viewBuilder()
                        ->disableAutoLayout()
                        ->setTemplate('reset_password');


                    // Send data to the email template
                    $mailer->setViewVars([
                        'username' => $result->username,
                        'code'=>$code,

                    ]);
                    //Send email
                    $email_result = $mailer->deliver();

                    //send json data
                    return $this->response->withType('application/json')
                        ->withStringBody(json_encode(['emailValid' => true,'code'=>$code,'adminId'=>$result->id]));


                } else {
                    return $this->response->withType('application/json')
                        ->withStringBody(json_encode(['emailValid' => false]));
                }
            }





        }



    }


    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $admins = $this->Admins->find()->all();

        $this->set(compact('admins'));
    }

    /**
     * View method
     *
     * @param string|null $id Admin id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $admin = $this->Admins->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('admin'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $admin = $this->Admins->newEmptyEntity();
        if ($this->request->is('post')) {
            $admin = $this->Admins->patchEntity($admin, $this->request->getData());
            if ($this->Admins->save($admin)) {
                $this->Flash->success(__('The admin has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The admin could not be saved. Please, try again.'));
        }
        $this->set(compact('admin'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Admin id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $admin = $this->Admins->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $admin = $this->Admins->patchEntity($admin, $this->request->getData());
            if ($this->Admins->save($admin)) {
                $this->Flash->success(__('The admin has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The admin could not be saved. Please, try again.'));
        }
        $this->set(compact('admin'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Admin id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $admin = $this->Admins->get($id);
        if ($this->Admins->delete($admin)) {
            $this->Flash->success(__('The admin has been deleted.'));
        } else {
            $this->Flash->error(__('The admin could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


}
