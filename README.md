# wordpressの初期設定ファイル

- 全体
 - HTML5を利用

- header.php
 - 下記を参考に設定
 - http://wp-and.me/head_clean/

- /lib/
 - function.phpの記載を分割して管理

- functions.php
 - http://millkeyweb.com/wp-functions-management/ に記載の方法で/lib/以下にfunction.phpを分割して管理
  - 初期ファイルは、「デフォルトで<head>内に追加されるemojiのスクリプトとstyleを消去」を実施
  - サイドバーとメニューを表示
    - http://viral-community.com/wordpress/wordpress-customize-4986/
    - 出力はそれぞれ
     - サイドバー　<?php dynamic_sidebar(); ?>
     - メニュー　<?php wp_nav_menu(); ?>
  - カスタム投稿タイプ（post_type "examples"を追加）
    - 参考
    	- http://kachibito.net/wordpress/custom-post-type-list.html
    	- http://morilog.com/wordpress/post_type/register_post_type/

- index.php
 - 特になし

- footer.php
 - 特になし

- style.css(ご自由に変更してください)
 - リセットCSSを設定
 - 大枠をカスタマイズ
  - →Baseデザイン
  - →ユーティリティ

