<?php

namespace GoneTone;

class DiscordApi
{
    public $serverId;
    public $gonetoneBotApiKey;

    public $discordApiData;
    public $gonetoneBotApiData;
    public $gonetoneBotApiNoMembersListData;

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

        $gonetoneBotApiNoMembersListUrl = "https://gonetonebot.reh.tw:7097/api/discord/server/" . $this->serverId . "/members/" . $this->gonetoneBotApiKey . "/?list=false";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $gonetoneBotApiNoMembersListUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        $this->gonetoneBotApiNoMembersListData = json_decode(curl_exec($ch));
        curl_close($ch);
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
     * 取得所有成員數量
     * @return int|string 群組所有成員總數
     */
    public function getAllMemberCount() {
        if (!isset($this->gonetoneBotApiNoMembersListData->contents->member->count->member) || !isset($this->gonetoneBotApiNoMembersListData->contents->member->count->bot)) {
            return "Unknown";
        }

        return ($this->gonetoneBotApiNoMembersListData->contents->member->count->member + $this->gonetoneBotApiNoMembersListData->contents->member->count->bot);
    }

    /**
     * 取得所有成員數量 (不包含機器人)
     * @return int|string 群組所有成員總數 (不包含機器人)
     */
    public function getAllMemberNoBotCount() {
        if (!isset($this->gonetoneBotApiNoMembersListData->contents->member->count->member)) {
            return "Unknown";
        }

        return $this->gonetoneBotApiNoMembersListData->contents->member->count->member;
    }

    /**
     * 取得所有機器人數量
     * @return int|string 群組所有機器人總數
     */
    public function getAllBotCount() {
        if (!isset($this->gonetoneBotApiNoMembersListData->contents->member->count->bot)) {
            return "Unknown";
        }

        return $this->gonetoneBotApiNoMembersListData->contents->member->count->bot;
    }

    /**
     * 取得線上成員數量
     * @return int|string 群組線上成員總數
     */
    public function getOnlineMemberCount() {
        if (!isset($this->gonetoneBotApiNoMembersListData->contents->member->count->status->online)) {
            return "Unknown";
        }

        return $this->gonetoneBotApiNoMembersListData->contents->member->count->status->online;
    }

    /**
     * 取得閒置成員數量
     * @return int|string 群組閒置成員總數
     */
    public function getIdleMemberCount() {
        if (!isset($this->gonetoneBotApiNoMembersListData->contents->member->count->status->idle)) {
            return "Unknown";
        }

        return $this->gonetoneBotApiNoMembersListData->contents->member->count->status->idle;
    }

    /**
     * 取得請勿打擾成員數量
     * @return int|string 群組請勿打擾成員總數
     */
    public function getDndMemberCount() {
        if (!isset($this->gonetoneBotApiNoMembersListData->contents->member->count->status->dnd)) {
            return "Unknown";
        }

        return $this->gonetoneBotApiNoMembersListData->contents->member->count->status->dnd;
    }

    /**
     * 取得離線成員數量
     * @return int|string 群組離線成員總數
     */
    public function getOfflineMemberCount() {
        if (!isset($this->gonetoneBotApiNoMembersListData->contents->member->count->status->offline)) {
            return "Unknown";
        }

        return $this->gonetoneBotApiNoMembersListData->contents->member->count->status->offline;
    }

    /**
     * 取得遊戲中成員數量
     * @return int|string 群組遊戲中成員總數
     */
    public function getPlayingMemberCount() {
        if (!isset($this->gonetoneBotApiNoMembersListData->contents->member->count->status->activitie->playing)) {
            return "Unknown";
        }

        return $this->gonetoneBotApiNoMembersListData->contents->member->count->status->activitie->playing;
    }

    /**
     * 取得直播中成員數量
     * @return int|string 群組直播中成員總數
     */
    public function getStreamingMemberCount() {
        if (!isset($this->gonetoneBotApiNoMembersListData->contents->member->count->status->activitie->streaming)) {
            return "Unknown";
        }

        return $this->gonetoneBotApiNoMembersListData->contents->member->count->status->activitie->streaming;
    }

    /**
     * 取得觀看中成員數量
     * @return int|string 群組觀看中成員總數
     */
    public function getWatchingMemberCount() {
        if (!isset($this->gonetoneBotApiNoMembersListData->contents->member->count->status->activitie->watching)) {
            return "Unknown";
        }

        return $this->gonetoneBotApiNoMembersListData->contents->member->count->status->activitie->watching;
    }

    /**
     * 取得聆聽中成員數量
     * @return int|string 群組觀看中成員總數
     */
    public function getListeningMemberCount() {
        if (!isset($this->gonetoneBotApiNoMembersListData->contents->member->count->status->activitie->listening)) {
            return "Unknown";
        }

        return $this->gonetoneBotApiNoMembersListData->contents->member->count->status->activitie->listening;
    }
}
