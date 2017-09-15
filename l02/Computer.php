<?php 
require_once 'DoDienTu.php';

class Computer extends DoDienTu{
	var $mauSac;
	var $hangSx;
	var $dongMay;
	var $cauHinh;
	var $kichThuoc;

	static function getCauHinh(){
		$model = new static();
		$model->cauHinh = get_class($model);
		var_dump($model);
	}

	function hienThi(){
		echo "Hien thi cau hinh";
	}

	function getHangSx(){

	}

	function setThongSo($thongSo){
		$this->cauHinh = $thongSo;
	}
}


 ?>