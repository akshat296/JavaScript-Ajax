<?php 
spl_autoload_register(function($class) { 
    include_once("$class.php");});
    include_once("../php/Database.php");
     include_once("../php/QueryClass.php");
$db=new Database();
$qc=new QueryClass();?>
<html>
    <head>
    <script>
        //ID- 6,18 are passwords 1 is file
        //4 usrname 5 email 7 gender 
        //rest till 17 are text.
   function validation(a)
   {
     
    var pass, confirm_pass, file, text, usrname, email;
    
    switch(a)
    {
    case 2,3,8,9,10,11,15,16:   

    break;
    case 1:
    break;
    case 6,18:
    break;
    



    }
   }

    </script>
    </head>
    <body>
    
      <center><h1>Registration Form</h1>
     <form action="" method="post" entype="multipart/form-data">
        <table>
             <?php 
                $fields=$qc->getFirst();
                $l=count($fields);
                for($i=0;$i<$l;$i+=2):?>
                <tr>
                <th>
                <?php if ($i!=0): echo "<br>".$fields[$i];endif;?></th>
                <td><br>
                <input type="<?php if ($i==0 ) echo "hidden";  else if ($fields[$i]=="Password"){echo "password";} 
                else { echo "text";}?>" id="<?=$i?>" name="file<?=$i?>" value="" placeholder="<?= $i?>"  onchange="validation(<?php echo $i;?>)" ></td>
                <td><p id="error<?php echo $i;?>"><?php echo "<br>".$i;?></p></td>
                <th>
                <?php 
                if($fields[$i]=="Password")
                {echo "<br>"."Confirm Password";$i--;}
                else {echo "<br>".@$fields[$i+1];}?></th><td><br><input type="<?php if (($i+1)==1) 
                {echo "file";} else if ($i==($l-1)){echo "hidden";} else if ($fields[$i+1]=="Password"){echo "password";}else { echo "text";}?>" id="<?php  if($fields[$i+1]=="Password"){echo (18);}
                 else {echo $i+1;}?>"  name="file<?=($i+1)?>" placeholder="<?php  if($fields[$i+1]=="Password"){echo (18);}
                 else {echo $i+1;}?>"></td>
                 <td><p id="error<?php  if($fields[$i+1]=="Password"){echo (18);}
                 else {echo $i+1;}?>"><?php  if(@$fields[$i+1]=="Password"){echo (18);}
                 else {echo "<br>".($i+1);}?></p></td></tr>
               <?php endfor;?>
        </table>
        <input type="submit" value="Register">
        </form>
        </center>
    </body>
</html>