<?php

define("NULL_PIC", base64_decode('R0lGODlhAQABAIAAAAAAAAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=='));
define("DEFAULT_BG", 'EEEEEE');

class Utility_Image
{

	public function __construct()
	{
		if(isset($_SESSION['install']['image']) and !$_SESSION['install']['image']) {
			self::install();
		}
	}

	public static function install()
	{
		//create datebase conection
		$db = new DB();

		//table group
		$sql = "CREATE TABLE IF NOT EXISTS tbl_image (
				  imageId int(10) unsigned NOT NULL auto_increment,
				  name varchar(255) collate utf8_persian_ci NOT NULL,
				  description varchar(255) collate utf8_persian_ci default NULL,
				  size int(10) unsigned default NULL,
				  status enum('inactive','active','deleted') collate utf8_persian_ci NOT NULL default 'inactive',
				  createDate timestamp NULL default NULL,
				  modifiedDate timestamp NULL default NULL on update CURRENT_TIMESTAMP,
				  PRIMARY KEY  (imageId),
				  KEY imageTypeId (imageTypeId)
				) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=1 ;

				CREATE TABLE IF NOT EXISTS tbl_imagetype (
				  imageTypeId tinyint(2) unsigned NOT NULL auto_increment,
				  name varchar(255) collate utf8_persian_ci default NULL,
				  description varchar(255) collate utf8_persian_ci default NULL,
				  width int(5) unsigned NOT NULL,
				  height int(5) unsigned NOT NULL,
				  basePath varchar(255) collate utf8_persian_ci default NULL,
				  status enum('inactive','active','deleted') collate utf8_persian_ci NOT NULL default 'inactive',
				  createDate timestamp NULL default NULL,
				  modifiedDate timestamp NULL default NULL on update CURRENT_TIMESTAMP,
				  PRIMARY KEY  (imageTypeId)
				) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=1 ;";
		if($db->multiQuery($sql)) {
			$_SESSION['install']['image'] = 1;
		}else {
			$_SESSION['install']['image'] = 0;
		}
	}

	private function getAll($params='*', $order='createDate DESC')
	{
		//create datebase conection
		$db = new DB();

		$sql = '';
		$imageRow = array();
		if(is_array($params))
			$params = implode(',', $params);

		$sql = "SELECT $params
				FROM tbl_image
				WHERE status='active'
				ORDER BY $order";
		$imageRow = $db->getAll($sql);
		if($imageRow and is_array($imageRow))
			return $imageRow;
	}

	private function getById($imageId, $params='*', $order='createDate')
	{
		//create datebase conection
		$db = new DB();

		$sql = '';
		$imageRow = array();
		
		if(is_array($params))
			$params = implode(',', $params);

		$sql = "SELECT $params
				FROM tbl_image
				WHERE status='active' AND
					  imageId='$imageId'";
		$imageRow = $db->getRow($sql);
		if($imageRow and is_array($imageRow))
			return $imageRow;
	}
	public function getTypeInfo($typeId)
	{
		//create datebase conection
		$db = new DB();
		
		$sql = '';
		$imageType = array();
		
		$sql = "SELECT *
				FROM tbl_imagetype
				WHERE status='active' AND
					  imageTypeId='$typeId'";
		$imageType = $db->getRow($sql);

		return $imageType;
	}

	public function view( $imageId,
						  $imageType=1,
						  $dir = './application/_upload/',
						  $width = 100,
						  $height = 100,
						  $quality = 100)
	{
		$imageInfo = $this->getById($imageId);
		$file_name_src = $dir.$imageInfo['name'];

		$typeParams = $this->getTypeInfo($imageType);
		$width  = $typeParams['width'];
		$height = $typeParams['height'];

		if(!file_exists($file_name_src) or empty($imageInfo))
		{
			self::showNull($width, $height);
		}

		@list($realw, $realh, $type) = getimagesize($file_name_src);
		header("Content-Type: ".image_type_to_mime_type($type));

		switch ($type) {
			case 1:       //GIF
				$src = imagecreatefromgif ($file_name_src);
				$dest = imagecreate ($width, $height);
				imagecopyresampled ($dest, $src, 0, 0, 0, 0, $width, $height, $realw, $realh);
				imagecolortransparent ($dest, 1);
				imagegif ($dest);
				break;
			case 2:       //JPEG
				$src = imagecreatefromjpeg ($file_name_src);
				$dest= imagecreatetruecolor ($width, $height);
				imagecopyresampled ($dest, $src, 0, 0, 0, 0, $width, $height, $realw, $realh);
				imagejpeg ($dest, '', 100);
				break;
			case 3:       //PNG
				$src = imagecreatefrompng ($file_name_src);
				$dest= imagecreatetruecolor ($width, $height);
				imagecopyresampled ($dest, $src, 0, 0, 0, 0, $width, $height, $realw, $realh);
				imagepng ($dest);
				break;
			default:		//Others
				$src = imagecreatefromjpeg ($file_name_src);
				$dest= imagecreatetruecolor ($width, $height);
				imagecopyresampled ($dest, $src, 0, 0, 0, 0, $width, $height, $realw, $realh);
				imagejpeg ($dest, '', $quality);
		}
		imagedestroy($dest);
		imagedestroy($src);
		return true;
	}

public static function showNull($w=100, $h=100)
{
	header ('Content-Type: image/gif');
	if(GD_LOADED){
		$im = imagecreate ($w, $h);
		list($r, $g, $b) =  preg_split('/:/', chunk_split(DEFAULT_BG, 2, ':'), -1, PREG_SPLIT_NO_EMPTY); 
		$bg = imagecolorallocate ($im, hexdec($r), hexdec($g), hexdec($b));
		imagefill($im, 0, 0, $bg);
		imagegif($im);
	} else {
		echo NULL_PIC;
	}
	die();
}
	//ajax upload file
	public function ajaxUpload()
	{	
		header('Content-Type: text/html; charset=utf-8');
		session_start();

		$error = "";
		$msg = "";
		$fileElementName = 'img';

		if(!empty($_FILES[$fileElementName]['error']))
		{ 
			switch($_FILES[$fileElementName]['error'])
			{
				case '1':
				case '2':
					$error = ' حجم فایل بارگذاری شده فراتر از ماکزیم حجم درنظر گرفته شده است';
					break;
				case '3':
				case '6':
				case '7':
					$error = 'فایل شما بارگذاری نشد لطفا دوباره امتحان کنید';
					break;
				case '4':
					$error = ' لطفا يك فايل را انتخاب كنيد';
					break;
				case '8':
					$error = ' پسوند عكس شما بايد jpg يا png يا gif باشد ';
					break;
				case '999':
				default:
					$error = 'فایل شما بارگذاری نشد لطفا دوباره امتحان کنید';
			}
		}elseif(empty($_FILES['img']['tmp_name']) || $_FILES['img']['tmp_name'] == 'none')
		{
			$error = 'No file was uploaded..';
		}else
		{
				$ads = Loader::load("AdsEntryManager");
				
				$uploaddir = 'application/upload/';
				
				$extension =  substr($_FILES['img']['name'], -3);
				$extension = strtolower($extension);
				
				$radVal = strval(rand(1000000, 9999999));
				$imgName = strval('i'.$radVal.'.'.$extension);
				
				$uploadfile = $uploaddir . basename($imgName);
				$size = filesize($_FILES['img']['tmp_name']);	
				

				if($extension == 'gif' or $extension == 'jpg' or $extension	== 'png' or $extension == 'jpeg'){

					if($size < 100000){
						if(file_exists($uploadfile))
							unlink($uploadfile);
		
						if(isset($_SESSION['imgId'])){
							$oldName = $ads->getImageName($_SESSION['imgId']);
							$filePath = 'application/upload/'.$oldName;
								if(file_exists($filePath))
									@unlink($filePath);
						}

						if(move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile)){
	
							if($_GET['adstype'] == 3)
								$typeId = 2;
							else
								$typeId = 1;
							if(isset($_SESSION['imgId'])){
								$ads->updateImage($_SESSION['imgId'], $imgName , $size, $typeId);
							}else {
								
								$imgId = $ads->insertImage($imgName, $size, $typeId);
								if($imgId){
									$_SESSION['imgId'] = $imgId;
								}
							}
							
							$msg = 'تصویر با موفقیت ثبت شد';
							echo $msg;
						}
	
						//for security reason, we force to remove all uploaded file
						@unlink($_FILES['img']);
						die();	
					}else {
						$error = 'حجم عكس شما نبايد بيشتر از 100 كيلوبايت باشد. لطفا عكس ديگري را جايگزين كنيد ';
					}
					
				}else {
					$error = 'نوع عكس شما بايد jpg يا png يا gif باشد';
				}
		}		
		echo $error;
	
	}

}
?>
