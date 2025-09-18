<?php
//header('Access-Control-Allow-Origin: http://www.baidu.com'); //Allow cross-domain access from http://www.baidu.com
//header('Access-Control-Allow-Headers: X-Requested-With,X_Requested_With'); //Set allowed cross-domain headers
date_default_timezone_set("Asia/Chongqing");
error_reporting(E_ERROR);
header("Content-Type: text/html; charset=utf-8");

$CONFIG = json_decode(preg_replace("/\/\*[\s\S]+?\*\//", "", file_get_contents("config.json")), true);
$action = $_GET['action'];

switch ($action) {
    case 'config':
        $result =  json_encode($CONFIG);
        break;

    /* Upload image */
    case 'uploadimage':
    /* Upload scrawl */
    case 'uploadscrawl':
    /* Upload video */
    case 'uploadvideo':
    /* Upload file */
    case 'uploadfile':
        $result = include("action_upload.php");
        break;

    /* List images */
    case 'listimage':
        $result = include("action_list.php");
        break;
    /* List files */
    case 'listfile':
        $result = include("action_list.php");
        break;

    /* Capture remote files */
    case 'catchimage':
        $result = include("action_crawler.php");
        break;

    default:
        $result = json_encode(array(
            'state'=> 'Request URL error'
        ));
        break;
}

/* Output result */
if (isset($_GET["callback"])) {
    if (preg_match("/^[\w_]+$/", $_GET["callback"])) {
        echo htmlspecialchars($_GET["callback"]) . '(' . $result . ')';
    } else {
        echo json_encode(array(
            'state'=> 'callback parameter is invalid'
        ));
    }
} else {
    echo $result;
}