<?php
class TelegramBot {
    private $apiUrl;

    public function __construct() {
        $this->apiUrl = "https://api.telegram.org/bot" . TELEGRAM_BOT_TOKEN . "/";
    }

    public function sendMessage($message) {
        $url = $this->apiUrl . "sendMessage";

        $data = [
            'chat_id' => TELEGRAM_BOT_CHATID,
            'text' => $message,
            'parse_mode' => 'HTML'
        ];

        $options = [
            'http' => [
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data),
            ],
        ];

        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);

        if ($result === FALSE) {
            return false;
        }

        return true;
    }
}
?>