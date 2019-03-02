<?php
include_once("api/discordApi.php"); //Discord API

include_once("data/app-data-list.php"); //應用程式資料註冊清單
include_once("data/game-list.php"); //成員們比較常在玩的部分遊戲清單

use GoneTone\DiscordApi;

$serverId = "434607247071641600";
$ownerId = "297957463649550339";

$discordApi = new DiscordApi($serverId);
$discordApi->fetch();

$server_title = $discordApi->getServerTitle();
$channel_list = $discordApi->getChannels();
$channel_count = $discordApi->getChannelCount();
$member_list = $discordApi->getMembers();
$member_count = $discordApi->getMemberCount();

/* 不顯示語音頻道 ID 清單 */
$noDisplayChannelId = array(
    "551083299242770432",
    "466171798212313108",
    "551082957469646852",
    "466171871893651458",
    "551083224185438223"
);

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
        <link rel="stylesheet" href="assets/css/main.css?v=1.0.4">
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
                                <h2>成員們比較常在玩的部分遊戲</h2>
                                <p>我們群組內成員比較常玩的遊戲，可以尋找遊戲夥伴，下方只列出部分遊戲，未列出完整清單 (太多了</p>
                            </div>
                        </div>
                    </div>
                    <?php
                    foreach (array_keys($gameList) as $gameKey) {
                        echo '<div class="single-remark"><div class="row no-gutters"><div class="col-md-6"><a class="image-popup-fit-width" href="assets/images/game/'.$gameList[$gameKey]['imageFileName'].'"><div class="remark-thumb" style="background: url(assets/images/game/'.$gameList[$gameKey]['imageFileName'].');"></div></a></div><div class="col-md-6"><div class="remark-desc"><h4>'.$gameKey.'</h4><p>'.$gameList[$gameKey]['description'].'</p><a href="'.$gameList[$gameKey]['wikipediaUrl'].'" class="primary-btn mb-2" target="_blank"><span>了解更多</span></a> <a href="'.$gameList[$gameKey]['url'].'" class="primary-btn" target="_blank"><span>'.$gameList[$gameKey]['gotoText'].'</span></a></div></div></div></div>';
                    }
                    ?>
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
                                <br><p class="text-danger">* 群組創建人顯示為實心。</p>
                                <table class="table table-hover" id="table">
                                    <thead>
                                    <tr>
                                        <th class="align-middle" width="5%">#</th>
                                        <th class="align-middle" width="47%">用戶名 / 暱稱</th>
                                        <th class="align-middle" width="48%">正在玩 / 正在使用</th>
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
                                            $name = "【機器人】".$name;
                                            $btnColor = "secondary";
                                            echo '<tr><td class="align-middle" width="5%">'.($count + 1).'</td><td class="align-middle" width="47%" style="word-break: break-all;"><button type="button" class="btn btn-outline-'.$btnColor.' btn-sm my-1" onclick="displayUserName(this, \''.$member->username.'#'.$member->discriminator.'\');" onblur="displayNickName(this, \''.$name.'\');"><img src="'.$member->avatar_url.'" width="20" height="20"> '.$name.'</button></td><td class="align-middle" width="48%" style="word-break: break-all;">'.$member->game->name.'</td></tr>';
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

                                            $appName = $member->game->name;
                                            if (in_array($appName, array_keys($appDataList))) {
                                                foreach (array_keys($appDataList) as $appDataKey) {
                                                    if ($appDataKey === $appName) {
                                                        if (isset($appDataList[$appDataKey]['iconFileName'])) {
                                                            if (isset($appDataList[$appDataKey]['description'])) {
                                                                $appDescription = $appDataList[$appDataKey]['description'];
                                                            } else {
                                                                $appDescription = "暫無資料。";
                                                            }
                                                            $card = '<a href="'.$appDataList[$appDataKey]['url'].'" target="_blank"><div class="card mt-2"><img src="assets/images/app-icons/'.$appDataList[$appDataKey]['iconFileName'].'" width="256" class="card-img-top" alt="'.$appDataKey.' - Icon"><div class="card-body"><h5 class="card-title mb-0 text-primary">'.$appDataKey.'</h5><small class="card-subtitle text-muted">'.$appDataList[$appDataKey]['url'].'</small><p class="card-text mt-3 text-dark">'.$appDescription.'</p></div></div></a>';
                                                        } else {
                                                            $card = '<a href="'.$appDataList[$appDataKey]['url'].'" target="_blank"><div class="card mt-2"><div class="card-body"><h5 class="card-title mb-0 text-primary">'.$appDataKey.'</h5><small class="card-subtitle text-muted">'.$appDataList[$appDataKey]['url'].'</small></div></div></a>';
                                                        }
                                                        $appName = preg_replace("/(?<![#>\".\/])".preg_quote($appDataKey, "/")."/i", "<a data-toggle=\"collapse\" href=\"#key-number-".$count."\" aria-expanded=\"false\" aria-controls=\"key-number-".$count."\"><i class=\"fa fa-external-link\"></i> $0</a><div class=\"collapse multi-collapse\" id=\"key-number-".$count."\" data-parent=\"#table\">".$card."</div>", $appName);
                                                    }
                                                }
                                            } else {
                                                if (isset($appName)) {
                                                    $card = '<a href="javascript:;" data-dismiss="modal" onclick="setTimeout(function() {$(\'#appDataList\').modal();}, 500);"><div class="card mt-2"><div class="card-body"><h5 class="card-title mb-0 text-primary">'.$appName.'</h5><p class="card-text mt-2 text-dark">此遊戲/應用程式未註冊在我們的清單，無法取得網址。<br><br>如果您確定這是遊戲或應用程式，可以將此訊息截圖，並傳至群組標註創建者要求新增。</p><br><p class="text-danger mb-0">* 點擊此訊息可查看已註冊之遊戲或應用程式資料！</p></div></div></a>';
                                                    $appName = preg_replace("/(?<![#>\".\/])".preg_quote($appName, "/")."/i", "<a class=\"text-danger\" data-toggle=\"collapse\" href=\"#key-number-".$count."\" aria-expanded=\"false\" aria-controls=\"key-number-".$count."\"><i class=\"fa fa-exclamation-circle text-danger\"></i> $0</a><div class=\"collapse multi-collapse\" id=\"key-number-".$count."\" data-parent=\"#table\">".$card."</div>", $appName);
                                                }
                                            }

                                            if ($member->id === $ownerId) {
                                                echo '<tr><td class="align-middle" width="5%">'.($count + 1).'</td><td class="align-middle" width="47%" style="word-break: break-all;"><button type="button" class="btn btn-'.$btnColor.' btn-sm my-1" onclick="displayUserName(this, \''.$member->username.'#'.$member->discriminator.'\');" onblur="displayNickName(this, \''.$name.'\');"><img src="'.$member->avatar_url.'" width="20" height="20"> '.$name.'</button></td><td class="align-middle" width="48%" style="word-break: break-all;">'.$appName.'</td></tr>';
                                            } else {
                                                echo '<tr><td class="align-middle" width="5%">'.($count + 1).'</td><td class="align-middle" width="47%" style="word-break: break-all;"><button type="button" class="btn btn-outline-'.$btnColor.' btn-sm my-1" onclick="displayUserName(this, \''.$member->username.'#'.$member->discriminator.'\');" onblur="displayNickName(this, \''.$name.'\');"><img src="'.$member->avatar_url.'" width="20" height="20"> '.$name.'</button></td><td class="align-middle" width="48%" style="word-break: break-all;">'.$appName.'</td></tr>';
                                            }
                                        }
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="javascript:;" class="genric-btn danger-border circle" data-dismiss="modal" onclick="setTimeout(function() {$('#appDataList').modal();}, 500);">已註冊資料清單</a>
                        <a href="javascript:;" class="genric-btn success-border circle" data-dismiss="modal">關閉</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="discordVoiceChannels" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><?php echo '語音頻道名單 (<font color="#00ba49">總共 '.($channel_count - count($noDisplayChannelId)).' 個頻道</font>)'; ?></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-outline-success btn-sm my-1">線上</button> <button type="button" class="btn btn-outline-warning btn-sm my-1">閒置</button> <button type="button" class="btn btn-outline-danger btn-sm my-1">請勿打擾</button> <button type="button" class="btn btn-outline-secondary btn-sm my-1">機器人</button>
                                <br><p class="text-danger">* 群組創建人顯示為實心。</p>
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th class="align-middle" width="50%">語音頻道名稱</th>
                                        <th class="align-middle" width="50%">頻道內成員</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach ($channel_list as $count => $channel) {
                                        if (!in_array($channel->id, $noDisplayChannelId)) {
                                            $inChannel = $discordApi->getMembersInChannel($channel->id);
                                            echo '<tr><td class="align-middle" width="50%" style="word-break: break-all;">'.$channel->name.'</td><td class="align-middle" width="50%" style="word-break: break-all;">';
                                            foreach ($inChannel as $member) {
                                                if (isset($member->nick)) {
                                                    $name = $member->nick;
                                                } else {
                                                    $name = $member->username;
                                                }
                                                if ($member->bot === true) {
                                                    $name = "【機器人】".$name;
                                                    $btnColor = "secondary";
                                                    echo '<button type="button" class="btn btn-outline-'.$btnColor.' btn-sm mx-1 my-1" onclick="displayUserName(this, \''.$member->username.'#'.$member->discriminator.'\');" onblur="displayNickName(this, \''.$name.'\');"><img src="'.$member->avatar_url.'" width="20" height="20"> '.$name.'</button>';
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

                                                    if ($member->id === $ownerId) {
                                                        //$name = "【群組創建人】".$name;
                                                        echo '<button type="button" class="btn btn-'.$btnColor.' btn-sm mx-1 my-1" onclick="displayUserName(this, \''.$member->username.'#'.$member->discriminator.'\');" onblur="displayNickName(this, \''.$name.'\');"><img src="'.$member->avatar_url.'" width="20" height="20"> '.$name.'</button>';
                                                    } else {
                                                        echo '<button type="button" class="btn btn-outline-'.$btnColor.' btn-sm mx-1 my-1" onclick="displayUserName(this, \''.$member->username.'#'.$member->discriminator.'\');" onblur="displayNickName(this, \''.$name.'\');"><img src="'.$member->avatar_url.'" width="20" height="20"> '.$name.'</button>';
                                                    }
                                                }
                                            }
                                            echo '</td></tr>';
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
        <div class="modal fade" id="appDataList" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><?php echo '已註冊之遊戲或應用程式資料 (<font color="#00ba49">總共 '.count($appDataList).' 筆資料</font>)'; ?></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <?php
                                foreach (array_keys($appDataList) as $appDataKey) {
                                    if (isset($appDataList[$appDataKey]['iconFileName'])) {
                                        if (isset($appDataList[$appDataKey]['description'])) {
                                            $appDescription = $appDataList[$appDataKey]['description'];
                                        } else {
                                            $appDescription = "暫無資料。";
                                        }
                                        echo '<div class="list-group list-group-flush"><a href="'.$appDataList[$appDataKey]['url'].'" target="_blank" class="list-group-item list-group-item-action"><div class="media"><img src="assets/images/app-icons/'.$appDataList[$appDataKey]['iconFileName'].'" width="64" class="align-self-center mr-3" alt="'.$appDataKey.' - Icon"><div class="media-body"><h5 class="mt-0 text-primary" style="word-break: break-all;">'.$appDataKey.'</h5><small class="text-muted" style="word-break: break-all;">'.$appDataList[$appDataKey]['url'].'</small><p class="mb-1 mt-3" style="word-break: break-all;">'.$appDescription.'</p></div></div></a></div>';
                                    } else {
                                        echo '<div class="list-group list-group-flush"><a href="'.$appDataList[$appDataKey]['url'].'" target="_blank" class="list-group-item list-group-item-action"><div class="d-flex w-100 justify-content-between"><h5 class="mb-1 text-primary" style="word-break: break-all;">'.$appDataKey.'</h5></div><small class="text-muted" style="word-break: break-all;">'.$appDataList[$appDataKey]['url'].'</small></a></div>';
                                    }
                                }
                                ?>
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
