<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>株式会社OFFICE</title>
<link rel="icon" href="/favicon.png">
<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
<link href='https://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css'>
<!-- ローディング画面 -->
<script>
$(function() {
  var h = $(window).height();
 
  $('.wrapper').css('display','none');
  $('#loader-bg ,#loader').height(h).css('display','block');
});
 
$(window).load(function () { //全ての読み込みが完了したら実行
  $('#loader-bg').delay(900).fadeOut(800);
  $('#loader').delay(600).fadeOut(300);
  $('.wrapper').css('display', 'block');
});
 
//10秒たったら強制的にロード画面を非表示
$(function(){
  setTimeout('stopload()',10000);
});
 
function stopload(){
  $('.wrapper').css('display','block');
  $('#loader-bg').delay(900).fadeOut(800);
  $('#loader').delay(600).fadeOut(300);
}
</script>
<script type="text/javascript">
		function ChangeTab(tabname) {
			// 全部消す
			document.getElementById('tab1').style.display = 'none';
			document.getElementById('tab2').style.display = 'none';
			document.getElementById('tab3').style.display = 'none';
			document.getElementById('tab4').style.display = 'none';
			// 指定箇所のみ表示
			if(tabname) {
				document.getElementById(tabname).style.display = 'block';
			}
		}
</script>
</head>
<!-- loadong 画像 -->
<body id="pageTop" class="index">
<div id="loader-bg">
  <div id="loader"> <i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw"></i>
    <p>Now Loading...</p>
  </div>
</div>
<!-- #wrapper -->
<div class="wrapper"> 
  <!-- 動画 -->
  <div class="patternA"></div>
  <div class="patternB"></div>
  <video src="movie/hpbg-mov.mp4" autoplay loop id="movie"> <img src="movie/bg.jpg" align="Placeholder" alt="" /> </video>
  <header class="header">
    <div class="container">
      <div class="row">
        <h1 class="site-logo col-xs-9 col-sm-6 col-md-8"> <a href="#"><img src="img/logo-s.svg" alt="株式会社OFFICE"></a> </h1>
        <div class="col-sm-6 col-md-4">
          <ul class="sub-nav list-inline pull-right">
            <li><a href="#">
              <button type="button" class="btn btn-default btn-xs">企業の方へ</button>
              </a></li>
            <li><a href="#">
              <button type="button" class="btn btn-default btn-xs">アクセス</button>
              </a></li>
            <li><a href="#">
              <button type="button" class="btn btn-default btn-xs">資料請求</button>
              </a></li>
            <li><a href="#">
              <button type="button" class="btn btn-default btn-xs">お問合せ</button>
              </a></li>
          </ul>
          <form class="navbar-form pull-right" role="search">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="サイト内検索">
              <span class="input-group-btn">
              <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
              </span> </div>
          </form>
        </div>
        <div class="col-xs-3 nav-toggle">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" aria-label="メニュー"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav" id="nav">
            <li><a href="index.html" class="now">ホーム</a></li>
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">5つの特徴<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">aaa</a></li>
                <li><a href="#">bbb</a></li>
                <li><a href="#">ccc</a></li>
              </ul>
            </li>
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">学科・コース<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">aaa</a></li>
                <li><a href="#">bbb</a></li>
                <li><a href="#">ccc</a></li>
              </ul>
            </li>
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">学園生活<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">aaa</a></li>
                <li><a href="#">bbb</a></li>
                <li><a href="#">ccc</a></li>
              </ul>
            </li>
            <li><a href="#">就職</a></li>
            <li><a href="#">オープンキャンパス</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <div class="main-visual">
    <div class="text-center">
      <p class="main-visual-catch"><img src="img/logo-l.png" alt="岡学園トータルデザインアカデミー"></p>
      <p class="main-visual-description">専門学校 岡学園トータルデザインアカデミーはグリーンライフスタイルデザインプロデューサー岡正子が運営しています。<br>
        デザイン・ファッションの専門学校は全国にいろいろありますが、その中でも校長が自らデザイナーでアパレルも経営している所は比較的少ないです。<br>
        実際のビジネス経験を体験したことがあるレベルではなく、現在進行形でやっているからこそのリアリティのある授業が可能なのです。</p>
    </div>
  </div>
<div class="container">
<!--タブ-->
<ul class="nav nav-tabs main-tabs">
  <li class="active col-xs-12"><a href="#okagakuen" data-toggle="tab"><span class="text-large">岡学園紹介</span><br>-Introduction-</a></li>
  <li class="col-xs-12"><a href="#okagaku-info" data-toggle="tab"><span class="text-large">インフォメーション</span><br>-Information-</a></li>
</ul>
<!-- / タブ-->

<div id="tabContent" class="tab-content">  
  <!-- メイン ↓ -->
  <div class="main tab-pane fade in active" id="okagakuen">
    <section class="row contents">
      <div class="col-xs-12">
        <ul class="nav nav-pills">
          <li class="col-xs-6 col-sm-3 active"><a href="#collaboration" data-toggle="tab">
            <section class="feature-block thumbnail">
              <p class="featureblock-thumbnail"><img src="img/01_tokucho.jpg" alt="5つの特徴" class="img-thumbnail img-responsive"></p>
              <h3 class=" featureblock-title specials-five">5つの特徴<span>産官学連携による実践教育</span></h3>
            </section>
            </a></li>
          <li class="col-xs-6 col-sm-3"><a href="#gakka_course" data-toggle="tab">
            <section class="feature-block thumbnail">
              <p class="featureblock-thumbnail"><img src="img/02_course.jpg" alt="学科・コース" class="img-thumbnail img-responsive"></p>
              <h3 class="featureblock-title course">学科・コース<span>course</span></h3>
            </section>
            </a></li>
          <li class="col-xs-6 col-sm-3"> <a href="#gakuen_life" data-toggle="tab">
            <section class="feature-block thumbnail">
              <p class="featureblock-thumbnail"><img src="img/03_life.jpg" alt="学園生活" class="img-thumbnail img-responsive"></p>
              <h3 class="featureblock-title campus-life">学園生活<span>campus life</span></h3>
            </section>
            </a></li>
          <li class="col-xs-6 col-sm-3"> <a href="#syuusyoku" data-toggle="tab">
            <section class="feature-block thumbnail">
              <p class="featureblock-thumbnail"><img src="img/04_recruit.jpg" alt="就職" class="img-thumbnail img-responsive"></p>
              <h3 class="featureblock-title recruit">就職<span>recruit</span></h3>
            </section>
            </a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane row active" id="collaboration"> 
            
            <!-- accordion ↓ -->
            <div class="panel-group col-xs-12" id="accordion">
              <div class="panel panel-default col-xs-12">
                <div class="panel-heading panel-heading1 col-xs-12"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="col-xs-12">
                  <h4 class="panel-title accordion-toggle col-xs-6"> 校長先生は現役のファッションデザイナー<br>
                    - School Principal -</h4>
                  <p class="text-right col-xs-6"><i class="fa fa-caret-square-o-down" aria-hidden="true"></i></p>
                  </a> </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                  <div class="panel-body panel-body1">
                    <h3>校長先生は現役のファッションデザイナー</h3>
                    <p>コメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメント </p>
                    <p>コメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメント </p>
                    <p>コメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメント </p>
                    <p>コメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメント </p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default col-xs-12">
                <div class="panel-heading panel-heading2 col-xs-12"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="col-xs-12">
                  <h4 class="panel-title accordion-toggle col-xs-6"> 産官学コラボレーション</h4>
                  <p class="text-right col-xs-6"><i class="fa fa-caret-square-o-down" aria-hidden="true"></i></p>
                  </a> </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                  <div class="panel-body panel-body2">
                    <h3>産官学コラボレーション</h3>
                    <p>当校では、実践教育として、様々な企業・団体と協力して社会に通じるデザインを発信しつづけています。クライアントの求めるデザインを企画立案、提案、制作することで、市場が求めるニーズを知り、即戦力を養うことを目的としています。</p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default col-xs-12">
                <div class="panel-heading panel-heading3 col-xs-12"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="col-xs-12">
                  <h4 class="panel-title accordion-toggle col-xs-6"> 人間力を育てる「生きる授業」</h4>
                  <p class="text-right col-xs-6"><i class="fa fa-caret-square-o-down" aria-hidden="true"></i></p>
                  </a> </div>
                <div id="collapseThree" class="panel-collapse collapse">
                  <div class="panel-body panel-body3">
                    <h3>人間力を育てる「生きる授業」</h3>
                    <p>コメントコメントコメントコメントコメントコメントコメント </p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default col-xs-12">
                <div class="panel-heading panel-heading4 col-xs-12"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" class="col-xs-12">
                  <h4 class="panel-title accordion-toggle col-xs-6"> アトリエ授業</h4>
                  <p class="text-right col-xs-6"><i class="fa fa-caret-square-o-down" aria-hidden="true"></i></p>
                  </a> </div>
                <div id="collapseFour" class="panel-collapse collapse">
                  <div class="panel-body panel-body4">
                    <h3> アトリエ授業</h3>
                    <p>コメントコメントコメントコメントコメントコメントコメント </p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default col-xs-12">
                <div class="panel-heading panel-heading5 col-xs-12"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive" class="col-xs-12">
                  <h4 class="panel-title accordion-toggle col-xs-6"> 伝統</h4>
                  <p class="text-right col-xs-6"><i class="fa fa-caret-square-o-down" aria-hidden="true"></i></p>
                  </a> </div>
                <div id="collapseFive" class="panel-collapse collapse">
                  <div class="panel-body panel-body5">
                    <h3>伝統</h3>
                    <p>コメントコメントコメントコメントコメントコメントコメント </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- accordion ↑ --> 
            
          </div>
          <div class="tab-pane row" id="gakka_course">
            <h3>学科・コース</h3>
            <p>テキストテキストテキストテキストテキストテキスト</p>
          </div>
          <div class="tab-pane row" id="gakuen_life">
            <h3>学園生活</h3>
            <p>テキストテキストテキストテキストテキストテキスト</p>
          </div>
          <div class="tab-pane row" id="syuusyoku">
            <h3>就職</h3>
            <p>テキストテキストテキストテキストテキストテキスト</p>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- メイン ↑ --> 


  <!-- インフォメーション ↓ -->
  <div class="info tab-pane fade" id="okagaku-info">
  
    <section class="row contents okagaku-information">
      <div class="col-xs-12">
  
<!-- 各項目↓ -->
<div class="col-xs-6 col-sm-3 info-thumbnail"> <a href="">
  <section class="feature-block thumbnail">
    <p class="featureblock-thumbnail"><img src="img/05_ao.jpg" alt="AO入試実施中" class="img-thumbnail img-responsive"></p>
    <h3 class="featureblock-title">AO入試実施中<span class="selif">-Admissions Office-</span></h3>
  </section>
  </a></div>
  
<div class="col-xs-6 col-sm-3 info-thumbnail"> <a href="">
  <section class="feature-block thumbnail">
    <p class="featureblock-thumbnail"><img src="img/06_youkou.jpg" alt="募集要項" class="img-thumbnail img-responsive"></p>
    <h3 class="featureblock-title">H29年度 募集要項<span class="selif">-Application Requirements-</span></h3>
  </section>
  </a></div>
<div class="col-xs-6 col-sm-3 info-thumbnail"> <a href="">
  <section class="feature-block thumbnail">
    <p class="featureblock-thumbnail"><img src="img/07_open-campus.jpg" alt="オープンキャンパス" class="img-thumbnail img-responsive"></p>
    <h3 class="featureblock-title">オープンキャンパス<span class="selif">-Open Campus-</span></h3>
  </section>
  </a></div>
<div class="col-xs-6 col-sm-3 info-thumbnail"> <a href="">
  <section class="feature-block thumbnail">
    <p class="featureblock-thumbnail"><img src="img/08_siryo.jpg" alt="学校説明＆見学" class="img-thumbnail img-responsive"></p>
    <h3 class="featureblock-title">学校説明＆見学<span class="selif">-School Description-</span></h3>
  </section>
  </a></div>
  
  
<div class="col-xs-6 col-sm-3 info-thumbnail"> <a href="">
  <section class="feature-block thumbnail">
    <p class="featureblock-thumbnail"><img src="img/09_news1.jpg" alt="5つの特徴" class="img-thumbnail img-responsive"></p>
    <h3 class="featureblock-title">最新NEWS①<span class="selif">-News-</span></h3>
  </section>
  </a></div>
<div class="col-xs-6 col-sm-3 info-thumbnail"> <a href="">
  <section class="feature-block thumbnail">
    <p class="featureblock-thumbnail"><img src="img/10_news2.jpg" alt="学科・コース" class="img-thumbnail img-responsive"></p>
    <h3 class="featureblock-title">最新NEWS②<span class="selif">-News-</span></h3>
  </section>
  </a></div>
<div class="col-xs-6 col-sm-3 info-thumbnail"> <a href="">
  <section class="feature-block thumbnail">
    <p class="featureblock-thumbnail"><img src="img/11_news3.jpg" alt="学園生活" class="img-thumbnail img-responsive"></p>
    <h3 class="featureblock-title">最新NEWS③<span class="selif">-News-</span></h3>
  </section>
  </a></div>
<div class="col-xs-6 col-sm-3 info-thumbnail"> <a href="">
  <section class="feature-block thumbnail">
    <p class="featureblock-thumbnail"><img src="img/12_active-ob.jpg" alt="就職" class="img-thumbnail img-responsive"></p>
    <h3 class="featureblock-title">活躍する卒業生<span class="selif">-Active to OB-</span></h3>
  </section>
  </a></div>
  

<div class="col-xs-6 col-sm-3 info-thumbnail"> <a href="">
  <section class="feature-block thumbnail">
    <p class="featureblock-thumbnail"><img src="img/13_n-fes.jpg" alt="NAGANOデザインフェスタ" class="img-thumbnail img-responsive"></p>
    <h3 class="featureblock-title">NAGANO<span class="selif">デザインフェスタ</span></h3>
  </section>
  </a></div>
<div class="col-xs-6 col-sm-3 info-thumbnail"> <a href="">
  <section class="feature-block thumbnail">
    <p class="featureblock-thumbnail"><img src="img/14_okalabo.jpg" alt="オカラボ" class="img-thumbnail img-responsive"></p>
    <h3 class="featureblock-title">オカラボ<span class="selif">-Web Shop-</span></h3>
  </section>
  </a></div>
<div class="col-xs-6 col-sm-3 info-thumbnail"> <a href="">
  <section class="feature-block thumbnail">
    <p class="featureblock-thumbnail"><img src="img/15_web-passo.jpg" alt="Web Passo" class="img-thumbnail img-responsive"></p>
    <h3 class="featureblock-title">Web Passo<span class="selif">-Web Passo-</span></h3>
  </section>
  </a></div>
<div class="col-xs-6 col-sm-3 info-thumbnail"> <a href="">
  <section class="feature-block thumbnail">
    <p class="featureblock-thumbnail"><img src="img/16_do-net.jpg" alt="岡学OBページ" class="img-thumbnail img-responsive"></p>
    <h3 class="featureblock-title">岡学OBページ<span class="selif">-Do-net-</span></h3>
  </section>
  </a></div>
  
<!-- 各項目↑ -->


    </div><!-- col-xs-12 -->
    </section>
  </div>
  <!-- インフォメーション ↑ --> 
</div><!-- tabContent -->  
</div><!-- container -->
</div><!-- wrapper -->
<div class="btn-pagetop">
  <div class="container"> 
    
    <!-- バナー↓ -->
    <div class="col-xs-10 flex">
      <div class="col-xs-4 col-sm-2"><a href="#"><img src="img/banner-youtube.jpg" alt="O学園Youtube"></a></div>
      <div class="col-xs-4 col-sm-2"><a href="#"><img src="img/banner-tw.jpg" alt="O学園twitter"></a></div>
      <div class="col-xs-4 col-sm-2"><a href="#"><img src="img/banner-line.jpg" alt="O学園Line"></a></div>
      <div class="col-xs-4 col-sm-2"><a href="#"><img src="img/banner-insta.jpg" alt="O学園Instagram"></a></div>
      <div class="col-xs-4 col-sm-2"><a href="#"><img src="img/banner-fb.jpg" alt="O学園Facebook"></a></div>
      <div class="col-xs-4 col-sm-2"><a href="#"><img src="img/banner-webpasso.jpg" alt="O学園WebPasso"> </a></div>
      <div class="col-xs-4 col-sm-2"><a href="#"><img src="img/banner-jyouetsu.jpg" alt="上越・糸魚川の方へ"></a></div>
      <div class="col-xs-4 col-sm-2"><a href="#"><img src="img/banner-ao.jpg" alt="AO入試"></a></div>
      <div class="col-xs-4 col-sm-2"><a href="#"><img src="img/banner-oc.jpg" alt="オープンキャンパス"></a></div>
      <div class="col-xs-4 col-sm-2"><a href="#"><img src="img/banner-news1.jpg" alt="ニュース1"></a></div>
      <div class="col-xs-4 col-sm-2"><a href="#"><img src="img/banner-news2.jpg" alt="ニュース2"></a></div>
    </div>
    <!-- バナー↑ -->
    <div class="col-xs-2"> <a href="#pageTop" class="center-block text-center"><i class="glyphicon glyphicon-chevron-up center-block"></i></a> </div>
  </div>
</div>
<footer class="footer" role="contentinfo">
  <div class="container">
    <div class="row footer-nav">
      <aside class="col-xs-12 col-sm-3 col-md-3">
        <h3 class="footernav-title"><strong class="glyphicon glyphicon-chevron-down">5つのコンセプト</strong></h3>
        <div class="list-group"> <a href="#">&#8811; 校長先生が現役のデザイナー</a> <a href="#">&#8811; 産官学コラボレーション</a> <a href="#">&#8811; アトリエ授業</a> <a href="#">&#8811; 人間力を育てる</a> <a href="#">&#8811; 伝統</a> </div>
      </aside>
      <aside class="col-xs-12 col-sm-3 col-md-3">
        <h3 class="footernav-title"><strong class="glyphicon glyphicon-chevron-down">学科・コース</strong></h3>
        <div class="list-group"> <a href="#">&#8811; ファッションクリエーターコース</a> <a href="#">&#8811; ファッションスタイリングコース</a> <a href="#">&#8811; グラフィックデザインコース</a> <a href="#">&#8811; イラストデザインコース</a> <a href="#">&#8811; 長野プロデュース科</a> <a href="#">&#8811; ビジネス専攻科</a> </div>
      </aside>
      <aside class="col-xs-12 col-sm-3 col-md-3">
        <h3 class="footernav-title"><strong class="glyphicon glyphicon-chevron-down">学園生活</strong></h3>
        <div class="list-group"> <a href="#">&#8811; キャンパスライフ</a> <a href="#">&#8811; Passo</a> <a href="#">&#8811; コンテスト</a> <a href="#">&#8811; イベント</a> <a href="#">&#8811; 学生作品</a> </div>
      </aside>
      <aside class="col-xs-12 col-sm-3 col-md-3">
        <h3 class="footernav-title"><strong class="glyphicon glyphicon-chevron-down">就職</strong></h3>
        <div class="list-group"> <a href="#">&#8811; 就職指導</a> <a href="#">&#8811; 希望職種への就職</a> <a href="#">&#8811; 活躍する卒業生</a> </div>
      </aside>
    </div>
    <!-- フッター2段目 -->
    <div class="row footer-nav">
      <aside class="col-xs-12 col-sm-3 col-md-3">
        <h3 class="footernav-title"><strong class="glyphicon glyphicon-chevron-down">お知らせ</strong></h3>
        <div class="list-group"> <a href="#">&#8811; 資料請求</a> <a href="#">&#8811; オープンキャンパス</a> <a href="#">&#8811; 学校説明＆見学</a> <a href="#">&#8811; 企業の方へ</a> <a href="#">&#8811; プライバシーポリシー</a> </div>
      </aside>
      <aside class="col-xs-12 col-sm-3 col-md-3">
        <h3 class="footernav-title"><strong class="glyphicon glyphicon-chevron-down">その他</strong></h3>
        <div class="list-group"> <a href="#">&#8811; アクセス</a> <a href="#">&#8811; お問合せ</a> <a href="#">&#8811; 上越・糸魚川の方へ</a> </div>
      </aside>
      <aside class="col-xs-12 col-sm-3 col-md-3">
        <h3 class="footernav-title"><strong class="glyphicon glyphicon-chevron-down">岡学園メディア</strong></h3>
        <div class="list-group"> <a href="#">&#8811; Youtube 公式ページ</a> <a href="#">&#8811; twitter 公式ページ</a> <a href="#">&#8811; LINE 公式ページ</a> <a href="#">&#8811; Instagram 公式ページ</a> <a href="#">&#8811; Facebook 公式ページ</a> <a href="#">&#8811; Web Passo</a><a href="#">&#8811; 岡学OBページ Do-net</a> </div>
      </aside>
      <aside class="col-xs-12 col-sm-3 col-md-3">
        <h3 class="footernav-title"><strong class="glyphicon glyphicon-chevron-down">リンク</strong></h3>
        <div class="list-group"> <a href="#">&#8811; 岡正子デザインオフィス</a> <a href="#">&#8811; ECOMACO</a> <a href="#">&#8811; 杉野学園</a> <a href="#">&#8811; NAGANOデザインフェスタ</a> <a href="#">&#8811; オカラボ</a> </div>
      </aside>
    </div>
    <!-- フッター3段目 -->
    <div class="row footer-nav">
      <p class="col-xs-12 col-sm-12 col-md-12 footer-logo"> <a href="index.html"><img src="img/logo-s.svg" alt="O学園トータルデザインアカデミー" class="center-block"></a> </p>
    </div>
    <div class="copyright"> <small>Copyright &copy; O学園トータルデザインアカデミー all right reserved.</small> </div>
  </div>
</footer>
</div>
<!-- #wrapper end --> 

<!-- 固定ページ --> 
<!--     
  <div class="col-xs-12 banner-right">
    <div class="col-xs-2 banner-piece banner-youtube"><a href=""><img src="img/banner-youtube.jpg" alt="O学園Youtube"></a></div>
    <div class="col-xs-2 banner-piece banner-twitter"><a href=""><img src="img/banner-tw.jpg" alt="O学園twitter"></a></div>
    <div class="col-xs-2 banner-piece banner-line"><a href=""><img src="img/banner-line.jpg" alt="O学園Line"></a></div>
    <div class="col-xs-2 banner-piece banner-instagram"><a href=""><img src="img/banner-insta.jpg" alt="O学園Instagram"></a></div>
    <div class="col-xs-2 banner-piece banner-facebook"><a href=""><img src="img/banner-fb.jpg" alt="O学園Facebook"></a></div>
    <div class="col-xs-2 banner-piece banner-webpasso"><a href=""><img src="img/banner-webpasso.jpg" alt="O学園WebPasso"></a></div>
  </div>
  <div class="col-xs-12 banner-left">
    <div class="col-xs-2 banner-piece banner-jyouetsu"><a href=""><img src="img/banner-jyouetsu.jpg" alt="上越・糸魚川の方へ"></a></div>
    <div class="col-xs-2 banner-piece banner-ao"><a href=""><img src="img/banner-ao.jpg" alt="AO入試"></a></div>
    <div class="col-xs-2 banner-piece banner-oc"><a href=""><img src="img/banner-oc.jpg" alt="オープンキャンパス"></a></div>
    <div class="col-xs-2 banner-piece banner-news1"><a href=""><img src="img/banner-news1.jpg" alt="ニュース1"></a></div>
    <div class="col-xs-2 banner-piece banner-news2"><a href=""><img src="img/banner-news2.jpg" alt="ニュース2"></a></div>
  </div>
  -->
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
<script src="js/app.js"></script> 
<script type="text/javascript">
$(function() {
	$(window).scroll(function(){
		var y = $(this).scrollTop();
		$('.patternB').css('background-position', '0 ' + parseInt( -y / 10 ) + 'px');
		$('#movie').css('background-position', '0 ' + parseInt( -y / 20 ) + 'px');
	});
});
</script> 
<script type="text/javascript"><!--
			// デフォルトのタブを選択
			ChangeTab('tab1');
			// -->
</script>
</body>
</html>
