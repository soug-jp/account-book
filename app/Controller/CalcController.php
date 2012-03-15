<?php

class CalcController extends AppController {
    public $name = 'Calc';
    public $helpers = array("Html", "Form");
    public $uses = array('Kind', 'Account');

    public function year($year = null) {
        if ($year == null)
            $this->redirect(array('controller'=>'Accounts','action'=>'index'));
        $user = AuthComponent::user();

        $this->set('year',h($year));
        $begin = mktime(0, 0, 0, 1, 1, $year);
        $end = mktime(23, 59, 59, 12, 31, $year);
        App::uses('CakeTime', 'Utility');
        $ycond = CakeTime::daysAsSql($begin, $end, 'Account.date');

        $this->set('acsin',$this->Account->find('all',array(
                            'conditions'=>array('Account.user_id'=>$user['id'],
                                                'Kind.isincoming'=>1,
                                                $ycond))));
        $this->set('acsout',$this->Account->find('all',array(
                            'conditions'=>array('Account.user_id'=>$user['id'],
                                                'Kind.isincoming'=>0,
                                                $ycond))));
        $this->set('in', $this->Account->query(
                            "select sum(yen) from accounts left join kinds on accounts.kind_id = kinds.id where kinds.isincoming=1 AND year(date)=$year AND accounts.user_id={$user['id']};"));
        $this->set('out', $this->Account->query(
                            "select sum(yen) from accounts left join kinds on accounts.kind_id = kinds.id where kinds.isincoming=0 AND year(date)=$year AND accounts.user_id={$user['id']};"));
    }
    public function all() {
        $user = AuthComponent::user();
        $this->set('kinds',$kinds = $this->Kind->find('all',array(
                'conditions' => array('Kind.user_id' => $user['id']),
                'order'=>'code')));
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
