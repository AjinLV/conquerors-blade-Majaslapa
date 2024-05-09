<?php
function connected_Db(){

    $dsn  = 'mysql:host=fdb29.awardspace.net;dbname=3624893_ip18kb;charset=utf8';
    $opt  = array(
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    );
    #echo "Pieslegsanas veiksmiga";
    return new PDO($dsn,'3624893_ip18kb','password-changed-for-github', $opt);
    
}
$con = connected_Db();
if($con){
//echo "Izdevas pieslegties ";
}
else {
//echo "Neizdevas pieslegties ";
exit();
}
?>