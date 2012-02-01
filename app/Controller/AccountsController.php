<?php
class AccountsController extends AppController {
    public $name = 'Accounts';
    public $helpers = array('Html', 'Form');
    public $uses = array('Kind','Account');
    public function index() {
        $this->set('accounts', $this->Account->find('all'));
        $kind_all = $this->Kind->find('all');
        $this->set('kinds', $kind_all);
        $this->set('kindn', $this->getkindcode2name($kind_all));
    }

    public function add($id = null) {
        $this->set('kindl', $this->Kind->find('all'));
        $this->set('kinds', $this->Kind->find('list'));
        if ($this->request->is('post')) {
            if ($this->Account->save($this->request->data)) {
                $this->Session->setFlash('登録しました');
                //$this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('登録に失敗しました');
            }
        }
    }
    
    private function getkindcode2name(array $kinds) {
        $ret = array();
        foreach ($kinds as $kind) {
            $ret[$kind['Kind']['id']] = $kind['Kind']['name'];
        }
        return $ret;
    }

    public function edit($id = null) {
        $this->Account->id = $id;
        if (empty($this->data)) {
            $this->data = $this->Account->read();
            $this->set('kindl', $this->Kind->find('all'));
            $this->set('kinds', $this->Kind->find('list'));
        } else {
            if ($this->Account->save($this->data['Account'])) {
                $this->Session->setFlash('account has been updated.');
                $this->redirect(array('action'=>'index'));
            }
        }
    }
}
