<?php
// don't edit directly!
// copy this file to /your-app-base-directory/custom/secrets.php

$bv->config->mail = $bv->config = $bv = new class{};

// DB credentials
$bv->config->db_type = 'sqlite'; // possible options: mysql, postgres, sqlite
// for sqlite:
$bv->config->db_path = 'custom/db.txt';
// for mysql or postgres:
$bv->config->db_name = 'dataverse';
$bv->config->dbcreds['host'] = 'localhost';
$bv->config->dbcreds['user'] = "DB_USER";
$bv->config->dbcreds['pass'] = "DB_PASS";
$bv->config->dbcreds['port'] = 3306;


$bv->config->app_name = 'Dataverse';
$bv->config->home_url = 'https://localhost'; // must be HTTPS, no trailing slash

// for notification emails
$bv->config->mail->from = 'Support <support@my_dataverse.org>';
$bv->config->mail->subject_default = 'Support Message';
$bv->config->mail->mailgun_key = 'key-xyz';
$bv->config->mail->domain = "sandbox-xyz.mailgun.org";

$bv->config->admin_token = '123changeme';

$bv->config->bot = [
//    'hipchat_urls' => [
//        'YOUR-INTEGRATION-URL-1',
//        'YOUR-INTEGRATION-URL-2',
//    ],
//    'nexmo_key' => 'YOUR-NEXMO-APP-KEY',
//    'nexmo_secret' => 'YOUR-NEXMO-APP-SECRET',
//    'microsoft_bot_handle' => 'YOUR-MICROSOFT-BOT-HANDLE',
//    'microsoft_app_id' => 'YOUR-MICROSOFT-APP-ID',
//    'microsoft_app_key' => 'YOUR-MICROSOFT-APP-KEY',
//    'slack_token' => 'YOUR-SLACK-TOKEN-HERE',
//    'telegram_token' => 'YOUR-TELEGRAM-TOKEN-HERE',
//    'facebook_token' => 'YOUR-FACEBOOK-TOKEN-HERE',
//    'facebook_app_secret' => 'YOUR-FACEBOOK-APP-SECRET-HERE',
//    'wechat_app_id' => 'YOUR-WECHAT-APP-ID',
//    'wechat_app_key' => 'YOUR-WECHAT-APP-KEY',
];

$bv->config->bot_verify = 'SECRET_VERIFY_PHRASE';
$bv->config->bot_url = 'bot'; // path
