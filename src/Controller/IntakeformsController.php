<?php
declare(strict_types=1);

namespace App\Controller;


/**
 * Calendars Controller
 *
 * @property \App\Model\Table\ClientsTable $Clients
 * @method \App\Model\Entity\Client[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class IntakeformsController extends AppController
{


    public function index()
    {
        $client = $this->Clients->newEmptyEntity();
        if ($this->request->is("post")) {
            // Form submit handler

//            $client = $this->Clients->newEmptyEntity();

            $postData = $this->request->getData();

            $recaptchaResponse = trim($postData('g-recaptcha-response'));

            // form data

            $secret = RECAPTCHAV2_SITEKEY;

            $credential = array(
                'secret' => $secret,
                'response' => $recaptchaResponse
            );

            $verify = curl_init();
            curl_setopt($verify, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
            curl_setopt($verify, CURLOPT_POST, true);
            curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($credential));
            curl_setopt($verify, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($verify);

            $status = json_decode($response, true);

            if ($status['success']) {

                $this->Flash->success('Form has been successfully submitted');
            } else {

                $this->Flash->success('Please check your inputs');
            }
//            $this->set("clients", $client);
        }
        $this->set("clients", $client);

    }
}
