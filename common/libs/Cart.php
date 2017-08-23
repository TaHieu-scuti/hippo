<?php

namespace common\libs;
use common\models\Product;
use Yii;

/**
* 
*/
class Cart 
{
	
	public function AddCart($id, $number)
	{
		$data = new Product;
		$product = $data->getProductById($id);

		if (!Yii::$app->session['cart']) {
			$cart[$id] = [
				'name' => $product['name'],
				'price' => $product['price'],
				'image' => $product['public_image'],
				'product_cnt' => $number,
				'name' => $product['name'],
				'name' => $product['name'],
				'name' => $product['name'],
				'name' => $product['name'],
			];
		} else {
			$cart = Yii::$app->session['cart'];
			if (array_key_exists($id, $cart)) {
				$cart[$id] = [
					'name' => $product['name'],
					'price' => $product['price'],
					'image' => $product['public_image'],
					'product_cnt' => (int)$cart[$id]['product_cnt'] + $number,
					'name' => $product['name'],
					'name' => $product['name'],
					'name' => $product['name'],
					'name' => $product['name'],
				];
			} else {
				$cart[$id] = [
					'name' => $product['name'],
					'price' => $product['price'],
					'image' => $product['public_image'],
					'product_cnt' => $number,
					'name' => $product['name'],
					'name' => $product['name'],
					'name' => $product['name'],
					'name' => $product['name'],
				];
			}
		}
		Yii::$app->session['cart'] = $cart;
	}

	function updateCart($id, $number)
	{
		if (Yii::$app->session['cart']) {
			$cart = Yii::$app->session['cart'];
			if (array_key_exists($id, $cart)) {
				if ($number) {
					$cart[$id] = [
						'name' => $cart[$id]['name'],
						'price' => $cart[$id]['price'],
						'image' => $cart[$id]['image'],
						'product_cnt' => $number,
						'name' => $cart[$id]['name'],
						'name' => $cart[$id]['name'],
						'name' => $cart[$id]['name'],
						'name' => $cart[$id]['name'],
					];
				} else {
					unset($cart[$id]);
				}
			}
				
			Yii::$app->session['cart'] = $cart;
		}
	}

	function deleteCart($arrayId)
	{
		if (Yii::$app->session['cart']) {
			$cart = Yii::$app->session['cart'];
			
			foreach ($arrayId as $key => $id) {

				if (array_key_exists($id, $cart)) {
					unset($cart[$id]);
				}
			}
			Yii::$app->session['cart'] = $cart;
		}
	}

	function convert_number_to_words($number) {
        $hyphen      = ' ';
        $conjunction = '  ';
        $separator   = ' ';
        $negative    = 'âm ';
        $decimal     = ' phẩy ';
        $dictionary  = array(
	        0                   => 'không',
	        1                   => 'một',
	        2                   => 'hai',
	        3                   => 'ba',
	        4                   => 'bốn',
	        5                   => 'năm',
	        6                   => 'sáu',
	        7                   => 'bảy',
	        8                   => 'tám',
	        9                   => 'chín',
	        10                  => 'mười',
	        11                  => 'mười một',
	        12                  => 'mười hai',
	        13                  => 'mười ba',
	        14                  => 'mười bốn',
	        15                  => 'mười năm',
	        16                  => 'mười sáu',
	        17                  => 'mười bảy',
	        18                  => 'mười tám',
	        19                  => 'mười chín',
	        20                  => 'hai mươi',
	        30                  => 'ba mươi',
	        40                  => 'bốn mươi',
	        50                  => 'năm mươi',
	        60                  => 'sáu mươi',
	        70                  => 'bảy mươi',
	        80                  => 'tám mươi',
	        90                  => 'chín mươi',
	        100                 => 'trăm',
	        1000                => 'nghìn',
	        1000000             => 'triệu',
	        1000000000          => 'tỷ',
	        1000000000000       => 'nghìn tỷ',
	        1000000000000000    => 'nghìn triệu triệu',
	        1000000000000000000 => 'tỷ tỷ'
        );
	    if (!is_numeric($number)) {
	        return false;
	    }
	    if (($number >= 0 && (int) $number < 0) || (int) $number < 0 - PHP_INT_MAX) {
	        // overflow
	        trigger_error(
		        'convert_number_to_words only accepts numbers between -' . PHP_INT_MAX . ' and ' . PHP_INT_MAX,
		        E_USER_WARNING
	        );
	        return false;
	    }
	    if ($number < 0) {
	        return $negative . convert_number_to_words(abs($number));
	    }
	    $string = $fraction = null;
	        if (strpos($number, '.') !== false) {
	        list($number, $fraction) = explode('.', $number);
	    }
	    switch (true) {
		    case $number < 21:
		        $string = $dictionary[$number];
		    break;
		    case $number < 100:
		        $tens   = ((int) ($number / 10)) * 10;
		        $units  = $number % 10;
		        $string = $dictionary[$tens];
		        if ($units) {
		            $string .= $hyphen . $dictionary[$units];
		        }
		    break;
		    case $number < 1000:
		        $hundreds  = $number / 100;
		        $remainder = $number % 100;
		        $string = $dictionary[$hundreds] . ' ' . $dictionary[100];
		        if ($remainder) {
		            $string .= $conjunction . $this->convert_number_to_words($remainder);
		        }
		    break;
		    default:
		        $baseUnit = pow(1000, floor(log($number, 1000)));
		        $numBaseUnits = (int) ($number / $baseUnit);
		        $remainder = $number % $baseUnit;
		        $string = $this->convert_number_to_words($numBaseUnits) . ' ' . $dictionary[$baseUnit];
		        if ($remainder) {
		            $string .= $remainder < 100 ? $conjunction : $separator;
		            $string .= $this->convert_number_to_words($remainder);
		        }
		        break;
	    }
	    if (null !== $fraction && is_numeric($fraction)) {
	        $string .= $decimal;
	        $words = array();
	        foreach (str_split((string) $fraction) as $number) {
	            $words[] = $dictionary[$number];
	        }
	        $string .= implode(' ', $words);
	    }
	    return $string;
	}
}