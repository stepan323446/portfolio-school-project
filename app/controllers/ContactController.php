<?php
namespace App\Controllers;
require_once CONTROLLER_PATH . '/BaseController.php';

use TelegramBot;


class ContactController extends BaseController
{
    public function index()
    {   
        global $current_page;

        if(isset($_POST["name"]) && $_POST["email"] && $_POST["content"]) {
            require_once INCLUDES_PATH . "/telegram_api.php";

            $message_name = $_POST["name"];
            $message_email = $_POST["email"];
            $message_content = $_POST["content"];

            $sent_status = 'not_sent';

            $telegram = new TelegramBot();
            $is_sent = $telegram->sendMessage(<<<EOT
<b>Name:</b>
$message_name

<b>Email:</b>
$message_email

<b>Content:</b>
$message_content
EOT);
            if($is_sent)
                $sent_status = 'sent';
            else
                $sent_status = 'error';
        }

        $current_page = "contacts";

        require VIEW_PATH . '/contact.php';
    }
}

?>