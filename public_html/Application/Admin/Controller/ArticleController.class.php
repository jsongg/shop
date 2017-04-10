<?php
namespace Admin\Controller;
use Think\Controller;
class ArticleController extends CommonController{

	public function _initialize(){
		//实例模型
		$this->cdb = D('category');
		$this->db=D('article');
	}

	public function index(){
		$data = $this->cdb->getCategoryAll();
		$level = \Org\Util\Data::channel($data,'cid','pid',0,0,2,'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
		$this->assign('level', $level);

		$datas=$this->db->select();
		if(IS_POST){
			$cid=intval($_POST['cid'])?intval($_POST['cid']):0;
			$start_time=htmlspecialchars($_POST['start_time']);
			$end_time=htmlspecialchars($_POST['end_time']);
			$keyword=htmlspecialchars($_POST['keyword']);
			$start_time=htmlspecialchars($_POST['start_time']);
			$datas=$this->db->where("cid='$cid'")->select();
			if($cid===0){
				$datas=$this->db->select();
			}
			if(!empty($start_time) && !empty($end_time)){
				$datas=$this->db->where("update_time>='$start_time' and update_time<='$end_time'")->select();
			}
			if(!empty($start_time)){
				$datas=$this->db->where("update_time>='$start_time'")->select();
			}
			if(!empty($keyword)){
				$datas=$this->db->where("title like '%$keyword%'")->select();
			}
			// $datas=$this->db->where(" cid='$cid' and title like '%$keyword%' and update_time>='$start_time' and update_time<='$end_time' ")->select();
		}
		// echo '<pre>';print_r($datas);print_r($cid);print_r($keyword);
		$this->assign('data',$datas);
		$this->display();
	}

	public function add(){
		if(IS_GET === true){
			$data = $this->cdb->getCategoryAll();
			$level = \Org\Util\Data::channel($data,'cid','pid',0,0,2,'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
			$this->assign('level', $level);
			$this->display();
			exit;
		}
		$data = $this->getData();
		// echo '<pre>';print_r($data);die;
		$res=$this->db->add($data);
		if($res){
			$this->success('添加文章成功');
		}else{
			$this->error('添加文章失败');
		}
		
	}

	// 编辑
	public function edit(){
		if(IS_POST){
			$id=intval($_POST['id']);
			// echo $id;die;
			$res=$this->db->where("id='$id'")->save($_POST);

			if($res!==false){
				$this->success('编辑成功',U('Admin/Article/index'));
				exit();
			}else{
				$this->error('编辑失败',U('Admin/Article/index'));
				exit();
			}
		}
		$id=intval($_GET['id']);
		$cid=intval($_GET['cid']);
		$category=$this->cdb->where("cid='$cid'")->find();
		
		$datas=$this->db->where("id='$id'")->find();
		$datas['cname']=$category['cname'];

		$this->assign('data',$datas);

		$data = $this->cdb->getCategoryAll();
		$level = \Org\Util\Data::channel($data,'cid','pid',0,0,2,'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
		$this->assign('level', $level);
		// echo '<pre>';print_r($datas);die;
		$this->display();
	}

	// 删除
	public function del(){
		// print_r($_GET);
		$id=intval($_GET['id']);
		$imgs=$this->db->where("id='$id'")->find();
		if(is_string($imgs['img_path'])&&$imgs['img_path']!=''){
			$img=json_decode($imgs['img_path']);
			foreach($img as $k=>$v){
				$ures=unlink(THINK_PATH.'../'.$v->url);
			}
		}
		// var_dump($ures);die;
		$res=$this->db->where("id='$id'")->delete(); 
		if($res){
			$this->success('删除文章成功');
		}else{
			$this->error('删除文章失败');
		}
	}

	// 文章搜索
	public function search(){
		// echo '<pre>';print_r($_POST);DIE;

	}

	private function getData(){
		$data = array();
		$data['cid'] = strip_tags($_POST['cid']);
		$data['title'] = htmlspecialchars($_POST['title']);
		$data['subtitle'] = htmlspecialchars($_POST['subtitle']);
		$data['intro'] = htmlspecialchars($_POST['intro']);
		$data['author'] = htmlspecialchars($_POST['author']);
		$data['copyfrom'] = htmlspecialchars($_POST['copyfrom']);
		$data['inputer'] = htmlspecialchars($_POST['inputer']);
		$data['http_url'] = htmlspecialchars($_POST['http_url']);
		$data['keyword'] = htmlspecialchars($_POST['keyword']);
		$data['hits'] = htmlspecialchars($_POST['hits']);
		$data['owner_tag'] = htmlspecialchars($_POST['owner_tag']);
		$data['owner_remark'] = htmlspecialchars($_POST['owner_remark']);
		$data['html_path'] = htmlspecialchars($_POST['html_path']);
		$data['temp_path'] = htmlspecialchars($_POST['temp_path']);
		$data['content'] = htmlspecialchars($_POST['content']);
		$data['file_path'] = htmlspecialchars($_POST['file_path']);
		$data['img_path'] = htmlspecialchars($_POST['img_path']);
		// $data['file_path'] = __ROOT__.'/Application/Public/kindeditor/attached/file/'.date("Ymd");
		// $data['img_path'] = __ROOT__.'/Application/Public/kindeditor/attached/image/'.date("Ymd");
		$data['add_time'] = date('Y-m-d H:i:s');
		$data['update_time'] = date('Y-m-d H:i:s');
		$data['create_time'] = date('Y-m-d H:i:s');
		return $data;
	}
}