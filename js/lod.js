var yes = '0';
window.onload=function()
	{ 
		"use strict";
		/*setInterval("bgplay()",20000);*/
		er_fc();
		shar();
	};

	function cl_()
	{
		"use strict";
		var ff = document.getElementById('f');
		ff.parentNode.removeChild(ff);
	}

	function shar()
	{
	

	}

	function er()
	{
		er_fc();
	}

	function er_fc()
	{
		var fuc = '<div id="ui-z"><div id="ui-z-x"><img src="img/tb/0.png" onClick="del()"/></div><img src="img/shar/0.png" /></div>';
		document.getElementById('crex').innerHTML = fuc;
	}

	function cls()
	{
		"use strict";
		var zz = document.getElementById('ui-z');
		zz.parentNode.removeChild(zz);
	}
		
	function antj()
	{
		"use strict";
		var xh_yz_len = document.getElementById("xh").value.length;
		var xh_yz = document.getElementById("xh").value;
		var xm_yz_len = document.getElementById("xm").value.length;
		var bj_yz_len = document.getElementById("bj").value.length;
		var qq_yz_len = document.getElementById("qq").value.length;
		var qq_yz = document.getElementById("qq").value;
		if(!(!isNaN(xh_yz) && xh_yz_len == 10))
		{
				document.getElementById("xh").value = "请输入正确的学号*";
				var o =document.getElementById("xh");
				o.style.color="#ff0000";
		}
		else
		{
				yes += '1';

				if(xm_yz_len < 2)
				{
					alert("请输入姓名！");
				}
				else
				{
					yes += '2';

					if(bj_yz_len < 1)
					{
						alert("请输入班级！");
					}
					else
					{
						yes += '3';
						
						if(qq_yz_len < 1 || isNaN(qq_yz))
								{
									alert("请输入qq号!");
								}
								else
								{
									yes += '4';
								}


					}

				}
		}
 
	}

	function ty()
	{
		yes = '0';
		antj();
		if(yes == '01234')
		{
			document.getElementById("myfrom").submit();   
		}
		yes = '0';
	}
	function bgplay()
	{
		"use strict";
		var tp = Math.round(Math.random()*28);
		var dbg = document.getElementById("bg");
		dbg.style.backgroundImage = "url(img/" + tp + ".jpg)";
		dbg.style.backgroundSize = "cover";
		dbg.style.backgroundRepeat = "no-repeat";
		dbg.style.position = "absolute";
		dbg.style.zIndex = "-9999";
		
	}
	
	function cre()
	{
		"use strict";
		var se = document.getElementById("lp");
		var index = se.selectedIndex;
		var txet = se.options[index].text;
		var value = se.options[index].value;
		if(value === "信息工程系")
		{
			document.getElementById('KL').innerHTML = '专业：<select class="dt" name="zy"><option value="计算机网络技术">计算机网络技术</option><option name="建筑智能化工程技术">建筑智能化工程技术</option><option name="智能控制技">智能控制技术</option><option name="信息安全与管理">信息安全与管理</option><option name="数字媒体应用技术">数字媒体应用技术</option>on><option name="艺术设计">艺术设计</option><option name="数字媒体艺术设计">数字媒体艺术设计</option></select>';
			
			}
			else if(value === "电子电气工程系")
			{
				document.getElementById('KL').innerHTML = '专业：<select  class="dt" name="zy"><option name="电气自动化技术">电气自动化技术</option><option name="机电一体化技术(自动控制方向)">机电一体化技术(自动控制方向)</option><option name="电子信息工程技术">电子信息工程技术</option><option name="建筑电气工程技术">建筑电气工程技术</option><option name="铁道信号自动控制">铁道信号自动控制</option><option name="供用电技术">供用电技术</option><option name="机电设备维修与管理">机电设备维修与管理</option></select>';
			}
			else if(value === "管理工程系")
			{
				document.getElementById('KL').innerHTML = '专业：<select  class="dt" name="zy"><option name="会计信息管理">会计信息管理</option><option name="旅游管理">旅游管理</option><option name="物流管理">物流管理</option><option name="市场营销">市场营销</option><option name="健康管理">健康管理</option><option name="连锁经营管理">连锁经营管理</option></select>';
			}
			else if(value === "机械工程系")
			{
				document.getElementById('KL').innerHTML = '专业：<select  class="dt" name="zy"><option name="机电一体化技术">机电一体化技术</option><option name="焊接技术与自动化">焊接技术与自动化</option><option name="机械制造与自动化">机械制造与自动化</option><option name="汽车检测与维修技术">汽车检测与维修技术</option><option name="汽车营销与服务">汽车营销与服务</option><option name="数控技术">数控技术</option><option name="模具设计与制造">模具设计与制造</option></select>';
			}
			else if(value === "材料工程系")
			{
				document.getElementById('KL').innerHTML = '专业：<select  class="dt" name="zy"><option name="铁道交通运营管理">铁道交通运营管理</option><option name="工程造价">工程造价</option><option name="材料成型与控制技术">材料成型与控制技术</option><option name="金属与非金属矿矿开采技术">金属与非金属矿矿开采技术</option><option name="矿物加工技术">矿物加工技术</option><option name="铁矿资源综合利用">铁矿资源综合利用</option><option name="环境工程技术">环境工程技术</option><option name="工业分析技术">工业分析技术</option><option name="黑色冶金技术">黑色冶金技术</option><option name="工程测量技术">工程测量技术</option><option name="建筑工程技术">建筑工程技术</option></select>';
			}
		//'专业：<select><option>1</option><option>1</option><option>1</option><option>1</option><option>1</option></select>';
		
	}
	
	function del()
	{
		"use strict";
		var zz = document.getElementById('ui-z');
		zz.parentNode.removeChild(zz);
		}
		
	function Click(){
				if (event.button==2 || event.button==2){alert('Welcom to 计算机协会');
				}}
				document.onmousedown=Click;


				
	


