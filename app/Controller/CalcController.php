<?php
class CalcController extends AppController {
    public $name = 'Calc';
    public $helpers = array("Html", "Form");
    public $uses = array('Kind', 'Account');

    public function year($year = null) {
        if ($year == null)
            $this->redirect(array('controller'=>'Accounts','action'=>'index'));
        
        $this->set('acs',$this->Account->query(
                            "select * from accounts 
                             where year(date)=$year;"));
        $this->set('sum', $this->Account->query(
                            "select sum(yen) from accounts where year(date)=$year;"));
    }
}
                                            
