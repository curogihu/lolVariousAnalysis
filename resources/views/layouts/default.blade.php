<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="description" contents="ゲーム「リーグオブレジェンド」のランク戦やクラッシュ対策を兼ねた分析サイトです">
  <meta name="keywords" content="リーグオブレジェンド, チャンピオン, クラッシュ, League of Legends, LoL, lol, Champion, clash">
  <title>LoL Various Analysis</title>
<!--
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
  <link rel="stylesheet" href="css/default.css" type="text/css">
-->
  <link rel="stylesheet" href="{{{asset('/css/bootstrap.css')}}}" type="text/css">
  <link rel="stylesheet" href="{{{asset('/css/default.css')}}}" type="text/css">
<!--
  HTML::script
-->
  <!-- HTML::style('css/default.css'); -->
</head>
<body>
  <div id="container">

    <div id="header" class="middleContentItem">
      <!--<h1>@yield('title')</h1>-->
      <h1>LoL Various Analysis</h1>
    </div>

    <div id="left">
      @yield('advertisement1')
    </div>

    <div id="middle">
      <div id="menu" class="middleContentItem">
        <h2><a href="/counterbuild" class="menuItem">@yield('menuItem1')</a></h2>
        <h2><a href="/wintrolls" class="menuItem">@yield('menuItem2')</a></h2>
        <h2><a href="/comparecs" class="menuItem">@yield('menuItem3')</a></h2>
      </div>

<!--      <div id="contents" class="middleContentItem">@yield('contents')</div> -->
      <div id="contents" class="middleContentItem">
        @yield('contents')
      </div>
    </div>

    <div id="right">
      @yield('advertisement2')
    </div>

    <div id="footer" class="middleContentItem"><p>&copy; 2018 LoLVariousAnalysis</p></div>
  </div>
</body>
</html>