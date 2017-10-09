<?php 
namespace App\Model;

use App\Model\BaseModel;
use App\Model\Product;
/**
* 
*/
class User extends BaseModel
{
	public $tableName = 'users';
	
	public function getOwnProduct(){
		$products = Product::where(['created_by', $this->id])->get();
		return $products;
	}
}

 ?>