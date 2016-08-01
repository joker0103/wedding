<?php
/**
 * Created by PhpStorm.
 * User: 帅
 * Date: 2016/7/28
 * Time: 0:14
 */
namespace Home\Controller;
class WeddingStoreController extends CommonController
{
    public function index()
    {
    	#缓存初始化
    	S(array('type' => 'memcache',
    			'host' => '127.0.0.1',
    			'port' => '11211',
    			'expire' => 3600*24));
    	#判断是否有缓存
    	if (S('product') && S('newProducts')) {
            $product = unserialize(S('product'));
    		$newProduct = unserialize(S('newProduct'));
    	}else {
    		#查询出所有数据
	    	$model = M('product');
            #查询出最新产品
	    	$newProducts = $model -> where('type=1') -> order('addtime desc') -> limit('6') -> select();
            #查询出特色产品
            $products = $model -> where('type=2') -> limit('8') -> select();
            $product = array();
	  		$newProduct = array();
	  		#计算出实际价格
    		foreach ($products as $key => $value) {
	    		$value['realprice'] = ceil($value['price'] * 10 / $value['discount']);
	    		$product[] = $value;
    		}
            foreach ($newProducts as $key => $value) {
                $value['realprice'] = ceil($value['price'] * 10 / $value['discount']);
                $newProduct[] = $value;
            }
    		#将数据缓存到memcache
            S('product', serialize($product));
    		S('newProduct', serialize($newProduct));
    	}
    	#展示到模板
    	$this -> assign(array('product' => $product, 'newProduct' => $newProduct));
        return $this->display();
    }
}