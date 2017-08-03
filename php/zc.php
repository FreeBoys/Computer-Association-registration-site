<?php 
	include "../libs/Smarty.class.php";

	$xh = $_POST['xh']; //学号
	$xm = $_POST['xm']; //姓名
	$xb = $_POST['xb'];//系部
	$zy = $_POST['zy'];//专业
	$bj = $_POST['bj'];//班级
	$QQ = $_POST['QQ'];//QQ
class db_class extends Smarty
{
	public $sql;
 public function Start_db($xh,$xm,$xb,$zy,$bj,$QQ)
	{
		$db_path = 'localhost';
		$db_user = 'user';
		$db_pass = 'password';
		$db_db = 'student';

	$sql = mysql_connect("$db_path","$db_user","$db_pass");
	mysql_query("set names utf8;"); 
	if(!$sql)
	{		
			return 0;
		}
		else
		{			
			if(!mysql_select_db($db_db,$sql))
			{
				return 0;
			}
			else
			{
				$sql_yj ="insert into student (xh,xm,xb,zy,bj,QQ) value ('$xh','$xm','$xb','$zy','$bj','$QQ');";
				if(mysql_query($sql_yj,$sql))
				{
					mysql_close($sql);
					return 1;
				}
				else
				{
					mysql_close($sql);
					return 0;
				}
			}
			
		}
		
	}
}


	$start_db = new db_class;
	$smarty = new Smarty;
	
	if($start_db -> Start_db($xh,$xm,$xb,$zy,$bj,$QQ))
	{
		$path = 'http://xg.scemi.com:8007/xgxt/stuPic.jsp?xh='."$xh";
		$smarty->assign("photo","$path");
		$smarty->assign("xh_tl","学号:");
		$smarty->assign("xm_tl","姓名:");
		$smarty->assign("xb_tl","系部:");
		$smarty->assign("zy_tl","专业:");
		$smarty->assign("bj_tl","班级:");
		$smarty->assign("QQ_tl","QQ:");

		$smarty->assign("xh","$xh");
		$smarty->assign("xm","$xm");
		$smarty->assign("xb","$xb");
		$smarty->assign("zy","$zy");
		$smarty->assign("bj","$bj");
		$smarty->assign("QQ","$QQ");
		$smarty->assign("hello","欢迎加入计算机协会!");
		$smarty->assign("ok","注册完成");
		$smarty->assign("fish","注册完成，你还需缴纳20元会费！");
		$smarty->assign("im_p","../img/tb/13.png");
		$smarty->assign("wel","请加入2016届计算机协会QQ群:453756156");
		$smarty->assign("x","../img/tb/0.png");

		$smarty -> display('../templates/Fish.html');
	}
	else
	{
			$smarty->assign('Error_Title','错误');
			$smarty->assign('Error_','抱歉,可能哪里出错了！/你的学号已注册！');
			$smarty->display('../templates/Erro.html');
	}

		

	
?>
