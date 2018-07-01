<?php
include_once("api/discordApi.php");

use GoneTone\DiscordApi;

$discordApi = new DiscordApi("434607247071641600");
$discordApi->fetch();

$server_title = $discordApi->getServerTitle();
$channel_list = $discordApi->getChannels();
$channel_count = $discordApi->getChannelCount();
$member_list = $discordApi->getMembers();
$member_count = $discordApi->getMemberCount();

//var_dump($discord->getRawData());
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
<html lang="zh-TW">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $server_title." | Discord 群組"; ?></title>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="https://discord.reh.tw/assets/images/icons/icon-16x16.png" sizes="16x16">
    <link rel="icon" href="https://discord.reh.tw/assets/images/icons/icon-32x32.png" sizes="32x32">
    <link rel="icon" href="https://discord.reh.tw/assets/images/icons/icon-64x64.png" sizes="64x64">
    <link rel="icon" href="https://discord.reh.tw/assets/images/icons/icon-128x128.png" sizes="128x128">
    <link rel="icon" href="https://discord.reh.tw/assets/images/icons/icon-192x192.png" sizes="192x192">
    <link rel="icon" href="https://discord.reh.tw/assets/images/icons/icon-256x256.png" sizes="256x256">
    <link rel="icon" href="https://discord.reh.tw/assets/images/icons/icon-512x512.png" sizes="512x512">
    <link rel="apple-touch-icon-precomposed" href="https://discord.reh.tw/assets/images/og-images/logo-256x256.png">
    <link rel="image_src" type="image/jpeg" href="https://discord.reh.tw/assets/images/og-images/logo-256x256.png">
    <meta name="author" content="張文相 Zhang Wenxiang">
    <meta name="description" content="加入「<?php echo $server_title; ?>」Discord 群組，尋找遊戲夥伴！">
	<meta property="description" content="加入「<?php echo $server_title; ?>」Discord 群組，尋找遊戲夥伴！">
	<meta name="msapplication-TileImage" content="https://discord.reh.tw/assets/images/og-images/logo-256x256.png">
    <meta property="fb:app_id" content="344099459299612">
    <meta property="article:author" content="https://www.facebook.com/GoneToneDY/">
	<meta property="og:site_name" content="旋風之音 GoneTone">
	<meta property="og:locale" content="zh_tw">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo $server_title." | Discord 群組"; ?>">
	<meta property="og:description" content="加入「<?php echo $server_title; ?>」Discord 群組，尋找遊戲夥伴！">
	<meta property="og:url" content="https://discord.reh.tw">
	<meta property="og:image" content="https://discord.reh.tw/assets/images/og-images/discord_banner.png">
	<meta property="og:image:width" content="1200">
	<meta property="og:image:height" content="630">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $server_title." | Discord 群組"; ?>">
	<meta name="twitter:description" content="加入「<?php echo $server_title; ?>」Discord 群組，尋找遊戲夥伴！">
	<meta name="twitter:image" content="https://discord.reh.tw/assets/images/og-images/discord_banner.png">
    <meta name="twitter:site" content="@TPGoneTone">
	<meta name="twitter:creator" content="@TPGoneTone">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
    <link href="assets/librarys/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/librarys/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/librarys/animate/animate.min.css" rel="stylesheet">
    <link href="assets/librarys/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="assets/librarys/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/librarys/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="assets/css/style.css?v=1.0.7" rel="stylesheet">
</head>

<body>
    <header id="header">
        <div class="container-fluid">
            <div id="logo" class="pull-left">
                <h1><a href="/"><img src="assets/images/icon.png" width="43" height="43"> Discord 群組</a></h1>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li><a href="https://blog.reh.tw/" target="_blank">網站</a></li>
                    <li><a href="https://www.facebook.com/GoneToneDY" target="_blank">Facebook</a></li>
                    <li><a href="https://twitter.com/TPGoneTone" target="_blank">Twitter</a></li>
                    <li><a href="https://www.youtube.com/c/GoneTone?sub_confirmation=1" target="_blank">YouTube</a></li>
                    <li><a href="https://github.com/GoneTone" target="_blank">GitHub</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section id="intro">
        <div class="intro-container">
            <div id="introCarousel" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators"></ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="carousel-background"><img src="assets/images/intro-carousel/pubg.jpg" alt="PLAYERUNKNOWN'S BATTLEGROUNDS"></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2><?php echo $server_title; ?></h2>
                                <h4><?php echo '目前有 <font color="#00ba49">'.$member_count.'</font> 人在線'; ?> <a class="btn btn-outline-success btn-sm" onclick="$('#discordOnlineMembers').modal();">線上名單</a> <a class="btn btn-outline-success btn-sm" onclick="$('#discordVoiceChannels').modal();">語音頻道</a></h4>
                                <p>絕地求生找不到人陪組隊，但又不想排路人？
                                    <br>沒關係，加入本群組，揪人一起吃雞！</p>
                                <a class="btn-get-started" onclick="joinDiscordGroup('CXxSFQx');" style="cursor: pointer;">加入 Discord 群組</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-background"><img src="assets/images/intro-carousel/minecraft.png" alt="Minecraft"></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2><?php echo $server_title; ?></h2>
                                <h4><?php echo '目前有 <font color="#00ba49">'.$member_count.'</font> 人在線'; ?> <a class="btn btn-outline-success btn-sm" onclick="$('#discordOnlineMembers').modal();">線上名單</a> <a class="btn btn-outline-success btn-sm" onclick="$('#discordVoiceChannels').modal();">語音頻道</a></h4>
                                <p>Minecraft 需要攻略？想玩伺服器？
                                    <br>加入本群組，一同 Minecraft 去！</p>
                                <a class="btn-get-started" onclick="joinDiscordGroup('CXxSFQx');" style="cursor: pointer;">加入 Discord 群組</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-background"><img src="assets/images/intro-carousel/kartrider.jpg" alt="跑跑卡丁車 (Kartrider)"></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2><?php echo $server_title; ?></h2>
                                <h4><?php echo '目前有 <font color="#00ba49">'.$member_count.'</font> 人在線'; ?> <a class="btn btn-outline-success btn-sm" onclick="$('#discordOnlineMembers').modal();">線上名單</a> <a class="btn btn-outline-success btn-sm" onclick="$('#discordVoiceChannels').modal();">語音頻道</a></h4>
                                <p>跑跑卡丁車技術太爛？沒人陪你玩？沒注意活動時間？
                                    <br>加入本群組，讓你不再錯過重要資訊！</p>
                                <a class="btn-get-started" onclick="joinDiscordGroup('CXxSFQx');" style="cursor: pointer;">加入 Discord 群組</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-background"><img src="assets/images/intro-carousel/gtav.jpg" alt="Grand Theft Auto V"></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2><?php echo $server_title; ?></h2>
                                <h4><?php echo '目前有 <font color="#00ba49">'.$member_count.'</font> 人在線'; ?> <a class="btn btn-outline-success btn-sm" onclick="$('#discordOnlineMembers').modal();">線上名單</a> <a class="btn btn-outline-success btn-sm" onclick="$('#discordVoiceChannels').modal();">語音頻道</a></h4>
                                <p>Grand Theft Auto V 花了錢買了遊戲，結果沒朋友而無法體驗多人？
                                    <br>加入本群組，組隊打差事吧！</p>
                                <a class="btn-get-started" onclick="joinDiscordGroup('CXxSFQx');" style="cursor: pointer;">加入 Discord 群組</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-background"><img src="assets/images/intro-carousel/the_crew_2.jpg" alt="飆酷車神2 TheCrew2"></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2><?php echo $server_title; ?></h2>
                                <h4><?php echo '目前有 <font color="#00ba49">'.$member_count.'</font> 人在線'; ?> <a class="btn btn-outline-success btn-sm" onclick="$('#discordOnlineMembers').modal();">線上名單</a> <a class="btn btn-outline-success btn-sm" onclick="$('#discordVoiceChannels').modal();">語音頻道</a></h4>
                                <p>飆酷車神2 沒朋友一起玩？
                                    <br>加入本群組，找夥伴去！</p>
                                <a class="btn-get-started" onclick="joinDiscordGroup('CXxSFQx');" style="cursor: pointer;">加入 Discord 群組</a>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
    <div class="modal fade" id="discordOnlineMembers" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo '在線成員名單 (<font color="#00ba49">'.$member_count.' 人在線</font>)'; ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th width="5%">#</th>
                                        <th width="47%">暱稱</th>
                                        <th width="48%">正在玩</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($member_list as $count => $member) {
                                        if ($member->bot === true) {
                                            $username = '<font color="#ff0000">【機器人】</font>'.$member->username;
                                        } else {
                                            $username = $member->username;
                                        }
                                        echo '<tr><td width="5%">'.($count + 1).'</td><td width="47%"><img src="'.$member->avatar_url.'" width="20" height="20"> '.$username.'</td><td width="48%">'.$member->game->name.'</td></tr>';
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">關閉</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="discordVoiceChannels" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo '語音頻道名單 (<font color="#00ba49">總共 '.$channel_count.' 個頻道</font>)'; ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table">
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
                                        echo '<tr><td width="5%">'.($count + 1).'</td><td width="47%">'.$channel->name.'</td><td width="48%">';
                                        foreach ($inChannel as $member) {
                                            echo '<img src="'.$member->avatar_url.'" width="20" height="20"> '.$member->username.'<br>';
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
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">關閉</button>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/librarys/jquery/jquery.min.js"></script>
    <script src="assets/librarys/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/librarys/superfish/superfish.min.js"></script>
    <script src="assets/librarys/wow/wow.min.js"></script>
    <script src="assets/librarys/touchSwipe/jquery.touchSwipe.min.js"></script>
    <script src="assets/js/main.js?v=1.0.4"></script>
    <script type="text/javascript">
    function joinDiscordGroup(code) {
        var requestURL = "https://discord.gg/";
        window.open(requestURL + code, "_blank");
    }
    </script>
</body>

</html>
