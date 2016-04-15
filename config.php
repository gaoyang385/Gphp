<?php
include_once "mysql/shared/ez_sql_core.php";
include_once "mysql/ez_sql_mysql.php";
define("db_user", "garsi");
define("db_password", "1q2w3e4r5t");
define("db_name", "garsi");
// define("db_host", "202.121.66.54:3307");
define("db_host", "114.215.94.21:3306");
//define("server","http://114.215.94.21:70/garsi-php/upload/");
function BuildResault($code,$data,$content)
{
		$resault = array () ;
		$resault ['code'] = $code;
		$resault ['data'] = $data;
		$resault ['content'] = $content;
		return json_encode($resault);
}
function QuerySql($sql)
{
	$db = new ezSQL_mysql(db_user,db_password,db_name,db_host);
	$db->query("set character set 'utf8'");
	$db->query("set names utf8");
	return $db->query($sql);
	
}
function SelectSql($sql)
{
	$db = new ezSQL_mysql(db_user,db_password,db_name,db_host);
	$db->query("set character set 'utf8'");
	$db->query("set names utf8");
	return $db->get_results($sql);
}
?>