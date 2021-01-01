<?php
class Model {

   function loaddulieu($url){
		$get = file_get_contents($url);
		$ketqua = json_decode($get, true);
		return $ketqua;
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