<?php
class Account extends AppModel {
    public $name = 'Account';
    public $belongsTo = 'Kind';
    public $validate = array(
        'kind_id' => array(
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
