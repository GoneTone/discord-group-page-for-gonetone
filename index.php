<?php
include_once("api/discordApi.php");

use GoneTone\DiscordApi;

$serverId = "434607247071641600";

$discordApi = new DiscordApi($serverId);
$discordApi->fetch();

$server_title = $discordApi->getServerTitle();
$channel_list = $discordApi->getChannels();
$channel_count = $discordApi->getChannelCount();
$member_list = $discordApi->getMembers();
$member_count = $discordApi->getMemberCount();

//var_dump($discordApi->getRawData());
?>
<!--
    <?php echo $server_title." | Discord 群組"."\n"; ?>
    https://discord.reh.tw/

    Developed by 張文相 (Zhang Wenxiang)
    https://www.facebook.com/GoneToneDY
-->
<!--

                              _oo0oo_
                             o8888888o
                             88" . "88
                             (| -_- |)
                             0\  =  /0
                           ___/`---'\___
                         .' \\|     |# '.
                        / \\|||  :  |||# \
                       / _||||| -:- |||||- \
                      |   | \\\  -  #/ |   |
                      | \_|  ''\---/''  |_/ |
                      \  .-\__  '-'  ___/-. /
                    ___'. .'  /--.--\  `. .'___
                 ."" '<  `.___\_<|>_/___.' >' "".
                | | :  `- \`.;`\ _ /`;.`/ - ` : | |
                \  \ `_.   \_ __\ /__ _/   .-` /  /
            =====`-.____`.___ \_____/___.-`___.-'=====
                              `=---='


          ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

              佛祖保佑                       永無 BUG

-->
<!DOCTYPE html>
<html lang="zh-TW" class="no-js">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="theme-color" content="#45A1EF">
        <title><?php echo $server_title." | Discord 群組"; ?></title>
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="icon" href="https://discord.reh.tw/assets/images/icons/icon-16x16.png" sizes="16x16">
        <link rel="icon" href="https://discord.reh.tw/assets/images/icons/icon-32x32.png" sizes="32x32">
        <link rel="icon" href="https://discord.reh.tw/assets/images/icons/icon-64x64.png" sizes="64x64">
        <link rel="icon" href="https://discord.reh.tw/assets/images/icons/icon-128x128.png" sizes="128x128">
        <link rel="icon" href="https://discord.reh.tw/assets/images/icons/icon-192x192.png" sizes="192x192">
        <link rel="icon" href="https://discord.reh.tw/assets/images/icons/icon-256x256.png" sizes="256x256">
        <link rel="icon" href="https://discord.reh.tw/assets/images/icons/icon-512x512.png" sizes="512x512">
        <link rel="apple-touch-icon-precomposed" href="https://discord.reh.tw/assets/images/og/logo-256x256.png">
        <link rel="image_src" type="image/jpeg" href="https://discord.reh.tw/assets/images/og/logo-256x256.png">
        <meta name="author" content="張文相 Zhang Wenxiang">
        <meta name="description" content="歡迎加入「<?php echo $server_title; ?>」Discord 群組，我們歡迎您成為本群組的一員，成員可盡情聊天和使用我們的頻道，打 Game、討論動漫、程式開發，什麼話題都可，只要不違反規定，還有 24 小時播放音樂的頻道！">
        <meta property="description" content="歡迎加入「<?php echo $server_title; ?>」Discord 群組，我們歡迎您成為本群組的一員，成員可盡情聊天和使用我們的頻道，打 Game、討論動漫、程式開發，什麼話題都可，只要不違反規定，還有 24 小時播放音樂的頻道！">
        <meta name="msapplication-TileImage" content="https://discord.reh.tw/assets/images/og/logo-256x256.png">
        <meta property="fb:app_id" content="344099459299612">
        <meta property="article:author" content="https://www.facebook.com/GoneToneDY/">
        <meta property="og:site_name" content="旋風之音 GoneTone">
        <meta property="og:locale" content="zh_tw">
        <meta property="og:type" content="website">
        <meta property="og:title" content="<?php echo $server_title." | Discord 群組"; ?>">
        <meta property="og:description" content="歡迎加入「<?php echo $server_title; ?>」Discord 群組，我們歡迎您成為本群組的一員，成員可盡情聊天和使用我們的頻道，打 Game、討論動漫、程式開發，什麼話題都可，只要不違反規定，還有 24 小時播放音樂的頻道！">
        <meta property="og:url" content="https://discord.reh.tw">
        <meta property="og:image" content="https://discord.reh.tw/assets/images/og/banner.png">
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="630">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="<?php echo $server_title." | Discord 群組"; ?>">
        <meta name="twitter:description" content="歡迎加入「<?php echo $server_title; ?>」Discord 群組，我們歡迎您成為本群組的一員，成員可盡情聊天和使用我們的頻道，打 Game、討論動漫、程式開發，什麼話題都可，只要不違反規定，還有 24 小時播放音樂的頻道！">
        <meta name="twitter:image" content="https://discord.reh.tw/assets/images/og/banner.png">
        <meta name="twitter:site" content="@TPGoneTone">
        <meta name="twitter:creator" content="@TPGoneTone">
        <link href="//fonts.googleapis.com/css?family=Poppins:300,500,600" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/linearicons.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/main.css?v=1.0.3">
    </head>
    <body>
        <div class="main-wrapper-first">
            <div class="hero-area relative">
                <header>
                    <div class="container">
                        <div class="header-wrap">
                            <div class="header-top d-flex justify-content-between align-items-center">
                                <div class="logo">
                                    <a href="https://blog.reh.tw/" target="_blank"><img src="assets/images/logo.png?v=1.0.1" width="247" class="img-fluid d-block rounded"></a>
                                </div>
                                <div class="main-menubar d-flex align-items-center">
                                    <nav class="hide">
                                        <a href="https://blog.reh.tw/" target="_blank">網站</a>
                                        <a href="https://www.facebook.com/GoneToneDY" target="_blank">Facebook</a>
                                        <a href="https://twitter.com/TPGoneTone" target="_blank">Twitter</a>
                                        <a href="https://www.youtube.com/c/GoneTone?sub_confirmation=1" target="_blank">YouTube</a>
                                        <a href="https://github.com/GoneTone" target="_blank">GitHub</a>
                                    </nav>
                                    <div class="menu-bar"><span class="lnr lnr-menu"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <div class="banner-area">
                    <div class="container">
                        <div class="row height align-items-center">
                            <div class="col-lg-7">
                                <div class="banner-content">
                                    <h1 class="text-white text-uppercase mb-10"><?php echo $server_title; ?></h1>
                                    <h5 class="text-white mb-30"><?php echo '目前有 <font color="#15ba00">'.$member_count.'</font> 人在線'; ?> <a href="javascript:;" class="genric-btn info-border circle medium" onclick="$('#discordOnlineMembers').modal();">線上名單</a> <a href="javascript:;" class="genric-btn info-border circle medium" onclick="$('#discordVoiceChannels').modal();">語音頻道</a></h5>
                                    <h5 class="text-white mb-30">歡迎加入「<?php echo $server_title; ?>」Discord 群組，我們歡迎您成為本群組的一員，成員可盡情聊天和使用我們的頻道，打 Game、討論動漫、程式開發，什麼話題都可，只要不違反規定，群組內還有 24 小時播放音樂的頻道！</h5>
                                    <a href="javascript:;" class="primary-btn d-inline-flex align-items-center" onclick="joinDiscordGroup('CXxSFQx');"><span class="mr-10">加入 Discord 群組</span><span class="lnr lnr-arrow-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-wrapper">
            <div class="working-process-area">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="section-title text-center">
                                <h2>共同聊天的一個群組</h2>
                                <p>不管是玩多人線上遊戲組隊或聊天聊動漫聊科技，都可以利用我們的頻道，找尋夥伴！</p>
                                <br>
                                <a class="image-popup-no-margins" href="assets/images/discord_group.png">
                                    <img src="assets/images/discord_group.png" class="img-fluid d-block rounded">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-wrapper">
            <section class="featured-area">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="section-title text-center">
                                <h2 class="text-white">群組的特色</h2>
                                <p class="text-white">我們有專屬的表情符號、各種代表身分的組別、24 小時音樂播放頻道、遊戲專用語音頻道和動漫、小說專區</p>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <div class="single-feature">
                                <a class="image-popup-fit-width" href="assets/images/group-characteristics/emoji.jpg">
                                    <div class="thumb" style="background: url(assets/images/group-characteristics/emoji.jpg);"></div>
                                </a>
                                <div class="desc text-center mt-30">
                                    <h4 class="text-white">表情符號</h4>
                                    <p class="text-white">專屬於我們群組的表情符號，陸續還會新增更多！</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-feature">
                                <a class="image-popup-fit-width" href="assets/images/group-characteristics/grouping.jpg">
                                    <div class="thumb" style="background: url(assets/images/group-characteristics/grouping.jpg);"></div>
                                </a>
                                <div class="desc text-center mt-30">
                                    <h4 class="text-white">身分組</h4>
                                    <p class="text-white">各種的身分組代表在群組的身分，常在群組互動的人有機會可以獲得 VIP 身分，未來有可能會有更多的身分組！</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-feature">
                                <a class="image-popup-fit-width" href="assets/images/group-characteristics/music.jpg">
                                    <div class="thumb" style="background: url(assets/images/group-characteristics/music.jpg);"></div>
                                </a>
                                <div class="desc text-center mt-30">
                                    <h4 class="text-white">24 小時音樂播放頻道</h4>
                                    <p class="text-white">聽音樂是一種放鬆的享受，當你無聊時歡迎進入音樂播放頻道聆聽好聽的音樂！</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <div class="single-feature">
                                <a class="image-popup-fit-width" href="assets/images/group-characteristics/game.jpg">
                                    <div class="thumb" style="background: url(assets/images/group-characteristics/game.jpg);"></div>
                                </a>
                                <div class="desc text-center mt-30">
                                    <h4 class="text-white">遊戲專用語音頻道</h4>
                                    <p class="text-white">揪朋友一起打遊戲，越多人越好玩！</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-feature">
                                <a class="image-popup-fit-width" href="assets/images/group-characteristics/anime.jpg">
                                    <div class="thumb" style="background: url(assets/images/group-characteristics/anime.jpg);"></div>
                                </a>
                                <div class="desc text-center mt-30">
                                    <h4 class="text-white">動漫、小說專區</h4>
                                    <p class="text-white">動漫和小說很多人喜歡，我們特別開了動漫、小說專區，讓大家交流討論聊天！</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="remarkable-area">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="section-title text-center">
                                <h2>成員們比較常在玩的部分遊戲</h2>
                                <p>我們群組內成員比較常玩的遊戲，可以尋找遊戲夥伴，下方只列出部分遊戲，未列出完整清單 (太多了</p>
                            </div>
                        </div>
                    </div>
                    <div class="single-remark">
                        <div class="row no-gutters">
                            <div class="col-md-6">
                                <a class="image-popup-fit-width" href="assets/images/game/minecraft.png">
                                    <div class="remark-thumb" style="background: url(assets/images/game/minecraft.png);"></div>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <div class="remark-desc">
                                    <h4>Minecraft 當個創世神</h4>
                                    <p>《當個創世神》（英語：Minecraft，中國大陸譯作「我的世界」）是一款沙盒遊戲，最初由瑞典遊戲設計師馬庫斯·阿列克謝·泊松（別名 Notch）單獨開發，隨後由 2009 年成立的瑞典公司 Mojang 開發並發行。玩家可以在一個隨機生成的 3D 世界內，以帶材質貼圖的立方體為基礎進行遊戲。遊戲中的其他特色包括探索世界、採集資源、合成物品及生存冒險等。遊戲有多種模式，生存模式中玩家必須維持生命並採集資源來打造自己的世界；創造模式中玩家擁有無限的資源並可飛行，大多數玩家會使用此模式來建造大型建築；冒險模式中玩家可在其他玩家客製化的地圖中遊玩。</p>
                                    <a href="https://zh.wikipedia.org/wiki/%E6%88%91%E7%9A%84%E4%B8%96%E7%95%8C" class="primary-btn" target="_blank"><span>了解更多</span></a> <a href="https://minecraft.net/zh-hant/" class="primary-btn" target="_blank"><span>前往 Minecraft 官網</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-remark">
                        <div class="row no-gutters">
                            <div class="col-md-6">
                                <div class="remark-desc">
                                    <h4>KartRider 跑跑卡丁車</h4>
                                    <p>《跑跑卡丁車》是韓國 NEXON 公司出品的一個休閒類賽車競速遊戲，亦是爆爆王的衍生遊戲，在中國大陸的代理是世紀天成，在臺灣及香港則是遊戲橘子代理。</p>
                                    <a href="https://zh.wikipedia.org/wiki/%E8%B7%91%E8%B7%91%E5%8D%A1%E4%B8%81%E8%BD%A6" class="primary-btn" target="_blank"><span>了解更多</span></a> <a href="https://tw.beanfun.com/kartrider/" class="primary-btn" target="_blank"><span>前往 跑跑卡丁車 台灣官網</span></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <a class="image-popup-fit-width" href="assets/images/game/kartrider.jpg">
                                    <div class="remark-thumb" style="background: url(assets/images/game/kartrider.jpg);"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="single-remark">
                        <div class="row no-gutters">
                            <div class="col-md-6">
                                <a class="image-popup-fit-width" href="assets/images/game/pubg.jpg">
                                    <div class="remark-thumb" style="background: url(assets/images/game/pubg.jpg);"></div>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <div class="remark-desc">
                                    <h4>PlayerUnknown's Battlegrounds 絕地求生</h4>
                                    <p>《絕地求生》（英語：PlayerUnknown's Battlegrounds，又譯作「絕地求生：大逃殺」，直譯為「無名玩家的戰場」，或簡稱 PUBG），也常被稱為吃雞，是一款由韓國電子遊戲開發商藍洞（英語：Bluehole Inc.）旗下的 PUBG 公司所開發及發行的多人制大逃殺遊戲。遊戲首發於 Microsoft Windows 平台，自 2017 年 3 月 23 日開始經 Steam 發行體驗版。Xbox One 版本在同年 12 月由微軟工作室負責發售。PlayStation 4 版本計劃於 2018 年 12 月 7 日發售。官方亦宣布將發行絕地求生低配免費版《絕地求生Lite》面向東南亞國家。</p>
                                    <a href="https://zh.wikipedia.org/wiki/%E7%B5%95%E5%9C%B0%E6%B1%82%E7%94%9F" class="primary-btn" target="_blank"><span>了解更多</span></a> <a href="https://www.pubg.com/" class="primary-btn" target="_blank"><span>前往 PUBG 官網</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-remark">
                        <div class="row no-gutters">
                            <div class="col-md-6">
                                <div class="remark-desc">
                                    <h4>Grand Theft Auto V 俠盜獵車手V</h4>
                                    <p>《俠盜獵車手V》（英語：Grand Theft Auto V）是一款開放世界動作冒險遊戲，由 Rockstar North 製作，Rockstar Games 發行。本作在 2013 年 9 月 17 日於 PlayStation 3 和 Xbox 360 主機上推出。這是《俠盜獵車手》系列中第 15 款作品，也是繼 2008 年的《俠盜獵車手IV》後第一款本傳的續作。由於本作是第七世代遊戲機末期推出的大型作品之一，因此在上市前便獲得了廣大的期待。
                                        <br><br>《俠盜獵車手V》是在開放世界環境中以第三人稱、第一人稱遊玩，可讓玩者自由的與遊戲世界互動。遊戲背景設定在虛構的美國聖安地列斯州（San Andreas，以南加州為範本），玩者可隨意地在荒漠間和虛構的城市洛聖都（Los Santos，以洛杉磯為範本）中漫遊。本作故事模式中有三位主角，玩者可在三人之間自由切換操控，而故事劇情則以三人策劃並執行六次大型搶劫行動。遊戲中也包含了線上多人模式，名為俠盜獵車手 Online，已於同年 10 月 1 日開放，最多可容納 30 位玩家（PS4, Xbox One 及 PC 版最多可容納 30 位玩家）在遊戲世界中互相競爭或合作。</p>
                                    <a href="https://zh.wikipedia.org/wiki/%E4%BF%A0%E7%9B%9C%E7%8D%B5%E8%BB%8A%E6%89%8BV" class="primary-btn" target="_blank"><span>了解更多</span></a> <a href="https://www.rockstargames.com/V/" class="primary-btn" target="_blank"><span>前往 Grand Theft Auto V 官網</span></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <a class="image-popup-fit-width" href="assets/images/game/gtav.jpg">
                                    <div class="remark-thumb" style="background: url(assets/images/game/gtav.jpg);"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="single-remark">
                        <div class="row no-gutters">
                            <div class="col-md-6">
                                <a class="image-popup-fit-width" href="assets/images/game/r6.jpg">
                                    <div class="remark-thumb" style="background: url(assets/images/game/r6.jpg);"></div>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <div class="remark-desc">
                                    <h4>Tom Clancy's Rainbow Six: Siege 虹彩六號：圍攻行動</h4>
                                    <p>《虹彩六號：圍攻行動》為一款5V5第一人稱戰術射擊遊戲，遊戲中玩家可以選擇不同特勤幹員為角色，每位角色皆擁有不同的裝備，且可以在槍枝上面裝上不同的小配備，如選擇新進人員作為參與遊戲的特勤幹員，則不能對槍械進行任何配備。遊戲分為攻擊方與防守方，在排名戰模式下選取角色完畢後隊伍可以以投票的形式選擇要在哪一個地點重生，在休閒模式下出生點為系統隨機分配。回合開始後攻擊方可以使用無人機探查地圖不同地方試圖找出防守方的位置，防守方則要破壞無人機、用木板封阻門框或窗戶、加固牆面以避免該牆壁被攻擊方破壞用以侵入目標，防守方也可利用監視器找出敵人位置。遊戲的目標為攻擊方必須攻堅目的地後達成條件，防守方則要防止攻擊方達成勝利條件。攻擊方除了可以破壞牆面之外也可以在建築物外側進行繩降，這些可破壞的表面也可以被防守方拿來偷襲與利用。遊戲中的武器可以擊傷隊友，且角色死亡後直到下一回合前都無法復活。遊戲共有四種完結方式：攻擊方達成條件後勝利、防守方成功守住據點並且撐到時間結束後勝利、其中一隊殲滅敵隊後勝利、兩隊僅存的最後一名隊友剛好同時死亡後平手。 遊戲的破壞系統為其一大特色，遊戲中易碎材質（如木頭、玻璃等）所組成的表面皆可破壞，包含了牆壁、天花板與地板。這些材質除了使用炸藥也可以用槍擊或近戰攻擊破壞，若牆面遭到加固則需要特殊的炸藥方可擊破。</p>
                                    <a href="https://zh.wikipedia.org/wiki/%E8%99%B9%E5%BD%A9%E5%85%AD%E8%99%9F%EF%BC%9A%E5%9C%8D%E6%94%BB%E8%A1%8C%E5%8B%95" class="primary-btn" target="_blank"><span>了解更多</span></a> <a href="http://rainbow6.ubi.com/siege/home/" class="primary-btn" target="_blank"><span>前往 虹彩六號：圍攻行動 官網</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-remark">
                        <div class="row no-gutters">
                            <div class="col-md-6">
                                <div class="remark-desc">
                                    <h4>League of Legends 英雄聯盟</h4>
                                    <p>《英雄聯盟》是一款 3D 的多人線上戰鬥競技場遊戲，以第三人稱視角進行。該遊戲目前的常規遊戲模式有三種，分別是召喚峽谷、咆嘯深淵與扭曲叢林，先前有一個水晶之痕模式，現在已經被移除。玩家會在遊戲中彼此合作、與對方的團隊競爭，遊戲的目標通常是破壞對方團隊的主要基地「主堡」，每一場遊戲的時間大約為 25 至 55 分鐘。在召喚峽谷對戰中，玩家們可在遊戲時間 15 至 20 分鐘時發起提前投降，必須全隊同意才能達成投降協議，20 分鐘後可發起投降，只要有超過 7 成的玩家投降即可通過。投降的隊伍將立即輸掉比賽。</p>
                                    <a href="https://zh.wikipedia.org/wiki/%E8%8B%B1%E9%9B%84%E8%81%94%E7%9B%9F" class="primary-btn" target="_blank"><span>了解更多</span></a> <a href="https://lol.garena.tw/" class="primary-btn" target="_blank"><span>前往 英雄聯盟 台灣官網</span></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <a class="image-popup-fit-width" href="assets/images/game/lol.jpg">
                                    <div class="remark-thumb" style="background: url(assets/images/game/lol.jpg);"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="single-remark">
                        <div class="row no-gutters">
                            <div class="col-md-6">
                                <a class="image-popup-fit-width" href="assets/images/game/ets2.jpg">
                                    <div class="remark-thumb" style="background: url(assets/images/game/ets2.jpg);"></div>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <div class="remark-desc">
                                    <h4>Euro Truck Simulator 2 歐洲卡車模擬2</h4>
                                    <p>《歐洲卡車模擬2》（英語：Euro Truck Simulator 2）是一款運輸模擬遊戲，由 SCS Software 開發，可以在 MAC、Microsoft Windows 和 Linux 三大操作系統運行。最初於 2012 年 10 月 19 日發行。該遊戲也是發行於 2008 年的《歐洲卡車模擬》（英語：Euro Truck Simulator）的第二代作品。遊戲的世界地圖在歐洲的部分地區（大多是西歐和中歐國家和相關城市），而幾乎所有東歐和巴爾幹半島國家及城市（諸如克羅埃西亞、羅馬尼亞等）都未有在遊戲中可供玩家選擇，若玩家希望體驗全歐洲所有國家版圖的駕駛一般則需要下載 MOD (如 Promods，RUSmap 等)。另外，這些國家的玩家可以駕駛鉸接式卡車駛入多處地點的運輸站來運送貨物。隨著遊戲的進展，玩家將可以購買更多的車輛、車庫，並可以僱用更多司機為其工作。玩家亦可以透過使用模組去實現多人遊戲，更多車種以及其他的功能。整個遊戲在 Steam 的銷售量已在 2017 年 8 月突破 400 萬，並在 Steam 獲得了 97% 的好評。</p>
                                    <a href="https://zh.wikipedia.org/wiki/%E6%AD%90%E6%B4%B2%E5%8D%A1%E8%BB%8A%E6%A8%A1%E6%93%AC2" class="primary-btn" target="_blank"><span>了解更多</span></a> <a href="http://www.eurotrucksimulator2.com/" class="primary-btn" target="_blank"><span>前往 Euro Truck Simulator 2 官網</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="story-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-1">
                        </div>
                        <div class="col-lg-7">
                            <div class="story-box">
                                <h4 class="text-uppercase mb-10">現在就加入我們的群組</h4>
                                <p>加入「<?php echo $server_title; ?>」Discord 群組，一起玩遊戲、聽音樂、討論動漫與科技，隨時都可尋找遊戲夥伴，一同打遊戲！</p>
                                <br>
                                <a href="javascript:;" class="primary-btn d-inline-flex align-items-center" onclick="joinDiscordGroup('CXxSFQx');"><span class="mr-10">加入 Discord 群組</span><span class="lnr lnr-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="footer-widget-area">
                <footer>
                    <div class="container">
                        <div class="footer-content d-flex justify-content-between align-items-center flex-wrap">
                            <div class="logo">
                                <a href="https://blog.reh.tw/" target="_blank"><img src="assets/images/logo.png?v=1.0.1" width="247" class="img-fluid d-block rounded"></a>
                            </div>
                            <div class="copy-right-text">Copyright &copy; <?php $set = '2018'; $datetime = date ("Y" , mktime(date('H')+8, date('i'), date('s'), date('m'), date('d'), date('Y'))); if( $datetime == $set) {echo $datetime;}else{echo $set.'-'.$datetime;} ?> <a href="/"><?php echo $server_title; ?></a>. All rights reserved.
                                <br>Developed by <a href="https://www.facebook.com/GoneToneDY" target="_blank">張文相 (Zhang Wenxiang)</a>.</div>
                            <div class="footer-social">
                                <a href="https://www.facebook.com/GoneToneDY" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="https://twitter.com/TPGoneTone" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.youtube.com/c/GoneTone?sub_confirmation=1" target="_blank"><i class="fa fa-youtube-play"></i></a>
                                <a href="https://github.com/GoneTone" target="_blank"><i class="fa fa-github"></i></a>
                            </div>
                        </div>
                    </div>
                </footer>
            </section>
        </div>
        <div class="modal fade" id="discordOnlineMembers" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><?php echo '在線成員名單 (<font color="#00ba49">'.$member_count.' 人在線</font>)'; ?></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-outline-success btn-sm my-1">線上</button> <button type="button" class="btn btn-outline-warning btn-sm my-1">閒置</button> <button type="button" class="btn btn-outline-danger btn-sm my-1">請勿打擾</button> <button type="button" class="btn btn-outline-secondary btn-sm my-1">機器人</button>
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th width="5%">#</th>
                                        <th width="47%">用戶名 / 暱稱</th>
                                        <th width="48%">正在玩</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach ($member_list as $count => $member) {
                                        if (isset($member->nick)) {
                                            $name = $member->nick;
                                        } else {
                                            $name = $member->username;
                                        }
                                        if ($member->bot === true) {
                                            echo '<tr><td class="align-middle" width="5%">'.($count + 1).'</td><td class="align-middle" width="47%" style="word-break: break-all;"><button type="button" class="btn btn-outline-secondary btn-sm my-1" onclick="displayUserName(this, \''.$member->username.'#'.$member->discriminator.'\');" onblur="displayNickName(this, \'【機器人】'.$name.'\');"><img src="'.$member->avatar_url.'" width="20" height="20"> 【機器人】'.$name.'</button></td><td class="align-middle" width="48%" style="word-break: break-all;">'.$member->game->name.'</td></tr>';
                                        } else {
                                            if ($member->status === "online") {
                                                $btnColor = "success";
                                            } else if ($member->status === "idle") {
                                                $btnColor = "warning";
                                            } else if ($member->status === "dnd") {
                                                $btnColor = "danger";
                                            } else {
                                                $btnColor = "success";
                                            }

                                            $gameName = $member->game->name;
                                            $gameName = preg_replace("/(?<![#>\".\/])Minecraft/i", "<a href=\"https://minecraft.net/\" target='_blank'><i class=\"fa fa-external-link\"></i> $0</a>", $gameName);
                                            $gameName = preg_replace("/(?<![#>\".\/])Apex Legends/i", "<a href=\"https://www.ea.com/games/apex-legends\" target='_blank'><i class=\"fa fa-external-link\"></i> $0</a>", $gameName);
                                            $gameName = preg_replace("/(?<![#>\".\/])Grand Theft Auto V/i", "<a href=\"https://www.rockstargames.com/V/\" target='_blank'><i class=\"fa fa-external-link\"></i> $0</a>", $gameName);
                                            $gameName = preg_replace("/(?<![#>\".\/])PLAYERUNKNOWN'S BATTLEGROUNDS/i", "<a href=\"https://www.pubg.com/\" target='_blank'><i class=\"fa fa-external-link\"></i> $0</a>", $gameName);
                                            $gameName = preg_replace("/(?<![#>\".\/])Euro Truck Simulator 2/i", "<a href=\"http://www.eurotrucksimulator2.com/\" target='_blank'><i class=\"fa fa-external-link\"></i> $0</a>", $gameName);
                                            $gameName = preg_replace("/(?<![#>\".\/])League of Legends/i", "<a href=\"https://lol.garena.tw/\" target='_blank'><i class=\"fa fa-external-link\"></i> $0</a>", $gameName);
                                            $gameName = preg_replace("/(?<![#>\".\/])Tom Clancy's Rainbow Six Siege/i", "<a href=\"http://rainbow6.ubi.com/siege/home/\" target='_blank'><i class=\"fa fa-external-link\"></i> $0</a>", $gameName);
                                            $gameName = preg_replace("/(?<![#>\".\/])Overwatch/i", "<a href=\"https://playoverwatch.com\" target='_blank'><i class=\"fa fa-external-link\"></i> $0</a>", $gameName);
                                            $gameName = preg_replace("/(?<![#>\".\/])osu!/i", "<a href=\"https://osu.ppy.sh\" target='_blank'><i class=\"fa fa-external-link\"></i> $0</a>", $gameName);
                                            $gameName = preg_replace("/(?<![#>\".\/])Nox APP Player/i", "<a href=\"https://bignox.com\" target='_blank'><i class=\"fa fa-external-link\"></i> $0</a>", $gameName);
                                            $gameName = preg_replace("/(?<![#>\".\/])Battlefield 4/i", "<a href=\"https://www.battlefield.com/games/battlefield-4\" target='_blank'><i class=\"fa fa-external-link\"></i> $0</a>", $gameName);
                                            $gameName = preg_replace("/(?<![#>\".\/])World of Warships/i", "<a href=\"https://worldofwarships.asia/\" target='_blank'><i class=\"fa fa-external-link\"></i> $0</a>", $gameName);

                                            echo '<tr><td class="align-middle" width="5%">'.($count + 1).'</td><td class="align-middle" width="47%" style="word-break: break-all;"><button type="button" class="btn btn-outline-'.$btnColor.' btn-sm my-1" onclick="displayUserName(this, \''.$member->username.'#'.$member->discriminator.'\');" onblur="displayNickName(this, \''.$name.'\');"><img src="'.$member->avatar_url.'" width="20" height="20"> '.$name.'</button></td><td class="align-middle" width="48%" style="word-break: break-all;">'.$gameName.'</td></tr>';
                                        }
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="javascript:;" class="genric-btn success-border circle" data-dismiss="modal">關閉</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="discordVoiceChannels" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><?php echo '語音頻道名單 (<font color="#00ba49">總共 '.$channel_count.' 個頻道</font>)'; ?></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-outline-success btn-sm my-1">線上</button> <button type="button" class="btn btn-outline-warning btn-sm my-1">閒置</button> <button type="button" class="btn btn-outline-danger btn-sm my-1">請勿打擾</button> <button type="button" class="btn btn-outline-secondary btn-sm my-1">機器人</button>
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th width="5%">#</th>
                                        <th width="47%">語音頻道名稱</th>
                                        <th width="48%">頻道內成員</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach ($channel_list as $count => $channel) {
                                        $inChannel = $discordApi->getMembersInChannel($channel->id);
                                        echo '<tr><td class="align-middle" width="5%">'.($count + 1).'</td><td class="align-middle" width="47%" style="word-break: break-all;">'.$channel->name.'</td><td class="align-middle" width="48%" style="word-break: break-all;">';
                                        foreach ($inChannel as $member) {
                                            if (isset($member->nick)) {
                                                $name = $member->nick;
                                            } else {
                                                $name = $member->username;
                                            }
                                            if ($member->bot === true) {
                                                echo '<button type="button" class="btn btn-outline-secondary btn-sm my-1" onclick="displayUserName(this, \''.$member->username.'#'.$member->discriminator.'\');" onblur="displayNickName(this, \'【機器人】'.$name.'\');"><img src="'.$member->avatar_url.'" width="20" height="20"> 【機器人】'.$name.'</button>';
                                            } else {
                                                if ($member->status === "online") {
                                                    $btnColor = "success";
                                                } else if ($member->status === "idle") {
                                                    $btnColor = "warning";
                                                } else if ($member->status === "dnd") {
                                                    $btnColor = "danger";
                                                } else {
                                                    $btnColor = "success";
                                                }
                                                echo '<button type="button" class="btn btn-outline-'.$btnColor.' btn-sm my-1" onclick="displayUserName(this, \''.$member->username.'#'.$member->discriminator.'\');" onblur="displayNickName(this, \''.$name.'\');"><img src="'.$member->avatar_url.'" width="20" height="20"> '.$name.'</button>';
                                            }
                                        }
                                        echo '</td></tr>';
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="javascript:;" class="genric-btn success-border circle" data-dismiss="modal">關閉</a>
                    </div>
                </div>
            </div>
        </div>
        <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>
        <script src="assets/js/jquery.ajaxchimp.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/jquery.nice-select.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/main.js?v=1.0.0"></script>
        <script type="text/javascript">
            /* 顯示用戶名 */
            function displayUserName(obj, userName) {
                var avatarUrl = obj.getElementsByTagName("img")[0].src;
                obj.innerHTML = '<img src="'+ avatarUrl +'" width="20" height="20"> ' + userName;
            }

            /* 顯示暱稱 */
            function displayNickName(obj, nickName) {
                var avatarUrl = obj.getElementsByTagName("img")[0].src;
                obj.innerHTML = '<img src="'+ avatarUrl +'" width="20" height="20"> ' + nickName;
            }
        </script>
        <script type="text/javascript">
            function joinDiscordGroup(code) {
                var requestURL = "https://discord.gg/";
                window.open(requestURL + code, "_blank");
            }
        </script>
    </body>
</html>
