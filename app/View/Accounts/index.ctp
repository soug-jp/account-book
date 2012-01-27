<h1>list</h1>
<table>
  <tr>
    <th>id</th>
    <th>date</th>
    <th>code</th>
    <th>yen</th>
  </tr>

  <?php foreach ($accounts as $ac): ?>
  <tr>
    <td><?php echo $ac['Account']['id']; ?></td>
    <td><?php echo $ac['Account']['date']; ?></td>
    <td><?php echo $ac['Account']['kind']; ?></td>
    <td><?php echo $ac['Account']['yen']; ?></td>
  </tr>
  <?php endforeach; ?>
</table>
<table>
  <tr>
    <th>code</th>
    <th>name</th>
    <th>in or out</th>
  </tr>
  <?php foreach ($kinds as $kind): ?>
  <tr>
    <td><?php echo $kind['Kind']['code']; ?></td>
    <td><?php echo $kind['Kind']['name']; ?></td>
    <td><?php if ($kind['Kind']['isincoming']==1) 
    echo "in";
    else echo "out"; ?></td>
  </tr>
  <?php endforeach; ?>
</table>
