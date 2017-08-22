<?php

namespace common\libs;
use common\models\Product;
/**
* 
*/
class Cart 
{
	
	public function AddCart($id)
	{
		$data = new Product;
		$product = $data->getProductById($id);
	}
}