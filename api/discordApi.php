<?php
namespace GoneTone;

class DiscordApi {
    public $serverId;
    public $data;
    public $channels;
    public $members;

    public function __construct($serverId) {
        $this->serverId = $serverId;
    }

    public function fetch() {
        $url = 'https://discordapp.com/api/servers/'.$this->serverId.'/widget.json';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        $this->data = json_decode(curl_exec($ch));
        curl_close($ch);
    }

    public function getServerTitle() {
        return $this->data->name;
    }

    public function getRawData() {
        return $this->data;
    }

    public function getChannels() {
        return $this->data->channels;
    }

    public function getChannelCount() {
        return count($this->data->channels);
    }

    public function getMembers() {
        return $this->data->members;
    }

    public function getMemberCount() {
        return count($this->data->members);
    }

    public function getMembersInChannel($id) {
        if ($id == null) {
            die('Server Id can not be null.');
        }

        $members = array_filter($this->getMembers(), function($member) use ($id) {
            if (!isset($member->channel_id)) {
                return false;
            }
            if ($member->channel_id != $id) {
                return false;
            }
            if (isset($member->bot)) {
                return false;
            }
            return true;
        });

        return $members;
    }
}
?>
