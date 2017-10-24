<?php  

class penjumlahan{
	public $bil1 , $bil2;

	function set_nilai($bilangan1 , $bilangan2){
		$this->bil1 = $bilangan1;
		$this->bil2 = $bilangan2;
	}

	function get_nilaitam(){
		return $this->bil1 + $this->bil2; 
	}
	function get_nilaikur(){
		return $this->bil1 - $this->bil2; 
	}
	function get_nilaikal(){
		return $this->bil1 * $this->bil2; 
	}
	function get_nilaibag(){
		return $this->bil1 / $this->bil2; 
	}

}

$penjumlahan1 = new penjumlahan;
$penjumlahan1->set_nilai(21,3);
echo "=======================================".'<br>';
echo "Perhitungan Bilangan 21 Dengan Bilangan 3".'<br>';
echo "=======================================".'<br>';
echo "Hasil penjumlahan : " .$penjumlahan1->get_nilaitam().'<br>';
echo "Hasil pengurangan : " .$penjumlahan1->get_nilaikur().'<br>';
echo "Hasil perkalian   : " .$penjumlahan1->get_nilaikal().'<br>';
echo "Hasil pembagian   : " .$penjumlahan1->get_nilaibag();

?>