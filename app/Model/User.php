<?php
	class User extends AppModel{
		public $actsAs = array('Upload.Upload'=>array('image'=>array('fields'=>array('dir' => 'image_dir'))));
	}
	//'thumbnailSizes'=>array('xvga'=>'1024x768','vga'=>'640x480','thumb'=>'80x80'
?>