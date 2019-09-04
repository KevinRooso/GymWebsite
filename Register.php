
<?php include("Header.php"); ?>

<script>

function Validation()
{



 var fnm = document.getElementsByName("fname")[0].value;
 var lnm = document.getElementsByName("lname")[0].value;
 var dob = document.getElementsByName("dob")[0].value;

 var email = document.getElementsByName("email")[0].value;
 var area = document.getElementsByName("area")[0].value;
 var state = document.getElementsByName("state")[0].value;
 var city = document.getElementsByName("city")[0].value;
 var mobile = document.getElementsByName("mobile")[0].value;
 var unm = document.getElementsByName("unm")[0].value;
 var pwd = document.getElementsByName("pwd")[0].value;
 var cpwd = document.getElementsByName("cpwd")[0].value;
 var pack1 = document.getElementsByName("package1")[0].value;
 var pack2 = document.getElementsByName("package2")[0].value;


document.getElementById("fnm").innerHTML="";
document.getElementById("lnm").innerHTML="";
document.getElementById("unm").innerHTML="";
document.getElementById("pwd").innerHTML="";
document.getElementById("dob").innerHTML="";
document.getElementById("gender").innerHTML="";
document.getElementById("email").innerHTML="";
document.getElementById("area").innerHTML="";
document.getElementById("state").innerHTML="";
document.getElementById("city").innerHTML="";
document.getElementById("mobile").innerHTML="";


if(fnm.length == 0)
{
	document.getElementById("fnm").innerHTML = "Must input first name";
	return false;
}
else if(   !fnm.match(/^[A-Za-z]+$/) )
{
    document.getElementById("fnm").innerHTML = "Incorrect format in first name, Only alphabets allowed";
	return false;
}
else if(lnm.length == 0)
{
	document.getElementById("lnm").innerHTML = "Must input last name";
	return false;
}
else if(   !lnm.match(/^[A-Za-z]+$/) )
{
    document.getElementById("lnm").innerHTML = "Incorrect format in last name, Only alphabets allowed";
	return false;
}
else if(dob.length == 0)
{
	document.getElementById("dob").innerHTML = "Must select date of birth";
	return false;
}


else if ( (document.form.gender[0].checked == false)  &&( document.form.gender[1].checked == false))
{
	document.getElementById("gender").innerHTML = "Must select gender";
	return false;
}



else if(email.length == 0)
{
	document.getElementById("email").innerHTML = "Must input Email";
	return false;
}
else if(!email.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/))
{
    document.getElementById("email").innerHTML = "Invalid Email address";
	return false;
}
else if(area.length == 0)
{
	document.getElementById("area").innerHTML = "Must input Address";
	return false;
}
else if(state.length == 0)
{
	document.getElementById("state").innerHTML = "Must input State";
	return false;
}
else if(city.length == 0)
{
	document.getElementById("city").innerHTML = "Must input City";
	return false;
}
else if(mobile.length == 0)
{
	document.getElementById("mobile").innerHTML = "Must input City";
	return false;
}
else if(!mobile.match(/^[0-9]{8,12}$/))
{
    document.getElementById("mobile").innerHTML = "Invalid phone number";
	return false;
}
else if(unm.length == 0)
{
	document.getElementById("unm").innerHTML = "Must input Username";
	return false;
}
else if(!unm.match(/^[a-zA-Z0-9]{3,15}$/))
{
    document.getElementById("unm").innerHTML = "Invalid Username";
	return false;
}
else if(pwd.length == 0)
{
	document.getElementById("pwd").innerHTML = "Must input Password";
	return false;
}
else if(!pwd.match(/^[a-zA-Z0-9]{3,15}$/))
{
    document.getElementById("pwd").innerHTML = "Invalid Password";
	return false;
}
else if(cpwd.length == 0)
{
	document.getElementById("cpwd").innerHTML = "Must Confirm Password";
	return false;
}
else if(pwd != cpwd)
{
	document.getElementById("cpwd").innerHTML = "Password mismatch";
	return false;
}

return true;

}
</script>


<div class="service-w3l">
	<div class="container">

		<h2 class="w3ls_head"><span>Reg</span>ister</h2>
			<!--<p class="w3agile">While designing your living room, it’s a good idea to think about certain  key aspects like space available, the colours to be used, the kind of furniture and accessories you fancy.</p>-->

		<div class="service-grids">

        <form method=POST action="Register.php" name="form" onSubmit="return Validation();">
        <table  style="width:100%;">

		<tr> <td><span id=fnm></span>		</td><td><span id=lnm></span></td></tr>

        <tr>
        <td>

        <div class="input-group input-group-lg w3_w3layouts" style="width:100%;">
		<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
				<input type="text" class="form-control" placeholder="Enter First Name" aria-describedby="basic-addon1" name=fname value='<?php if(isset($_REQUEST["fname"])) echo($_REQUEST["fname"]);  ?>' >
		</div>

		</td>
		<td>
		<div class="input-group input-group-lg w3_w3layouts" style="width:77%;float:right;">
						<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
						<input type="text" class="form-control" placeholder="Enter Last Name" aria-describedby="basic-addon1" name=lname value='<?php if(isset($_REQUEST["lname"])) echo($_REQUEST["lname"]);  ?>' >
		</div>
		</td>
		</tr>


		<tr> <td><span id=dob></span>		</td><td><span id=gender></span></td></tr>

		<tr>
        <td>
        <div class="input-group input-group-lg w3_w3layouts" style="width:100%;">
						<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> &nbsp Date of Birth</span>
						<input type="date" class="form-control" placeholder="Choose DOB" aria-describedby="basic-addon1" name=dob value='<?php if(isset($_REQUEST["dob"])) echo($_REQUEST["dob"]);  ?>'>
		</div>
		</td>
        <td>
        <div class="input-group input-group-lg w3_w3layouts" style="width:77%;float:right;">

								<span class="input-group-addon" id="sizing-addon1">
				                <i class="fa fa-male" aria-hidden="true">&nbsp  Male</i>
				                </span>
								<span class="input-group-addon">
								<label><input type="radio" aria-label="..." name=gender id=m value=Male <?php if(isset($_REQUEST["gender"]) && $_REQUEST["gender"]=="Male" ) echo("Checked");  ?> ></label>
                                </span>

                                <span class="input-group-addon" id="sizing-addon1">
						                <i class="fa fa-female" aria-hidden="true">&nbsp  Female</i>
						                </span>
										<span class="input-group-addon">
								<label><input type="radio" aria-label="..." name=gender id=f value=Female <?php if(isset($_REQUEST["gender"]) && $_REQUEST["gender"]=="Female" ) echo("Checked");  ?> ></label>
                                </span>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</div>

        </td>
		</tr>

        <tr><td><span id=email></span></td><td><span id=area></span></td></tr>
		<tr>
		<td>
		      <div class="input-group input-group-lg w3_w3layouts" style="width:100%">
			  				 				<span class="input-group-addon" id="sizing-addon1">
			  				 					<i class="fa fa-envelope" aria-hidden="true"></i>
			  				 				</span>
			  				 				<input type="text" name=email class="form-control" placeholder="Enter Email" aria-describedby="sizing-addon1" value='<?php if(isset($_REQUEST["email"])) echo($_REQUEST["email"]);  ?>' >
				</div>
		</td>
	    <td>
		<div class="input-group input-group-lg w3_w3layouts" style="width:77%;float:right;">
		 				<span class="input-group-addon" id="sizing-addon1">
		 					<i class="fa fa-address-book" aria-hidden="true"></i>
		 				</span>
		 				<input type="text" name=area class="form-control" placeholder="Enter Address" aria-describedby="sizing-addon1" value='<?php if(isset($_REQUEST["area"])) echo($_REQUEST["area"]);  ?>' >
		</div>

		</td>
		</tr>

		<tr><td><span id=state></span></td> <td><span id=city></span></td> </tr>

		<tr>
		<td>
				<div class="input-group input-group-lg w3_w3layouts" style="width:100%">
				 				<span class="input-group-addon" id="sizing-addon1">
				 					<i class="fa fa-address-card" aria-hidden="true"></i>
				 				</span>
				 				<input type="text" name=state class="form-control" placeholder="Enter State" aria-describedby="sizing-addon1" value='<?php if(isset($_REQUEST["state"])) echo($_REQUEST["state"]);  ?>' >
				</div>

		</td>
		<td>

						<div class="input-group input-group-lg w3_w3layouts" style="width:77%;float:right;">
						 				<span class="input-group-addon" id="sizing-addon1">
						 					<i class="fa fa-address-card-o" aria-hidden="true"></i>
						 				</span>
						 				<input type="text" name=city class="form-control" placeholder="Enter City" aria-describedby="sizing-addon1" value='<?php if(isset($_REQUEST["City"])) echo($_REQUEST["City"]);  ?>' >
						</div>

		</td>
		</tr>

		<tr><td><span id=mobile></span></td> <td><span id=unm></span></td> </tr>
		<tr>
		<td>

			<div class="input-group input-group-lg w3_w3layouts" style="width:100%">
			   <span class="input-group-addon" id="sizing-addon1">
					   <i class="fa fa-mobile" aria-hidden="true"></i>
				</span>
				   <input type="text" name=mobile class="form-control" placeholder="Enter Phone number" aria-describedby="sizing-addon1" value='<?php if(isset($_REQUEST["Mobile"])) echo($_REQUEST["Mobile"]);  ?>' >
			</div>

		</td>
		<td>

		 			<div class="input-group input-group-lg w3_w3layouts" style="width:77%;float:right;">
		 				<span class="input-group-addon" id="sizing-addon1">
		 					<i class="fa fa-user" aria-hidden="true"></i>
		 				</span>
		 				<input type="text" name=unm class="form-control" placeholder="Enter Username" aria-describedby="sizing-addon1" value= '<?php if(isset($_REQUEST["unm"])) echo($_REQUEST["unm"]);  ?>'>
					</div>

		 </td>

		</tr>

		<tr> <td><span id=pwd></span></td> <td><span id=cpwd></span></td> </tr>

		<tr>
		<td>

              <div class="input-group input-group-lg  w3_w3layouts" style="width:100%;">
				<span class="input-group-addon" id="sizing-addon1">
					<i class="fa fa-lock" aria-hidden="true"></i>
				</span>
				<input type="password" name=pwd class="form-control" placeholder="Enter Password" aria-describedby="sizing-addon1" >
			  </div>

		</td>
		<td>

             <div class="input-group input-group-lg  w3_w3layouts" style="width:77%;float:right;">
			   					  			<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
			   					  			</span>
			   					  			<input type="password" name=cpwd class="form-control" placeholder="Confirm Password" aria-describedby="sizing-addon1" >
   		     </div>

		</td>
		</tr>

		<tr> <td><span id=pack1></span> </td> <td><span id=pack2> </span></td> </tr>

		<tr>
		<td>

		   <div class="input-group input-group-lg w3_w3layouts" style="width:100%">
		 				<span class="input-group-addon" id="sizing-addon1">
		 					<i class="fa fa-star" aria-hidden="true"></i>
		 				</span>
		 				<select name=package1 class="form-control" aria-describedby="sizing-addon1"  >
		 				       	<?php

                                 if(isset($_REQUEST["package1"]))
							   	   echo("<option>".$_REQUEST["package1"]."</option>");
							   	 else
							   		echo("<option>Select Package</option>");

							   	?>

						      <option>1 Month Package : 2000 Rs</option>
						      <option>3 Month Package : 4000 Rs</option>
						      <option>6 Month Package : 6500 Rs</option>
						      <option>1 Year Package : 11000 Rs</option>
                     	</select>

			</div>
		</td>
		<td>

		 <div class="input-group input-group-lg w3_w3layouts" style="width:77%;float:right;">
				 				<span class="input-group-addon" id="sizing-addon1">
				 					<i class="fa fa-star-o" aria-hidden="true"></i>
				 				</span>
				 				<select name=package2 class="form-control" aria-describedby="sizing-addon1" >
				 				<?php

								 if(isset($_REQUEST["package2"]))
								   	   echo("<option>".$_REQUEST["package2"]."</option>");
			   			   	     else
									   echo("<option>Select Additional Package</option>");

							   	?>
								      <option>No Additional Facilties</option>
								      <option>With Spa : +500 Rs</option>
								      <option>With Spa and Personal trainer : +2000 Rs</option>
		                     	</select>

		 </div>

		</td>
		</tr>
		<tr>
		<td>
             <div class="input-group" >
             <span class="input-group-btn">
             <input type="submit" name=submit   class="btn btn-warning" value="Sign Up" style="width:230px;font-size:18px;border-radius:5px;padding:10px;"  />
             </span>
   		     </div>
        </td>
       	<td>
       	      <div class="input-group" >
              <span class="input-group-btn">
			  <input type=reset value=reset name=Reset class="btn btn-warning" value="Reset" style="width:230px;font-size:18px;border-radius:5px;padding:10px;" >
		      </span>
   		      </div>
		</td>
		</tr>
		</table>
        </form>

		</div>

	</div>
</div>

<?php


if(isset($_REQUEST["submit"]) )
{

		$fname = $_REQUEST["fname"];
		$lname = $_REQUEST["lname"];
		$dob = $_REQUEST["dob"];
		$gender = "";/*$_REQUEST["gender"];*/
		$email = $_REQUEST["email"];
		$address = $_REQUEST["area"];
		$state = $_REQUEST["state"];
		$city = $_REQUEST["city"];
		$mobile = $_REQUEST["mobile"];
		$unm = $_REQUEST["unm"];
		$pwd = $_REQUEST["pwd"];



		$con = new mysqli("localhost","root","","TheGym");

		$qry = "insert into Register(Username,Password,FirstName,LastName,DOB,Gender,Email,Address,State,City,Mobile)
 					values('$unm','$pwd','$fname','$lname','$dob','$gender','$email','$address','$state','$city','$mobile');";


		$rows = $con->query($qry);

	     if($rows>0)
		  {
		        echo("<div class='alert alert-success' role='alert' style='text-align:center'>");
				echo("<strong>Data inserted successfully....</strong>");
		 		echo("</div>");
		  }
		 else
		  {
			   echo("<div class='alert alert-danger' role='alert' style='text-align:center'>");
			   echo("<strong>Username already exists....</strong>");
			   echo("</div>");
          }
}
?>


<?php include("Footer.php"); ?>