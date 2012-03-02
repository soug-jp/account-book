<?php
class Kind extends AppModel {
    public $name = 'Kind';
    public $hasMany = 'Account';
    public $validate = array(
        'code' => array(
            //'rule' => 'isUnique'
            'notEmpty' => array('rule' => 'notEmpty')
        ),
        'name' => array(
            'rule' => 'notEmpty'
        ),
        'isincoming' => array(
            'rule' => array('inList',array(0,1))
        )
    );
}
