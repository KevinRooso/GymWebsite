
<?php include("Header.php"); ?>

<script>

function Validation()
{




 var username = document.getElementsByName("username")[0].value;
 var bcode = document.getElementsByName("bcode")[0].value;


if(username == "Select Username")
{
	document.getElementById("username").innerHTML = "Must select username";
	return false;
}
else if(bcode == "Select Branch Code")
{
	document.getElementById("bcode").innerHTML = "Must select Branch Code";
	return false;
}

return true;

}
</script>


<div class="service-w3l">
	<div class="container">

		<h2 class="w3ls_head"><span>Add Ma</span>nager</h2>
			<!--<p class="w3agile">While designing your living room, it’s a good idea to think about certain  key aspects like space available, the colours to be used, the kind of furniture and accessories you fancy.</p>-->

		<div class="service-grids">

        <form method=POST action="AddManager.php" name="form" onSubmit="return Validation();">
        <table  style="width:100%;">


		<tr> <td><span id=username></span> </td> <td><span id=bcode> </span></td> </tr>

		<tr>
		<td>

		   <div class="input-group input-group-lg w3_w3layouts" style="width:90%">
		 				<span class="input-group-addon" id="sizing-addon1">
		 					<i class="fa fa-star" aria-hidden="true"></i>
		 				</span>
		 				<select name=unm class="form-control" aria-describedby="sizing-addon1"  >

		 				       	<?php

		 				       	echo("<option>Select Username</option>");
								 $con = new mysqli("localhost","root","","thegym");

		    					$qry = "Select Username from Register";

		    				$result = $con->query($qry);

		 				if($result->num_rows>0)
		    	       {
		 		            while($row = $result->fetch_object())
		 		             {
		 			                   $unm = $row->Username;
		 			                   echo("<option>$unm</option>");
		 	                   }
		 	              }



							   	?>

                     	</select>

			</div>
		</td>
		<td>

		   <div class="input-group input-group-lg w3_w3layouts" style="width:90%;float:right;">
		 				<span class="input-group-addon" id="sizing-addon1">
		 					<i class="fa fa-star" aria-hidden="true"></i>
		 				</span>
		 				<select name=bcode class="form-control" aria-describedby="sizing-addon1"  >

		 				       	<?php

		 				       	echo("<option>Select Branch Code</option>");
								 $con = new mysqli("localhost","root","","thegym");

		    					$qry = "Select BCode from Branch";

			    				$result1 = $con->query($qry);

								if($result1->num_rows>0)
							   {
									while($row = $result1->fetch_object())
									 {
											   $bcode = $row->BCode;
											   echo("<option>$bcode</option>");
									   }
								  }

							   	?>

                     	</select>

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
		$unm = $_REQUEST["unm"];
		$bcode = $_REQUEST["bcode"];



		$con = new mysqli("localhost","root","","TheGym");

		$qry = "insert into Manager(Username,BCode,Date)
 					values('$unm','$bcode',curdate());";


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