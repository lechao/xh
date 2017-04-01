<?php
namespace Home\Controller;
use Think\Controller;

class WapController extends Controller {

	public function _initialize() {
        // utf-8编码
        header('Content-Type: text/html; charset=utf-8');
        C('DEFAULT_THEME','Wap');

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
        $this->display();
    }

    public function consult(){
        $username = $_POST['username'];
        $qq = $_POST['qq'];
        $phone = $_POST['phone'];
        $content = $_POST['content'];
        $update_time = time();
        $create_time = time();

        $message = D('message');
        $Data['created_at'] = $create_time;
        $Data['updated_at'] = $update_time;
        $Data['name'] = $username;
        $Data['phone'] = $phone;
        $Data['qq'] = $qq;
        $Data['content'] = $content;

        $result = $message->add($Data);
        if($result){
            $data = array('msg'=>"success",'done'=>true);
            $data = json_encode($data);
            echo $data;
        }else{
            $data = array('msg'=>"fault",'done'=>false);
            $data = json_encode($data);
            echo $data;
        }
    }
}
