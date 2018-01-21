<?php  

namespace Home\Controller;
use think\Controller;
class AppointmentController extends Controller
{
	function appoint($did){
		if($_SESSION['admin_name']){
				$dname=$_SESSION['admin_name'];
				$doctor=D('doctor');
				$dinfo=$doctor->find($did);
				$weekarray=array("星期日","星期一","星期二","星期三","星期四","星期五","星期六"); 
				$x=(int)$dinfo['dday'];
				$dinfo['dday']=$weekarray[$x];
				if(!empty($_POST)){
					if($_POST['date']){
						$day = substr($_POST['date'],0,8);
						$t=substr($_POST['date'],10,15);
						$date =  $date_str=date('Y-m-d',strtotime($day));
						
						$cha = $x - date('w');

						if($cha >= 0){
							$time = date('Y-m-d',strtotime("+$cha day"));
						}else{
							$c = 7 + $cha;
							$time  = date('Y-m-d',strtotime("+$c day"));
						}
						if($time == $date){
							$ddd = $date . " " . $t;
							$data['date']=$ddd;
							$data['illness']=$_POST['illness'];
							$data['did']=$dinfo['dname'];
							$data['dhospital']=$dinfo['dhospital'];
							$data['ddepartment']=$dinfo['ddepartment'];
							$data['uid']=$_SESSION['admin_name'];
							$app=D('appointment');
							$chong=$app->where("date = '$ddd'")->find();
							if($chong){
								$this->assign('error','该时间已被其他人预约');
							}else{
								$holiday=D('holiday');
								$ccc = $holiday->where("hoday = '$date'")->find();
								if ($ccc) {
									$this->assign('error','该天医生已请假');
								}else{
									$user = D('user');
									$breach = $user->where("uname='$dname'")->find();
									$b=(int)$breach['ubreach'];
									if($b<=0){
										$this->assign('error','取消次数过多,禁止预约');
									}else{
										$a=$app->add($data);
									
										$this->redirect('myAppointment');
									}
									
									
								}
								
							}
							
						}else{
							$this->assign('error','请选择未来一周的时间且与该医生坐诊时间相符');
						}
					}else{
						$this->assign('error','请选择时间');
					}
				}
				$this->assign('doctor',$dinfo);
				$this->display();
		}else{
			$this->redirect('Admin/Login/login');
		}


	}
	function myAppointment(){
		if($_SESSION['admin_name']){
			$dname = $_SESSION['admin_name'];
			$user = D('user');
			$uinfo = $user->where("uname='$dname'")->find();
			$this->assign('user',$uinfo);
			$appoint=D('appointment');
			$app=$appoint->where("uid = '$dname'")->select();

			$this->assign('app',$app);

		}else{
			$this->redirect('Admin/Login/login');
		}
		$this ->display();
	}
	function cancel($aid){
		$dname = $_SESSION['admin_name'];
		$appoint=D('appointment');
		$app=$appoint->delete($aid);
		$user = D('user');
		$breach = $user->where("uname='$dname'")->find();
		$b=(int)$breach['ubreach'];
		$bb=$b-1;
		$user->where("uname='$dname'")->setField('ubreach',$bb);
		$this->redirect('myAppointment');
	}
}