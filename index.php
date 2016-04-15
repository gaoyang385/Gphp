<? php
include 'config.php';
header('Access-Control-Allow-Origin:*');  
// 响应类型  
header('Access-Control-Allow-Methods:POST');  
// 响应头设置  
header('Access-Control-Allow-Headers:x-requested-with,content-type'); 
if(isset($_GET[action]))
{
$acction=$_GET['action'];
$url='app/'.$action.'php';
include_once $url;
}
else
{
	echo BuildResault(500,'no action','');
}

?>