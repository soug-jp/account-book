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

    public function all_cat() {
        //TODO すべての区分を取得
        $kind = $this->Kind->find('all');
        //TODO 区分ごとの合計額を算出
        $sum_c = array();
        foreach($kind as $k) {

        }
        //TODO 頑張る
        //TODO 収支別の合計額を算出
        //TODO 収支差を算出
    }
}
