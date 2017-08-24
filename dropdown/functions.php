<?php
    if($_POST['action']=='dd'){
    echo json_encode(passreset());
   }
   
   
   
  
   function passreset(){
       
       $con= mysqli_connect("localhost", "root", "", "hmis1");
        $str="select Plan_Code from master_plan_code";
        $res= mysqli_query($con,$str);
        $arr2=array();
        
        while($row= mysqli_fetch_assoc($res)){
                       $arr2[]=$row['Plan_Code'];
                     
        }
        return $arr2;
   } 



?>
