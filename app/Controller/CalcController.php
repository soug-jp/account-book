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
    public function all() {
        $this->set('kinds',$kinds = $this->Kind->find('all',array('order'=>'code')));
        $in = $out = 0;
        foreach ($kinds as $kind) {
            if ($kind['Kind']['isincoming'] == 0) {
                foreach ($kind['Account'] as $ac) {
                    $out += $ac['yen'];
                }
            } else {
                foreach ($kind['Account'] as $ac) {
                    $in += $ac['yen'];
                }
            }
        }
        $this->set('in', $in);
        $this->set('out', $out);
    }
}
