<?php
error_reporting(E_ALL ^ E_NOTICE); 
// json_encode($value)参数只能接受utf-8编码的值
// iconv(utf-8,GBK,$data)把utf-8编码转换成gbk编码

class Response{
	const JSON="json";
	/**
	 * 按综合格式输出数据
	 * @param  integer $code    状态码
	 * @param  string $message 提示信息
	 * @param  array  $data    数据
	 * @param  string $type    输出类型
	 * @return string          返回值
	 */
	public static function show($code,$message='',$data=array(),$type=self::JSON){
		if(!is_numeric($code)){
			return '';
		}

		$type = isset($_GET['format'])?$_GET['format']:self::JSON;

		$result=array(
			'status'=>$code,
			'msg'=>$message,
			'$data'=>$data,
			);
		if($type=='json'){
			self::json($code,$message,$data);
			exit;
		}elseif($type=='xml'){
			self::xmlEncode($code,$message,$data);
			exit;
		}elseif($type=='array'){
			var_dump($result);
			exit;
		}else{

		}

	}
	/**
	 * 按json格式输出数据
	 * @param  integer $code    状态码
	 * @param  string $message 提示信息
	 * @param  array  $data    数据
	 * @return string          返回值
	 */
	public static function json($code,$message='',$data=array()){

		if(!is_numeric($code)){
			return '';
		}

		$result = array(
			'status' => $code,
			'msg' => $message,
			'data' => $data,
			);
		echo json_encode($result);
		// print_r(json_encode($result));
		exit;
	}
	/**
	 * 按xml格式输出数据
	 * @param  [type] $code    [description]
	 * @param  string $message [description]
	 * @param  array  $data    [description]
	 * @return [type]          [description]
	 */
	public static function xmlEncode($code,$message='',$data=array()){
		if(!is_numeric($code)){
			return '';
		}

		$result=array(
			'status'=>$code,
			'msg'=>$message,
			'data'=>$data,
			);

		header("Content-Type:text/xml");
		$xml="<?xml version='1.0' encoding='UTF-8'?>\n";
		$xml.="<root>\n";
		$xml.=self::xmlToEncode($result);
		$xml.="</root>";

		echo $xml;
	}

	public static function xmlToEncode($result){
		$xml=$attr="";
		foreach ($result as $key => $value) {
			if(is_numeric($key)){
				$attr=" id='{$key}'";
				$key="item";
			}
			$xml.="<{$key}{$attr}>";
			$xml.=is_array($value)?self::xmlToEncode($value):$value;
			$xml.="</{$key}>\n";
		}

		return $xml;
	}
}































?>