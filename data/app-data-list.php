<?php
/* 應用程式資料註冊清單 */
$appDataList = array(
    "Minecraft" => array(
        "url" => "https://minecraft.net/"
    ),
    "Apex Legends" => array(
        "url" => "https://www.ea.com/games/apex-legends"
    ),
    "Grand Theft Auto V" => array(
        "url" => "https://www.rockstargames.com/V/"
    ),
    "PLAYERUNKNOWN'S BATTLEGROUNDS" => array(
        "url" => "https://www.pubg.com/"
    ),
    "Euro Truck Simulator 2" => array(
        "url" => "https://www.eurotrucksimulator2.com/"
    ),
    "League of Legends" => array(
        "url" => "https://lol.garena.tw/"
    ),
    "Rainbow Six Siege" => array(
        "url" => "https://rainbow6.ubi.com/siege/home/"
    ),
    "Tom Clancy's Rainbow Six Siege" => array(
        "url" => "https://rainbow6.ubi.com/siege/home/"
    ),
    "Overwatch" => array(
        "url" => "https://playoverwatch.com"
    ),
    "osu!" => array(
        "url" => "https://osu.ppy.sh"
    ),
    "Nox APP Player" => array(
        "url" => "https://bignox.com"
    ),
    "Battlefield 4" => array(
        "url" => "https://www.battlefield.com/games/battlefield-4"
    ),
    "World of Warships" => array(
        "url" => "https://worldofwarships.asia/"
    ),
    "Lineage II" => array(
        "url" => "http://lineage2.plaync.com.tw/"
    ),
    "Spotify" => array(
        "url" => "https://www.spotify.com/"
    ),
    "Warframe" => array(
        "url" => "https://www.warframe.com/"
    ),
    "Robocraft" => array(
        "url" => "https://robocraftgame.com/"
    ),
    "Trove" => array(
        "url" => "https://www.trionworlds.com/trove/"
    ),
    "Escape from Tarkov" => array(
        "url" => "https://www.escapefromtarkov.com/"
    ),
    "Destiny 2" => array(
        "url" => "https://www.destinythegame.com/"
    ),
    "Google Chrome" => array(
        "url" => "https://www.google.com/chrome/"
    ),
    "Black Squad" => array(
        "url" => "http://www.blacksquad.com/"
    ),
    "Anthem™" => array(
        "url" => "https://www.ea.com/games/anthem"
    ),
    "ROBLOX" => array(
        "url" => "https://www.roblox.com/"
    ),
    "PhpStorm" => array(
        "url" => "https://www.jetbrains.com/phpstorm/"
    ),
    "Rust" => array(
        "url" => "https://rust.facepunch.com/"
    ),
    "Brawlhalla" => array(
        "url" => "https://www.brawlhalla.com/"
    ),
    "Counter-Strike: Global Offensive" => array(
        "url" => "https://blog.counter-strike.net/"
    ),
    "Bright Memory - Episode 1" => array(
        "url" => "https://store.steampowered.com/app/955050/Bright_Memory__Episode_1/"
    ),
    "Wallpaper Engine" => array(
        "url" => "https://store.steampowered.com/app/431960/Wallpaper_Engine/"
    ),
    "Mountain" => array(
        "url" => "http://mountain-game.com/"
    ),
    "BioShock Infinite" => array(
        "url" => "https://bioshockinfinite.ghoststorygames.com/the-game"
    ),
    "Assassin's Creed IV Black Flag" => array(
        "url" => "https://www.ubisoft.com/en-us/game/assassins-creed-iv-black-flag/"
    ),
    "Black Desert Online" => array(
        "url" => "https://www.blackdesert.com.tw/"
    ),
    "Rocket League" => array(
        "url" => "https://www.rocketleague.com/"
    ),
    "Devotion" => array(
        "url" => "https://redcandlegames.com/devotion/"
    )
);
ksort($appDataList, SORT_STRING | SORT_FLAG_CASE); //依據 key 重新排序陣列 (不區分大小寫)
