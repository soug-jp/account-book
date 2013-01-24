<h1><?php echo $year?> 年</h1>
<h2>収入: <?php echo $in[0][0]["sum(yen)"]; ?> 円</h2>
<h2>支出: <?php echo $out[0][0]['sum(yen)']; ?> 円</h2>
<h2>収支差：<?php echo ((int)$in[0][0]["sum(yen)"])-((int)$out[0][0]["sum(yen)"]); ?> 円</h2>
<div class="lefthalf">
<p>収入</p>
<table>
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
<div class="righthalf">
<p>支出</p>
<table>
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
