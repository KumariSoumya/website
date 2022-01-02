<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$password1=$_POST['password'];
	$name=$_POST['name'];
	echo "$name.<br>$email.$password1.$mobile";
	echo md5($password);
	$host="localhost";
	 $user="soumya";
	 $password="1234";
	 $database="user";
	 $conn=mysqli_connect($host,$user,$password,$database);
    $sql="INSERT INTO `users`(`name`, `email`, `phone`,`password`, `forgot_password_code`) VALUES ('$name','$email','$password','null','$password','null')";
    echo $sql;
	if($conn)
		echo "<br>true";

}
?>
<script>
		  function fun(){
		  alert('Form Submitted.'); 
		  }
</script>

      <div class="form" >           
                <form  method="POST" id="change">
                    <h2 style="text-align:center; padding-top:3px;"><u><b>Enter your details for registration</b></u></h2>
                    <div style="margin-left: 31%;">
                        <input class="form1" type="text" id="mname" name="name"placeholder="Enter your Name"><br>
                        <br>
                        <input type="email" class="form1"id=eemail name="email" placeholder="Enter your Email"><br>
                        <br>
                        <input type =" number"id="nnumber" class="form1" name="mobile"  placeholder="Phone Number">
                        <br>
                        <br/>
                        <input type="password" id="mname" class="form1" name="password"placeholder="Enter your password"><br>
                        <br>
                      <select class="form1">
                        <option>Jharkhand</option>
                        <option>Bihar</option>
                        <option>Mumbai</option>
                        <option>Delhi</option>
                        <option>Odissa</option>
                       </select>
                        <br/>
                        <select class="form1" >
                          <option>class 5</option>
                          <option>class 6</option>
                          <option>class 7</option>
                          <option>class 8</option>
                          <option>class 9</option>
                          <option>class 10</option>
                          <option>class 11</option>
                          <option>class 12</option>
                        </select>
                      </div>
                                <br>
                                <br>
                                <p style="text-align: center;">You want to be part of our institute as a:</p>
                                <br> 
                                <div style="margin-left: 40%;">
                                <input  style="text-align: center;" type="radio" name="A">Student
                                <br>
                                <input style="text-align: center;" type="radio" name="A">Teacher
                                <br><input type="button" value="Submit" onclick="fun()">
                              </div>
                              <br>
                                <br>
                </form>
            </div>