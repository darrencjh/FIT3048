<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Availabilities Controller
 *
 * @property \App\Model\Table\AvailabilitiesTable $Availabilities
 * @method \App\Model\Entity\Availability[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AvailabilitiesController extends AppController
{
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        $this->viewBuilder()->setLayout('adminManageLayout');

    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $availabilities = $this->paginate($this->Availabilities);

        $this->set(compact('availabilities'));
    }

    /**
     * View method
     *
     * @param string|null $id Availability id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $availability = $this->Availabilities->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('availability'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $availability = $this->Availabilities->newEmptyEntity();
        if ($this->request->is('post')) {
            $availability = $this->Availabilities->patchEntity($availability, $this->request->getData());
            if ($this->Availabilities->save($availability)) {
                $this->Flash->success(__('The availability has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The availability could not be saved. Please, try again.'));
        }
        $this->set(compact('availability'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Availability id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $availability = $this->Availabilities->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $availability = $this->Availabilities->patchEntity($availability, $this->request->getData());
            if ($this->Availabilities->save($availability)) {
                $this->Flash->success(__('The availability has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The availability could not be saved. Please, try again.'));
        }
        $this->set(compact('availability'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Availability id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $availability = $this->Availabilities->get($id);
        if ($this->Availabilities->delete($availability)) {
            $this->Flash->success(__('The availability has been deleted.'));
        } else {
            $this->Flash->error(__('The availability could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
