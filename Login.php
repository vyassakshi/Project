<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Login</title>
  <style type="text/css">
   
div{
    background-color:LightBlue;
    width: 35%;
    text-align: center;
    padding: 20px;  
    margin: auto;
    box-shadow: 10px 10px 5px #888888;
    border-radius: 15px;
    margin-top: 200px;
    font-family: 'Calibri','Open Sans';
}

input[type=text] {
    padding:5px; 
    border:2px solid #ccc; 
    -webkit-border-radius: 5px;
    border-radius: 5px;
}

  input[type=text]:focus {
    border-color:#333;
}

input[type=password] {
    padding:5px; 
    border:2px solid #ccc; 
    -webkit-border-radius: 5px;
    border-radius: 5px;
}

input[type=password]:focus {
    border-color:#333;
}

input[type=submit] {
    padding:5px 15px; 
    background:#ccc; 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px; 
} 

a{
    text-decoration: none;
}

.left{
    float:left;
}

nav{
    position: fixed;
    top: 0;
    left: 0;
    display: block;
    width: 100%;
    background-color: #4b94a6;
    min-height: 50px;
    z-index: 1;
    list-style: none;
}

nav>a{
    line-height: 50px;
    display: inline-block;
    padding-right: 20px;
    padding-bottom: 1px;
    padding-left: 20px;
    padding-top: 0px;
    color: #fdfeff;
    font-family: 'open sans';
    float: right;
}

nav>a:hover{  
    background-color: #608299;
}

nav>a:active{
    background-color:#608299;
}
  </style>
</head>

<script>

  function validateform()
  {
    var name=document.myform.name.value;
    var password=document.myform.password.value;
    var x=document.myform.email.value;
    var atposition=x.indexOf("@");
    var dotposition=x.lastIndexOf(".");

    if(atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length)
    {
      document.getElementById("pic5").src="unchecked.png";
      document.getElementById("demo5").innerHTML = "Please enter a valid email address";
      return false;
    }
    else
    {
      document.getElementById("pic5").src="checked.png";
      document.getElementById("demo5").innerHTML = "Correct";
    }

    if(password.length<6)
    {
      document.getElementById("pic2").src="unchecked.png";
      document.getElementById("demo2").innerHTML = "Password must be at least 6 characters long";
      return false; 
    } 
    else
    {
      document.getElementById("pic2").src="checked.png";
      document.getElementById("demo2").innerHTML = "Correct";
    }

    alert("Logged In");
  }

</script>
<body>
<nav>
  <a href="#!" class="left" style="font-size: 20px">E Health Care</a>
  <a href="Login.php">Login</a>
  <a href="Register.php">Register</a>
  <a href="Contact.html">Contact</a>
  <a href="HomePage.html">About</a>
</nav>

<div>
      <form name="myform" method="post" action="Appointment.html" onsubmit="return validateform()">
       
      <table>
       <tr style="height:40px">
        <td><b>Email:</b></td>
        <td style="width:500px" align="left"><input type="text" name="email" /><img id="pic5" style="padding-left:10px"/><span id="demo5" style="padding-left:10px"></span></td>
      </tr>

      <tr style="height:40px">
        <td><b>Password:</b></td>
        <td style="width:500px" align="left"><input type="password" name="password" /><img id="pic2" style="padding-left:10px"/><span id="demo2" style="padding-left:10px"></span></td>
      </tr>

      <tr style="height:30px">
        <td></td>
        <td style="width:500px" align="left"><b><input type="submit" value="Login" /></td></b>
      </tr>

    </table>
        
      </form>
    
</div>
</body>
</html>
