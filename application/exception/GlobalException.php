<?php
/**
 * @fileName GlobalException.php
 * @author sprouts <1139556759@qq.com>
 * @date 2020/7/3 16:48
 * @description 自定义全局异常捕获
 */


namespace app\exception;

use Exception;
use think\exception\Handle;

class GlobalException extends Handle {

	public function render(Exception $e) {

		if ($e instanceof CustomException) {
			$result = [
				"code" => 400,
				"message" => "失败",
				"data" => $e->getData()
			];

		} else if ($e -> getStatusCode() == 404) {
			$result = [
				"code" => 404,
				"message" => "请求方式不匹配或者路由错误",
				"data" => ""
			];
		} else {
			$result = [
				"code" => 500,
				"message" => "服务器内部错误,不想告诉你~~~",
				"data" => ""
			];
		}
		return json($result);


	}
}
