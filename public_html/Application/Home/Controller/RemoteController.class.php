<?php
namespace Home\Controller;
use Think\Controller;
class RemoteController extends Controller{
	public function search(){
		// header("content-type:text/html;charset=utf8");
		$keyword=htmlspecialchars($_POST['keyword']);
		$appid='ADB4FDAC-C286-4F08-B6F1-D84AE3A26F6A';
		$secret='12345678901234567890123456789013';
		$st=time();
		$t=MD5($appid.','.$secret.','.$st);
		$mt=$appid.','.$st.','.$t;
// $mt="ADB4FDAC-C286-4F08-B6F1-D84AE3A26F6A,".$st.",".$t;
// echo $mt;
// echo '<hr>';
// echo $t;die;

		// echo $keyword;die;
		$keyword=array("keyword" => $keyword,"token"=>$mt);
		$output=get_curl_json($keyword,'searchkeywords');
		$data=json_decode($output);
		$data2=json_decode($data,true);
		// echo '<pre>';var_dump($data2);die;
		if($data2){
			$info=new InfoController();
			$info->piclist($data2);
		}else{
			$this->error('对不起，没有您要找的藏品');
		}
	}
	// 数据处理
	private function datafilter(){

	}

	// 页面渲染
	// public function detail($data){
	// 	$this->assign('data',$data);
	// 	$this->display();
	// 	// var_dump($data);die;
	// }
	
	// 2、图片搜索
	public function searchimgs(){
		
		$keys=array_keys($_FILES);
		$key=$keys[0];
		session('IMGKEY',$key);
		if($_FILES[$key]['name'][0]==''){
			$this->error('没有图片上传');
		}
		// echo $key;die;
		// echo '<pre>';print_r($_FILES);die;
		// echo count($_FILES[$key]['name']);die;	
		if(count($_FILES[$key]['name'])>1){

		}else{
			
			// $data['type']=$yingshe[$key];
			$mime=$_FILES[$key]['type'][0];
			session('MIME',$mime);

			$ext=pathinfo($_FILES[$key]['name'][0], PATHINFO_EXTENSION);
			// echo '<pre>';echo $_FILES[$key]['name'][0];print_r($_FILES);echo $ext;die;
			$filename=md5(uniqid());
			$picok=move_uploaded_file($_FILES[$key]['tmp_name'][0], THINK_PATH.'../Application/Img/'.$filename.'.'.$ext);
			session('USERPIC','/Application/Img/'.$filename.'.'.$ext);

			if($picok===false){
				$this->error('图片上传失败');
			}
			
			$this->payoption();


			
		}	
	}


	// 图片付费选择
	public function payoption(){
		// echo '<pre>';var_dump($data);die;
		
		$this->display("payoption");
	}

	// 图片识别列表页
	public function piclist(){
		$flag=intval($_GET['flag']);
		$this->assign('flag',$flag);
		$pic=session('USERPIC');
		$data=session('piclists');
		$data=$data['data'];
		
		// echo '<pre>';var_dump($data);die;
		$this->assign('pic',$pic);
		$this->assign('data',$data);
		$this->display('Remote/piclist');
		// echo '<pre>';print_r($data);die;
	}

	// 图片付费
	public function picpay(){
		$price=intval($_POST['price']);
		// mirror  ceramic  jade
		$yingshe=array(
			// "taoci"=>"陶瓷",
			"taoci"=>"ceramic",
			// "qingtong"=>"青铜",
			"qingtong"=>"bronze",
			// "tongjing"=>"铜镜",
			"tongjing"=>"mirror",
			// "hetian"=>"和田玉籽料系列",
			"hetian"=>"jade",
		);
		$userpic=session('USERPIC');
		$mime=session('MIME');
		$key=session('IMGKEY');
		$pic=file_get_contents('.'.$userpic);
		// echo '<pre>';print_r($userpic);echo '---';var_dump($pic);print_r(get_defined_constants());die;
		$data['img']='data:'.$mime.';base64,'.base64_encode($pic);
		// $data['img']="ceshi";
		$data['type']=$yingshe[$key];
		// echo '<pre>';print_r($data['type']);echo 1;print_r($_FILES);die;
		if($price==20){
			$libtype=1;
		}else{
			$libtype=2;
		}
		$data['libtype']=$libtype;

		$appid='ADB4FDAC-C286-4F08-B6F1-D84AE3A26F6A';
		$secret='12345678901234567890123456789013';
		$st=time();
		$t=MD5($appid.','.$secret.','.$st);
		$mt=$appid.','.$st.','.$t;

		$data['token']=$mt;
		$res=get_curl_json($data,'searchimgs');
		// echo '<pre>';print_r($data);die;
		// echo '<pre>';var_dump($res);die;
		$res=json_decode($res,true);
		// echo '<pre>';var_dump($res);die;
		$res=json_decode($res,true);
		// echo '<pre>';print_r($res);die;
		if(!empty($res['data'])){
			session('piclists',$res);
			
		}else{
			$this->error('没有搜到您的藏品信息');
		}



		// echo '<pre>';var_dump($_POST);die;
		
		$mid=session('MID');
		$this->assign('price',$price);

		if(!($price==20||$price==50)){
			header('content-type:text/html;charset=utf-8');
			exit('非法金额');
		}
		
		$db=D('Member/Account');
		$res=$db->where("mid=$mid")->order('id desc')->find();

		if($res['balance']<$price){
			$this->error('账户余额不足，请充值！',U('Member/Account/rechargeTc'));
			exit();
		}

		if($res['voucher']>0){
			if(($res['voucher']-$price)>0){
				// echo 3;die;
				$convoucher=$price;
				$voucher=$res['voucher']-$convoucher;
				$data['convoucher']=$convoucher;
				$data['voucher']=$voucher;
				$data['mid']=$mid;
				$data['balance']=$res['balance'];
				$data['time']=date('Y-m-d H:i:s');
				$db->add($data);
			}else{
				// echo 2;die;
				$consume=-($res['voucher']-$price);
				$data['mid']=$mid;
				$data['consume']=$consume;
				$data['balance']=$res['balance']-$consume;
				$data['convoucher']=$price-$consume;
				$data['voucher']=0;
				$data['time']=date('Y-m-d H:i:s');
				$db->add($data);
			}
		}else{
			// echo 1;die;
			$consume=$price;
			$balance=$res['balance']-$consume;
			$data['consume']=$consume;
			$data['balance']=$balance;
			$data['mid']=$mid;
			// $data['amount']=$amount;
			// $data['voucher']=$voucher;
			$data['time']=date('Y-m-d H:i:s');
			$db->add($data);
		}
		// echo '<pre>';print_r($res);die;
		$this->display();
	}

	// 详情
	public function detail(){
		// $id=session('pid');
		// $type=session('type');

		$id=htmlspecialchars($_GET['id']);
		$type=htmlspecialchars($_GET['type']);

		// echo '<pre>';var_dump($id);
		// echo '<pre>';var_dump($type);
		// $getdetail=array("id"=>"5dd3d912-de19-11e6-8386-00163e302e1c","token"=>"86AEC542-0694-4888-9047-18D7CB7A0D54,1486711092,I7J5iva691p4pOQ1aftvvlMhoIJobmXPpEmcq5J0mcLKOW1D6LbEbz7JCyMjbkm56MacM6MBXLDeO3afaVNbaZQE9Qvw03y3PeiNcqmCPRBBmKtAgUh8ITocgrxAStfI");

		
		$appid='ADB4FDAC-C286-4F08-B6F1-D84AE3A26F6A';
		$secret='12345678901234567890123456789013';
		$st=time();
		$t=MD5($appid.','.$secret.','.$st);
		$mt=$appid.','.$st.','.$t;
		
		$getdetail['id']=$id;
		$getdetail['type']=$type;
		$getdetail['token']=$mt;

		// $getdetail=array("id"=>$id,"type"=>$type,"token"=>"");
		$data=get_curl_json($getdetail,'getdetail');
		// $data2=$data['data'];
		$data2=json_decode($data,trur);
		$data3=json_decode($data2,trur);


		header('content-type:text/html;charset=utf-8');
		// echo '<pre>';print_r($data3);die;
		// $data2=Array ( 'status' => 0 ,'data' => Array ( 'pictures' => Array ( ) ,'name' =>'清末古董陶瓷' ,'infos' =>'ming1' ,'desc' =>'ming2' ) ,'message' =>'ming3' );
		$info=$data3['data']['infos'];
		$infos=explode("##",trim($info,"##"));
		foreach($infos as $k=>$v){
			$infos[$k]=explode("::",$v);
		}
		$desc=$data3['data']['desc'];
		// echo '<pre>';print_r($infos);echo $desc;die;
		$this->assign('infos',$infos);
		$this->assign('desc',$desc);
		$this->assign('data',$data3);
		$this->assign('piclist',$data3['data']['pictures']);
		
		$this->display();
	}
	
}