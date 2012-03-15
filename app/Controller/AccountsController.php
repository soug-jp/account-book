<?php
class AccountsController extends AppController {
    public $name = 'Accounts';
    public $helpers = array('Html', 'Form');
    public $uses = array('Kind','Account');
    public function index() {
        $user = AuthComponent::user();
        $this->set('accounts', $this->Account->find(
                    'all', array(
                        'conditions' => array('Account.user_id' => $user['id']),
                        'order' => 'date'
                    )
                   ));
        $kind_all = $this->Kind->find('all', array(
                'conditions' => array('Kind.user_id' => $user['id']),
                'order' => 'code',
                ));
        $this->set('kinds', $kind_all);
        $this->set('kindn', $this->getkindcode2namear($kind_all));
    }

    public function add($id = null) {
        $this->set('user', $user=AuthComponent::user());
        $this->set('kindl', $hoge=$this->Kind->find('all', array(
                        'conditions'  => array('Kind.user_id' => $user['id']),
                        'order' => 'code')));
        $this->set('kinds', $this->Kind->find('list', array(
                        'conditions' => array('Kind.user_id' => $user['id']),
                        'orer' => 'code')));
        if (count($hoge) == 0) {
            $this->Session->setFlash('収支区分コードを登録して下さい');
            $this->redirect(array('controller'=>'Kinds','action'=>'add'));
        }
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
        $user = AuthComponent::user();
        $kind = $this->Kind->find('first', array('conditions'=>array('Kind.id'=>$code, 'Kind.user_id' => $user['id'])));
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
        $user = AuthComponent::user();
        if (empty($this->data)) {
            $this->data = $this->Account->read();
            $this->set('kindl', $this->Kind->find('all', array(
                        'conditions' => array('Kind.user_id' => $user['id']),
                        'order'=>'code')));
            $this->set('kinds', $this->Kind->find('list', array(
                        'conditions' => array('Kind.user_id' => $user['id']),
                        'order' => 'code')));
        } else {
            if ($this->Account->save($this->data['Account'])) {
                $this->Session->setFlash('account has been updated.');
                $this->redirect(array('action'=>'index'));
            }
        }
    }

    public function calc_year() {
        $this->redirect(array('controller'=>'Calc','action'=>'year',$this->data['Account']['date']['year']));
    }
}
