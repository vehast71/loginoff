<?
function v($var){
    echo "<pre style='padding:10px;background: lightblue'>";
    print_r($var);
    echo "</pre>";
}

session_start();
if(isset($_COOKIE['count'])){
    $cook = ++$_COOKIE['count'];
    setcookie('count',$cook);
}else{
    $cook = 1;
    setcookie('count',$cook);
}
//var_dump($cook);
$file = fopen('count.txt',w) or die('error open file for counting of loading image');
fwrite($file,"count of loading image was $cook time")or die('error write of count loading image');
$contents = file_get_contents('pick.jpg');
header('Content-type: image/jpeg');
echo $contents;