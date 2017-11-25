<html>
<head>
  <style>
    a {
      color: orange;
      text-decoration: none;
    }
    a:hover {
      color: lightblue;
    }

    a span {
      font-size: .8em;
      color: #333;
      background: #f7f7f7;
    }
  </style>
</head>
<body>
  <h1>THIS IS PROJECTS@NZM</h1>
  <p>all about this page is nozomu's develop page</p>

  <section class="index">
  <h2>index</h2>
  <ul>
    <li><a href="/doc_root">document root <span>/</span></a></li>
    <li>
      <a href="/nozomuCake/Articles/index">blog tutorial <span>/nozomuCake/Articles/index</span></a>
    </li>
  </ul>
  </section>

  <div class="server-name">
    <h2>サーバー実行者</h2>
    <?php echo exec('whoami'); ?>
  </div>
</body>
</html>
