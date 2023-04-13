<?php
/**
Template Name: 応募フォーム入力確認
***/
?>
<!doctype html>

<html lang="ja">

<head prefix="og: https://ogp.me/ns#">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2, user-scalable=1" />
  <meta name="format-detection" content="telephone=no">

  <title>採用情報 | 野々口株式会社</title>
  <meta name="description" content="「採用情報」ページです。野々口株式会社は、御客様のニーズ、時代の流れに対応出来るよう、体制を調えております。どのポジション（生地・製品）でも最適な提案を致します。">
  <link rel="canonical" href="https://www.nonoguchi.net/recruit/">
  <link rel="apple-touch-icon" sizes="180x180" href="https://www.nonoguchi.net/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="https://www.nonoguchi.net/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="https://www.nonoguchi.net/favicon/favicon-16x16.png">
  <link rel="manifest" href="https://www.nonoguchi.net/favicon/site.webmanifest">
  <link rel="mask-icon" href="https://www.nonoguchi.net/favicon/safari-pinned-tab.svg" color="#040474">
  <meta name="msapplication-TileColor" content="#2b5797">
  <meta name="theme-color" content="#ffffff">
<!-- グーグルアナリティクス2022.12.27hamawaki -->
<!-- Google tag (gtag.js) -->
<script async src="/https://www.googletagmanager.com/gtag/js?id=G-QKKY24VF37"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-QKKY24VF37');
</script>
  <meta property="og:title" content="採用情報 | 野々口株式会社">
  <meta property="og:type" content="website">
  <meta property="og:description" content="「採用情報」ページです。野々口株式会社は、御客様のニーズ、時代の流れに対応出来るよう、体制を調えております。どのポジション（生地・製品）でも最適な提案を致します。">
  <meta property="og:url" content="https://www.nonoguchi.net/recruit/">
  <meta property="og:site_name" content="野々口株式会社 - 白衣・作業着・スポーツウェア・カジュアル・帽子・資材等">
  <meta property="og:image" content="https://web-checker3.net/nonoguchi-recruit/demo/src/img/ogp.png">

  <script>
    (function(d) {
      var config = {
          kitId: 'lsw4czv',
          scriptTimeout: 3000,
          async: true
        },
        h = d.documentElement,
        t = setTimeout(function() {
          h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
        }, config.scriptTimeout),
        tk = d.createElement("script"),
        f = false,
        s = d.getElementsByTagName("script")[0],
        a;
      h.className += " wf-loading";
      tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
      tk.async = true;
      tk.onload = tk.onreadystatechange = function() {
        a = this.readyState;
        if (f || a && a != "complete" && a != "loaded") return;
        f = true;
        clearTimeout(t);
        try {
          Typekit.load(config)
        } catch (e) {}
      };
      s.parentNode.insertBefore(tk, s)
    })(document);
  </script>
  <link href="//cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css" rel="stylesheet">
  <link href="https://www.nonoguchi.net//CSS/initialize.min.css" rel="stylesheet" type="text/css">
  <link href="https://www.nonoguchi.net//CSS/common.css" rel="stylesheet" type="text/css">
  <link href="https://www.nonoguchi.net//CSS/page.css" rel="stylesheet" type="text/css">
  <link href="https://www.nonoguchi.net//CSS/page_sp.css" rel="stylesheet" type="text/css">
  <link href="<?php echo home_url(); ?>/src/css/recruit.css?css=<?php echo rand() ;?>" rel="stylesheet" type="text/css">

  <link rel='dns-prefetch' href='//s.w.org' />
  <link rel='stylesheet' id='wp-pagenavi-css' href='https://www.nonoguchi.net/wp-content/plugins/wp-pagenavi/pagenavi-css.css' type='text/css' media='all' />
  <script src='https://www.nonoguchi.net/wp-includes/js/jquery/jquery.js'></script>
  <script src='https://www.nonoguchi.net/wp-includes/js/jquery/jquery-migrate.min.js'></script>
  <?php wp_head(); ?>
</head>

<body id="recruit" class="under">
  <div class="drawer drawer--right">
    <div id="wrapper">
      <header class="header">
        <div class="inner">
          <div class="logo_area">
            <div class="hdr_logo"><a href="https://www.nonoguchi.net/"><img src="<?php echo home_url(); ?>/src/img/h_logo.svg" alt="野々口株式会社"></a></div>
          </div>
          <div class="r_area">
            <nav id="gNavi" class="visible_pc">
              <ul class="navi">
                <li class="nav-item"><a href="<?php echo home_url(); ?>/recruit/#section-01"><span>メッセージ</span></a></li>
                <li class="nav-item"><a href="<?php echo home_url(); ?>/recruit/#section-02"><span>求める人物像</span></a></li>
                <li class="nav-item"><a href="<?php echo home_url(); ?>/recruit/#section-03"><span>野々口の人々</span></a></li>
                <li class="nav-item"><a href="<?php echo home_url(); ?>/recruit/#section-04"><span>ワークライフ</span></a></li>
                <li class="nav-item"><a href="<?php echo home_url(); ?>/recruit/#section-05"><span>社内風景</span></a></li>
                <li class="nav-item"><a href="<?php echo home_url(); ?>/recruit/#section-06"><span>募集要項</span></a></li>
                <li class="nav-item"><a href="<?php echo home_url(); ?>/recruit/#entry"><span>ENTRY</span></a></li>
              </ul>
            </nav>
          </div>
        </div>
      </header>
      <div class="hdr_btn visible_tb">
        <button type="button" class="drawer-toggle drawer-hamburger"><span class="drawer-hamburger-icon"></span></button>
      </div>
      <nav class="drawer-nav">
        <ul class="drawer-menu main_menu">
          <li class="nav-item"><a href="<?php echo home_url(); ?>/recruit/#section-01">
              <p class="en">MESSAGE</p><span>メッセージ</span>
            </a></li>
          <li class="nav-item"><a href="<?php echo home_url(); ?>/recruit/#section-02">
              <p class="en">IDEAL CANDIDATE</p><span>求める人物像</span>
            </a></li>
          <li class="nav-item"><a href="<?php echo home_url(); ?>/recruit/#section-03">
              <p class="en">MEMBER</p><span>野々口の人々</span>
            </a></li>
          <li class="nav-item"><a href="<?php echo home_url(); ?>/recruit/#section-04">
              <p class="en">WORK LIFE BALANCE</p><span>ワークライフ</span>
            </a></li>
          <li class="nav-item"><a href="<?php echo home_url(); ?>/recruit/#section-05">
              <p class="en">COMPANY SCENERY</p><span>社内風景</span>
            </a></li>
          <li class="nav-item"><a href="<?php echo home_url(); ?>/recruit/#section-06">
              <p class="en">REQUIREMENTS</p><span>募集要項</span>
            </a></li>

          <ul class="sub_menu">
            <li class="nav-item"><a href="<?php echo home_url(); ?>/recruit/#entry"><span>ENTRY</span></a></li>
          </ul>
          </li>
        </ul>
      </nav>
      <div id="contents" class="cf">
        <div id="main-cts" class="cf">
       
        <?php echo do_shortcode('[mwform_formkey key="1845"]') ;?>
        </div>
      </div>



      <footer id="footer">
        <div class="top_box">
          <div class="sec_inner">
            <div class="l_box">
              <img src="https://www.nonoguchi.net/Image/common/f_logo.png" alt="野々口株式会社">
              <p>〒541-0057 大阪市中央区北久宝寺町1-2-15</p>
              <p>TEL：06-6264-1161</p>
            </div>
            <ul class="r_box">
              <li><a href="https://www.nonoguchi.net/">ホーム</a></li>
              <li><a href="https://www.nonoguchi.net/company/">会社案内</a></li>
              <li><a href="https://www.nonoguchi.net/business/">事業案内</a></li>
              <li><a href="https://www.nonoguchi.net/products/">製品案内</a></li>
              <li><a href="https://www.nonoguchi.net/recruit/">採用情報</a></li>
            </ul>
          </div>
        </div>
        <div class="bottom_box">
          <div class="sec_inner">
            <p>Copyright © 野々口株式会社 All Rights Reserved.</p>
            <p><a href="https://www.nonoguchi.net/privacy/">プライバシーポリシー</a></p>
          </div>
        </div>
      </footer>
      <div id="page_top" class="en"><a href="#"></a></div>

      <!-- JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js"></script>
      <script src="https://www.nonoguchi.net//JS/common.js"></script>
      <script src="https://www.nonoguchi.net//JS/ofi.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inview/1.0.0/jquery.inview.min.js"></script>

      <script>
       
        $(".is-set").on("inview", function(event, isInView) {
          if (isInView) {
            $(this).addClass("is-action");
          } 
        });

        $(".move").on("inview", function(event, isInView) {
          if (isInView) {
            $(this).addClass("on");
          } else {
            $(this).removeClass("on");
          }
        });
      </script>
    </div>
  </div>
  <?php wp_footer(); ?>
</body>

</html>