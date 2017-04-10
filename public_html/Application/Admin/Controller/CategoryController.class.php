<?php
namespace Admin\Controller;
use Think\Controller;

class CategoryController extends CommonController {
	private $cid;	//分类id
	
	public function _initialize(){
		//实例模型
		$this->db = D('category');
		//接受cid
		$this->cid = intval($_GET['cid'])?intval($_GET['cid']):intval($_POST['cid']);
	}

    /**
	 * 显示分类列表
	 */
	public function index(){
		$category = $this->db->getCategoryAll();
		$data = \Org\Util\Data::channel($category,'cid','pid',0,0,2,'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
		$this->assign('data',$data);
		$this->display();
	}

    public function add(){
    	//是get请求显示模板
		if(IS_GET === true){
			//查询父类信息
			$parent = $this->db->getParentInfo($this->cid);
			// echo '<pre>';var_dump($parent);die;
			$this->assign('parent',$parent);
			//获取所有的分类，用于选择
			$data = $this->db->getCategoryAll();

			$level = \Org\Util\Data::channel($data,'cid','pid',0,0,2,'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
			$this->assign('level',$level);
			//显示模板
			$this->display();
			exit;
		}
		//获得分类的数据
		$data = $this->getData();
		//添加分类
		if($this->db->addCategory($data)){
			//成功后跳转，显示分类列表
			$this->success('添加成功',U('Admin/Category/index'));
		}else{
			throw new Exception('添加分类失败!');
		}
    }

    /**
	 * 编辑分类 
	 */
	public function edit(){
		if(IS_GET === true){
			//获取所有的分类，用于选择
			$data = $this->db->getCategoryAll();
			$level = \Org\Util\Data::channel($data,'cid','pid',0,0,2,'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
			$this->assign('level', $level);
			$category = $this->db->getCategoryFind($this->cid);
			//查询父类信息
			$parent = $this->db->getParentInfo($category['pid']);
			// echo '<pre>';var_dump($parent);die;
			$this->assign('parent',$parent);
			$this->assign('category',$category);
			$this->display();
			exit;
		}
		$data = $this->getData();
		// echo $this->cid;die;
		// echo $this->db->editCategory($data,$this->cid);die;
		if($this->db->editCategory($data,$this->cid)!==false){
			$this->success('编辑成功',U('Admin/Category/index'));
		}else{
			throw new Exception('编辑失败');
		}
	}
	/**
	 * 删除分类
	 */
	public function del(){
		// echo $this->cid;die;

		if($this->db->checkSonCategory($this->cid)){
			$this->error('请先删除子分类');
		}
		if($this->db->delCategory($this->cid)){
			$this->success('删除成功');
		}else{
			$this->error('删除失败!');
		}
	}

    /**
	 * 处理提交的数据
	 */
	private function getData(){
		$data = array();
		$data['cname'] = strip_tags($_POST['cname']);
		$data['title'] = htmlspecialchars($_POST['title']);
		$data['keywords'] = htmlspecialchars($_POST['keywords']);
		$data['description'] = htmlspecialchars($_POST['description']);
		$data['sort'] = intval($_POST['sort']);
		$data['display'] = intval($_POST['display']);
		$data['pid'] = intval($_POST['pid']);
		return $data;
	}
}