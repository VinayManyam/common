<?php 

function valid($name){
    return strip_tags(trim(addslashes($name)));
   }
 
function insert($tb,$arr){
    $key=array_keys($arr);
    $keys= implode(",", $key);
    $val= array_values($arr);
    $res=array();
    for($i=0;$i<count($val);$i++){
    $res[]="'".$val[$i]."'";  
    }
    $fin= implode(",", $res);
 $query="insert into $tb ($keys) values($fin)"; 
   $con=mysqli_connect("localhost","root","","ht");
   $res= mysqli_query($con, $query);
    if($res){
       echo 'success';
    }else{
        echo 'failed';
    }
}



function update($tb,$ar,$cn,$va){
    array_shift($ar);
    $read=array();
    $key=array_keys($ar);
    $val= array_values($ar);
    for($i=0;$i<count($ar);$i++){
        $read[]="$key[$i]='$val[$i]'";
    }
    $make=implode(",",$read);
    echo $query="update $tb set $make where $cn="."'".$va."'";
    $con=mysqli_connect("localhost","root","","ht");
    $res= mysqli_query($con, $query);
    if($res){
       echo 'success';
    }else{
        echo 'failed';
    }

}

?>

