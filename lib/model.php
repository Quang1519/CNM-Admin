<?php
class Model {

   function loaddulieu($url){

   	// if(is_readable($url)) {
   	$get = file_get_contents($url);
		// if($get === false){
		// 	return false;
		// } else {
		$ketqua = json_decode($get, true);
		return $ketqua;
		// }	
	// } else {
	// 	return false;
	// }
   		
		
	}

	function themxoasua($url){
		$p = $this->loaddulieu($url);
		foreach($p as  $val){
		 if ($val==true) {
		 	return 1;
		 }else{
		 	return 0;
		 }
		}
	}
}
?>