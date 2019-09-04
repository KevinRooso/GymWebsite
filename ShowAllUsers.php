
<?php include("Header.php"); ?>


<div class="service-w3l">
	<div class="container">

		<h2 class="w3ls_head"><span>User </span>Details</h2>
			<!--<p class="w3agile">While designing your living room, it’s a good idea to think about certain  key aspects like space available, the colours to be used, the kind of furniture and accessories you fancy.</p>-->

		<div class="service-grids">

<?php

		    $con = new mysqli("localhost","root","","thegym");

		    $qry = "Select * from Register where Role='User'";

		    $result = $con->query($qry);

		 		if($result->num_rows>0)
		           {



		 		            echo("<div style='color:black;'><table class='table-striped' style='font-size:15px;width:100%;' >");
		 		            echo("<thead><tr style='font-size:20px;'><td style='padding:10px;'>Username</h3></td><td>Name</td><td>Date of birth</td><td>Email</td><td>Contact</td><td>Details</td><td>Edit</td><td>Delete</td></tr></thead>");
		 		            while($row = $result->fetch_object())
		 		             {

		 			                   $unm = $row->Username;
		 			                   $name = $row->FirstName .' '.$row->LastName;
		 			                   $dob = $row->DOB;
		 			                   $email = $row->Email;
		 			                   $mobile = $row->Mobile;

		 			                   echo("<tr align=center><td  style='padding:12px;'>$unm</td><td>$name</td><td>$dob</td><td>$email</td><td>$mobile</td><td> <a href=SearchStudent.php?roll=$unm&search=Search+Student><img src=Search.png /></a> </td><td> <a href=UpdateStudent.php?roll=$unm&search=Search+Student><img src=Edit.png /></a> </td><td> <a href=DeleteStudent.php?roll=$unm&search=Search+Student><img src=Delete.png /></a> </td></tr>");
		 	                   }
		 	                   echo("</table></div>");


       			}
        		else
        		echo("<h1>No Users found....");


?>

		</div>

	</div>
</div>
<!-- //services -->


<?php include("Footer.php"); ?>