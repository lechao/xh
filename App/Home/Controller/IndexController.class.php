<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {

	public function _initialize() {
        // utf-8编码
        header('Content-Type: text/html; charset=utf-8');
        $config = M('System_config')->find();
        $qq = explode('#', $config['kefu']);

        $pre_qq = array_filter(explode('|', $qq[0]));
        $aft_qq = array_filter(explode('|', $qq[1]));

        $this->assign('pre_qq',$pre_qq);
        $this->assign('aft_qq',$aft_qq);
		$this->assign('config',$config);
	}

    public function index(){
    	$banner = M('ad')->where(array('ad_code'=>'INDEX_BANNER'))->select();
    	$this->assign('banner',$banner);

    	$ul1 = M('ad')->where(array('ad_code'=>'INDEX_UL1'))->find();
    	$this->assign('ul1',$ul1);

    	$ul2 = M('ad')->where(array('ad_code'=>'INDEX_UL2'))->find();
    	$this->assign('ul2',$ul2);

    	$ul3 = M('ad')->where(array('ad_code'=>'INDEX_UL3'))->find();
    	$this->assign('ul3',$ul3);

        $this->display();
    }

    public function sales(){

        $this->display();
    }

	public function b2b2c(){

        $this->display();
    }

	public function about5(){
		$product = M('product');
		$list = $product->where("cid='19'")->select();
		$this->assign('list',$list);
        $this->display();
    }

	public function news($id=6){ 

		$news = M('news');

		$count      = $news->where("cat_id='$id'")->count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show       = $Page->show();// 分页显示输出
		$list = $news->where("cat_id='$id'")->order("created_at desc")->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出

		$this->display();
    }
	public function news_detail($id){ 
		$news = M('news');
		$vo = $news->getById($id);
		$this->assign('vo',$vo);
		$this->display();
    }


	public function down($is_honor = 0){
		$model = M('file');
		$count      = $model->where('is_honor = '.$is_honor)->count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show       = $Page->show();// 分页显示输出
		$list		= $model->where('is_honor = '.$is_honor)->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
        $this->display();
    }
	public function down_info($id){ 
		$model = M('file');
		$vo = $model->getById($id);
		$this->assign('vo',$vo);
		$this->display();
    }

	 public function product(){ 
        $product = M('product');

		$count      = $product->count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show       = $Page->show();// 分页显示输出
		$list = $product->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
     
		$this->display();
    }

	 public function project($cid = ''){

		if(!isset($cid)||empty($cid)){
			$cid= 25;
		}
		$pagetitle = '';

		switch($cid){
			case 25:	$pagetitle = '房屋建筑工程';break;
			case 26:	$pagetitle = '市政公用工程';break;
			case 27:	$pagetitle = '环保专业承包';break;
			case 28:	$pagetitle = '在建工程';break;
		}

        $product = M('product');
		$list = $product->where("cid='$cid'")->select();
		$this->assign('list',$list);
		$this->assign('pagetitle',$pagetitle);
		$this->assign('cid',$cid);
		$this->display();
    }

	 public function job(){ 
		$model = M('jobs');
		$count      = $model->count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show       = $Page->show();// 分页显示输出
		$list = $model->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出

        $this->display();
    }
	 public function contact(){ 
        $this->display();
    }
	public function hr(){ 
		$model = M('jobs');
		$count      = $model->count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show       = $Page->show();// 分页显示输出
		$list = $model->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出

        $this->display();
    }
	public function culture3(){
		$model = M('pictures');
		$count      = $model->where("is_foot = 1")->count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show       = $Page->show();// 分页显示输出
		$list		= $model->where("is_foot = 1")->order('uptime desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
        $this->display();
    }

	public function culture4(){
		$model = M('pictures');
		$count      = $model->where("is_foot = 0")->count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show       = $Page->show();// 分页显示输出
		$list		= $model->where("is_foot = 0")->order('uptime desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
        $this->display();
    }

	public function message(){ 
        $mess = M('message');
		if($mess->create()){
			$mess->created_at = time();
			if($mess->add()){
				$this->success('留言成功~');
			}else{
				$this->error('插入错误！');
			}
		}else{
			$this->error('数据错误！');
		}
    }


    public function login(){
		$this -> display();
	}
	// 检测输入的验证码是否正确，$code为用户输入的验证码字符串
	function check_verify($code, $id = ''){
	    $verify = new \Think\Verify();
	    return $verify->check($code, $id);
	}

	// 登录检测
	public function check_login() {
		$is_verify_code = get_system_config("IS_VERIFY_CODE");
		if (!empty($is_verify_code)) {
			$check=$this->check_verify($_POST['verify'],1);
			if (!$check) {
				$this -> error('验证码错误！');
			}
		}

		if (empty($_POST['emp_no'])) {
			$this -> error('帐号必须！');
		} elseif (empty($_POST['password'])) {
			$this -> error('密码必须！');
		}
		if ($_POST['emp_no'] == 'admin') {
			$is_admin = true;
			session(C('ADMIN_AUTH_KEY'), true);
		}

		$map = array();
		// 支持使用绑定帐号登录
		$map['emp_no'] = $_POST['emp_no'];
		$map["is_del"] = array('eq', 0);
		$map['password'] = array('eq', md5($_POST['password']));
		$model = M("User");
		$auth_info = $model -> where($map) -> find();

		//使用用户名、密码和状态的方式进行认证
		if (false == $auth_info) {
			$this -> error('帐号或密码错误！');
		} else {
			session(C('USER_AUTH_KEY'), $auth_info['id']);
			session('emp_no', $auth_info['emp_no']);
			session('user_name', $auth_info['name']);
			session('user_pic', $auth_info['pic']);
			session('dept_id', $auth_info['dept_id']);


			//保存登录信息
			$User = M('User');
			$ip = get_client_ip();
			$time = time();
			$data = array();
			$data['id'] = $auth_info['id'];
			//$data['last_login_time'] = $time;
			//$data['login_count'] = array('exp', 'login_count+1');
			//$data['last_login_ip'] = $ip;
			//$User -> save($data);
			$this -> assign('jumpUrl', U("index/index"));
			header('Location: ' . U("index/index"));
		}
	}

	/* 退出登录 */
	public function logout() {
		$auth_id = session(C('USER_AUTH_KEY'));
		$sid = session_id();
		$rs = M('session')->where("session_id='$sid'")->delete();

		if (isset($auth_id)) {
			session(C('USER_AUTH_KEY'), null);
			session('user_pic', null);
			session(null);
			$this -> assign("jumpUrl", __APP__);
			$this -> success('退出成功！');
		} else {
			$this -> assign("jumpUrl", __APP__);
			$this -> error('退出成功！');
		}
	}

	public function register() {
		$this -> display();
	}

	// 登录检测
	public function check_register() {
		$is_verify_code = get_system_config("IS_VERIFY_CODE");
		if (!empty($is_verify_code)) {
			if (session('verify') != md5($_POST['verify'])) {
				$this -> error('验证码错误！');
			}
		}

		if (empty($_POST['emp_no'])) {
			$this -> error('帐号必须！');
		} elseif (empty($_POST['password'])) {
			$this -> error('密码必须！');
		} elseif ($_POST['password'] !== $_POST['check_password']) {
			$this -> error('密码不一致');
		}

		$map = array();
		// 支持使用绑定帐号登录
		$map['emp_no'] = $_POST['emp_no'];
		$count =M("User")  -> where($map) -> count();

		if ($count) {
			$this -> error('该账户已注册');
		} else {
			$model = D("User");
			if (false === $model -> create()) {
				$this -> error($model -> getError());
			}
			$list = $model -> add();
			if ($list !== false) {//保存成功
				$this -> assign('jumpUrl', get_return_url());
				$this -> success('注册成功!');
			} else {
				$this -> error('注册失败!');
				//失败提示
			}

		}
	}

	public function verify() {
		$config =    array(
		    'fontSize'    =>    15,    // 验证码字体大小
		    'length'      =>    4,     // 验证码位数
		    'useNoise'    =>    false, // 关闭验证码杂点
		);
		$verify = new \Think\Verify($config);
		$verify -> entry(1);
	}

	public function crm() {
	    $this -> display();
    }

}
