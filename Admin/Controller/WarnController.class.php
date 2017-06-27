<?php
namespace Admin\Controller;
use Think\Controller;
class WarnController extends Controller {
    //页面
    public function warnadd(){
        $warnopinion = D('Warn');
        $this->assign('type',$warnopinion->getWarntype());
        $this->assign('leave',$warnopinion->getWarnleave());
        $this->assign('color',$warnopinion->getWarncolor());
        $this->assign('city',$warnopinion->getcity());
        $this->assign('type2',$warnopinion->getWarntype());
        $this->assign('leave2',$warnopinion->getWarnleave());
        $this->assign('color2',$warnopinion->getWarncolor());
        $this->display();
    }
    public function warnedit(){
        $warn = D('Warn');
        $warnid = $_GET['id'];
        $warninfo = $warn->where("id='$warnid'")->find();
        $this->assign('warn',$warninfo);
        $warnopinion = D('Warn');
        $this->assign('type',$warnopinion->getWarntype());
        $this->assign('leave',$warnopinion->getWarnleave());
        $this->assign('color',$warnopinion->getWarncolor());
        $this->assign('city',$warnopinion->getcity());
        $this->display();
    }
	
	public function warnlist(){
		$warn = D('Warn');
        $this->assign('getAllWarn',$warn->getAllWarn());
        $this->assign('getWarn',$warn->getWarn());
		$this->display();
	}

    //接口
	public function allWarn(){
        $warn = D('Warn');
        $this->assign('getAllWarn',$warn->getAllWarn());
        $this->display();
    }

    public function addAllWarn(){
        $warn = D('Warn');
        $warn->addAllWarn();
        echo "<script language='javascript' type='text/javascript'>"; 
        echo "window.location.href='../warnlist.html'";  
        echo "</script>"; 
    }

    public function passAllWarn(){
        $warn = D('Warn');
        $warn->passAllWarn();
        echo "<script language='javascript' type='text/javascript'>"; 
        echo "window.location.href='../warnlist.html'";  
        echo "</script>"; 

    }

    public function searchAllWarn(){
        $warn = D('Warn');
        $warn->searchAllWarn();
        var_dump($warn->searchAllWarn());
    }

    public function Warn(){
        $warn = D('Warn');
        var_dump($warn->getWarn());
    }
    public function saveWarn(){
        $warn = D('Warn');
        $warn->saveWarn();

    }
    public function addWarn(){
        $warn = D('Warn');
        $warn->addWarn();

    }
    public function passWarn(){
        $warn = D('Warn');
        $warn->passWarn();
        echo "<script language='javascript' type='text/javascript'>"; 
        echo "window.location.href='../warnlist.html'";  
        echo "</script>";  
    }
    public function searchWarn(){
        $warn = D('Warn');
        $warn->searchWarn();
        var_dump($warn->searchWarn());
    }
}
 ?>
