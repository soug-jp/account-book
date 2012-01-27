<?php
class Account extends AppModel {
    public $name = 'Account';

    public $validate = array(
        'date' => array(
            'notEmpty' => array('rule' => 'notEmpty',
                                'message' => 'this field is required'),
            'date' => array('rule' => 'date',
                            'message' => 'input valid date'),
        ),
        'kind' => array(
            'notEmpty' => array('rule' => 'notEmpty',
                                'message' => 'this field is required'),
            'numeric' => array('rule' => 'numeric',
                               'message' => 'input valid kind code'),
        ),
        'yen' => array(
            'notEmpty' => array('rule' => 'notEmpty',
                                'message' => 'this field is required'),
            'numeric' => array('rule' => 'numeric',
                               'message' => 'input valid data'),
        ),
    );
}
