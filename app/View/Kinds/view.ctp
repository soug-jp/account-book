view kind

<h1><?php echo $kind['Kind']['code']; ?></h1>
<p><?php echo $kind['Kind']['name']; ?></h1></p>
<p><?php
if ($kind['Kind']['isincoming'] == 1) echo "in";
else echo "out"; ?></p>
<h2>合計額: <?php echo $sum[0][0]["Sum(yen)"]; ?> 円</h2>
<table>
  <tr>
    <th>id</th>
    <th>date</th>
    <th>yen</th>
    <th>memo</th>
  </tr>
  <?php foreach ($kind['Account'] as $ac): ?>
  <tr>
    <td><?php echo $ac['id']; ?></td>
    <td><?php echo $ac['date']; ?></td>
    <td><?php echo $ac['yen']; ?></td>
    <td><?php echo $ac['memo']; ?></td>
  </tr>
  <?php endforeach; ?>
</table>
