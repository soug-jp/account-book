view kind

<h1><?php echo $kind['Kind']['code']; ?></h1>
<p><?php echo $kind['Kind']['name']; ?></h1></p>
<p><?php
if ($kind['Kind']['isincoming'] == 1) echo "in";
else echo "out"; ?></p>

<table>
  <tr>
    <th>id</th>
    <th>date</th>
    <th>yen</th>
    <th>memo</th>
  </tr>
</table>
<pre>
  <?php var_dump($kind); ?>
</pre>
