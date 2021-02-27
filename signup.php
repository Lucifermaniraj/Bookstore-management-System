<?php 
include_once 'config/auth.php'; 
include "header.php";
?>
<?php insert_token(); ?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/style.css">
    <title>
        Book Store Management System
    </title>
    <script>
        function validate() 
        {
            var err=0;
            var msg="";
            var f_name=document.getElementById("f_name").value;
            var m_name=document.getElementById("m_name").value;
            var l_name=document.getElementById("l_name").value;
            var usr_email=document.getElementById("usr_email").value;
            var usr_tel=document.getElementById("usr_tel").value;
            var usr_password=document.getElementById("upass").value;
            var usr_cpassword=document.getElementById("ucpass").value;
            
            if(f_name="")
            {
                document.getElementById("err_f_name").innerHTML="First Name field cannot be left blank";
                err++;
            }

            if(l_name="")
            {
                document.getElementById("err_l_name").innerHTML="Last Name field cannot be left blank";
                err++;
            }
            var mailformat=/^([A-Za-z0-9\.-]+)@([A-Za-z0-9-]+).([A-Za-z]){2,4}$/;
			if(usr_email=="")
			{
				document.getElementById("err_usr_email").innerHTML="Email is blank";
				err++;
			}
			else
			{
				if(!mailformat.test(usr_email))
				{
					document.getElementById("err_usr_email").innerHTML="Enter valid email";
					err++;
				}
				else{
					document.getElementById("err_usr_email").innerHTML="";
					
				}
            }
            var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
			if(usr_password=="")
			{
				document.getElementById("err_usr_password").innerHTML="Password should not blank";
				err++;
			}
			else
			{
				 if(!passw.test(usr_password))
				{
					document.getElementById("err_usr_password").innerHTML="Input Password should [6 to 20 characters which contain at least one numeric digit, one uppercase and one lowercase letter]";
					err++;
				}
				else
				{
					document.getElementById("err_usr_password").innerHTML="";
					
				}
			}
			if(usr_cpassword=="")
			{
				document.getElementById("err_usr_cpassword").innerHTML="Confirm password is blank";
				err++
			}
			else
            {
				if(usr_password!=usr_cpassword)
				{
					document.getElementById("err_usr_password").innerHTML="Password does not match";
					err++;
				}
				else
				{
					document.getElementById("err_usr_cpassword").innerHTML="";
					
				}
			}
                

            if(err==0)
			{
				return true;
			}
            else{
  
                return false;
                

            }
        }
    </script>
</head>
<body>
    
    <div class="container-register-form">
        
    <form class = "register-form" method = "POST" action = "config/main.php">
        <label for="f_name"> First Name </label>
            <input type="text" name="f_name" id="f_name" placeholder="First Name">
            <span id="err_f_name"></span><br>
        <label for="m_name"> Middle Name </label>
            <input type="text" name="m_name" id="m_name" placeholder="Middle Name">
            <span id="err_m_name"></span><br>
        <label for="l_name"> Last Name</label>
            <input type="text" name="l_name" id="l_name" placeholder="Last Name">
            <span id="err_l_name"></span><br>
        <label for="usr_email"> Email</label>
            <input type="email" name="usr_email" id="usr_email" placeholder="Email">
            <span id="err_usr_email"></span><br>
        <label for="usr_tel"> Contact Number</label>
            <input type="tel" name="usr_tel" id="usr_tel" placeholder="Phone Number">
            <span id="err_usr_tel"></span><br>
        <label for="upass"> Password</label>
            <input type="password" name="usr_password" id="upass" placeholder="Password">
            <span id="err_usr_password"></span><br>
        <label for="ucpass"> Confirm Password</label>
            <input type="password" name="usr_cpassword" id="ucpass" placeholder="Confirm Password">
            <span id="err_usr_cpassword"></span><br>
            <span id="csrf-token"></span>
        <input type="submit" value="Sign up" name="Sign_up" onclick="return validate();">
        
    </form>
    
    </div>
<?php include "footer.php";?>
</body>
</html>