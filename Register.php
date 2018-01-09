<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <style type="text/css">
  	
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

div{
    background-color: LightBlue;
    width: 40%;
    text-align: center;
    padding: 20px;  
    margin: auto;
    box-shadow: 10px 10px 5px #888888;
    border-radius: 15px;
    margin-top: 200px
}

input[type=text]{
    padding:5px; 
    border:2px solid #ccc; 
    -webkit-border-radius: 5px;
    border-radius: 5px;
}

input[type=text]:focus{
    border-color:#333;
}

input[type=password]{
    padding:5px; 
    border:2px solid #ccc; 
    -webkit-border-radius: 5px;
    border-radius: 5px;
}

input[type=password]:focus{
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

textarea{
    padding:5px; 
    border:2px solid #ccc; 
    -webkit-border-radius: 5px;
    border-radius: 5px;
}

</style>

</head>
<script>

  function validateform()
  {
    var name=document.myform.name.value;
    var address=document.myform.address.value;
    var password=document.myform.password.value;
    var secondpassword=document.myform.password2.value;
    var x=document.myform.email.value;
    var atposition=x.indexOf("@");
    var dotposition=x.lastIndexOf(".");
    var gender=document.myform.gender.value;

    if(name==null||name=="")
    {
      document.getElementById("pic").src="unchecked.png";
      document.getElementById("demo").innerHTML = "Name can't be blank";
      return false;
    }
    else
    {
      document.getElementById("pic").src="checked.png";
      document.getElementById("demo").innerHTML = "Correct";
    }

    if(address==null||address=="")
    {
      document.getElementById("pic1").src="unchecked.png";
      document.getElementById("demo1").innerHTML = "Address can't be blank";
      return false;
    }
    else
    {
      document.getElementById("pic1").src="checked.png";
      document.getElementById("demo1").innerHTML = "Correct";
    }

    if(gender==null||gender=="")
    {
      document.getElementById("pic4").src="unchecked.png";
      document.getElementById("demo4").innerHTML = "Select a Gender";
      return false;
    }
    else
    {
      document.getElementById("pic4").src="checked.png";
      document.getElementById("demo4").innerHTML = "Correct";
    }

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

    if(password!=secondpassword)
    {
      document.getElementById("pic3").src="unchecked.png";
      document.getElementById("demo3").innerHTML = "Password must be same!";
      return false;
    }
    else
    {
      document.getElementById("pic3").src="checked.png";
      document.getElementById("demo3").innerHTML = "Correct";
    }

    alert("Successfully registered!");
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
<h1 style="color:midnightblue">Registration Form</h1>  

  <form name="myform" method="post" action="#" onsubmit="return validateform()">
    <table>
      <tr style="height:30px">
        <td style="width:120px;"><b>Name:</b></td>
        <td style="width:500px" align="left"><input type="text" name="name"/><img id="pic" style="padding-left:10px"  /><span id="demo" style="padding-left:10px"></span></td>
      </tr>

      <tr style="height:30px">
        <td style="width:120px;"><b>Address:</b></td>
        <td style="width:500px" align="left"><textarea name="address" wrap="on" rows="5" cols="30"></textarea><img id="pic1" style="padding-left:10px"  /><span id="demo1" style="padding-left:10px"></span></td>
      </tr>  
      

      <tr style="height:30px">
        <td style="width:120px;"><b>Gender:</b></td>
        <td style="width:500px" align="left">
          <input name="gender" type="radio" value="m">Male
          <input name="gender" type="radio" value="f">Female
            <img id="pic4" style="padding-left:10px"/><span id="demo4" style="padding-left:10px"></span></td>
      </tr>

      <tr style="height:30px">
        <td><b>Email:</b></td>
        <td style="width:500px" align="left"><input type="text" name="email" /><img id="pic5" style="padding-left:10px"/><span id="demo5" style="padding-left:10px"></span></td>
      </tr>

      <tr style="height:30px">
        <td><b>Password:</b></td>
        <td style="width:500px" align="left"><input type="password" name="password" /><img id="pic2" style="padding-left:10px"/><span id="demo2" style="padding-left:10px"></span></td>
      </tr>

      <tr style="height:30px">
        <td><b>Retype password:</b></td>
        <td style="width:500px" align="left"><input type="password" name="password2" /><img id="pic3" style="padding-left:10px"/><span id="demo3" style="padding-left:10px"></span></td>
      </tr>

      <tr style="height:30px">
        <td></td>
        <td style="width:500px" align="left"><b><input type="submit" value="Register" /></td></b>
      </tr>

    </table>
  </form>
</div>

</body>
</html>