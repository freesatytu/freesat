<?php
class EngelliNumara{
	protected $telefonNo; //String
	function __construct ($telefonNo) // [String telefonNo]
	{
		$me = new self();
		$this->telefonNo = $telefonNo;
	}
	public function getTelefonNo()
	{
		return $this->telefonNo;
	}
}
?>