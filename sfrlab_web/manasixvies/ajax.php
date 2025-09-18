<?php
$action = isset($_GET['action']) ? $_GET['action'] : "";
$typeArr = array("jpg", "png", "gif", "jpeg", "zip", "mp4"); //Allowed file type

$path = "../upload/Drface/"; //The path to uploaded the file

if ($action == 'upload') {
	
    if (isset($_POST)) {
        $name = $_FILES['file']['name'];
        $size = $_FILES['file']['size'];
        $name_tmp = $_FILES['file']['tmp_name'];
        if (empty($name)) {
            echo json_encode(array("error" => "You did not choose a file to upload!"));
            exit;
        }
        $type = strtolower(substr(strrchr($name, '.'), 1)); //Allowed file type
        if (!in_array($type, $typeArr)) {
            echo json_encode(array("error" => "Please upload a jpg, png, or gif image!"));
            exit;
        }
        if ($size > (50000 * 1024)) { //Upload size
            echo json_encode(array("error" => "The image size exceeds 50000KB!"));
            exit;
        }

        $pic_name = time() . rand(10000, 99999) . "." . $type; //Image name
        $pic_url = $path . $pic_name; //Uploaded image path + name
        if (move_uploaded_file($name_tmp, $pic_url)) { //Move temporary file to target folder
            echo json_encode(array("error" => "0", "src" => $pic_url, "name" => $pic_name));
        } else {
            echo json_encode(array("error" => "Upload error, please check server configuration!"));
        }
    }
} elseif ($action == 'getPicUrl') {
    $pic_url = $_POST['pic_url'];

    $type = strtolower(substr(strrchr($pic_url, '.'), 1)); //Get file type
    if (!in_array($type, $typeArr)) {
        echo json_encode(array("error" => "Please upload a jpg, png, or gif image!"));
        exit;
    }
    if (@fopen($pic_url, 'r')) {
        $pic_name = $path.time() . rand(10000, 99999) . "." . $type; //Image name

        file_put_contents($pic_name, file_get_contents($pic_url));
        echo json_encode(array("error" => "0", "src" => $pic_name));
    } else {
        echo json_encode(array("error" => "File does not exist"));
        exit;
    }
}
?>