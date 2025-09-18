<?php	
	$up = new upimg_class("../upload","../upload/thumb"); //：$up = new upimg();
    $up->autoThumb = false; // Optional
    $up->thumbWidth = 40; // Optional
    $up->thumbHeight = 40; // Optional
	$up->upload('goods_img');
	$goods_img=$up->imgPath;
	
	$up = new upimg_class("../upload","../upload/thumb"); //：$up = new upimg();
    $up->autoThumb = false; // Optional
    $up->thumbWidth = 400; // Optional
    $up->thumbHeight = 300; // Optional
	$up->upload('upfile1');
	$upfile1=$up->imgPath;
	
	$upq1 = new upimg_class("../upload","../upload/thumb"); //：$up = new upimg();
    $upq1->autoThumb = false; // Optional
    $upq1->thumbWidth = 40; // Optional
    $upq1->thumbHeight = 40; // Optional
	$upq1->upload('upfile2');
	$upfile2=$upq1->imgPath;
	
	$upq3 = new upimg_class("../upload","../upload/thumb"); //：$up = new upimg();
    $upq3->autoThumb = false; // Optional
    $upq3->thumbWidth = 40; // Optional
    $upq3->thumbHeight = 40; // Optional
	$upq3->upload('upfile3');
	$upfile3=$upq3->imgPath;
	
	$upq4 = new upimg_class("../upload","../upload/thumb"); //：$up = new upimg();
    $upq4->autoThumb = false; // Optional
    $upq4->thumbWidth = 40; // Optional
    $upq4->thumbHeight = 40; // Optional
	$upq4->upload('upfile4');
	$upfile4=$upq4->imgPath;
	
	$upq5 = new upimg_class("../upload","../upload/thumb"); //：$up = new upimg();
    $upq5->autoThumb = false; // Optional
    $upq5->thumbWidth = 40; // Optional
    $upq5->thumbHeight = 40; // Optional
	$upq5->upload('upfile5');
	$upfile5=$upq5->imgPath;
	
	$upq6 = new upimg_class("../upload","../upload/thumb"); //：$up = new upimg();
    $upq6->autoThumb = false; // Optional
    $upq6->thumbWidth = 40; // Optional
    $upq6->thumbHeight = 40; // Optional
	$upq6->upload('upfile6');
	$upfile6=$upq6->imgPath;
	
	$upq7 = new upimg_class("../upload","../upload/thumb"); //：$up = new upimg();
    $upq7->autoThumb = false; // Optional
    $upq7->thumbWidth = 40; // Optional
    $upq7->thumbHeight = 40; // Optional
	$upq7->upload('upfile7');
	$upfile7=$upq7->imgPath;
	
	$upq8 = new upimg_class("../upload","../upload/thumb"); //：$up = new upimg();
    $upq8->autoThumb = false; // Optional
    $upq8->thumbWidth = 40; // Optional
    $upq8->thumbHeight = 40; // Optional
	$upq8->upload('upfile8');
	$upfile8=$upq8->imgPath;
	
	$upq9 = new upimg_class("../upload","../upload/thumb"); //：$up = new upimg();
    $upq9->autoThumb = false; // Optional
    $upq9->thumbWidth = 40; // Optional
    $upq9->thumbHeight = 40; // Optional
	$upq9->upload('upfile9');
	$upfile9=$upq9->imgPath;
	
	$upq10 = new upimg_class("../upload","../upload/thumb"); //：$up = new upimg();
    $upq10->autoThumb = false; // Optional
    $upq10->thumbWidth = 40; // Optional
    $upq10->thumbHeight = 40; // Optional
	$upq10->upload('upfile10');
	$upfile10=$upq10->imgPath;
	
	$upq11 = new upimg_class("../upload","../upload/thumb"); //：$up = new upimg();
    $upq11->autoThumb = false; // Optional
    $upq11->thumbWidth = 40; // Optional
    $upq11->thumbHeight = 40; // Optional
	$upq11->upload('upfile11');
	$upfile11=$upq11->imgPath;
	 // <input />'s name property in html
	

	
    $up1 = new upimg_class("../upload","../upload/thumb"); //：$up = new upimg();
    $up1->autoThumb = false; // Optional
    $up1->thumbWidth = 40; // Optional
    $up1->thumbHeight = 40; // Optional
	$up1->upload('goods_img');// <input />'s name property in html
	$goods_img1=$up1->imgPath;
	
	$up2 = new upimg_class("../upload","../upload/thumb"); //：$up = new upimg();
    $up2->autoThumb = false; // Optional
    $up2->thumbWidth = 40; // Optional
    $up2->thumbHeight = 40; // Optional
	$up2->upload('upfil2');
	$upfil2=$up2->imgPath;
	
	$up3 = new upimg_class("../upload","../upload/thumb"); //：$up = new upimg();
    $up3->autoThumb = false; // Optional
    $up3->thumbWidth = 40; // Optional
    $up3->thumbHeight = 40; // Optional
	$up3->upload('upfil3');
	$upfil3=$up3->imgPath;
	
	$up4 = new upimg_class("../upload","../upload/thumb"); //：$up = new upimg();
    $up4->autoThumb = false; // Optional
    $up4->thumbWidth = 40; // Optional
    $up4->thumbHeight = 40; // Optional
	$up4->upload('upfil4');
	$upfil4=$up4->imgPath;
	
	$up5 = new upimg_class("../upload","../upload/thumb"); //：$up = new upimg();
    $up5->autoThumb = false; // Optional
    $up5->thumbWidth = 40; // Optional
    $up5->thumbHeight = 40; // Optional
	$up5->upload('upfil5');
	$upfil5=$up5->imgPath;
	
	$up6 = new upimg_class("../upload","../upload/thumb"); //：$up = new upimg();
    $up6->autoThumb = false; // Optional
    $up6->thumbWidth = 40; // Optional
    $up6->thumbHeight = 40; // Optional
	$up6->upload('upfil6');
	$upfil6=$up6->imgPath;
	
	$up7 = new upimg_class("../upload","../upload/thumb"); //：$up = new upimg();
    $up7->autoThumb = false; // Optional
    $up7->thumbWidth = 40; // Optional
    $up7->thumbHeight = 40; // Optional
	$up7->upload('upfil7');
	$upfil7=$up7->imgPath;

class upimg_class{
    public $uploadFolder = '../upload'; // Directory for storing images
    public $thumbFolder = '../upload/thumb'; // Thumbnail directory
    public $thumbWidth = ''; // Thumbnail width
    public $thumbHeight = ''; // Thumbnail height
    public $autoThumb = ''; // Whether to automatically generate thumbnails
    public $error = ''; // Error message
    public $imgPath = ''; // Path to the uploaded image after success
    public $thumbPath = ''; // Path to the thumbnail after success

    // Description: Initialize and create storage directories
    function __construct($uploadFolder = '../upload', $thumbFolder = '../upload/thumb'){
        $this->uploadFolder = $uploadFolder;
        $this->thumbFolder = $thumbFolder;
        $this->_mkdir();
    }

    // Description: Upload image, parameter is the name attribute value of <input />; 
    // Returns relative URL of image on success, FALSE and error message (in $this->error) on failure
    // bool/sting upload(string $html_tags_input_attrib_name);
    function upload($inputName){ // Upload operation, parameter is the name attribute of the input tag
        if ($this->error){ // If there's an error, return directly (e.g., from _mkdir)
            return FALSE;
        }
        if(!$_FILES[$inputName]["name"]){
            $this->error = 'No image uploaded';
            return FALSE;
        }
        if($_FILES[$inputName]["name"]){
            $isUpFile = $_FILES[$inputName]['tmp_name'];
            if (is_uploaded_file($isUpFile)){
                $imgInfo = $this->_getinfo($isUpFile);
                if (FALSE == $imgInfo){
                    return FALSE;
                }
                $extName = $imgInfo['type'];
                $microSenond = floor(microtime()*10000);// Get a millisecond level number, 4 digits
                $newFileName = $uploadFolder . '/' . date('YmdHis') . $microSenond . '.' . $extName ; // New name for the uploaded image
                $location = $this->uploadFolder . $newFileName;
                $result = move_uploaded_file($isUpFile, $location);
                if ($result){
                    if (TRUE == $this->autoThumb){ // Whether to generate thumbnail
                        $thumb = $this->thumb($location, $this->thumbWidth, $this->thumbHeight);
                        if (FALSE == $thumb){
                            return FALSE;
                        }
                    }
                    $this->imgPath = $location;
                    return $location;
                }else{
                    $this->error = 'Error moving temporary file';
                    return FALSE;
                }
            }else{
                $uploadError = $_FILES[$inputName]['error'];
                if (1 == $uploadError){ // File size exceeds upload_max_filesize in php.ini
                    $this->error = 'File too large, server refuses files larger than ' . ini_get('upload_max_filesize');
                    return FALSE;
                }elseif (3 == $uploadError){ // Partial upload
                    $this->error = 'Upload interrupted, please try again';
                    return FALSE;
                }elseif (4 == $uploadError){
                    $this->error = 'No file was uploaded';
                    return FALSE;
                }elseif (6 == $uploadError){
                    $this->error = 'Cannot find temporary folder, please contact your server administrator';
                    return FALSE;
                }elseif (7 == $uploadError){
                    $this->error = 'Failed to write file, please contact your server administrator';
                    return FALSE;
                }else{
                    if (0 != $uploadError){
                        $this->error = 'Unknown upload error, please contact your server administrator';
                        return FALSE;
                    }
                } // end if $uploadError
            } // end if is_uploaded_file else
        } // end if $_FILES[$inputName]["name"]
    }

    // Description: Get image information, parameter is the temporary file after upload, returns array on success, FALSE and error message on failure
    // array/bool _getinfo(string $upload_tmp_file)
    private function _getinfo($img){
        if (!file_exists($img)){
            $this->error = 'Cannot find image to get its information';
            return FALSE;
        }
        $tempFile = @fopen($img, "rb");
        $bin = @fread($tempFile, 2); //2 bytes only
        @fclose($tempFile);
        $strInfo = @unpack("C2chars", $bin);
        $typeCode = intval($strInfo['chars1'] . $strInfo['chars2']);
        $fileType = '';
        switch ($typeCode){ // 6677:bmp 255216:jpg 7173:gif 13780:png 7790:exe 8297:rar 8075:zip tar:109121 7z:55122 gz 31139
            case '255216':
                $fileType = 'jpg';
                break;
            case '7173':
                $fileType = 'gif';
                break;
            case '13780':
                $fileType = 'png';
                break;
            default:
                $fileType = 'unknown';
        }
        if ($fileType == 'png' || $fileType == 'gif' || $fileType == 'jpg'){
            $imageInfo = getimagesize($img);
            $imgInfo['size'] = $imageInfo['bits'];
            $imgInfo["type"] = $fileType;
            $imgInfo["width"] = $imageInfo[0];
            $imgInfo["height"] = $imageInfo[1];
            return $imgInfo;
        }else{ // 非图片类文件信息
            $this->error = '图片类型错误';
            return FALSE;
        }
    } // end _getinfo

    // Description: Generate thumbnail, with proportional scaling or stretching
    // bool/string thumb(string $uploaded_file, int $thumbWidth, int $thumbHeight, string $thumbTail);
    function thumb($img, $thumbWidth = 400, $thumbHeight = 300, $thumbTail = '_thumb'){
        $filename = $img; // Keep a name for the new thumbnail name
        $imgInfo = $this->_getinfo($img);
        if (FALSE == $imgInfo){
            return FALSE;
        }
        $imgType = $imgInfo['type'];
        switch ($imgType){ // Create an image and provide extension
            case 'gif' :
                $img = imagecreatefromgif($img);
                $extName = 'gif';
                break;
            case 'png' :
                $img = imagecreatefrompng($img);
                $extName = 'png';
                break;
            case "jpg" :
                $img = imagecreatefromjpeg($img);
                $extName = 'jpg';
                break;
            default : // If type is wrong, create a blank image
                $img = imagecreate($thumbWidth,$thumbHeight);
                imagecolorallocate($img,0x00,0x00,0x00);
                $extName = 'jpg';
        }
        // Image dimensions after scaling (stretch if smaller, scale down if larger)
        $imgWidth = $imgInfo['width'];
        $imgHeight = $imgInfo['height'];
        if ($imgHeight > $imgWidth){ // Portrait image
            $newHeight = $thumbHeight;
            $newWidth = ceil($imgWidth / ($imgHeight / $thumbHeight ));
        }else if($imgHeight < $imgWidth){ // Landscape image
            $newHeight = ceil($imgHeight / ($imgWidth / $thumbWidth ));
            $newWidth = $thumbWidth;
        }else if($imgHeight == $imgWidth){ // Square image
            $newHeight = $thumbWidth;
            $newWidth = $thumbWidth;
        } 
// The commented part is for proportional scaling

        $bgimg = imagecreatetruecolor($newWidth,$newHeight);
        $bg = imagecolorallocate($bgimg,0x00,0x00,0x00);
        imagefill($bgimg,0,0,$bg);
        $sampled = imagecopyresampled($bgimg,$img,0,0,0,0,$newWidth,$newHeight,$imgWidth,$imgHeight);
        if(!$sampled ){
            $this->error = 'Thumbnail generation failed';
            @unlink($this->uploadFolder . '/' . $filename); // Delete uploaded image
            return FALSE;
        }
        $filename = basename($filename);
        $newFileName = substr($filename, 0, strrpos($filename, ".")) . $thumbTail . '.' . $extName ; // New name
        $thumbPath = $this->thumbFolder . '/' . $newFileName;
        switch ($extName){
            case 'gif':
                $result = imagegif($bgimg, $thumbPath);
                break;
            case 'png':
                $result = imagepng($bgimg, $thumbPath);
                break;
            case 'jpg':
                $result = imagejpeg($bgimg, $thumbPath);
                break;
            default: // If type is wrong, create a blank image
                $result = imagejpeg($bgimg, $thumbPath);
        }
        if ($result){
            $this->thumbPath = $thumbPath;
            return $thumbPath;
        }else{
            $this->error = 'Thumbnail creation failed';
            @unlink($this->uploadFolder . '/' . $filename); // Delete uploaded image
            return FALSE;
        }
    } // end thumb

     // Create the directory for storing images
    private function _mkdir(){ // Create image upload directory and thumbnail directory
        if(!is_dir($this->uploadFolder)){
            $mkdirResutlt = @mkdir($this->uploadFolder);
            if (!$mkdirResutlt){
                $this->error = 'Failed to create directory for storing images';
                return FALSE;
            }
        }
        if(!is_dir($this->thumbFolder) && TRUE == $this->autoThumb){
            $mkdirResutlt = @mkdir($this->thumbFolder);
            if (!$mkdirResutlt){
                $this->error = 'Failed to create directory for storing thumbnails';
                return FALSE;
            }
        }
    }
}


 // The name attribute value of <input /> in HTML
	//echo($goods_img1);
	//echo str_replace("../","/",$goods_img1);
	//echo ($upfil2);
	//$upfil2= str_replace("upload","upload/thumb",(str_replace(".","_thumb.",(str_replace("../","/",$upfil2)))));//zhuanxiaotu
?>