<!--
	app下载页面
	开发者：小A
	QQ:2253162533
	使用请注明出处
-->
<?php
$file = 'zmbz.txt';//下载量保存路径

//读取下载量
if (is_file($file)) {
    $dt = file_get_contents($file);
}else{
    $dt=0;
}

?>
<!DOCTYPE html>
<html>

	<head>
		<title>FAS桌面壁纸</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width; initial-scale=1.0; minimum-scale=1.0; maximum-scale=1.0">
		<style>
			body {
				margin: 0 auto;
				max-width: 880px;
				box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.2);
				min-width: 320px;
				padding-bottom: 0.1px
			}
			
			.aa {
				cursor: pointer;
				display: flex;
				/*Flex布局*/
				display: -webkit-flex;
				/* Safari */
				align-items: center;
				/*指定垂直居中*/
			}
			
			.child {
				display: inline-block;
			}
			
			.url {
				text-decoration: none
			}
			
			.bold {
				font-weight: 500; //粗体。
			}
			
			.shadow1 {
				background: #ffffff;
				box-shadow: #ccc 0px 2px 2px;
			}
			
			.shadow2 {
				background: #ffffff;
				box-shadow: #ccc 0px -2px 2px;
			}
			
			.shadow3 {
				background: #ffffff;
				box-shadow: #ccc 0px 1px 5px;
			}
			
			.down {
				border-top-width: 1px;
				/*边框的粗细*/
				border-right-width: 1px;
				/*边框的粗细*/
				border-bottom-width: 1px;
				/*边框的粗细*/
				border-left-width: 1px;
				border-color: #4CAF50;
				/*边框的粗细*/
				cursor: pointer;
			}
			
			.title {
				color: #4CAF50;
				list-style: none;
				border-left: solid 4px #4CAF50;
				margin: 15px 10px 10px;
				padding-left: 10px;
				font-size: 14px
			}
		</style>
	</head>

	<body style="background-color:#F5F5F5;margin: 0;">

		<div class="shadow1" style="height:230px;text-align: center;">
			<img src="img/icon_zmbz.png" width="60px" height="60px" style="margin-top: 25px;" />
			<div class="bold" style="margin-top: 5px;font-size: 16px;color: #000000;">FAS桌面壁纸</div>
			<div class="bold" style="color: #757575;margin-top: 5px;font-size: 14px;">1.0 beta</div>
			<div style="color: #757575;margin-top: 8px;font-size: 13px;">1.84MB - <?php echo $dt; ?>下载 - 简体中文</div>
			<button class="down" style="margin-top: 15px;color: #4CAF50;font-size: 14px;background:0 ;width: 120px;height: 28px;" onclick="window.location.href ='down.php?file=zmbz.txt&apk=zmbz.apk'">下载APK</button>
		</div>

		<div class="title">应用截图</div>
		<div class="shadow3 shadow2" style="padding: 5px;margin: 10px;">
			<div style="overflow-x:scroll;white-space:nowrap;">

				<a href="img/zmbzpng1.jpg">
					<img src="img/zmbzpng1.jpg" width="49%" height="100%" />
				</a>
				<a href="img/zmbzpng2.jpg">
					<img src="img/zmbzpng2.jpg" width="49%" height="100%" style="margin-left: 3px;" />
				</a>
				<a href="img/zmbzpng3.jpg">
					<img src="img/zmbzpng3.jpg" width="49%" height="100%" style="margin-left: 3px;" />
				</a>
				<a href="img/zmbzpng4.jpg">
					<img src="img/zmbzpng4.jpg" width="49%" height="100%" style="margin-left: 3px;" />
				</a>
			</div>
		</div>

		<div class="title">新版特性</div>
		<div class="shadow2 shadow3" style="margin: 10px;padding: 10px;">
			<div style="font-size: 14px;color: #757575;">修复了部分bug    </div>
		</div>
		<div class="title">应用简介</div>
		<div class="shadow2 shadow3" style="margin: 10px;padding: 10px;">
			<div style="font-size: 14px;color: #757575;">FAS桌面壁纸是由小A使用iApp单独开发的一款桌面壁纸浏览以及设置的软件。
它可以一键轻松设置手机的壁纸图片，软件源码将会在小A教程开源项目公布，敬请关注。😄😄  </div>
		</div>
		<div class="title">其他信息</div>
		<div class="shadow2 shadow3" style="margin: 10px;padding: 10px;">
			<div style="font-size: 14px;color: #757575;">应用包名：com.fas.zmbz <br> 开发者：小A

				<br></div>
		</div>

		<div style="width=100%;background: #424242;padding: 5px;" align="center">
			<div style="font-size: 10pt;;margin-left: 10px;margin-top: 20px;">
				<a class="url" href="/about.html" style="color: #E0E0E0">关于Fas · </a>
				<a class="url" href="../bq" style="color: #E0E0E0">版权声明 · </a>
				<a class="url" href="http://baidu.com" style="color:#E0E0E0">友情链接</a>
			</div>
			<div style="text-align:center;font-size:12px;color:#BDBDBD;margin:25px;margin-bottom: 35px;">Copyight © 2016-
				<?php echo date("Y") ?>
				<a style="color: #BDBDBD" href="http://fasv.xyz/">小A</a>, All Rights Reserved.
			</div>
		</div>

	</body>

</html>
