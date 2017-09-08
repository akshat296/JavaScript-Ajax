<html>
    <title>

        </title>
        <head>
        <style>
       table {
            box-shadow: 5px 5px 5px 5px grey,5px 5px 5px 5px red;
            padding :30px;
            transform: translate3d(0,0,0);
            
            
            animation-duration: 0.82s;
            background-color:white;
           
            animation-timing-function:linear;


       }
       #reg{
            box-shadow: 5px 5px 5px 5px grey,5px 5px 5px 5px red;
            position:relative;
            left:0px;
            right:0px;
            height :45px;
            width:300px;
            top:0px;
            padding:0px;
            margin:10px;
           /* animation-name: box;*/
            animation-duration: 2s;
            background-color:white;
            animation-iteration-count:infinite;
            animation-timing-function:linear;
       }
       body{
           background-color:grey;
       }
       @keyframes registertext
       {
           from{
 text-shadow: 0 0 3px #389abc;
           }
           to{
    text-shadow: 0 0 3px #3a2341;
           }
       }
     @keyframes line
     {
         from
         {  
            
        background-color:red;
         }
         to{ background-color:navy;}
     }
     @keyframes box
     {
         10%,90% {
         box-shadow: 5px 5px 5px 5px red,5px 5px 5px 5px red;
         transform:translate3d(-100px,0,0);
         }
         20%,80% {
         box-shadow: 5px 5px 5px 5px navy,5px 5px 5px 5px lightblue;     transform:translate3d(200px,0,0);
         }
         30%,50%,70%{ box-shadow: 5px 5px 5px 5px red,5px 5px 5px 5px red;     transform:translate3d(400px,0,0);
             }
             40%,60%{ box-shadow: 5px 5px 5px 5px navy,5px 5px 5px 5px lightblue;     transform:translate3d(-500px,0,0);}
     } 
  
     div#hello{
         height: 2px;
         width:auto;
         animation-timing-function:linear;
         background-color:red;
        
         animation-name:line;
          animation-iteration-count: infinite;
         animation-duration:2s;
         
     }
        p{
            color:red;
        }

        h1::first-letter
        {
            color : blue;
             text-shadow: 0 0 3px #FF0000;
             
            
        }
        h1{
            
            
              text-shadow: 0 0 3px #389abc;
              animation-name: registertext;
               animation-iteration-count: infinite;
              animation-duration:2s;
        }
        input
        {
             border-radius: 5px;
             height:40px;
           
              width:375px;
        }
         input#gender
        {
             border-radius: 5px;
            
             width:15px;
             
        }
        input#Register
        {
                border: 2px blue;
                 border-radius: 25px;
                background: #375371;
                 padding: 10px; 
                  box-shadow: 5px 5px 5px grey;
                 color:white;
        }
        </style>
        </head>
    <body>

       
        <form method="post" action="">
<script>
function loaddoc(field)
{
    switch (field)
    {
        case "username":
        {
             var b;
              var checkAjax;
              c=document.getElementById("username").value;
            //console.log(c);
            //var pattern= new RegExp("");
            if(c.length>=3)
            {
               b = document.getElementById ("username");
                checkAjax=true;
            }
            else 
            {
               document.getElementById("username_error").innerHTML="Username should be greater than 3 characters";  
                 document.getElementById("table").addEventListener('webkitAnimationEnd', function(){
                 document.getElementById("table").style.webkitAnimationName = '';
}, false);

document.getElementById("table").style.webkitAnimationName = 'box'; 
                checkAjax=false;
        
           }

               break; }
        case "email":
        {
          var b;

            var c=document.getElementById("email").value;
            //console.log(c);
            //var pattern= new RegExp("");
            if(/^\w*[.]*\w*[@]\w*[.]\w*/.test(c))
            {
                  document.getElementById("email_error").innerHTML=""; 
                   b= document.getElementById ("email");  
                     checkAjax=true; 
            }
            else 
            {
               document.getElementById("email_error").innerHTML="Enter a Valid Email";    
                 document.getElementById("table").addEventListener('webkitAnimationEnd', function(){
                 document.getElementById("table").style.webkitAnimationName = '';
}, false);

document.getElementById("table").style.webkitAnimationName = 'box';
                 checkAjax=false; 
        
           }
           break;  
        }
        case "mobile":
        {
            var  checkAjax; 
         var b;
         c=document.getElementById("mobile").value;
        
            if(/[0-9]{10}$/.test(c))
            {
            b= document.getElementById ("mobile");
             checkAjax=true; 
         }
         else
         {
              document.getElementById("mobile_error").innerHTML="Enter a valid mobile 10 digit number";
                document.getElementById("table").addEventListener('webkitAnimationEnd', function(){
                 document.getElementById("table").style.webkitAnimationName = '';
}, false);

document.getElementById("table").style.webkitAnimationName = 'box';
               checkAjax=false;
         }
           break;  
        }
    }
   
    if(   checkAjax==true )
    {
    var name = b.value;
    var xhttp= new XMLHttpRequest();
   
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200)
        {
            //  xhttp.setRequestHeader("Content-type", "application/json");
            //obj = JSON.parse(this.responseText);
            document.getElementById (field+"_error").innerHTML=this.responseText;
            
         //   console.log(typeof obj);
        }
    };
    xhttp.open("GET", "datatable.php?field="+field+"&value="+name, true);
    xhttp.send();}}
    function validation(value)
{       var t=1;
       console.log(value);
        var c;
        switch (value)
        {
            case "photo":
            {
                 c=document.getElementById("photo").value;   
                 console.log (c);
                 if(/.bmp|.jpg|.jpeg|.png|.gif/.test(c))
                 {
                      document.getElementById("file_error").innerHTML="";
                 }
                 else 
                 {
                       document.getElementById("file_error").innerHTML="Enter a Valid Image File";
                 }
            }
         case "first_name": 
        {
            c=document.getElementById("first_name").value;   
            if (c.length<3)
            {
            document.getElementById("first_name_error").innerHTML="Enter more than 3 characters";
            console.log(++t);
           //style.animationName = null;
             document.getElementById("table").addEventListener('webkitAnimationEnd', function(){
                 document.getElementById("table").style.webkitAnimationName = '';
}, false);

document.getElementById("table").style.webkitAnimationName = 'box';
    // you'll probably want to preventDefault here.
             // document.getElementById("table").style.animation = "box";
             
            }
            else if (/\d+/.test(c)){
                   document.getElementById("first_name_error").innerHTML="Name should be not contain digit"; 
                     document.getElementById("table").addEventListener('webkitAnimationEnd', function(){
                 document.getElementById("table").style.webkitAnimationName = '';
}, false);

document.getElementById("table").style.webkitAnimationName = 'box';
                   

            }
            else {
                document.getElementById("first_name_error").innerHTML="";
            }
        }
    break; 
        case "last_name":
        {
             c=document.getElementById("last_name").value;   
            if (c.length<=3)
            {
            document.getElementById("last_name_error").innerHTML="Enter more than 3 characters";
             document.getElementById("table").addEventListener('webkitAnimationEnd', function(){
                 document.getElementById("table").style.webkitAnimationName = '';
}, false);

document.getElementById("table").style.webkitAnimationName = 'box';
            }
            else if (/\d+/.test(c)){
                   document.getElementById("first_name_error").innerHTML="Name should be not contain digit"; 
                     document.getElementById("table").addEventListener('webkitAnimationEnd', function(){
                 document.getElementById("table").style.webkitAnimationName = '';
}, false);

document.getElementById("table").style.webkitAnimationName = 'box';
            }
            else {
                 document.getElementById("last_name_error").innerHTML="";
            }
        }
        break;
         case "confirm_password":
        {
             c=document.getElementById("password").value;   
             d=document.getElementById("confirm_password").value;   
             var l=c.length;
             console.log(c+d);
            if (l<=8)
            {
            document.getElementById("password_error").innerHTML="Enter more than 8 characters";
              document.getElementById("table").addEventListener('webkitAnimationEnd', function(){
                 document.getElementById("table").style.webkitAnimationName = '';
}, false);

document.getElementById("table").style.webkitAnimationName = 'box';
           
            }
           
           
            if(l>8)
           {
               if(!/\d/.test(c))
               {
                    document.getElementById("password_error").innerHTML="Password Should Contain a Digit"; 
                      document.getElementById("table").addEventListener('webkitAnimationEnd', function(){
                 document.getElementById("table").style.webkitAnimationName = '';
}, false);

document.getElementById("table").style.webkitAnimationName = 'box';
                   
               }
              else if(!/\w/.test(c))
               {
                    document.getElementById("password_error").innerHTML="Password Should Contain a Character"; 
                      document.getElementById("table").addEventListener('webkitAnimationEnd', function(){
                 document.getElementById("table").style.webkitAnimationName = '';
}, false);

document.getElementById("table").style.webkitAnimationName = 'box';
                    
               }
               else if (!/[^a-z0-9A-Z]/.test(c))
               {
                    document.getElementById("password_error").innerHTML="Password Should Contain a Special Character"; 
                      document.getElementById("table").addEventListener('webkitAnimationEnd', function(){
                 document.getElementById("table").style.webkitAnimationName = '';
}, false);

document.getElementById("table").style.webkitAnimationName = 'box';
                   
               }
               else if  (c!=d)
                {
                 document.getElementById("password_error").innerHTML="Password does not match";
                   document.getElementById("table").addEventListener('webkitAnimationEnd', function(){
                 document.getElementById("table").style.webkitAnimationName = '';
}, false);

document.getElementById("table").style.webkitAnimationName = 'box';
               
            }
               else 
               {
                   document.getElementById("password_error").innerHTML=""; 
               }
           }
            

            
        }
        break;
        case "mobile":
        {
         c=document.getElementById("mobile").value;
        
            if(/[0-9]{10}$/.test(c))
            {
             document.getElementById("mobile_error").innerHTML=""; 
         }
         else
         {
              document.getElementById("mobile_error").innerHTML="Enter a valid mobile 10 digit number"; 
             
         }
    break;
        }
        case "email":
        {
            c=document.getElementById("email").value;
            //console.log(c);
            //var pattern= new RegExp("");
            if(/^\w*[.]*\w*[@]\w*[.]\w*/.test(c))
            {
                  document.getElementById("email_error").innerHTML=""; 
            }
            else 
            {
               document.getElementById("email_error").innerHTML="Enter a Valid Email";   
        
           } break; 
        }
          case "username":
        {
            c=document.getElementById("username").value;
            //console.log(c);
            //var pattern= new RegExp("");
            if(c.length>=3)
            {
                  document.getElementById("username_error").innerHTML=""; 
            }
            else 
            {
               document.getElementById("username_error").innerHTML="Username should be greater than 3 characters";   
              
           } break; 
        }

        case "address":
        {
            c=document.getElementById("address").value;
            if(c.length<3)
            {
                 document.getElementById("address_error").innerHTML="Enter a valid address";
                
            }
            else {
                document.getElementById("address_error").innerHTML=""; 
            }
        }
 }
    }

    </script>
    <center>
    <div id="reg">
    <h1 > Registration Form </h1></div>
    <br>
    <br>
    <form action="" method="post">
  




<table id="table">
    <tr><td colspan="2"><div id="hello"></div></td></tr>
    <tr>
    <td><input type = "file" name="photo" id="photo" placeholder="photo" size="50" onchange="validation(this.id)">
    </td>
     <td><p id="file_error"> </p></td>
    </tr>
    <tr>
    <td><input type = "text" id="first_name" placeholder="First Name" size="50" onchange="validation(this.id)">
    </td>
    <td><p id="first_name_error"> </p></td>
    </tr>
     <tr>
    <td><input type = "text" id="last_name" placeholder="Last Name" size="50" onchange="validation(this.id)">
    </td>
     <td><p id="last_name_error"> </p></td>
    </tr>
     <tr> <td><input type = "password" id="password" placeholder="Password" size="50" >
    </td></tr>
     <tr> <td><input type = "password" id="confirm_password" placeholder="Confirm Password" size="50" onchange="validation(this.id)">
    </td>
    <td><p id="password_error"> </p></td></tr>
     <tr>
    <td><input type = "text"  id="mobile"  placeholder="Mobile Number  " size="50" onchange="loaddoc(this.id)">
    </td>
      <td><p id="mobile_error"> </p></td></tr>
     <tr>
    <td><input type = "text" id="email" placeholder="Email" size="50" onchange="loaddoc(this.id)">
    </td><td><p id="email_error"> </p></td>
  </tr>
     <tr>
    <td><input type = "text" id="username" placeholder="Username" size="50" onchange="loaddoc(this.id)">
    </td><td><p id="username_error"> </p></td></tr>
       <tr>
    <td><input type= "radio" id="gender" name="gender" value="male">Male&nbsp<input type= "radio" id="gender" name="gender" value="female">&nbspFemale
    </td></tr>
    <tr> <td><input type = "date" id="date" placeholder="Date of birth" size="50" onchange="validation(this.id)">
    </td></tr>
     <tr> <td><input type = "text" id="address" placeholder="Address" size="50" onchange="validation(this.id)">
    </td><td><p id="address_error"> </p></td></tr>
    <tr> <td><input type = "text" id="Description" placeholder="Description" size="50">
    </td></tr>
    
   <tr >   <td colspan="2"><br><center><input type = "submit" id="Register" value="Register" size="50"></center>
    </td></tr>
 </center>
</table>
</center>
</form>

        </body>
        </html>

