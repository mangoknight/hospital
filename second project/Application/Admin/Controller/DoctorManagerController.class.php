<?php  

namespace Admin\Controller;
use think\Controller;
class DoctorManagerController extends Controller
{
	function top(){
		$this->display();
	}
	function left(){
		$this->display();
	}
	function home(){
		$this->display();
	}
	function bottom(){
		$this->display();
	}
	function welcome(){
		$this->display();
	}
	function holiday(){
		$doctor=D('doctor');
		$dname=$_SESSION['admin_name'];
		$docinfo=$doctor->where("dname = '$dname'")->find();
		$d = (int)$docinfo['dday'];
		$cha = $d - date('w');
		if($cha >= 0){
			$a = $cha + 7;
			$b = $cha + 14;
			$info[0]['time'] = date('Y-m-d',strtotime("+$cha day"));
			$info[1]['time'] = date('Y-m-d',strtotime("+$a day"));
			$info[2]['time'] = date('Y-m-d',strtotime("+$b day"));
		}else{
			$c = 7 + $cha;
			$e = $cha + 14;
			$f = $cha + 21;
			$info[0]['time'] = date('Y-m-d',strtotime("+$c day"));
			$info[1]['time'] = date('Y-m-d',strtotime("+$e day"));
			$info[2]['time'] = date('Y-m-d',strtotime("+$f day"));
		}
		$this -> assign('day',$info);
		$holiday=D('holiday');
		if(!empty($_POST)){
			
			$data['dname']=$dname;
			$data['hoday']=$_POST['hoday'];
			$data['hname']=$docinfo['dhospital'];
			$data['hoinformation']=$_POST['hoinformation'];
			$holiday->add($data);
			$this->redirect('holiday');
		}
		$hoinfo = $holiday->where("dname = '$dname'")->select();
		$this->assign('holiday',$hoinfo);
		$this -> display();
	}
	function delete($hoid){
		$holiday=D('holiday');
		$holiday->delete($hoid);
		$this->redirect('holiday');
	}
	function appoint(){
		$dname=$_SESSION['admin_name'];
		$app = D('appointment');
		$appoint=$app->where("did = '$dname'")->select();
		$this->assign('appoint',$appoint);
		$this->display();
	}
}