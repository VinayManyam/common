<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <script type="text/javascript" src="jquery.js"></script> 
   
      <script type="text/javascript" language="javascript"> 
    $(document).ready(function() { 
        //alert(123);
            $.post(  
                  "functions.php", 
          {action:'dd'}, 
                  function(data) {
               test= JSON.parse(data);       
            alert(test);
            
            for(var i=0;i<test.length;i++)
            {
                $("#dd").append("<option value='" + test[i] + "'>"+test[i]+"</option>");
            }
            }
               );
       $('#dd').change(function(){
           alert(12345);
       });
        
        
          

  
    });
     </script>
    <body>
        <select id="dd">
            
            <option>select</option>
            
        </select>

        <?php
        // put your code here
        ?>
    </body>
</html>
