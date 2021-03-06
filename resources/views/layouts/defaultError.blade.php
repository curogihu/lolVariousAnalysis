<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>LoL Trend Research</title>
  <meta name="description" contents="ゲーム「リーグオブレジェンド」において、各チャンピオンの試合時間に適したアイテムが分かるサイトです。 On League of lengeds, You can know when and what should I buy items each champion.">
  <meta name="keywords" content="リーグオブレジェンド, アイテム, 初心者, チャンピオン, League of Legends, LoL, lol, Champion, Item">

  <link rel="stylesheet" href="{{{asset('/css/bootstrap.css')}}}" type="text/css">
  <link rel="stylesheet" href="{{{asset('/css/default.css')}}}" type="text/css">
</head>
<body>
  <div id="container">

    <div id="header" class="middleContentItem">
      <h1>Set link</h1>
    </div>

    <div id="left">
      @yield('advertisement1')
    </div>

    <div id="middle">
      <div id="menu" class="middleContentItem">
        <h2><a href="/whenbuy" class="menuItem">@yield('menuItem1')</a></h2>
        <h2><a href="/whenkilled" class="menuItem">@yield('menuItem2')</a></h2>
        <h2><a href="/wherelane" class="menuItem">@yield('menuItem3')</a></h2>
        <h2><a href="/howmanycs" class="menuItem">@yield('menuItem4')</a></h2>
        <h2><a href="/form" class="menuItem">@yield('menuItem5')</a></h2>
      </div>

      <div id="contents" class="middleContentItem">
        @yield('errorMessage')
      </div>
    </div>

    <div id="right">
      @yield('advertisement2')
    </div>

    <div id="footer" class="middleContentItem"><p>&copy; 2015 LoLTrendResearch</p></div>
  </div>
</body>
</html>