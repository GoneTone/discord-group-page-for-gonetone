<?php /** @noinspection HtmlDeprecatedTag */
/** @noinspection HtmlDeprecatedAttribute */
include_once("api/discordApi.php"); //Discord API

include_once("data/app-data-list.php"); //應用程式資料註冊清單
include_once("data/game-list.php"); //成員們比較常在玩的部分遊戲清單

use GoneTone\DiscordApi;

$serverId = "434607247071641600";
$ownerId = "297957463649550339";

$gonetoneBotApiKey = "0RAPWYX-6834PY2-QVMTK47-RDSMYEK";

$selfDevelopedBot = array(
    "434386322518704128",
    "436395096036868106"
);

$discordApi = new DiscordApi($serverId, $gonetoneBotApiKey);
$discordApi->fetch();

$serverTitle = $discordApi->getServerTitle();

$allMemberCount = $discordApi->getAllMemberCount();
$allMemberNoBotCount = $discordApi->getAllMemberNoBotCount();
$allBotCount = $discordApi->getAllBotCount();
$onlineMemberCount = $discordApi->getOnlineMemberCount();
$idleMemberCount = $discordApi->getIdleMemberCount();
$dndMemberCount = $discordApi->getDndMemberCount();
$offlineMemberCount = $discordApi->getOfflineMemberCount();
$playingMemberCount = $discordApi->getPlayingMemberCount();
$streamingMemberCount = $discordApi->getStreamingMemberCount();
$watchingMemberCount = $discordApi->getWatchingMemberCount();
$listeningMemberCount = $discordApi->getListeningMemberCount();

//var_dump($discordApi->getRawData());
?>
<!--
    <?php echo $serverTitle . " | Discord 群組" . "\n"; ?>
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
    <title><?php echo $serverTitle . " | Discord 群組"; ?></title>
    <link rel="shortcut icon" href="https://api.reh.tw/images/gonetone/icos/favicon.ico">
    <link rel="icon" href="https://api.reh.tw/images/gonetone/logos/icons/icon-16x16.png" sizes="16x16">
    <link rel="icon" href="https://api.reh.tw/images/gonetone/logos/icons/icon-32x32.png" sizes="32x32">
    <link rel="icon" href="https://api.reh.tw/images/gonetone/logos/icons/icon-64x64.png" sizes="64x64">
    <link rel="icon" href="https://api.reh.tw/images/gonetone/logos/icons/icon-128x128.png" sizes="128x128">
    <link rel="icon" href="https://api.reh.tw/images/gonetone/logos/icons/icon-192x192.png" sizes="192x192">
    <link rel="icon" href="https://api.reh.tw/images/gonetone/logos/icons/icon-256x256.png" sizes="256x256">
    <link rel="icon" href="https://api.reh.tw/images/gonetone/logos/icons/icon-512x512.png" sizes="512x512">
    <link rel="apple-touch-icon-precomposed" href="https://api.reh.tw/images/gonetone/logos/icons/icon-256x256.png">
    <link rel="image_src" type="image/jpeg" href="https://api.reh.tw/images/gonetone/logos/icons/icon-256x256.png">
    <meta name="author" content="張文相 Zhang Wenxiang">
    <meta name="description" content="歡迎加入「<?php echo $serverTitle; ?>」Discord 群組，我們歡迎您成為本群組的一員，成員可盡情聊天和使用我們的頻道，打 Game、討論動漫、程式開發，什麼話題都可，只要不違反規定，還有 24 小時播放音樂的頻道！">
    <meta property="description" content="歡迎加入「<?php echo $serverTitle; ?>」Discord 群組，我們歡迎您成為本群組的一員，成員可盡情聊天和使用我們的頻道，打 Game、討論動漫、程式開發，什麼話題都可，只要不違反規定，還有 24 小時播放音樂的頻道！">
    <meta name="msapplication-TileImage" content="https://api.reh.tw/images/gonetone/logos/icons/icon-256x256.png">
    <meta property="fb:app_id" content="344099459299612">
    <meta property="article:author" content="https://www.facebook.com/GoneToneDY/">
    <meta property="og:site_name" content="旋風之音 GoneTone">
    <meta property="og:locale" content="zh_tw">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo $serverTitle . " | Discord 群組"; ?>">
    <meta property="og:description" content="歡迎加入「<?php echo $serverTitle; ?>」Discord 群組，我們歡迎您成為本群組的一員，成員可盡情聊天和使用我們的頻道，打 Game、討論動漫、程式開發，什麼話題都可，只要不違反規定，還有 24 小時播放音樂的頻道！">
    <meta property="og:url" content="https://discord.reh.tw">
    <meta property="og:image" content="https://discord.reh.tw/assets/images/og/banner.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $serverTitle . " | Discord 群組"; ?>">
    <meta name="twitter:description" content="歡迎加入「<?php echo $serverTitle; ?>」Discord 群組，我們歡迎您成為本群組的一員，成員可盡情聊天和使用我們的頻道，打 Game、討論動漫、程式開發，什麼話題都可，只要不違反規定，還有 24 小時播放音樂的頻道！">
    <meta name="twitter:image" content="https://discord.reh.tw/assets/images/og/banner.png">
    <meta name="twitter:site" content="@TPGoneTone">
    <meta name="twitter:creator" content="@TPGoneTone">
    <link href="//fonts.googleapis.com/css?family=Poppins:300,500,600" rel="stylesheet">
    <link rel="stylesheet" href="assets/lib/fontawesome-5.9.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/linearicons.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css?v=1.0.5">
</head>
<body>
<div class="main-wrapper-first">
    <div class="hero-area relative">
        <header>
            <div class="container">
                <div class="header-wrap">
                    <div class="header-top d-flex justify-content-between align-items-center">
                        <div class="logo">
                            <a href="https://blog.reh.tw/" target="_blank"><img src="https://api.reh.tw/images/gonetone/banners/banner_954x200.png" width="247" class="img-fluid d-block rounded" alt=""></a>
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
                            <h1 class="text-white mb-10"><?php echo $serverTitle; ?></h1>
                            <h5 class="text-white mb-30"><?php echo '成員數共有 <kbd class="text-success">' . $allMemberCount . '</kbd> 人'; ?></h5>
                            <h5 class="text-white mb-30">歡迎加入「<?php echo $serverTitle; ?>」Discord 群組，我們歡迎您成為本群組的一員，成員可盡情聊天和使用我們的頻道，打 Game、討論動漫、程式開發，什麼話題都可，只要不違反規定，群組內還有 24 小時播放音樂的頻道！</h5>
                            <a href="javascript:" class="primary-btn d-inline-flex align-items-center" onclick="joinDiscordGroup('CXxSFQx');"><span class="mr-10">加入 Discord 群組</span><span class="lnr lnr-arrow-right"></span></a>
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
                        <h2><i class="far fa-comments"></i> 共同聊天的一個群組</h2>
                        <p>不管是玩多人線上遊戲組隊或聊天聊動漫聊科技，都可以利用我們的頻道，找尋夥伴！</p>
                    </div>
                </div>
            </div>
            <div class="single-remark">
                <div class="row no-gutters">
                    <div class="col-md-6">
                        <a class="image-popup-fit-width" href="assets/images/discord_group.png">
                            <div class="remark-thumb" style="background: url('assets/images/discord_group.png');"></div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <div class="remark-desc">
                            <h4><i class="fas fa-server"></i> 群組成員狀態</h4>
                            <p>此群成員數共有 <strong><u><?php echo $allMemberCount; ?></u></strong> 人！</p>
                            <p>- 機器人 <strong><u><?php echo $allBotCount; ?></u></strong> 隻。 <br>- 非機器人
                                <strong><u><?php echo $allMemberNoBotCount; ?></u></strong> 人。</p>
                            <p>線上 <strong><u><?php echo $onlineMemberCount; ?></u></strong> 人 | 閒置
                                <strong><u><?php echo $idleMemberCount; ?></u></strong> 人 | 請勿打擾
                                <strong><u><?php echo $dndMemberCount; ?></u></strong> 人 | 離線
                                <strong><u><?php echo $offlineMemberCount; ?></u></strong> 人 <br>正在遊戲
                                <strong><u><?php echo $playingMemberCount; ?></u></strong> 人 | 正在直播
                                <strong><u><?php echo $streamingMemberCount; ?></u></strong> 人 | 正在觀看
                                <strong><u><?php echo $watchingMemberCount; ?></u></strong> 人 | 正在聆聽
                                <strong><u><?php echo $listeningMemberCount; ?></u></strong> 人</p>
                            <!-- <a href="javascript:" onclick="$('#discordAllMembers').modal();" class="primary-btn mb-2"><span>所有成員名單</span></a> <a href="javascript:" onclick="$('#discordVoiceChannels').modal();" class="primary-btn"><span>所有語音頻道</span></a> -->
                        </div>
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
                        <h2 class="text-white"><i class="fas fa-bullhorn"></i> 群組的特色</h2>
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
                        <a class="image-popup-fit-width" href="assets/images/group-characteristics/anime.jpg?v=1.1">
                            <div class="thumb" style="background: url(assets/images/group-characteristics/anime.jpg?v=1.1);"></div>
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
                        <h2><i class="fas fa-gamepad"></i> 成員們比較常在玩的部分遊戲</h2>
                        <p>我們群組內成員比較常玩的遊戲，可以尋找遊戲夥伴，下方只列出部分遊戲，未列出完整清單 (太多了</p>
                    </div>
                </div>
            </div>
            <?php
            foreach (array_keys($gameList) as $gameKey) {
                echo '<div class="single-remark text-center"><div class="row no-gutters"><div class="col-md-6"><a class="image-popup-fit-width" href="assets/images/game/' . $gameList[$gameKey]['imageFileName'] . '"><div class="remark-thumb" style="background: url(assets/images/game/' . $gameList[$gameKey]['imageFileName'] . ');"></div></a></div><div class="col-md-6"><div class="remark-desc"><h4>' . $gameKey . '</h4><p>' . $gameList[$gameKey]['description'] . '</p><a href="' . $gameList[$gameKey]['wikipediaUrl'] . '" class="primary-btn mb-2" target="_blank"><span>了解更多</span></a> <a href="' . $gameList[$gameKey]['url'] . '" class="primary-btn" target="_blank"><span>' . $gameList[$gameKey]['gotoText'] . '</span></a></div></div></div></div>';
            }
            ?>
        </div>
    </section>
    <section class="story-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-1"></div>
                <div class="col-lg-7">
                    <div class="story-box">
                        <h4 class="text-uppercase mb-10"><i class="far fa-hand-point-right"></i> 現在就加入我們的群組</h4>
                        <p>加入「<?php echo $serverTitle; ?>」Discord 群組，一起玩遊戲、聽音樂、討論動漫與科技，隨時都可尋找遊戲夥伴，一同打遊戲！</p><br>
                        <a href="javascript:" class="primary-btn d-inline-flex align-items-center" onclick="joinDiscordGroup('CXxSFQx');"><span class="mr-10">加入 Discord 群組</span><span class="lnr lnr-arrow-right"></span></a>
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
                        <a href="https://blog.reh.tw/" target="_blank"><img src="https://api.reh.tw/images/gonetone/banners/banner_954x200.png" width="247" class="img-fluid d-block rounded" alt=""></a>
                    </div>
                    <div class="copy-right-text">Copyright &copy; <?php $set = '2018';
                        $datetime = date("Y", mktime(date('H') + 8, date('i'), date('s'), date('m'), date('d'), date('Y')));
                        if ($datetime == $set) {
                            echo $datetime;
                        } else {
                            echo $set . '-' . $datetime;
                        } ?> <a href="/"><?php echo $serverTitle; ?></a>. All rights reserved. <br>Developed by
                        <a href="https://www.facebook.com/GoneToneDY" target="_blank">張文相 (Zhang Wenxiang)</a>.
                    </div>
                    <div class="footer-social">
                        <a href="https://blog.reh.tw" target="_blank"><i class="fas fa-home"></i></a>
                        <a href="https://www.facebook.com/GoneToneDY" target="_blank"><i class="fab fa-facebook-square"></i></a>
                        <a href="https://twitter.com/TPGoneTone" target="_blank"><i class="fab fa-twitter-square"></i></a>
                        <a href="https://github.com/GoneTone" target="_blank"><i class="fab fa-github-square"></i></a>
                    </div>
                </div>
            </div>
        </footer>
    </section>
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
    function joinDiscordGroup(code) {
        const requestURL = "https://discord.gg/";
        window.open(requestURL + code, "_blank");
    }
</script>
</body>
</html>
