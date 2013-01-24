<div class="row-fluid">
  <div class="span6 offset3">
    <h2>区分別集計</h2>
    <h3>区分情報</h3>
    <table class="table table-striped">
      <tr>
        <th>区分コード</th>
        <th>区分名</th>
        <th>収入or支出</th>
      </tr>
      <tr>
        <td><?php echo $kind['Kind']['code']; ?></td>
        <td><?php echo $kind['Kind']['name']; ?></td>
        <td><?php
          if ($kind['Kind']['isincoming'] == 1) echo "収入";
          else echo "支出"; ?>
        </td>
      </tr>
    </table>
  <?php if (isset($sum[0])&&isset($sum[0][0])&&isset($sum[0][0]['Sum(yen)'])): ?>
    <h2>合計額: <?php echo $sum[0][0]["Sum(yen)"]; ?> 円</h2>
    <table class="table table-striped">
      <tr>
        <th>日付</th>
        <th>金額</th>
        <th>メモ</th>
      </tr>
    <?php
function cmp($a, $b) {
    if ($a['date'] == $b['date']) return 0;
    else return ($a['date'] < $b['date']) ? -1 : 1;
}
usort($kind['Account'],'cmp');
    ?>

    <?php foreach ($kind['Account'] as $ac): ?>
      <tr>
        <td><?php echo $ac['date']; ?></td>
        <td><?php echo $ac['yen']; ?></td>
        <td><?php echo $ac['memo']; ?></td>
      </tr>
    <?php endforeach; ?>
    </table>
  <?php else: ?>
    <h2>この区分は収支記録がありません。</h2>
  <?php endif; ?>

  </div>
</div>
