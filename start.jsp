<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body {
        background-color: #AFEEEE;
      }
.mySlides {display:none;}

.navbar {
    overflow: hidden;
    background-color: #333;
    font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}


.navbar a:hover, .dropdown:hover .dropbtn, .dropbtn:focus {
    background-color: red;
}



.show {
    display: block;
}
</style>

<div class="navbar">
 <a href="home.php">Home</a>
 <a href="#">Contact Us</a>
  <a href="#">Dashboard</a>
</div>
<div class="wrapper col4">
		<div id="container">
        <form method="post" action="create_account.jsp" name="form1">
		<div class="login">
		      <center><h2><u><font color="black">ALUMNI REGISTRATION FORM</font<></u></h2>
		      	<form action="create_account.jsp" method="post" autocomplete="off">
		      		<table style="font-size: 17px;font-family:book antiqua;" cellspacing=10 cellpadding=2>
		      			<tr>
		      				<td>Full Name</td>
		      				<td><input type="text" name="txt_fullname" autocomplete="off"></td>
		      			</tr>
                        <tr>
		      				<td>DOB</td>
		      				<td><input type="date" name="txt_dob" autocomplete="off"></td>
		      			</tr>
		      			<tr>
		      				<td>Gender</td>
		      				<td>
                                <select name="ddl_gender">
                                    <option value=-1>Select Gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </td>
		      			</tr>
		      			<tr>
		      				<td>Branch</td>
		      				<td>
                                <select>
                                    <option value=-1>Select Branch</option>
                                    <option>IT</option>
                                    <option>CS</option>
                                    <option>ME</option>
                                    <option>Civil</option>
                                    <option>EE</option>
                                    <option>EXTC</option>
                                    <option>Pharmacy</option>
                                </select>
                            </td>
		      			</tr>
		      			<tr>
		      				<td>ICode</td>
		      				<td><input type="text" name="txt_icode" autocomplete="off"></td>
		      			</tr>
		      			<tr>
		      				<td>Year Of Passing</td>
		      				<td><input type="text" name="txt_yof" autocomplete="off"></td>
		      			</tr>
		      			<tr>
		      				<td>Address</td>
		      				<td><input type="text" name="txt_address" autocomplete="off"></td>
		      			</tr>
		      			<tr>
		      				<td>Orginization (where you work currently)</td>
		      				<td><input type="text" name="txt_organization"></td>
		      			</tr>
		      			<tr>
		      				<td>Destinition</td>
		      				<td><input type="text" name="txt_destinition" autocomplete="off"></td>
		      			</tr>
		      			<tr>
		      				<td>Phone Number</td>
		      				<td><input type="text" name="txt_phnumber"></td>
		      			</tr>
		      			<tr>
		      				<td>EMail</td>
		      				<td><input type="text" name="txt_email"></td>
                        </tr>
                        <tr>
		      				<td>Set Password</td>
		      				<td><input type="password" name="txt_password"></td>
                        </tr>
                        <tr>
		      				<td>Confirm Password</td>
		      				<td><input type="password" name="txt_cpassword"></td>
                        </tr>
                        <tr>
		      				<td></td>
		      				<td><input type="submit" value="Register" name="btn_register" style="width:80px;height: 30px; font-size: 17px; border-width: 3px; font-family: bomine;">    <input type="reset" value="Clear" style="width:80px;height: 30px; font-size: 17px; border-width: 3px; font-family: bomine;"></td>
		      			</tr>
		      		</table>
		      	</form>
		    </center>
	    </div>
	</form>
</div>
</div>
</body>
</html>
<div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Username</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Please choose a username.
      </div>
    </div>
  </div>