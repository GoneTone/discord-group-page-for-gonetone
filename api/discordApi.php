<?php

namespace GoneTone;

class DiscordApi {
    public $serverId;
    public $gonetoneBotApiKey;

    public $discordApiData;
    public $gonetoneBotApiData;

    public $channels;
    public $members;

    public function __construct($serverId, $gonetoneBotApiKey) {
        $this->serverId = $serverId;
        $this->gonetoneBotApiKey = $gonetoneBotApiKey;
    }

    public function fetch() {
        $discordApiUrl = "https://discordapp.com/api/servers/" . $this->serverId . "/widget.json";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $discordApiUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        $this->discordApiData = json_decode(curl_exec($ch));
        curl_close($ch);

        $gonetoneBotApiUrl = "https://gonetonebot.reh.tw:7097/api/discord/server/" . $this->serverId . "/members/" . $this->gonetoneBotApiKey . "/";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $gonetoneBotApiUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        $this->gonetoneBotApiData = json_decode(curl_exec($ch));
        curl_close($ch);
    }

    /**
     * 取得 Discord Api Raw Data
     * @return string Discord Api Raw Data
     */
    public function getDiscordApiRawData() {
        if (!isset($this->discordApiData)) {
            return "Unknown";
        }

        return $this->discordApiData;
    }

    /**
     * 取得 Gonetone Bot Api Raw Data
     * @return string Gonetone Bot Api Raw Data
     */
    public function getGonetoneBotApiRawData() {
        if (!isset($this->gonetoneBotApiData)) {
            return "Unknown";
        }

        return $this->gonetoneBotApiData;
    }

    /**
     * 取得群組名稱
     * @return string 群組名稱
     */
    public function getServerTitle() {
        if (!isset($this->discordApiData->name)) {
            return "旋風之音 GoneTone - 哈拉群";
        }

        return $this->discordApiData->name;
    }

    /**
     * 取得所有頻道
     * @return array|string 頻道陣列
     */
    public function getChannels() {
        if (!isset($this->discordApiData)) {
            return "Unknown";
        }

        return $this->discordApiData->channels;
    }

    /**
     * 取得所有數量
     * @return int|string 頻道總數
     */
    public function getChannelCount() {
        if (!isset($this->discordApiData->channels)) {
            return "Unknown";
        }

        return count($this->discordApiData->channels);
    }

    /*
    public function getMembers() {
        if (!isset($this->discordApiData->members)) {
            return "Unknown";
        }

        return $this->discordApiData->members;
    }

    public function getMemberCount() {
        if (!isset($this->discordApiData->members)) {
            return "Unknown";
        }

        return count($this->discordApiData->members);
    }
    */

    /**
     * 取得群組所有成員
     * @return array|string 群組所有成員陣列
     */
    public function getAllMembers() {
        if (!isset($this->gonetoneBotApiData->contents->member->list)) {
            return "Unknown";
        }

        return $this->gonetoneBotApiData->contents->member->list;
    }

    /**
     * 取得群組所有成員 (不包含機器人)
     * @return array|string 群組所有成員陣列 (不包含機器人)
     */
    public function getAllMembersNoBot() {
        if (!isset($this->gonetoneBotApiData->contents->member->list)) {
            return "Unknown";
        }

        $allMembersNoBot = array();
        foreach ($this->gonetoneBotApiData->contents->member->list as $member) {
            if (!$member->isBot) {
                array_push($allMembersNoBot, $member);
            }
        }

        return $allMembersNoBot;
    }

    /**
     * 取得群組所有機器人
     * @return array|string 群組所有機器人陣列
     */
    public function getAllBots() {
        if (!isset($this->gonetoneBotApiData->contents->member->list)) {
            return "Unknown";
        }

        $allBots = array();
        foreach ($this->gonetoneBotApiData->contents->member->list as $member) {
            if ($member->isBot) {
                array_push($allBots, $member);
            }
        }

        return $allBots;
    }

    /**
     * 取得群組線上成員
     * @return array|string 群組線上成員陣列
     */
    public function getOnlineMembers() {
        if (!isset($this->gonetoneBotApiData->contents->member->list)) {
            return "Unknown";
        }

        $onlineMembers = array();
        foreach ($this->gonetoneBotApiData->contents->member->list as $member) {
            if ($member->status == "online") {
                array_push($onlineMembers, $member);
            }
        }

        return $onlineMembers;
    }

    /**
     * 取得群組閒置成員
     * @return array|string 群組閒置成員陣列
     */
    public function getIdleMembers() {
        if (!isset($this->gonetoneBotApiData->contents->member->list)) {
            return "Unknown";
        }

        $idleMembers = array();
        foreach ($this->gonetoneBotApiData->contents->member->list as $member) {
            if ($member->status == "idle") {
                array_push($idleMembers, $member);
            }
        }

        return $idleMembers;
    }

    /**
     * 取得群組請勿打擾成員
     * @return array|string 群組請勿打擾成員陣列
     */
    public function getDndMembers() {
        if (!isset($this->gonetoneBotApiData->contents->member->list)) {
            return "Unknown";
        }

        $dndMembers = array();
        foreach ($this->gonetoneBotApiData->contents->member->list as $member) {
            if ($member->status == "dnd") {
                array_push($dndMembers, $member);
            }
        }

        return $dndMembers;
    }

    /**
     * 取得群組離線成員
     * @return array|string 群組離線成員陣列
     */
    public function getOfflineMembers() {
        if (!isset($this->gonetoneBotApiData->contents->member->list)) {
            return "Unknown";
        }

        $offlineMembers = array();
        foreach ($this->gonetoneBotApiData->contents->member->list as $member) {
            if ($member->status == "offline") {
                array_push($offlineMembers, $member);
            }
        }

        return $offlineMembers;
    }

    /**
     * 取得群組遊戲中成員
     * @return array|string 群組遊戲中成員陣列
     */
    public function getGamePlayingMembers() {
        if (!isset($this->gonetoneBotApiData->contents->member->list)) {
            return "Unknown";
        }

        $gamePlayingMembers = array();
        foreach ($this->gonetoneBotApiData->contents->member->list as $member) {
            if ($member->game->playing) {
                array_push($gamePlayingMembers, $member);
            }
        }

        return $gamePlayingMembers;
    }

    /**
     * 取得所有成員數量
     * @return int|string 群組所有成員總數
     */
    public function getAllMemberCount() {
        if (!isset($this->gonetoneBotApiData->contents->member->count->member) || !isset($this->gonetoneBotApiData->contents->member->count->bot)) {
            return "Unknown";
        }

        return ($this->gonetoneBotApiData->contents->member->count->member + $this->gonetoneBotApiData->contents->member->count->bot);
    }

    /**
     * 取得所有成員數量 (不包含機器人)
     * @return int|string 群組所有成員總數 (不包含機器人)
     */
    public function getAllMemberNoBotCount() {
        if (!isset($this->gonetoneBotApiData->contents->member->count->member)) {
            return "Unknown";
        }

        return $this->gonetoneBotApiData->contents->member->count->member;
    }

    /**
     * 取得所有機器人數量
     * @return int|string 群組所有機器人總數
     */
    public function getAllBotCount() {
        if (!isset($this->gonetoneBotApiData->contents->member->count->bot)) {
            return "Unknown";
        }

        return $this->gonetoneBotApiData->contents->member->count->bot;
    }

    /**
     * 取得線上成員數量
     * @return int|string 群組線上成員總數
     */
    public function getOnlineMemberCount() {
        if (!isset($this->gonetoneBotApiData->contents->member->count->status->online)) {
            return "Unknown";
        }

        return $this->gonetoneBotApiData->contents->member->count->status->online;
    }

    /**
     * 取得閒置成員數量
     * @return int|string 群組閒置成員總數
     */
    public function getIdleMemberCount() {
        if (!isset($this->gonetoneBotApiData->contents->member->count->status->idle)) {
            return "Unknown";
        }

        return $this->gonetoneBotApiData->contents->member->count->status->idle;
    }

    /**
     * 取得請勿打擾成員數量
     * @return int|string 群組請勿打擾成員總數
     */
    public function getDndMemberCount() {
        if (!isset($this->gonetoneBotApiData->contents->member->count->status->dnd)) {
            return "Unknown";
        }

        return $this->gonetoneBotApiData->contents->member->count->status->dnd;
    }

    /**
     * 取得離線成員數量
     * @return int|string 群組離線成員總數
     */
    public function getOfflineMemberCount() {
        if (!isset($this->gonetoneBotApiData->contents->member->count->status->offline)) {
            return "Unknown";
        }

        return $this->gonetoneBotApiData->contents->member->count->status->offline;
    }

    /**
     * 取得遊戲中成員數量
     * @return int|string 群組遊戲中成員總數
     */
    public function getGamePlayingMemberCount() {
        if (!isset($this->gonetoneBotApiData->contents->member->count->status->game->playing)) {
            return "Unknown";
        }

        return $this->gonetoneBotApiData->contents->member->count->status->game->playing;
    }

    /**
     * 取得在頻道內的成員
     * @param int $id 頻道 ID
     *
     * @return array|string 在頻道內的成員陣列
     */
    public function getMembersInChannel($id) {
        if ($id == null) {
            die('Server Id can not be null.');
        }

        if (!isset($this->discordApiData->members)) {
            return "Unknown";
        }

        $members = array_filter($this->discordApiData->members, function ($member) use ($id) {
            if (!isset($member->channel_id)) {
                return false;
            }
            if ($member->channel_id != $id) {
                return false;
            }
            /*
            if (isset($member->bot)) {
                return false;
            }
            */
            return true;
        });

        return $members;
    }
}
