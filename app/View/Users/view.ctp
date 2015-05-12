<div>
<?php 
//foreach ($photo as $image) {
if($photo !=null){
	echo "<img src='".$this->webroot."files/user/image/".$photo['User']['image_dir']."/".$photo['User']['image']."' width='50%' height='50%'/>";
}
else{
	echo "Sorry";
}
//}

//echo "<img src='/ImageTrial/files/user/image/4/Asx6afNEuhSmhGVRR3Ivh91b6iudks38ffQiRVNgB333.jpg' />";
?>
</div>