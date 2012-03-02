<?php
class AppController extends Controller {
    public $components = array(
        'Session',
        'Auth' => array(
            'loginRedirect' => array('controller' => 'accounts', 'action' => 'index'),
            'logoutRedirect' => array('action' => 'index'),
        ),
    );

    function beforeFilter() {
        $this->Auth->allow('index', 'login');
    }
}
