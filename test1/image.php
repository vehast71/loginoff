<?
session_start();
if(isset($_COOKIE['count'])){
    $cook = ++$_COOKIE['count'];
    setcookie('count',$cook);
}else{
    $cook = 1;
    setcookie('count',$cook);
}
//var_dump($cook);
$file = fopen('counts.txt',r) or die(error_get_last());
fwrite($file,"count of loading image was $cook time") or die(error_get_last());
$contents = file_get_contents('pick.jpg');
header('Content-type: image/jpeg');
echo $contents;