<?php
session_start();
$CONFIG['token'] = session_id();
ini_set('max_execution_time', 300);
set_time_limit(300);
date_default_timezone_set('Asia/Kolkata');
$current_date_time = date('Y-m-d h:i:s');
/*-------Some Basic Details (Global Variables) ---------*/
if (isset($_SESSION['user_id'])) {
    $CONFIG['user_id'] = $_SESSION['user_id'];
}
$CONFIG['full_name'] = "Gautam College Of Education";
$CONFIG['inst_name'] = "Gautam College Of Education";
$CONFIG['inst_info'] = "B.Ed. College";
$CONFIG['inst_address1'] = "NH 31, Bhaganbigha,PO-Sohsarai, Bihar Sharif,";
$CONFIG['inst_address2'] = "Nalanda, Bihar-803118";
$CONFIG['inst_contact'] = "+91 7763806312";
$CONFIG['inst_contact2'] = "+91 9262994118 ";
$CONFIG['inst_email'] = "info@gautamcollegeofeducation.in";
$CONFIG['inst_logo'] = "images/logo/logo.png";
$CONFIG['white_logo'] = "images/logo/logo_white.png";
$CONFIG['banner'] = "";
$CONFIG['inst_url'] = "https://gautamcollegeofeducation.in/";
$CONFIG['inst_type'] = "College";
$CONFIG['sender_id'] = "OFFEDU";
$CONFIG['noreply_email'] = "noreply@gautamcollegeofeducation.in";
// $CONFIG['auth_key_sms'] = "188195A981rNIY8n1Y5a338b1c";
$CONFIG['base_url'] = 'https://gautamcollegeofeducation.in/';
//$CONFIG['api_key'] = 'a22cee2e1392a9fe0a122f6378415554'; //APP API AMBA
$CONFIG['app_start_date'] = '2022-03-14';
$CONFIG['app_link'] = '';


$CONFIG['YTAPI_key'] = ''; // YOUTUBE API 
/*---------Social Link ----------*/

$CONFIG['facebook'] = 'https://facebook.com/';
$CONFIG['twitter'] = 'https://twitter.com/';
$CONFIG['linkedin'] = 'https://linkedin.com';
$CONFIG['youtube'] = 'https://youtube.com';
$CONFIG['pinterest'] = 'https://pinterest.com';
$CONFIG['instagram'] = 'https://instagram.com/';
$CONFIG['telegram'] = 'https://t.me/';


$CONFIG['yt_live'] = '';
$CONFIG['channelId'] = ''; // Youtube Channel id

// $CONFIG['app_name'] = 'gautamcollege';
$CONFIG['dev_company'] = "OfferPlant Technologies PVT LTD";
$CONFIG['dev_by'] = "OfferPlant";
$CONFIG['dev_url'] = "https://offerplant.com";
$CONFIG['dev_email'] = "ask@offerplant.com";
$CONFIG['dev_contact'] = "+91 94314 26600";
// $CONFIG['start_date'] = "2021-12-11";


/* Live Configuration */
// $CONFIG['host_name'] = 'localhost';
// $CONFIG['db_user'] = 'root';
// $CONFIG['db_password'] = '';
// $CONFIG['db_name'] = 'hlife_db2';

// $CONFIG['month'] = array('April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December', 'January', 'February', 'March');


/*-------End of Basic Details ---------*/
extract($CONFIG);
