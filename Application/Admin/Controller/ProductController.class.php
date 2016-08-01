<?php
namespace Admin\Controller;
use Think\Controller;
class ProductController extends Controller
{
	public function index()
	{
		#实例化模型
		$model = M('product');
		#查询出所有数据
		$product = $model -> select();
		#展示到模板
		$this -> assign('product',$product);
		$this -> display();
	}
	public function add()
	{
		$this -> display();
	}
	public function addOk()
	{
		#接收表单数据
		$post = I('post.');
		#判断是否上传图片
		if ($_FILES['file']['size'] != 0) {
			#初始化图片上传的配置参数
			$config = array('rootPath' => WORK_PATH.UPLOAD_PATH);
			#实例化文件上传类
			$upload = new \Think\Upload($config);
			#执行上传操作
			$info = $upload -> uploadOne($_FILES['file']);
			if($info) {
				$post['addtime'] = time();
				$post['file_name'] = $info['name'];
				$post['file_path'] = UPLOAD_PATH.$info['savepath'].$info['savename'];
			}
			#实例化模型
			$model = M('product');
			#用create接收数据
			$model -> create($post);
			#添加数据
			$rt = $model -> add();
			if ($rt) {
				$this -> error('添加成功', U('index'), 3);
			}else {
				$this -> error('添加失败，请重新上传', U('add'), 3);
			}
		}else {
			$this -> error('一定要上传图片哦~~', U('add'), 3);
		}
	}
	public function update()
	{
		$id = I('get.id');
		#根据id查询出数据
		$model = M('product');
		$product = $model -> find($id);
		#展示到模板
		$this -> assign('product', $product);
		$this -> display();
	}
	public function updateOk()
	{
		#接收表单数据
		$post = I('post.');
		$post['addtime'] = time();
		#判断是否上传图片
		if ($_FILES['file']['size'] != 0) {
			#初始化图片上传的配置参数
			$config = array('rootPath' => WORK_PATH.UPLOAD_PATH);
			#实例化文件上传类
			$upload = new \Think\Upload($config);
			#执行上传操作
			$info = $upload -> uploadOne($_FILES['file']);
			if($info) {
				$post['file_name'] = $info['name'];
				$post['file_path'] = UPLOAD_PATH.$info['savepath'].$info['savename'];
			}
		}
		#实例化模型
		$model = M('product');
		#用create接收数据
		$model -> create($post);
		#添加数据
		$rt = $model -> save();
		if ($rt) {
			$this -> error('修改成功', U('index'), 3);
		}else {
			$this -> error('修改失败', U('update',array('id' => $post['id'])), 3);
		}
	}
	public function del()
	{
		#接收id值
		$id = I('get.id');
		#删除操作
		$model = M('product');
		$rt = $model -> delete($id);
		if ($rt) {
			$this -> error('删除成功', U('index'), 3);
		}else {
			$this -> error('删除失败', U('index'), 3);
		}
	}
}