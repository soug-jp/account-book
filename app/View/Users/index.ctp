<div class="container">
  <div class="hero-unit">
    <h1>家計簿つけない？</h1>
    <p>みんな、家計簿つけない？</p>
    <p>新規登録から登録するか、ログインしてご利用ください</p>
    <p><?php
      echo $this->Html->link('ログイン', array('action'=>'login'),
              array('class' => 'btn btn-primary btn-large')); 
      echo $this->Html->link('新規登録', array('action'=>'add'),
              array('class' => 'btn btn-large'));
    ?></p>
  </div>
</div>
<div class="row-fluid">
  <div class="span4">
    <h2>hogehoge</h2>
    <p>hogehogehogehoge</p>
  </div>
  <div clasS="span8">
    <h2>更新情報</h2>
    <p>この家計簿はGithub上でバージョン管理され、bis5の自宅サーバーで運用されています</p>
    <table class="table table-striped" id="commit_log">
      <thead>
        <tr>
          <th>desc</th>
          <th>Commit by</th>
        </tr>
      </thead>
      <tbody><?php foreach($commit as $item){echo $item;}?></tbody>
    </table>
    <p><a class="btn" href="https://github.com/bis5/account-book">詳細はこちら &raquo;</a></p>
  </div>
</div>
