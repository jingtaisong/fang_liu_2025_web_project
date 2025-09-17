<?php
$action = isset($_GET['action']) ? $_GET['action'] : "";
$typeArr = array("jpg", "png", "gif", "jpeg", "zip", "mp4"); //允许上传文件格式

$path = "../upload/Drface/"; //上传路径

if ($action == 'upload') {
	
    if (isset($_POST)) {
        $name = $_FILES['file']['name'];
        $size = $_FILES['file']['size'];
        $name_tmp = $_FILES['file']['tmp_name'];
        if (empty($name)) {
            echo json_encode(array("error" => "您还未选择图片"));
            exit;
        }
        $type = strtolower(substr(strrchr($name, '.'), 1)); //获取文件类型
        if (!in_array($type, $typeArr)) {
            echo json_encode(array("error" => "请上传jpg,png或gif类型的图片！"));
            exit;
        }
        if ($size > (50000 * 1024)) { //上传大小
            echo json_encode(array("error" => "图片大小已超过50000KB！"));
            exit;
        }

        $pic_name = time() . rand(10000, 99999) . "." . $type; //图片名称
        $pic_url = $path . $pic_name; //上传后图片路径+名称
        if (move_uploaded_file($name_tmp, $pic_url)) { //临时文件转移到目标文件夹
            echo json_encode(array("error" => "0", "src" => $pic_url, "name" => $pic_name));
        } else {
            echo json_encode(array("error" => "上传有误，请检查服务器配置！"));
        }
    }
} elseif ($action == 'getPicUrl') {
    $pic_url = $_POST['pic_url'];

    $type = strtolower(substr(strrchr($pic_url, '.'), 1)); //获取文件类型
    if (!in_array($type, $typeArr)) {
        echo json_encode(array("error" => "请上传jpg,png或gif类型的图片！"));
        exit;
    }
    if (@fopen($pic_url, 'r')) {
        $pic_name = $path.time() . rand(10000, 99999) . "." . $type; //图片名称

        file_put_contents($pic_name, file_get_contents($pic_url));
        echo json_encode(array("error" => "0", "src" => $pic_name));
    } else {
        echo json_encode(array("error" => "文件不存在"));
        exit;
    }
}
?>