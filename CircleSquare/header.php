<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>CircleSquare</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/headerandfooter.css">
    <?php if ( is_front_page() ): ?>
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/home.css">
    <?php elseif ( is_page('contact') ): ?>
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/contact.css">
    <?php else: ?>
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/index.css">
    <?php endif; ?>


<?php wp_head(); ?>
</head>
<body>
    <header class = "header">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Circle Square" class="pic"></a>
        <?php if ( !is_page('contact') ): ?>
        <div class="nav">
            <hr class="nav_topHr">
            <ul class="nav_main">

                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a></li>
                <li class="nav__mega">
                    <a href="" class="init-bottom">SERCH</a>
                    <ul class="nav__category">
                        <li class="nav___textsearch">
                            <form name="searchform" class="nav-search" method="get" action="#">
                                <input  value="" type="text" class="nav-search_text" placeholder="キーワードから検索"/>
                                <input type="image" src="<?php echo get_template_directory_uri(); ?>/img/btn4.gif" alt="検索" name="searchBtn" class="nav-searchBtn" />
                            </form>
                        </li>
                        <li class="nav___textCate">カテゴリー</li>
                        <li><input type="checkbox" value="" name="" id="1"><label for="1">政治/経済</label></li>
                        <li><input type="checkbox" value="" name="" id="2"><label for="2">フリーペーパー</label></li>
                        <li><input type="checkbox" value="" name="" id="3"><label for="3">社会企業</label></li>
                        <li><input type="checkbox" value="" name="" id="4"><label for="4">映画</label></li>
                        <li><input type="checkbox" value="" name="" id="5"><label for="5">野球</label></li>
                        <li><input type="checkbox" value="" name="" id="6"><label for="6">ダンス</label></li>
                        <li><input type="checkbox" value="" name="" id="7"><label for="7">スポーツ</label></li>
                        <li><input type="checkbox" value="" name="" id="8"><label for="8">ビジネス</label></li>
                        <li><input type="checkbox" value="" name="" id="9"><label for="9">就活</label></li>
                        <li><input type="checkbox" value="" name="" id="10"><label for="10">ボランティア</label></li>
                        <li><input type="checkbox" value="" name="" id="11"><label for="11">料理/スイーツ</label></li>
                        <li><input type="checkbox" value="" name="" id="12"><label for="12">バスケットボール</label></li>
                        <li><input type="checkbox" value="" name="" id="13"><label for="13">オールラウンド</label></li>
                        <li><input type="checkbox" value="" name="" id="14"><label for="14">企画</label></li>
                        <li><input type="checkbox" value="" name="" id="15"><label for="15">医療福祉</label></li>
                        <li><input type="checkbox" value="" name="" id="16"><label for="16">美術/演劇</label></li>
                        <li><input type="checkbox" value="" name="" id="17"><label for="17">サブカルチャー</label></li>
                        <li><input type="checkbox" value="" name="" id="18"><label for="18">バレーボール</label></li>
                        <li><input type="checkbox" value="" name="" id="19"><label for="19">イベント</label></li>
                        <li><input type="checkbox" value="" name="" id="20"><label for="20">教育</label></li>
                        <li><input type="checkbox" value="" name="" id="21"><label for="21">ファッション</label></li>
                        <li><input type="checkbox" value="" name="" id="22"><label for="22">テニス</label></li>
                        <li><input type="checkbox" value="" name="" id="23"><label for="23">スキー</label></li>
                        <li><input type="checkbox" value="" name="" id="24"><label for="24">IT</label></li>
                        <li><input type="checkbox" value="" name="" id="25"><label for="25">学術研究</label></li>
                        <li><input type="checkbox" value="" name="" id="26"><label for="26">音楽</label></li>
                        <li><input type="checkbox" value="" name="" id="27"><label for="27">サッカー</label></li>
                        <li><input type="checkbox" value="" name="" id="28"><label for="28">スノーボード</label></li>
                        <li><input type="checkbox" value="" name="" id="29"><label for="29">メディア/広告</label></li>
                        <li><input type="checkbox" value="" name="" id="30"><label for="30">国際交流</label></li>
                        <li><input type="checkbox" value="" name="" id="31"><label for="31">旅行</label></li>
                        <li><input type="checkbox" value="" name="" id="32"><label for="32">フットサル</label></li>
                        <li class="nav___search">
                            <form name="" class="nav-search_req">この条件で検索する</form>
                            <form name="" class="nav-search_req reqClear">条件をクリア</form>
                        </li>
                    </ul>
                </li>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/contact">CONTACT</a></li>
            </ul>
            <hr class="nav_bottomHr">
        </div>
        <?php endif; ?>
    </header>
