
<?php include("Header.php"); ?>

<script>

function Validation()
{




 var pname = document.getElementsByName("pname")[0].value;
 var price = document.getElementsByName("price")[0].value;
 var duration = document.getElementsByName("duration")[0].value;
 var description = document.getElementsByName("description")[0].value;


document.getElementById("pname").innerHTML="";
document.getElementById("price").innerHTML="";
document.getElementById("duration").innerHTML="";
document.getElementById("description").innerHTML="";

if(pname.length == 0)
{
	document.getElementById("pname").innerHTML = "Must input Package name";
	return false;
}
else if(price.length == 0)
{
	document.getElementById("price").innerHTML = "Must input Package Price";
	return false;
}
else if(duration.length == 0)
{
	document.getElementById("duration").innerHTML = "Must input Package duration";
	return false;
}
else if(description.length == 0)
{
	document.getElementById("description").innerHTML = "Must input Package description";
	return false;
}
return true;

}
</script>


<div class="service-w3l">
	<div class="container">

		<h2 class="w3ls_head"><span>Add Pa</span>ckage</h2>
			<!--<p class="w3agile">While designing your living room, it’s a good idea to think about certain  key aspects like space available, the colours to be used, the kind of furniture and accessories you fancy.</p>-->

		<div class="service-grids">

        <form method=POST action="AddPackage.php" name="form" onSubmit="return Validation();">
        <table  style="width:100%;">



        <tr><td><span id=pname></span></td><td><span id=price></span></td></tr>

		<tr>
		<td>

			<div class="input-group input-group-lg w3_w3layouts" style="width:90%">
			   <span class="input-group-addon" id="sizing-addon1">
					   <i class="fa fa-star" aria-hidden="true"></i>
				</span>
				   <input type="text" name=pname class="form-control" placeholder="Enter Package Name" aria-describedby="sizing-addon1" value='<?php if(isset($_REQUEST["pname"])) echo($_REQUEST["pname"]);  ?>' >
			</div>

		</td>
	    <td>
		<div class="input-group input-group-lg w3_w3layouts" style="width:90%;float:right;">
		 				<span class="input-group-addon" id="sizing-addon1">
		 					<i class="fa fa-star" aria-hidden="true"></i>
		 				</span>
		 				<input type="text" name=price class="form-control" placeholder="Enter Package Price" aria-describedby="sizing-addon1" value='<?php if(isset($_REQUEST["price"])) echo($_REQUEST["price"]);  ?>' >
		</div>

		</td>
		</tr>

		<tr><td><span id=duration></span></td><td><span id=description></span></td></tr>

		<tr>
				<td>

					<div class="input-group input-group-lg w3_w3layouts" style="width:90%">
					   <span class="input-group-addon" id="sizing-addon1">
							   <i class="fa fa-star" aria-hidden="true"></i>
						</span>
						   <input type="text" name=duration class="form-control" placeholder="Enter Package Duration" aria-describedby="sizing-addon1" value='<?php if(isset($_REQUEST["Duration"])) echo($_REQUEST["Duration"]);  ?>' >
					</div>

		</td>
		<td>
				<div class="input-group input-group-lg w3_w3layouts" style="width:90%;float:right;">
				 				<span class="input-group-addon" id="sizing-addon1">
				 					<i class="fa fa-star" aria-hidden="true"></i>
				 				</span>
				 				<textarea name=description style="resize:none;" rows=4 cols=3 class="form-control" placeholder="Enter Package Description" aria-describedby="sizing-addon1" value='<?php if(isset($_REQUEST["description"])) echo($_REQUEST["description"]);  ?>'  > </textarea>
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

		$pname = $_REQUEST["pname"];
		$duration = $_REQUEST["duration"];
		$description = $_REQUEST["description"];
		$price = $_REQUEST["price"];


		$con = new mysqli("localhost","root","","TheGym");

		$qry = "insert into Package(PName,Price,Pdate,Duration,Description)
 					values('$pname','$price',curdate(),'$duration','$description');";


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