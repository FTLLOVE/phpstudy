<?php
/**
 * @fileName IndexController.php
 * @author sprouts <1139556759@qq.com>
 * @date 2020/7/3 16:16
 * @description
 */


namespace app\api\controller;


use app\exception\CustomException;

class IndexController extends BaseController {

	public function index() {
		$data = [
			"username" => "方同乐",
			"age" => 18
		];
		return $this->ok($data);
	}

	public function test() {
		$data = [];
		if (empty($data)) {
			return $this->fail(500001, "列表为空");
		} else {
			return $this->ok();
		}
	}
}
