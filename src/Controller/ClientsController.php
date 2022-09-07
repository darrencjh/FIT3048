<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Mailer\Mailer;

/**
 * Clients Controller
 *
 * @property \App\Model\Table\ClientsTable $Clients
 * @method \App\Model\Entity\Client[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ClientsController extends AppController
{
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        //client intake form page not need login as well as feedback
        $this->Authentication->addUnauthenticatedActions(['intakeform', 'feedback']);
    }


    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $clients = $this->paginate($this->Clients);

        $this->set(compact('clients'));
    }

    /**
     * View method
     *
     * @param string|null $id Client id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $client = $this->Clients->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('client'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $client = $this->Clients->newEmptyEntity();
        if ($this->request->is('post')) {
            $client = $this->Clients->patchEntity($client, $this->request->getData());
            if ($this->Clients->save($client)) {
                $this->Flash->success(__('The client has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The client could not be saved. Please, try again.'));
        }
        $this->set(compact('client'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Client id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $client = $this->Clients->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $client = $this->Clients->patchEntity($client, $this->request->getData());
            if ($this->Clients->save($client)) {
                $this->Flash->success(__('The client has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The client could not be saved. Please, try again.'));
        }
        $this->set(compact('client'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Client id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $client = $this->Clients->get($id);
        if ($this->Clients->delete($client)) {
            $this->Flash->success(__('The client has been deleted.'));
        } else {
            $this->Flash->error(__('The client could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


    public function intakeform()
    {
        $client = $this->Clients->newEmptyEntity();
        if ($this->request->is("post")) {
            // Form submit handler
            $client = $this->Clients->patchEntity($client, $this->request->getData());

            $postData = $this->request->getData();

            if ($this->__checkRecaptchaResponse($postData['g-recaptcha-response'])) {
                $this->Flash->success('Robot verification passed,you are not a robot');

                //combine the client name+address and save into database
                $client->full_name = $postData['givenName'] . ' ' . $postData['lastName'];
                $client->home_address = $postData['unit'] . $postData['street'] . ',' . $postData['suburb'] . ',' . $postData['state'] . ',' . $postData['postcode'];

                if ($this->Clients->save($client)) {
                    $this->Flash->success('Form has been successfully submitted');

                    //sending email here
                    //1.sending to client
                    $mailer1 = new Mailer('default');
                    // Setup email parameters
                    $mailer1
                        ->setEmailFormat('html')
                        ->setTo($client->email)
                        ->setFrom("leonie@u22s1043.monash-ie.me")
                        ->setSubject('Confirmation of your intake form' . " <" . h($client->email) . ">")
                        ->viewBuilder()
                        ->disableAutoLayout()
                        ->setTemplate('intakeformConfirmation');

                    // Send data to the email template
                    $mailer1->setViewVars([
                        'client' => $postData
                    ]);
                    //Send email
                    $email_result = $mailer1->deliver();
                    if (!$email_result)  {
                        $this->Flash->error(__('Email failed to send. Please check the query in the system later. '));
                    }




                    //2.sending to leonie
                    //same codes as above
                    //change to $mailer2
                    //->setSubject    : email title
                    //->setTemplate() : change this to the email template name. if the file name is "a_b". write "aB"
                    $mailer2 = new Mailer('default');
                    // Setup email parameters
                    $mailer2
                        ->setEmailFormat('html')
                        ->setTo($client->email) //put Leonie's Email
                        ->setFrom("leonie@u22s1043.monash-ie.me")
                        ->setSubject('New Client' . " <" . h($client->full_name) . ">")
                        ->viewBuilder()
                        ->disableAutoLayout()
                        ->setTemplate('intakeformConfirmation'); //Change template

                    // Send data to the email template
                    $mailer2->setViewVars([
                        'client' => $postData
                    ]);
                    //Send email
                    $email_result = $mailer2->deliver();
                    if (!$email_result)  {
                        $this->Flash->error(__('Email failed to send. Please check the query in the system later. '));
                    }



                    //3.sending to referral
                    //
                    if($postData['has_referrer']){
                        //if client has a referrer,then send email. Otherwise,not
                        //same email sending codes as above
                        //change to $mailer3
                        $mailer3 = new Mailer('default');
                        // Setup email parameters
                        $mailer3
                            ->setEmailFormat('html')
                            ->setTo($client->referrer_email) //put referral email
                            ->setFrom("leonie@u22s1043.monash-ie.me")
                            ->setSubject("Shelbourne Legal: ". h($client->full_name) . "was referred by you")
                            ->viewBuilder()
                            ->disableAutoLayout()
                            ->setTemplate('referrerConfirmation'); //Change template

                        // Send data to the email template
                        $mailer3->setViewVars([
                            'client' => $postData
                        ]);
                        //Send email
                        $email_result = $mailer3->deliver();
                        if (!$email_result)  {
                            $this->Flash->error(__('Email failed to send. Please check the query in the system later. '));
                        }


                    }








                    return $this->redirect(['action' => 'feedback']);
                } else {
                    $this->Flash->error(__('The client could not be saved. Please, try again.'));
                }
            } else {
                $this->Flash->error('Robot verification failed,you are a robot');
            }
        }
        $this->set("client", $client);


    }

    private
    function __checkRecaptchaResponse($response)
    {
        // verifying the response is done through a request to this URL
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        // The API request has three parameters (last one is optional)
        $data = array('secret' => RECAPTCHAV2_SECRET,
            'response' => $response,
            'remoteip' => $_SERVER['REMOTE_ADDR']);

        // use key 'http' even if you send the request to https://...
        $options = array(
            'http' => array(
                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($data),
            ),
        );

        // We could also use curl to send the API request
        $context = stream_context_create($options);
        $json_result = file_get_contents($url, false, $context);
        $result = json_decode($json_result);
        return $result->success;
    }

    public
    function feedback()
    {
        $pageTitle = "Thank You";
        $this->set(compact('pageTitle'));

    }

}
