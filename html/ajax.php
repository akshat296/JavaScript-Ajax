<html>
<body>
<div id="demo">
<script>
function loaddoc()
{
    var b= document.getElementById ("someid");
    document.getElementById ("para").innerHTML=b;
    console.log(b.value);
    var name = b.value;
    var xhttp= new XMLHttpRequest();
   
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200)
        {
            //  xhttp.setRequestHeader("Content-type", "application/json");
            obj = JSON.parse(this.responseText);
            document.getElementById ("para").innerHTML=obj;
            console.log(typeof obj);
        }
    };
    xhttp.open("GET", "datatable.php?p="+name, true);
    xhttp.send();
        }



    </script>
    <p>Alright</p>
    <form>
    <input type= "text" name="p" value="" onchange="loaddoc()" id="someid">
    

    </form>
    <br>
    <p id="para">Hello</p>
    </body>
    </html>

