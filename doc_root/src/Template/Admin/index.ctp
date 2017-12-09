<!-- File:src/Tmplate/Admin/login.ctp  -->
<div id="articleList" class="article-list admin-display">

  <div class="admin-display__head">
      <h1 class="admin-display__head__title">ダッシュボード</h1>
  </div>

  <div class="admin-display__body">
      <h4>公開してから制作</h4>
      <ul>
          <li>通知（コメント、いいね、シェア）</li>
          <li>アクセス解析</li>
          <li>興味のある分野のニュース一覧を取得</li>
          <li>アクティビティ</li>
      </ul>
  </div>
  

  <?= $this->Flash->render('auth') ?>
</div>
