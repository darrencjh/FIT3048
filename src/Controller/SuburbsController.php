<?php
namespace App\Controller;

use App\Controller\AppController;


/**
 * Suburbs Controller
 *
 * @property \App\Model\Table\SuburbsTable $Suburbs
 *
 *
 */
class SuburbsController extends AppController
{

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        $this->Authentication->addUnauthenticatedActions(['getPostcodeAndState']);
    }


    public function getPostcodeAndState(){
        $input = $this->request->getQuery('input');
        $this->autoRender = false;
        $responseData = $this->Suburbs->find('all')->select(['value'=>'id'])->select(['text'=>'CONCAT(Suburbs.suburb," ",Suburbs.state, " ", Suburbs.postcode)'])->where(
            ['Suburbs.suburb LIKE' => '%'.$input.'%']
        )->toArray();

        $this->response = $this->response->withStringBody(json_encode($responseData));
        $this->RequestHandler->renderAs($this, 'json');
//        $this->response->withType('application/json')
//            ->withStringBody(json_encode(['text'=>"Google"]));

    }
}
