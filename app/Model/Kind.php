<?php
class Kind extends AppModel {
    public $name = 'Kind';

    public $validate = array(
        'code' => array(
            'rule' => 'isUnique'
        ),
        'name' => array(
            'rule' => 'notEmpty'
        ),
        'isincomint' => array(
            'rule' => array('inList',0,1)
        )
    );
}
