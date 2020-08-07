<?php 
include 'koneksi.php';
$maxsize = 1024 * 200; // maksimal 200 KB (1KB = 1024 Byte)
$file_size = $_FILES['file']['size'];
$size = $_FILES['file']['size'];
//diambil dari nama inputan di form untuk mengambil nama file
$nama_file 	= $_FILES['file']['name'];
//diambil dari nama inputan di form untuk mengambil temp file 
$file 		= $_FILES['file']['tmp_name'];
$valid_extension = array('jpg','jpeg','png','gif','bmp');
$pecah = explode(".", $nama_file);
$extension = $pecah[1];
if( $file_size <= $maxsize){ //jika yang di upload lebih kecil
	if(in_array($extension, $valid_extension)){ //jika type file sudah sesuai
		//perintah mengupload gambar
	    $upload = move_uploaded_file($file, $nama_file);
	    if ($upload) {
	    	//insert ke database
	    	$db->query("INSERT INTO upload SET nama_file='$nama_file'");
			echo "Success";
		}else{
			echo "Failed";
		}
	}else{
	    echo "Maaf... file diizinkan hanya jpg,jpeg,png,gif,bmp";
	}
}else{
	 echo "Maaf... file yang ada pilih terlalu besar, maksimal 200 KB..!";
}
?>