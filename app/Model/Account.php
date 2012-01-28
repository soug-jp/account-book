<?php
class Account extends AppModel {
    public $name = 'Account';

    public $validate = array(
        'kind' => array(
            'notEmpty' => array('rule' => 'notEmpty'),
            'numeric' => array('rule' => 'numeric')
        ),
        'date' => array(
            'notEmpty' => array('rule' => 'notEmpty'),
            'date' => array('rule' => 'date')
        ),
        'yen' => array(
            'notEmpty' => array('rule' => 'notEmpty'),
            'numeric' => array('rule' => 'numeric')
        ),
    );
}
