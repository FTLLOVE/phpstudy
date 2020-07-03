<?php
/**
 * @fileName CustomException.php
 * @author sprouts <1139556759@qq.com>
 * @date 2020/7/3 17:09
 * @description
 */


namespace app\exception;


use think\Exception;
use Throwable;

class CustomException extends Exception {

	protected $data;

	public function __construct($data = []) {
		$this->data = $data;
	}

}
