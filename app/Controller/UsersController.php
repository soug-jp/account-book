<?php
class UsersController extends AppController {
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('add', 'index');
    }

    public function index() {
        $this->User->recursive = 0;
        $cml = file_get_contents('https://api.github.com/repos/bis5/account-book/commits');
        $cml = json_decode($cml,true);
        $items = array();
        $cnt = 0;
        foreach ($cml as $log) {
            if ($cnt++ > 5) break;
            $desc = mb_strimwidth(nl2br($log['commit']['message']),0,128,'...');
            $grav = 'http://www.gravatar.com/avatar.php?gravatar_id='
                    .$log['committer']['gravatar_id']
                    .'&size=30';
            $cter = $log['commit']['committer']['name'];
            $item = "<tr><td>$desc</td><td><img src=\"$grav\" alt=\"av\">$cter</td></tr>";
            $items[] = $item;
        }
        $this->set('commit', $items);
        $this->set('users', $this->paginate());
    }

    public function view($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFundException(__('Invalid user'));
        }
        $this->set('user', $this->User->read(null, $id));
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('ユーザー登録が完了しました。<br />ログインして下さい'));
                $this->redirect(array('action' => 'login'));
            } else {
                $this->Session->setFlash(__('ユーザー登録に失敗しました。内容を確認して再度登録して下さい。'));

            }
        }
    }

    public function edit($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->User->read(null, $id);
            unset($this->request->data['User']['password']);
        }
    }

    public function delete($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->User->delete()) {
            $this->Session->setFlash(__('User deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('User was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

    public function login() {
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                $this->Session->setFlash(__('ログインに成功しました'));
                $this->redirect($this->Auth->redirect());
            } else {
                $this->Session->setFlash(__('ユーザー名かパスワードが間違っています。'));
            }
        }
    }

    public function logout() {
        $this->Session->setFlash(__('ログアウト完了しました'));
        $this->redirect($this->Auth->logout());
    }
}
