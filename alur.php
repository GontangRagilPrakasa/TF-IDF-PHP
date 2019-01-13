<?php 
if(!isset($_GET['rute'])){
	include 'koleksi.php';
}else{
	switch ($_GET['rute']) {
		case 'home':
			include 'home.php';
			break;
		case 'koleksi':
			include 'koleksi.php';
			break;
		case 'hitung':
			include 'hitung.php';
			break;
		case 'cache':
			include 'cache.php';
			break;
		case 'default':
			include 'default.php';
		break;

		// default:
		// 	include 'default.php';
		// 	break;
	}
}
?>