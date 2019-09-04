
<?php include("Header.php"); ?>

<script>

function Validation()
{




 var area = document.getElementsByName("address")[0].value;
 var city = document.getElementsByName("city")[0].value;
 var state = document.getElementsByName("state")[0].value;
 var mobile = document.getElementsByName("mobile")[0].value;


document.getElementById("address").innerHTML="";
document.getElementById("city").innerHTML="";
document.getElementById("state").innerHTML="";
document.getElementById("mobile").innerHTML="";

if(address.length == 0)
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
	document.getElementById("mobile").innerHTML = "Must input mobile";
	return false;
}
return true;

}
</script>


<div class="service-w3l">
	<div class="container">

		<h2 class="w3ls_head"><span>Add Br</span>anch</h2>
			<!--<p class="w3agile">While designing your living room, it’s a good idea to think about certain  key aspects like space available, the colours to be used, the kind of furniture and accessories you fancy.</p>-->

		<div class="service-grids">

        <form method=POST action="AddBranch.php" name="form" onSubmit="return Validation();">
        <table  style="width:100%;">



        <tr><td><span id=mobile></span></td><td><span id=address></span></td></tr>

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
		 					<i class="fa fa-address-book" aria-hidden="true"></i>
		 				</span>
		 				<input type="text" name=address class="form-control" placeholder="Enter Address" aria-describedby="sizing-addon1" value='<?php if(isset($_REQUEST["address"])) echo($_REQUEST["address"]);  ?>' >
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

		<tr>
		<td>
             <div class="input-group" >
             <span class="input-group-btn">
             <input type="submit" name=submit   class="btn btn-warning" value="Add" style="width:230px;font-size:18px;border-radius:5px;padding:10px;"  />
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

		$address = $_REQUEST["address"];
		$state = $_REQUEST["state"];
		$city = $_REQUEST["city"];
		$mobile = $_REQUEST["mobile"];



		$con = new mysqli("localhost","root","","TheGym");

		$qry = "insert into Branch(Address,State,City,Mobile,Date)
 					values('$address','$state','$city','$mobile',curdate());";


		$rows = $con->query($qry);

	     if($rows>0)
		  {
		        echo("<div class='alert alert-success' role='alert' style='text-align:center'>");
				echo("<strong>Data inserted successfully....</strong>");
		 		echo("</div>");
		  }
}
?>

<?php include("Footer.php"); ?>