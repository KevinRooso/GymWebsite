
<?php


 session_start();


         echo("<ul class='nav navbar-nav'>");

          echo("<li class='active'><a href='index.php'>Home</a></li>");
           if(isset($_SESSION["unm"]))
           {
               if($_SESSION["role"] == "Admin")
			   			{
			   			 echo("<li class='dropdown'>");
						 					echo("<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Show<b class='caret'></b></a>");
						 								echo("<ul class='dropdown-menu agile_short_dropdown'>");
						 									echo("<li><a href=ShowAllManagers.php> Managers </a></li>");
						 									echo("<li><a href=ShowAllUsers.php> User </a></li>");
						 								echo("</ul>");
						 echo("</li>");

			   			 echo("<li class='dropdown'>");
						 					echo("<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Admin<b class='caret'></b></a>");
						 								echo("<ul class='dropdown-menu agile_short_dropdown'>");
						 									echo("<li><a href=AddBranch.php> Add Branch </a></li>");
						 									echo("<li><a href=AddManager.php> Add Manager </a></li>");
						 									echo("<li><a href=AddPackage.php> Add Package </a></li>");
						 									echo("<li><a href=RechargePackage.php> Recharge Package </a></li>");
						 								echo("</ul>");
						 echo("</li>");
			            }
		   }

                            echo("<li><a href='Package.php'>Packages</a></li>");

							echo("<li><a href='index.php#facilities'>Facilities</a></li>");

							echo("<li class='dropdown'>");
								echo("<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Branches <b class='caret'></b></a>");
								echo("<ul class='dropdown-menu agile_short_dropdown'>");
									echo("<li><a href='Rohini.php'>Rohini</a></li>");
									echo("<li><a href='Pitampura.php'>Pitampura</a></li>");
									echo("<li><a href='Shalimar.php'>Shalimar Bagh</a></li>");
									echo("<li><a href='Patel.php'>Patel Nagr</a></li>");
								echo("</ul>");
							echo("</li>");


							echo("<li><a href='AboutUs.php'>About Us</a></li>");

							if(!empty($_SESSION["unm"]))
							echo("<li><a href='Logout.php'>Logout</a></li>");
							else
                            echo("<li><a href='Login.php'>Login</a></li>");
						echo("</ul>");
?>