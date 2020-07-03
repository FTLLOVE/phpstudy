<?php
/**
 * @fileName BaseController.php
 * @author sprouts <1139556759@qq.com>
 * @date 2020/7/3 16:22
 * @description 基类控制层，所有的控制类都需要继承该类
 */


namespace app\api\controller;


use think\Controller;
use think\Request;

class BaseController extends Controller {

	public function __construct(Request $request = null) {
		//TODO
		parent::__construct($request);
	}

	/**
	 * 处理成功的响应结果
	 */
	public function ok($data = [], $message = "处理成功", $code = 200) {
		return [
			"code" => $code,
			"message" => $message,
			"data" => $data
		];
	}

	/**
	 * 处理失败的响应结果
	 */
	public function fail($code = 500, $message = "", $data = []) {
		return [
			"code" => $code,
			"message" => $message,
			"data" => $data
		];
	}
}
