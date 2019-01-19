<?php

//名称：QQ单项查询PHP接口
//来源：麻子开放平台 原创开源分享
//作者：徐文辉 请尊重作者的脑力成果
//官网：http://api.xuwenhui.xin/

error_reporting(0);
header("Content-type: text/json; charset=utf-8");
$url="http://client.show.qq.com/cgi-bin/qqshow_client_showinfo?g_tk=".Get_BKN($_GET["C_K"])."&omode=4&uin=0".$_GET['C_U']."&touin=".$_GET['Q_U']."&cmd=10413";
$ret = 'uin=o0'.$_GET['C_U'].'; skey='.$_GET['C_K'];

if(empty($_GET['Q_U'])&&empty($_GET['C_U'])&&empty($_GET['C_K'])){
    //变量必须在这个判断的前面
    echo "请提交正确参数！";
    exit;
}

if($_GET['Q_U'] == '【1】') {
    echo '请提交正确参数！';
    exit;
} else if ($_GET['C_U'] == '【2】') {
    echo '请提交正确参数！';
    exit;
} else if ($_GET['C_K'] == '【3】') {
    echo '请提交正确参数！';
    exit;
}

$data=curl_post($url,$ret);
//echo $data."\n";

$json = json_decode($data);
 if ($json ->msg == '您不是对方的好友！'){
echo "单向好友";
}elseif ($json ->msg == '您还没有登录，请先登录。' || $json ->msg ==  '输入参数出错，请检查后再试，谢谢！') {
    echo $json ->msg;
}else {
echo "双向好友";
}

function curl_post($url,$cookie){
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl,CURLOPT_COOKIE,$cookie);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($curl);
    curl_close($curl);
    return $output;
}

function Get_BKN($skey){
    $len=strlen($skey);
    $hash=5381;
    for($i=0;$i<$len;$i++){
        $hash+=((($hash<<5) & 0x7fffffff)+ord($skey[$i])) & 0x7fffffff;
        $hash&=0x7fffffff;
    }
    return $hash & 0x7fffffff;
}

?>
