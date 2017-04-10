<?php
namespace Admin\Model;
use Think\Model;
class CategoryModel extends Model{
	//默认操作的表
	public $table = 'category';
	/**
	 * 获得所有分类的数据
	 */
	public function getCategoryAll(){
		return $this->select();
	}
	/**
	 * 添加分类数据
	 * @param  $data
	 */
	public function addCategory($data){
		return $this->add($data);
	}
	/**
	 * 获得父类信息
	 */
	public function getParentInfo($cid){
		$result = $this->where(array('cid'=>$cid))->field('cname,cid')->find();
		if($result){
			return $result;
		}else{
			return array(
				'cid'=>0,
				'cname'=>'顶级分类'		
			);
		}
	}
	/**
	 * 获取单条的分类数据
	 */
	public function getCategoryFind($cid){
		return $this->where(array('cid'=>$cid))->find();
	}
	/**
	 * 编辑分类
	 */
	public function editCategory($data,$cid){
		return $this->where(array('cid'=>$cid))->save($data);
		
	}
	/**
	 * 验证是否存在子分类
	 */
	public function checkSonCategory($cid){
		return $this->where(array('pid'=>$cid))->count();
	}
	/**
	 * 删除分类
	 */
	public function delCategory($cid){
		return $this->where(array('cid'=>$cid))->delete();
	}
}













?>