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

}
