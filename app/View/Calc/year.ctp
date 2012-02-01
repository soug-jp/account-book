<h1>per year</h1>
<h2>合計額: <?php echo $sum[0][0]["sum(yen)"]; ?>円</h2>
<table>
  <tr>
    <th>id</th>
    <th>code</th>
    <th>date</th>
    <th>yen</th>
    <th>memo</th>
  </tr>
  <?php foreach ($acs as $ac): ?>
  <tr>
    <td><?php echo $ac["accounts"]["id"]; ?></td>
    <td><?php echo $ac["accounts"]["kind_id"]; ?></td>
    <td><?php echo $ac["accounts"]["date"]; ?></td>
    <td><?php echo $ac["accounts"]["yen"]; ?></td>
    <td><?php echo $ac["accounts"]["memo"]; ?></td>
  </tr>
  <?php endforeach; ?>
</table>