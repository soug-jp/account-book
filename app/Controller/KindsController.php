<?php
class KindsController extends AppController {
    public $name = 'Kinds';
    public $helpers = array('Html', 'Form');
    public $componetns = array('Session');
    public $uses = array('Kind', 'Account');

    public function index() {
        $user = AuthComponent::user();
        $this->set('kinds', $this->Kind->find('all', array(
                'conditions' => array('Kind.user_id'=>$user['id']),
                'order'=>'code')));
    }

    public function add($id = null) {
        $this->set('user', $user=AuthComponent::user());
        $this->set('kinds', $this->Kind->find('all', array(
                'conditions' => array('Kind.user_id' => $user),
                'order'=>'code')));
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
        $this->set('user', AuthComponent::user());
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
        else {
            $user = AuthComponent::user();
            $this->Kind->id = $id;
            $this->set('kind', $this->Kind->read());
            $this->set('kinds', $this->Kind->find('all', array(
                    'conditions' => array('Kind.user_id' => $user['id']),
                    'order'=>'code')));
            $this->set('sum',
                       $this->Account->query("SELECT Sum(yen) from accounts
                                              where kind_id=$id AND user_id={$user['id']}
                                              group by kind_id;")
                       );
        }
    }

}
