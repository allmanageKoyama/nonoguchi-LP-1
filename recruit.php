<?php
/**
Template Name: 採用情報LPテーマ
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
                <li class="nav-item"><a href="#section-01"><span>メッセージ</span></a></li>
                <li class="nav-item"><a href="#section-02"><span>求める人物像</span></a></li>
                <li class="nav-item"><a href="#section-03"><span>野々口の人々</span></a></li>
                <li class="nav-item"><a href="#section-04"><span>どんな会社？</span></a></li>
                <li class="nav-item"><a href="#section-05"><span>諸手当</span></a></li>
                <li class="nav-item"><a href="#section-07"><span>社内風景</span></a></li>
                <li class="nav-item"><a href="#section-08"><span>募集要項</span></a></li>
                <li class="nav-item"><a href="#entry"><span>ENTRY</span></a></li>
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
          <li class="nav-item"><a href="#section-01">
              <p class="en">MESSAGE</p><span>メッセージ</span>
            </a></li>
          <li class="nav-item"><a href="#section-02">
              <p class="en">IDEAL CANDIDATE</p><span>求める人物像</span>
            </a></li>
          <li class="nav-item"><a href="#section-03">
              <p class="en">MEMBER</p><span>野々口の人々</span>
            </a></li>
          <li class="nav-item"><a href="#section-04">
              <p class="en">ENVIRONMENT</p><span>どんな会社？</span>
            </a></li>
          <li class="nav-item"><a href="#section-05">
              <p class="en">ALLOWANCES</p><span>諸手当</span>
            </a></li>
          <li class="nav-item"><a href="#section-07">
              <p class="en">COMPANY SCENERY</p><span>社内風景</span>
            </a></li>
          <li class="nav-item"><a href="#section-08">
              <p class="en">REQUIREMENTS</p><span>募集要項</span>
            </a></li>

          <ul class="sub_menu">
            <li class="nav-item"><a href="#entry"><span>ENTRY</span></a></li>
          </ul>
          </li>
        </ul>
      </nav>
      <div id="contents" class="cf">
        <div id="main-cts" class="cf">
          <section id="s01" class="main_sec">
            <div class="mv">
              <div class="container">
                <div class="star">
                  <span><img src="<?php echo home_url(); ?>/src/img/star-left.svg" alt=""></span>
                  <span><img src="<?php echo home_url(); ?>/src/img/star-right.svg" alt=""></span>
                </div>
                <div class="main_logo" id="main_logo"><img src="<?php echo home_url(); ?>/src/img/main_logo.png" alt=""></div>
                <div class="cast">
                  <span><img src="<?php echo home_url(); ?>/src/img/cast-01.png" alt=""></span>
                  <span><img src="<?php echo home_url(); ?>/src/img/cast-02.png" alt=""></span>
                  <span><img src="<?php echo home_url(); ?>/src/img/cast-03.png" alt=""></span>
                  <span><img src="<?php echo home_url(); ?>/src/img/cast-04.png" alt=""></span>
                </div>
                <div class="copy_text">
                  <span><img src="<?php echo home_url(); ?>/src/img/text-01.svg" alt="やりたいことをやろう"></span>
                  <span><img src="<?php echo home_url(); ?>/src/img/text-02.svg" alt="なりたい人になろう"></span>
                  <span><img src="<?php echo home_url(); ?>/src/img/text-03.svg" alt="自分の強みを生かそう"></span>
                </div>
                
              </div>
              <div class="scrolldown is-action"><span>Scroll</span></div>
            </div>
           

            <article>
              <section class="section-01">
                <span id="section-01"></span>
                <div class="ttl_wrap">
                  <h2 class="ttl_01 is-set">MESSAGE</h2>
                  <p class="lead is-set">採用担当者からの一言</p>
                </div>
                <div class="container">

                  <div class="contetnts">

                    <p class="text is-set">
                      <strong>One for all All for one<br>
                        一人は皆のために、皆は一人のために<br>
                        一人は皆のために、皆は１つの目的のために</strong>
                    </p>
                    <p class="text is-set">野々口株式会社は創業５０年以上の歴史があり、長い歳月の中で培った知識と経験を保有している会社です。<br>
                      蓄積した知識と経験を武器に繊維業界で活躍をしております。<br>
                      我が社が取り扱う商材は、人が生きる上で必要不可欠な商品です。<br>
                      取扱商品の使用用途やアイテムは多岐に渡ります。<br>
                      様々な角度（やり方）から色々な業界へ勝負が出来る非常に面白い会社です。<br>
                      また、新しい時代に対応するべく、従来のやり方に捕らわれることなく日々変化を試みております。<br>
                      明るい未来に向かって、我々と共に楽しみましょう。</p>
                  </div>
                  <div class="img-box">
                    <img class="is-set rotateY" src="<?php echo home_url(); ?>/src/img/message-01.png" alt="">
                  </div>
                </div>
              </section>

              <section class="section-02">
                <span id="section-02"></span>
                <div class="ttl_wrap">
                  <h2 class="ttl_01 is-set">IDEAL CANDIDATE</h2>
                  <p class="lead is-set">求める人物像</p>
                </div>
                <div class="container">
                  <div class="img-box">
                    <img src="<?php echo home_url(); ?>/src/img/message-02.png" alt="">
                    <img class="is-set" src="<?php echo home_url(); ?>/src/img/message-03.png" alt="">
                    <img class="is-set" src="<?php echo home_url(); ?>/src/img/message-04.png" alt="">
                  </div>
                  <div class="contetnts">
                    <ul class="text is-set">
                      <li>楽しいことが好きな人（エンジョイ）</li>
                      <li>良く笑う人（笑い上戸）</li>
                      <li>泣き虫（悔しがり屋）</li>
                      <li>好奇心旺盛な人（チャレンジャー）</li>
                      <li>新しいことに挑戦する人（フロンティア）</li>
                      <li>前向きな人（ポジティブ）</li>
                      <li>人が好きな人（ヒューマン）</li>
                      <li>仲間を大切にする人（ファミリー）</li>
                      <li>面白いことが好きな人（芸人）</li>
                      <li>明るい人（ハッピー）</li>
                      <li>陽気な人（カーニバル）</li>
                      <li>真面目な人（誠実）</li>
                      <li>相手の立場に立てる人（思いやり）</li>
                    </ul>
                  </div>

                </div>
              </section>

              <section class="section-03">
                <span id="section-03"></span>
                <div class="ttl_wrap">
                  <h2 class="ttl_01 is-set">MEMBER</h2>
                  <p class="lead is-set">社員紹介</p>
                </div>
                <div class="container">

                  <div class="contetnts is-set">
                    <?php
                    $persons = [
                      [
                        '01', '営業部', '2022',
                        [
                          [
                            'Q入社から今に至る経緯と入社後について',
                            '転職サイトで求人を見つけました。<br>
                            求職中、営業アシスタントは候補考えていなかったのですが、面接官同士の雰囲気がすごく良く、
                            貿易関係に興味があったので自分のスキルを活かせる環境だと興味を持ち応募に至りました。<br>
                            現在は営業アシスタント兼貿易担当をしております。'
                          ],
                          [
                            'Q所属している部署と仕事内容',
                            '所属しているのは営業部になります。<br>
                            顧客対応から受注発注など一般事務的なことから
                            貿易の輸出輸入スケジュール管理、貿易書類作成、出荷輸送通関等の手配など、事務の中でも幅広い仕事があるためルーティンワークになりにくいところが仕事のおもしろさの1つだと感じています。<br>部署内はとても和気あいあいとしていて、誰かのお誕生日などにはご飯にも行ったりします。一人ひとりの個性を受け入れてくれてすごくフランクで風通しが良いと思います。'
                          ],
                          [
                            'Q休日の過ごし方',
                            '休日に時間のかかる美容関係に行くのがもったいなく感じてしまうため、定時後はネイル美容室エステなどなど！
                            休日には少し遠くにドライブしたり、友達と果物狩りに行ったりと結構色んな所へ出かけていることも多いのですが、家にいるときはゲーム三昧！ゲームを始めると何時間もパソコンの前から動けなくなります((笑))今の会社に入ってからは休みが増えたため自分に使える時間も以前の会社よりかなり増えました。'
                          ],
                        ]
                      ],
                      [
                        '02', '営業部', '2020',
                        [
                          [
                            'Q入社から今に至る経緯と入社後について',
                            '前職では広告代理店で働いており、服飾の専門学校出身ということもあり繊維関係の求人を探しておりました。<br>数多ある求人の中で野々口（株）は、当時社員数14名と少なく、一人に対するタスクも多いと思い、その中で会社に必要とされる人材になりたいと入社を決意しました。<br>先輩・上司に恵まれ気兼ねなく相談ができ、また自分で考えて仕事ができる環境それを評価してくれる事が入社してとても良かったと思います。'
                          ],
                          [
                            'Q所属している部署と仕事内容',
                            '営業部に所属しています。<br>
                            お客様からの生地の発注を承り、加工・出荷手配をします。<br>
                            打ち合わせ・商談から事務的な作業まで幅広く行っております。<br>
                            お問い合わせで「こんな生地ある？」とご依頼を頂く事もありますが
                            生地に関して分からない場合、先輩に教わりながら対応しています。<br>
                            業界未経験ですが日々学ぶことがあり成長を感じながら働いております。<br>
                            お客様とコミュニケーションをとり、信頼関係を築け、期待に応えれた時やりがいを感じています。<br>
                            また、何もわからない自分に入社当初から様々な仕事を振って頂き、
                            前職時より責任感が強くなり、会社から求められる事も大きなやりがいに繋がっております。
                            '
                          ],
                          [
                            'Q仕事終わり・休日の過ごし方',
                            '仕事が残っていればもちろん残業しますが基本定時で帰ります。<br>
                            退社後は友人と飲みに行ったり、たまに社内で飲みに行くこともあります。<br>
                            休日は趣味のゴルフや野球で体を動かしています。<br>
                            有給もとれやすく長期休みは旅行に行く事もあります。'
                          ],
                        ]
                      ],
                      [
                        '03', '総務部', '2021',
                        [
                          [
                            'Q入社から今に至る経緯と入社後について',
                            'インターネット求人で見つけ、面接に来てみると、和やかな面接で自分に合っていると思い入社を決意しました。<br>
                            入社後は、円滑に業務を進めていく上で不可欠なDX化に向けて新しいアイディアなどを提案し、実際に取り入れていただきました。<br>少数精鋭かつ発展途上の会社であり、業務改善に積極的で社員の意見をしっかり聞いていただける、今まで社内で誰もやった事がないようなことでも失敗を恐れずにチャレンジできる環境だと思います。'
                          ],
                          [
                            'Q所属している部署と仕事内容',
                            '総務部に所属しております。<br>
                            その中でも、主に経理システム関連を担当しており、入出金確認等の日次処理、月次処理、スポット処理などを行います。<br>
                            また社員が困っていることなどあればサポートするなど、一見地味な部署に見えるかも知れませんが、会社を側面から支えている必要不可欠な部署だと私自身は感じております。<br>
                            総務部は基本静かですが、時には笑い有りの高低差満点の部署だと思います。<br>
                            経理財務は数字を管理しているため、正しいものを示さないといけません。相違があれば数字の粗を探す必要があるため、苦労することもかなりありますが、年次処理で出来上げる『決算書』という１つの作品を完遂した時は、部署の皆さんで大きな達成感を味わう事ができる魅力的な仕事だと思っております。'
                          ],
                          [
                            'Q休日の過ごし方',
                            '基本残業がないため、定時後は子供の面倒をみたりしております。<br>
                            そのおかげで妻の機嫌も良くなり、仮面夫婦から円満夫婦になりました（笑）<br>
                            休日は高校野球観戦とJリーグ観戦を楽しんでおります。<br>
                            それ以外は子供とショッピングモールへ出かけたり公園へ行ったりと
                            家族と過ごせる時間も多くプライベートも充実しており、
                            まさに仕事と家庭の『二刀流』に取り組める会社だと思います。'
                          ],
                        ]
                      ],
                      [
                        '04', '生産管理部', '2001',
                        [
                          [
                            'Q入社から今に至る経緯と入社後について',
                            '元々、同じ業界で働いていたという事もあり、この会社の事は多少なりとも知っておりました。実際に取引相手として、会社を訪れた際に、社内の方々と実際にやりとりをしている中で、とても働きやすそうな職場だという印象を受けました。<br>
                            実際に入社後も、自分自身が思っていた以上に社内雰囲気が良く、皆優しく迎え入れてくれた事を覚えています。随分年月は経過してしまいますが（笑）<br>
                            そして何より責任のある仕事をさせてもらっていて、日々充実しております。'
                          ],
                          [
                            'Q所属している部署と仕事内容',
                            '生産管理部に所属しております。<br>
                            日々の業務としては、仕入業務や在庫管理等があり、多岐にわたります。<br>
                            取引先さんにしっかりと納期を守ってもらえるよう、遅れそうな場合の事前フォローも重要です。仕事全体の視点から見ると、覚えることや段取りが大変な仕事ですが、現場を計画通りに動かすことこそ生産管理の醍醐味と自負しております。<br>
                            もちろん、仕事中は皆さん真面目に取り組んでおりますが、時には世間話もあり、オンとオフをしっかりと弁える部署だと思います。'
                          ],
                          [
                            'Q休日の過ごし方',
                            '残業は多少ありますが、自宅に帰ってからは自分のリフレッシュできる時間を
                            過ごせております。<br>
                            休みの日は、家でのんびりする事が多いですが、時には外出して、広い大地の中を
                            勇敢に走る馬の姿を見に行ったり、また実家に帰った時には愛犬と遊んだりしております。<br>
                            自分の時間はしっかりと確保できる会社だと思います。'
                          ],
                        ]
                      ],
                    ]
                    ?>
                    <?php foreach ($persons as $value) : ?>
                      <div class="pnl" data-pnl_no="<?php echo $value[0]; ?>">
                        <p class="person">
                          <span>PERSON</span>
                          <span><?php echo $value[0]; ?></span>
                        </p>
                        <div class="img">
                          <img src="<?php echo home_url(); ?>/src/img/person-<?php echo $value[0]; ?>.jpg" alt="">
                          <span class="position"><?php echo $value[1]; ?></span>
                        </div>
                        <p class="join"><?php echo $value[2]; ?>年入社</p>
                      </div>
                    <?php endforeach; ?>
                    <?php foreach ($persons as $content) : ?>
                      <div class="message-box" id="person-<?php echo $content[0]; ?>">
                        <?php $i = 1;
                        foreach ($content[3] as $value) : ?>
                          <div class="inner">
                            <div class="img-box">
                              <img src="<?php echo home_url(); ?>/src/img/person-<?php echo $content[0]; ?>_detail_<?php echo $i; ?>.jpg" alt="">
                            </div>
                            <div class="contents-box">
                              <h5><?php echo $value[0]; ?></h5>
                              <p class="text"><?php echo $value[1]; ?></p>

                            </div>
                          </div>
                        <?php $i++;
                        endforeach; ?>
                        <div class="btn_area close">
                          <div class="btn">閉じる</div>
                        </div>
                      </div>
                    <?php endforeach; ?>
                  </div>

                </div>
              </section>
              <section class="section-04">
                <span id="section-04"></span>
                <div class="ttl_wrap">
                  <h2 class="ttl_01 is-set">ENVIRONMENT</h2>
                  <p class="lead is-set">どんな会社？</p>
                </div>
                <div class="container">

                  <div class="contetnts">
                    <dl>
                      <dd><span>年次有給休暇<br>取得率</span><span class="move"><span>67.6%</span></span><img src="<?php echo home_url(); ?>/src/img/icon-01.svg" alt=""></dd>
                      <dd><img src="<?php echo home_url(); ?>/src/img/icon-02.svg" alt=""><span>年間休日</span><span class="move"><span>120</span></span><span class="strong">日以上</span></dd>
                    </dl>
                    <dl>
                      <dd><span>中途入社実績</span><span class="move"><span>8</span></span><span class="strong">割超</span><img src="<?php echo home_url(); ?>/src/img/icon-03.svg" alt=""></dd>
                      <dd><span>男女比率</span><span class="move"><span>2:1</span></span><img src="<?php echo home_url(); ?>/src/img/icon-04.svg" alt=""></dd>
                      <dd><img src="<?php echo home_url(); ?>/src/img/icon-05.svg" alt=""><span>完全週休2日制</span><span class="move"><span>土日・祝日</span></span></dd>
                    </dl>
                    <dl>
                      <dd><img src="<?php echo home_url(); ?>/src/img/icon-06.svg" alt=""><span>定年後</span><span class="move"><span>再雇用<br>制度有</span></span></dd>
                      <dd><img src="<?php echo home_url(); ?>/src/img/icon-07.svg" alt=""><span>業界</span><span class="move"><span>未経験可</span></span></dd>
                      <dd><img src="<?php echo home_url(); ?>/src/img/icon-08.svg" alt=""><span>学歴・ 職歴</span><span class="move"><span>不問</span></span></dd>
                      <dd><img src="<?php echo home_url(); ?>/src/img/icon-09.svg" alt=""><span class="move"><span>転勤</span></span><span>なし</span></dd>
                    </dl>
                    <dl>
                      <dd><span>平均勤続年数</span><span class="move"><span>11.4</span></span><span class="strong">年</span><img src="<?php echo home_url(); ?>/src/img/icon-10.svg" alt=""></dd>
                      <dd><span>平均年齢</span><span class="move"><span>38.9</span></span><span>歳</span><img src="<?php echo home_url(); ?>/src/img/icon-11.svg" alt=""></dd>
                      <dd><span class="move"><span>第２新卒</span></span><span>採用実績あり</span><img src="<?php echo home_url(); ?>/src/img/icon-12.svg" alt=""></dd>
                    </dl>
                  </div>
                </div>
              </section>
              <section class="section-05">
                <span id="section-05"></span>
                <div class="ttl_wrap">
                  <h2 class="ttl_01 is-set">ALLOWANCES</h2>
                  <p class="lead is-set">諸手当</p>
                </div>
                <div class="container">
                  <div class="contetnts">
                    <img class="icon" src="<?php echo home_url(); ?>/src/img/icon-14.png" alt="">
                    <dl>
                      <?php
                      $allowances = [
                        ['01', '昇給あり', '年1回（8月）'],
                        ['02', '賞与あり', '年2回（7月・12月）'],
                        ['03', '交通費', '全額支給'],
                        ['04', '出張手当', 'あり'],
                        ['05', '食事手当', '月7,000円'],
                        ['06', '家族手当', '配偶者：月5,000円<br>子：1人につき月3,000円'],
                        ['07', '皆勤手当', '月1,500円'],
                        ['08', '住宅手当', '月20,000円 ※本人名義'],
                        ['09', '役職手当', '役職による'],

                      ];
                      ?>
                      <?php foreach ($allowances as $value) : ?>
                        <dd class="is-set">
                          <span><?php echo $value[0]; ?></span>
                          <span><?php echo $value[1]; ?></span>
                          <span><?php echo $value[2]; ?></span>
                        </dd>
                      <?php endforeach; ?>
                    </dl>
                  </div>
                </div>
              </section>
              <section class="section-06">
                <span id="section-06"></span>
                <div class="ttl_wrap">
                  <h2 class="ttl_01 is-set">BENEFITS</h2>
                  <p class="lead is-set">福利厚生</p>
                </div>
                <div class="container">
                  <div class="contetnts">
                    <p class="text">社内コミュニケーションの活性化は、組織の強化を促すだけでなく、新たなビジネスの創出にも繋がると考えています。弊社では、普段の業務で交流がなくても、お互いを知り、信頼関係を築き、結束を高められる機会があります。</p>
                  </div>
                  <div class="img-box">
                    <img src="<?php echo home_url(); ?>/src/img/benefits-01.jpg" alt="">
                  </div>
                </div>
                <div class="container">
                  <dl>
                    <dd class="is-set"><img src="<?php echo home_url(); ?>/src/img/btn.png" alt="">社会保険完備</dd>
                    <dd class="is-set"><img src="<?php echo home_url(); ?>/src/img/btn.png" alt="">社員旅行</dd>
                    <dd class="is-set"><img src="<?php echo home_url(); ?>/src/img/btn.png" alt="">退職金制度</dd>
                    <dd class="is-set"><img src="<?php echo home_url(); ?>/src/img/btn.png" alt="">健康診断</dd>
                    <dd class="is-set"><img src="<?php echo home_url(); ?>/src/img/btn.png" alt="">社員交流会<span>（食事会など/自由参加）</span></dd>
                    <dd class="is-set"><img src="<?php echo home_url(); ?>/src/img/btn.png" alt="">分煙</dd>
                    <dd class="is-set"><img src="<?php echo home_url(); ?>/src/img/btn.png" alt="">コーヒーサーバー<br>設置有</dd>
                    <dd class="is-set"><img src="<?php echo home_url(); ?>/src/img/btn.png" alt="">服装自由<span>オフィスカジュアル、<br>髪型自由、ネイルOK</span></dd>
                  </dl>
                </div>
              </section>
            </article>
          </section>

          <section class="section-07">
            <span id="section-07"></span>
            <div class="ttl_wrap">
              <h2 class="ttl_01 is-set">COMPANY SCENERY</h2>
              <p class="lead is-set">社内風景</p>
            </div>
            <picture>
              <source srcset="src/img/bg_section7_sp.jpg" media="(max-width: 768px)" type="image/png">
              <img src="<?php echo home_url(); ?>/src/img/bg_section7.jpg" alt=社内風景>
            </picture>
          </section>

          <section class="section-08">
          <span id="section-08"></span>
            <div class="ttl_wrap">
              <h2 class="ttl_01 is-set">REQUIREMENTS</h2>
              <p class="lead is-set">募集要項</p>
            </div>
            <div class="container">
              <img class="icon" src="<?php echo home_url(); ?>/src/img/req-01.png" alt="">
              <img class="icon" src="<?php echo home_url(); ?>/src/img/req-02.png" alt="">
              <dl>
                <dt>仕事内容</dt>
                <dd>
                  <h4>【既存顧客中心のBtoB営業】</h4>
                  <p class="text">作業服や白衣、スポーツウェアなどの繊維製品（生地・服）の営業を行っていただきます。</p>
                  <h4>【具体的には】</h4>
                  <p class="text">日本全国のお客様に向けてご希望に応じた生地や製品をご提案します。<br>
                    遠方の場合、出張（1週間以内）もありますが、自分でスケジュールを立てて行動することができます。</p>
                  <p class="text">
                    当社の営業は生産部門との距離が近いので、お客様の「こんなサンプルが欲しい」といった要望にも柔軟に対応出来ます！
                  </p>
                  <p class="text">POINT1 成長できる環境をご用意</p>
                  <p class="text">
                    顧客先はユニフォームアパレルメーカー（企業向けの制服・作業服）やスポーツ用品メーカー、繊維商社、縫製工場など様々。ひとつの業界との営業しかできないスタイルとは異なるので、様々な業界の知識が広がります。
                  </p>
                  <p class="text">POINT2 働きやすい環境</p>
                  <p class="text">
                    当社は若手社員が多く、いつも仲の良い社風です。<br>
                    また、福利厚生やお休みも充実していることで社員満足度は高く、定着率も抜群！
                  </p>
                </dd>
              </dl>
              <dl>
                <dt>求める人材</dt>
                <dd>
                  <p class="text">第二新卒歓迎<br>
                    ◆要普通自動車免許<br>
                    異業種からの転職者も多数活躍中！</p>
                  <h4>【必須条件】</h4>
                  <p class="text">未経験者歓迎！まずはあなたの意欲を重視！</p>
                  <p class="text">
                    ★こんな方にピッタリ<br>
                    主体的に動きたい!という方<br>
                    社内外の人とのコミュニケーションを大切に出来る<br>
                    一生役に立つスキルを身に付けたい<br>
                    人を大切にする会社で、長く働きたい<br>
                    自分の意志、考えを尊重してくれる会社で働きたい
                  </p>
                </dd>
              </dl>
              <dl>
                <dt>勤務地</dt>
                <dd>
                  <h3>本社/大阪府大阪市中央区北久宝寺町1－2－15 ※転勤なし</h3>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1640.4861369739003!2d135.50840725414193!3d34.68064922800789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e7233dee341d%3A0x806aa6ccdba95a7f!2z6YeO44CF5Y-j77yI5qCq77yJ!5e0!3m2!1sja!2sjp!4v1681104258303!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  <h4>【アクセス(大阪)】</h4>
                  <p class="text">
                    地下鉄堺筋線「堺筋本町駅」より徒歩5分<br>
                    地下鉄谷町線「谷町四丁目駅より」徒歩10分<br>
                    地下鉄長堀鶴見緑地線「松屋町駅」より徒歩9分</p>
                  <h3>ガレージ/大阪市中央区北久宝寺町1丁目4番10号　大成合同ビル603号 ※転勤なし</h3>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1640.5031037727126!2d135.50791465821538!3d34.67979280081158!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e72323dc481f%3A0x18373a5cb492cd96!2z44CSNTQxLTAwNTcg5aSn6Ziq5bqc5aSn6Ziq5biC5Lit5aSu5Yy65YyX5LmF5a6d5a-655S677yR5LiB55uu77yU4oiS77yR77yQIOWkp-aIkOWQiOWQjOODk-ODqw!5e0!3m2!1sja!2sjp!4v1681104594248!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  <h4>【アクセス(ガレージ)】</h4>
                  <p class="text">
                    地下鉄堺筋線「堺筋本町駅」より徒歩3分<br>
                    地下鉄谷町線「長堀橋より」徒歩10分<br>
                    地下鉄長堀鶴見緑地線「松屋町駅」より徒歩10分</p>
                  <h3>東京営業所/東京都中央区日本橋小伝馬町16－9豊鈴ビル503 ※転勤なし</h3>

                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.378554724429!2d139.7805199546097!3d35.69230098511237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188eacdcf51d73%3A0x4f5ce0994b72defb!2z44CSMTAzLTAwMDEg5p2x5Lqs6YO95Lit5aSu5Yy65pel5pys5qmL5bCP5Lyd6aas55S677yR77yW4oiS77yZIOixiumItOODk-ODqw!5e0!3m2!1sja!2sjp!4v1681104916776!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  <h4>【アクセス(東京)】</h4>
                  <p class="text">
                    地下鉄日比谷線「小伝馬町駅」より徒歩3分<br>
                    地下鉄新宿線「馬喰横山駅より」徒歩3分<br>
                    JR総武快速線「馬喰町駅」より徒歩3分</p>

                </dd>
              </dl>
              <dl>
                <dt>給与</dt>
                <dd>
                  <p class="text">月給20万～28万円＋諸手当<br>
                    ※年齢・能力などを考慮し、決定します。</p>
                </dd>
              </dl>
              <dl>
                <dt>昇給・賞与</dt>
                <dd>
                  <p class="text">◆昇給 : 年1回(8月)<br>◆賞与 : 年2回(7月・12月)</p>
                </dd>
              </dl>
              <dl>
                <dt>諸手当</dt>
                <dd>
                  <p class="text">交通費(全額)<br>
                    食事手当て(7,000円/月)<br>
                    出張手当<br>
                    住宅手当(2万円/月　本人名義で住宅費を御支払の方)<br>
                    家族手当(配偶者 : 5,000円/月、子：一人につき月3,000円/月)<br>
                    役職手当(各役職による)<br>
                    皆勤手当（1,500円／月）
                  </p>
                </dd>
              </dl>
              <dl>
                <dt>休日・休暇</dt>
                <dd>
                  <p class="text">完全週休2日制(土・日)<br>
                    祝日<br>
                    年末年始休暇<br>
                    夏季休暇<br>
                    GW<br>
                    有給休暇<br>
                    慶弔休暇<br>
                    年間休日120日
                  </p>
                </dd>
              </dl>
              <dl>
                <dt>福利厚生</dt>
                <dd>
                  <p class="text">社会保険完備(雇用・労災・健康・厚生年金)<br>
                    社員旅行<br>
                    退職金制度
                  </p>
                </dd>
              </dl>
              <dl>
                <dt>面接回数</dt>
                <dd>
                  <p class="text">1～2回
                  </p>
                </dd>
              </dl>
              <dl>
                <dt>面接地</dt>
                <dd>
                  <h4>【本社】</h4>
                  <p class="text">〒541－0057<br>
                    大阪府大阪市中央区北久宝寺1-2-15</p>
                  <h4>【東京営業所】</h4>
                  <p class="text">〒103-0001<br>
                    東京都中央区日本橋小伝馬町16－9豊鈴ビル503</p>
                </dd>
              </dl>
              <dl>
                <dt>選考の特徴</dt>
                <dd>
                  <p class="text">夜間面接OK<br>
                    面接日程応相談<br>
                    入社時期相談<br>
                    応募から内定まで1カ月</p>
                </dd>
              </dl>

            </div>
          </section>
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
        $(window).on("load", function() {
          $('body').addClass('mv-loaded')
        });
        $(".is-set").on("inview", function(event, isInView) {
          if (isInView) {
            $(this).addClass("is-action");
          } else {
            // $(this).removeClass("is-action");
            // $(this).removeClass("is-detail");
            // $('.message-box').removeClass('set')
            // $('.set').removeAttr('style')
            // $('.pnl').removeAttr('style')

          }
        });

        $(".move").on("inview", function(event, isInView) {
          if (isInView) {
            $(this).addClass("on");
          } else {
            $(this).removeClass("on");
          }
        });
        $('.section-03 .contetnts .pnl').on('click', function() {
          if ($(this).hasClass('is-select')) {
            $('.section-03 .contetnts').removeClass('is-detail')
            $(this).removeClass('is-select')
            $(this).removeAttr('style')
            $('.message-box').removeClass('set')
          } else {
            $('.section-03 .contetnts').addClass('is-detail')
            $(this).css('z-index', '100')
            $(this).addClass('is-select')
            var box = $(this).attr('data-pnl_no')
            $('#person-' + box).addClass('set')
          }
        })
        $('.message-box .btn').on('click', function() {
          $('.section-03 .contetnts').removeClass('is-detail')
          $('.message-box').removeClass('set')
          $('.section-03 .contetnts .pnl').removeClass('is-select')
          $('.section-03 .contetnts .pnl').removeAttr('style')
        })
        $(".section-06").on("inview", function(event, isInView) {
          if (isInView) {
            $('.section-07 .is-set').removeClass("is-action");
          } else {
            $('.section-07 .is-set').addClass("is-action");
          }
        });
      </script>
    </div>
  </div>
  <?php wp_footer(); ?>
</body>

</html>