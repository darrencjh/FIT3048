<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\Mailer\Mailer;


/**
 * Bookings Controller
 *
 * @property \App\Model\Table\BookingsTable $Bookings
 * @method \App\Model\Entity\Booking[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BookingsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $bookings = $this->paginate($this->Bookings);

        $this->set(compact('bookings'));
    }


    public function getBookedTime()
    {

        if( $this->request->is('ajax') ) {

            $selectedDate=$this->request->getQuery('selectedDate');

            //base query that lists all bookings
            $query=$this->Bookings->find();
            $query->where([
                'date'=>$selectedDate
            ]);

            $bookedTime=$query->all();
            $result=[];
            foreach ($bookedTime as $index=>$item){
                $result[$index]=$item->booked_time;
            }
            if(empty($bookedTime)){
                return $this->response->withType('application/json')
                    ->withStringBody(json_encode(['result'=>'no']));
            }else{
                return $this->response->withType('application/json')
                    ->withStringBody(json_encode($result));
            }



        }


    }

    /**
     * View method
     *
     * @param string|null $id Booking id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $booking = $this->Bookings->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('booking'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $booking = $this->Bookings->newEmptyEntity();
        if ($this->request->is('post')) {
            $booking = $this->Bookings->patchEntity($booking, $this->request->getData());
            if ($this->Bookings->save($booking)) {
                $this->Flash->success(__('The booking has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The booking could not be saved. Please, try again.'));
        }
        $this->set(compact('booking'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Booking id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $booking = $this->Bookings->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $booking = $this->Bookings->patchEntity($booking, $this->request->getData());
            if ($this->Bookings->save($booking)) {
                $this->Flash->success(__('The booking has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The booking could not be saved. Please, try again.'));
        }
        $this->set(compact('booking'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Booking id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $booking = $this->Bookings->get($id);
        if ($this->Bookings->delete($booking)) {
            $this->Flash->success(__('The booking has been deleted.'));
        } else {
            $this->Flash->error(__('The booking could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


    public function choose()
    {
        $booking = $this->Bookings->newEmptyEntity();
        if ($this->request->is('post')) {
            $booking = $this->Bookings->patchEntity($booking, $this->request->getData());
            if ($this->Bookings->save($booking)) {
                $this->Flash->success(__('The booking has been saved.'));


                // 1.Send email to client who made a booking
                $mailer = new Mailer('default');
                // Setup email parameters
                $mailer
                    ->setEmailFormat('html')
                    ->setTo($booking->email)
                    ->setFrom("wliu0025@u22s1043.monash-ie.me")
                    ->setSubject('Confirmation of your booking' . " <" . h($booking->email) . ">")
                    ->viewBuilder()
                    ->disableAutoLayout()
                    ->setTemplate('booking');

                // Send data to the email template
                $mailer->setViewVars([
                    'date' => $booking->date,
                    'booked_time' => $booking->booked_time,
                    'service'=>$booking->service,
                    'email' => $booking->email,
                    'name' => $booking->name,
                    'location' => $booking->location,
                    'phone' => $booking->phone
                ]);
                //Send email
                $email_result = $mailer->deliver();


                // 2.Send email to Leonie
//                $mailer = new Mailer('default');
//                // Setup email parameters
//                $mailer
//                    ->setEmailFormat('html')
//                    ->setTo($booking->email)
//                    ->setFrom("wliu0025@u22s1043.monash-ie.me")
//                    ->setSubject('You have new booking' . " <" . h("Leonie@shelbournelegal.com.au") . ">")
//                    ->viewBuilder()
//                    ->disableAutoLayout()
//                    ->setTemplate('booking');
//
//                // Send data to the email template
//                $mailer->setViewVars([
//                    'date' => $booking->date,
//                    'booked_time' => $booking->booked_time,
//                    'service'=>$booking->service,
//                    'email' => $booking->email,
//                    'name' => $booking->name,
//                    'location' => $booking->location,
//                    'phone' => $booking->phone
//                ]);
//                //Send email
//                $email_result = $mailer->deliver();



                if ($email_result) {
                    $this->Flash->success(__('The enquiry has been saved and sent via email.'));
                } else {
                    $this->Flash->error(__('Email failed to send. Please check the query in the system later. '));
                }
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The booking could not be saved. Please, try again.'));
        }
        $this->set(compact('booking'));


    }


}
