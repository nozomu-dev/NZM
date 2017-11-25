#目的
  ブログチュートリアルをこなす

#ローカル設定-- @/MAMP/conf/apache/extra/httpd-vhosts.conf
  vhosts = localhost.nozomu.jp
  cake = locakhost.nozomu.jp/nozomuCake

#ディレクトリ所有権
  nozomu に tmp と logsを追加

#database設定-- @/config/app.php
  hosts = nozomu_db
  user = nozomu_db
  userpass = nozomudb

#ログイン設定
  ログインURL = /nozomuCake/users/login
  ログアウトURL = /nozomuCake/users/logout

#デザインプロトタイプ
https://xd.adobe.com/view/01e83c81-d348-49a0-820d-e013890b05b4/screen/43486967-cf32-4d63-86a7-d76be0321d70/ARTICLES
