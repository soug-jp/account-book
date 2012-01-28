<?php
class KindsController extends AppController {
    public $name = 'Kinds';
    public $helpers = array('Html', 'Form');
    public $componetns = array('Session');

    public function index() {
        $this->set('kinds', $this->Kind->find('all'));
    }

    public function add($id = null) {
        $this->set('kinds', $this->Kind->find('all'));
        if ($this->request->is('post')) {
            if ($this->Kind->save($this->request->data)) {
                $this->Session->setFlash('added successfully.');
                $this->redirect(array('action' => 'add'));
            } else {
                $this->Session->setFlash('Unable to add!!!');
            }
        }
    }

    public function edit($id = null) {
        $this->Kind->id = $id;
        if ($this->request->is('get')) {
            $this->request->data = $this->Kind->read();
        } else {
            if ($this->Kind->save($this->request->data)) {
                $this->Session->setFlash('updated successfully.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Unable to update!!!');
            }
        }
    }

    public function view($id = null) {
        if ($id === null)
            $this->redirect(array('action' => 'index'));
        $this->Kind->id = $id;
        $this->set('kind', $this->Kind->read());
    }

}
