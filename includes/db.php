<?php ob_start();
$db['db_host'] = "localhost";
$db['db_user'] = "id3033973_websitecms";
$db['db_pass'] = "bilal123";
$db['db_name'] = "id3033973_cms";
foreach($db as $key => $value){
    define(strtoupper($key), $value);
}
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

$query = "SET NAMES utf8";
mysqli_query($connection, $query);
//if($connection){
//    echo"We are Connected";
//}
//

?>