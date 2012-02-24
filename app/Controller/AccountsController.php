<?php
class AccountsController extends AppController {
    public $name = 'Accounts';
    public $helpers = array('Html', 'Form');
    public $uses = array('Kind','Account');
    public function index() {
        $this->set('accounts', $this->Account->find('all', array('order'=>'date')));
        $kind_all = $this->Kind->find('all', array('order'=>'code'));
        $this->set('kinds', $kind_all);
        $this->set('kindn', $this->getkindcode2namear($kind_all));
    }

    public function add($id = null) {
        $this->set('kindl', $this->Kind->find('all',array('order'=>'code')));
        $this->set('kinds', $this->Kind->find('list',array('order'=>'code')));
        if ($this->request->is('post')) {
            if ($this->Account->save($this->request->data)) {
                $this->Session->setFlash('登録しました:'.$this->getkindcode2name($this->data['Account']['kind_id']).' \\'.$this->data['Account']['yen']);
                //$this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('登録に失敗しました');
            }
        }
    }
    
    private function getkindcode2name($code) {
        $kind = $this->Kind->find('first', array('conditions'=>array('Kind.id'=>$code)));
        return $kind['Kind']['name'];
    }

    private function getkindcode2namear(array $kinds) {
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
            $this->set('kindl', $this->Kind->find('all',array('order'=>'code')));
            $this->set('kinds', $this->Kind->find('list',array('order'=>'code')));
        } else {
            if ($this->Account->save($this->data['Account'])) {
                $this->Session->setFlash('account has been updated.');
                $this->redirect(array('action'=>'index'));
            }
        }
    }
}
