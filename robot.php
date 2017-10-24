<?php
class robot{
	public $suara;
	public $berat;
	public $warna;

	public function __construct($s,$b,$w)
	{
		$this->suara=$s;
		$this->berat=$b;
		$this->warna=$w;
	}
	public function get_suara()
	{
		return $this->suara;
	}
	public function get_berat()
	{
		return $this->berat;
	}
	public function get_warna()
	{
		return $this->warna;
	}
}
?>