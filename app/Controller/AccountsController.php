<?php
class AccountsController extends AppController {
    public $name = 'Accounts';
    public $helpers = array('Html', 'Form');
    public $uses = array('Kind','Account');
    public function index() {
        $this->set('accounts', $this->Account->find('all'));
        $this->set('kinds', $this->Kind->find('all'));
    }

    public function add($id = null) {
        $this->set('kindl', $this->Kind->find('all'));
        $this->set('kinds', $this->Kind->find('list'));
        if ($this->request->is('post')) {
            if ($this->Account->save($this->request->data)) {
                $this->Session->setFlash('登録しました');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('登録に失敗しました');
            }
        }
    }
}
