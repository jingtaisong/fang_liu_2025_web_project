<?php
/**
 * Upload attachments and videos
 * User: Jinqn
 * Date: 14-04-09
 * Time: 10:17
 */
include "Uploader.class.php";

/* Upload configuration */
$base64 = "upload";
switch (htmlspecialchars($_GET['action'])) {
    case 'uploadimage':
        $config = array(
            "pathFormat" => $CONFIG['imagePathFormat'],
            "maxSize" => $CONFIG['imageMaxSize'],
            "allowFiles" => $CONFIG['imageAllowFiles']
        );
        $fieldName = $CONFIG['imageFieldName'];
        break;
    case 'uploadscrawl':
        $config = array(
            "pathFormat" => $CONFIG['scrawlPathFormat'],
            "maxSize" => $CONFIG['scrawlMaxSize'],
            "allowFiles" => $CONFIG['scrawlAllowFiles'],
            "oriName" => "scrawl.png"
        );
        $fieldName = $CONFIG['scrawlFieldName'];
        $base64 = "base64";
        break;
    case 'uploadvideo':
        $config = array(
            "pathFormat" => $CONFIG['videoPathFormat'],
            "maxSize" => $CONFIG['videoMaxSize'],
            "allowFiles" => $CONFIG['videoAllowFiles']
        );
        $fieldName = $CONFIG['videoFieldName'];
        break;
    case 'uploadfile':
    default:
        $config = array(
            "pathFormat" => $CONFIG['filePathFormat'],
            "maxSize" => $CONFIG['fileMaxSize'],
            "allowFiles" => $CONFIG['fileAllowFiles']
        );
        $fieldName = $CONFIG['fileFieldName'];
        break;
}

/* Generate upload instance and complete upload */
$up = new Uploader($fieldName, $config, $base64);

/**
 * Get the parameters corresponding to the uploaded file, array structure
 * array(
 *     "state" => "",          // Upload status, must return "SUCCESS" when upload is successful
 *     "url" => "",            // Returned address
 *     "title" => "",          // New file name
 *     "original" => "",       // Original file name
 *     "type" => ""            // File type
 *     "size" => "",           // File size
 * )
 */

/* Return data */
return json_encode($up->getFileInfo());
