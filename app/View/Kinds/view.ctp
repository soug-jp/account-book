<h1>view kind</h1>

<table>
  <tr>
    <th>code</th>
    <th>name</th>
    <th>in or out</th>
  </tr>
  <tr>
    <td><?php echo $kind['Kind']['code']; ?></td>
    <td><?php echo $kind['Kind']['name']; ?></td>
    <td><?php
      if ($kind['Kind']['isincoming'] == 1) echo "in";
      else echo "out"; ?>
    </td>
  </tr>
</table>
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
