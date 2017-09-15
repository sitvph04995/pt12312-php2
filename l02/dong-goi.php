<?php 

class ParentModel{
	public $pub;
	protected $prot;
	private $priv;
	
	public function setPriv($value=null)
	{
		$this->priv = $value;
	}
}
/**
* 
*/
class ChildModel extends ParentModel
{
	
	public function setProt($value=null)
	{
		$this->prot = $value;
	}

	public function getProt(){
		return $this->prot;
	}

	
}

$test = new ChildModel();
$test->pub = 1;
$test->setPriv('chung nq dep trai');
// echo $test->getProt();
var_dump($test);




 ?>