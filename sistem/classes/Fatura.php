<?php
class Fatura {
	protected $id; // int
	protected $tutar; // int
	protected $sonGun; // Date
	protected $odendi; // boolean
	function __construct ($id, $tutar, $sonGun, $odendi) // (int id, int tutar, Date sonGun, boolean odendi]
	{
		$this->id = $id;
		$this->tutar = $tutar;
		$this->sonGun = $sonGun;
		$this->odendi = $odendi;
	}
	public function getID ()
	{
		return $this->id;
	}
	public function setID($id)
	{
		$this->id = $id;
	}

	public function getTutar ()
	{

		return $this->tutar;
	}

	public function getSonGun ()
	{
		return $this->sonGun;
	}
	public function isOdendi ()
	{
		echo $this->odendi;
		//return $this->odendi;
	}
	public function setOdendi ($odendi) // [boolean odendi]
	{
		$this->odendi = $odendi ;
	}
}
/*$date = new DateTime();
 $date->setDate(2001, 11, 30);
 $borc = new Fatura(12,12,$date,True);
 echo "first id : ". $borc->getid()."<br />";
 $borc->setid(21); // setting id to 21
 echo "next id : " .$borc->getid()."<br />";
 echo $borc->getSonGun()->format('Y-m-d');*/
?>

