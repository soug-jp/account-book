<?php
class User extends AppModel {
    public $name = 'User';
    public $hasMany = array('Account','Kind');
    public $validate = array(
        'username' => array(
            'notEmpty' => array('rule' => 'notEmpty'),
            'isUnique' => array('rule' => 'isUnique')
        ),
        'password' => array(
            'rule' => 'notEmpty',
        ),
    );

    public function beforeSave() {
        if (isset($this->data[$this->alias]['password'])) {
            $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
        }
        return true;
    }
}
