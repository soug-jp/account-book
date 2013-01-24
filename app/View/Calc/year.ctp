<div class="row-fluid">
  <div class="span12">
    <h2><?php echo $year?> 年</h2>
    <h3>収入: <?php echo $in[0][0]["sum(yen)"]; ?> 円</h3>
    <h3>支出: <?php echo $out[0][0]['sum(yen)']; ?> 円</h3>
    <h3>収支差：<?php echo ((int)$in[0][0]["sum(yen)"])-((int)$out[0][0]["sum(yen)"]); ?> 円</h3>
  
  </div>
</div>
<div class="row-fluid">
  <div class="span6">
    <h3>収入</h3>
    <table class="table table-striped">
      <tr>
        <th>区分コード</th>
        <th>日付</th>
        <th>金額</th>
        <th>備考</th>
      </tr>
      <?php foreach ($acsin as $ac): ?>
      <tr>
        <td><?php echo $ac["Account"]["kind_id"]; ?></td>
        <td><?php echo $ac["Account"]["date"]; ?></td>
        <td><?php echo $ac["Account"]["yen"]; ?></td>
        <td><?php echo $ac["Account"]["memo"]; ?></td>
      </tr>
      <?php endforeach; ?>
    </table>
  </div>

  <div class="span6">
    <h3>支出</h3>
    <table class="table table-striped">
      <tr>
        <th>区分コード</th>
        <th>日付</th>
        <th>金額</th>
        <th>備考</th>
      </tr>
      <?php foreach ($acsout as $ac): ?>
      <tr>
        <td><?php echo $ac["Account"]["kind_id"]; ?></td>
        <td><?php echo $ac["Account"]["date"]; ?></td>
        <td><?php echo $ac["Account"]["yen"]; ?></td>
        <td><?php echo $ac["Account"]["memo"]; ?></td>
      </tr>
      <?php endforeach; ?>
    </table>
  </div>
</div>
