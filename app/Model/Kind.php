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
    
    public function beforeValidate($options) {
        $ret = true;
        $user = AuthComponent::user();
        $rec = $this->find('first',array('conditions'=>array(
                                            $this->alias.'.user_id' => $user['id'],
                                            $this->alias.'.code' => $this->data[$this->alias]['code'])));
        if (!empty($rec))
            $ret = false;

        return $ret;
    }
}
