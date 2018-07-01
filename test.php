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

foreach ($channel_list as $channel) {
  $inChannel = $discordApi->getMembersInChannel($channel->id);
  echo '- '.$channel->name.'<br>';
  foreach($inChannel as $member) {
    echo '--- <img src="'.$member->avatar_url.'" width="20" height="20"> '.$member->username.'<br>';
  }
}
?>
