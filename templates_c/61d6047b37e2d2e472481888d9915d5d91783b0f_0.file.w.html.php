<?php
/* Smarty version 3.1.29, created on 2016-10-24 17:36:29
  from "D:\phpStudy\WWW\w.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_580dd61d082952_47394464',
  'file_dependency' => 
  array (
    '61d6047b37e2d2e472481888d9915d5d91783b0f' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\w.html',
      1 => 1477301622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_580dd61d082952_47394464 ($_smarty_tpl) {
?>
<!doctype html>
<html>
<head>
<meta charset="utf8">
<!--<meta http-equiv="pragma" content="no-cache">-->
<!--<meta http-equiv="cache-control" content="no-cache">-->
<title>四川机电计算机协会</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="css/morning.css" type="text/css" data-for="result">
<?php echo '<script'; ?>
 type="text/javascript" src="js/lod.js" async><?php echo '</script'; ?>
>
</head>
<body onclick="cls()">
<!-- 视屏浮层 -->
<div id="video"><video poster="img/3.jpg" src="video/Meteora_Greece_Nimia_4K_315956_1080_HD_ZH-CN.mp4" loop autoplay></video></div>
<audio src="music/mn.mp3" loop autoplay></audio>
<!--背景-->
<div id="bg"></div>
<!--end-->
<div id="pub">
	
    <div id="text">
    	<div id="title">
        	<span>欢迎加入计算机协会</span>
        </div>
        <div id="t1">
        	<p> “计算机天生就是用来解决以前没有过的问题的。”–比尔盖茨</p>
        </div>
        <div id="t2">
        	<span>计算机协会简介：</span>
            <span>四川机电职业技术学院计算机协会成立于2004年，是一个由学生自发组织，经四川机电职业技术学院党委批准，面向计算机爱好者的学生社团。由信息工程系主办的全系性学生团体组织，是我校计算机优秀技术人才的荟萃地。本协会为专业性、服务性的学生社团组织，其宗旨一直是为提高广大计算机爱好者的整体水平，为其提供一个施展才华的空间。</span>
        </div>
        <div id="msg">
        	<div id="QQ">
                <span>二维码点我：</span>
            	<span><img src="img/shar/0_0.png" onmousemove="er()" /></span>
                <span></span>
            </div>
            
            <div id="bq">
            	<span>© 2016 四川机电职业技术学院·计算机协会·by:Free</span>
            </div>
            
        </div>
	 </div>
    	    
    <div id="zc">
    	<div id="zctitle">
        	<span class="zct">注册</span>
            <form name="myfrom" id="myfrom"  method="post" action="php/zc.php" >
            	<div id="xx">学号：<input type="text" class="bk" name="xh"  maxlength="10" id="xh" /></div>
                <div id="x1">姓名：<input type="text" class="bk" name="xm" maxlength="6" id="xm" /></div>
                <div id="x2">
                	系部：<select class="bk" id="lp" onChange="cre()" name="xb">
                    		<option selected name="信息工程系">信息工程系</option>
                            <option value="电子电气工程系">电子电气工程系</option>
                            <option "管理工程系">管理工程系</option>
                            <option value="机械工程系">机械工程系</option>
                            <option value="材料工程系">材料工程系</option>
                    </select>
                </div>
                
                
                <div id="KL">专业：<select class="dt" name="zy">
                <option value="计算机网络技术">计算机网络技术</option>
                <option value="建筑智能化工程技术">建筑智能化工程技术</option>								<option value="智能控制技">智能控制技术</option>
                <option value="信息安全与管理">信息安全与管理</option>
                <option value="数字媒体应用技术">数字媒体应用技术</option>on><option value="艺术设计">艺术设计</option>
                <option value="数字媒体艺术设计">数字媒体艺术设计</option>
                </select>
               </div>
                <div id="x4">班级：<input type="text" class="bk" name="bj" id="bj" /></div>
                <div id="x5">&nbsp;QQ：<input type="text" class="bk" name="QQ" id="qq" /></div>
                
            </form>
            <div><button name="tj" id="anliu" onclick="ty()">注册</button></div>
        </div>
        
    	
    </div>
</div>
<!-- 二维码浮层 -->
<div id="crex"></div>
</body>
<!--by:Free-->
</html>

<?php }
}
