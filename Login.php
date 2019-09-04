
<?php ob_start(); include("Header.php"); ?>


<div class="service-w3l">
	<div class="container">

		<h2 class="w3ls_head"><span>Lo</span>gin</h2>
			<!--<p class="w3agile">While designing your living room, it’s a good idea to think about certain  key aspects like space available, the colours to be used, the kind of furniture and accessories you fancy.</p>-->

		<div class="service-grids" style="width:100%;">

	<form action=Login.php method=get>

			<div class="input-group input-group-lg w3_w3layouts" style="width:30%;min-width:200px;margin-left:auto;margin-right:auto;">
				<span class="input-group-addon" id="sizing-addon1">
					<i class="fa fa-user" aria-hidden="true"></i>
				</span>
				<input type="text" name=unm class="form-control" placeholder="Username" aria-describedby="sizing-addon1">
			</div>

			<div class="input-group input-group-lg w3_w3layouts" style="width:30%;min-width:200px;margin-left:auto;margin-right:auto;">
				<span class="input-group-addon" id="sizing-addon1">
					<i class="fa fa-lock" aria-hidden="true"></i>
				</span>
				<input type="password" name=pwd class="form-control" placeholder="Password" aria-describedby="sizing-addon1">
			</div>


					<div class="input-group">
						<span class="input-group-btn">
							<input type="submit" class="btn btn-warning" name="Login" value="Login" style="width:150px;border-radius:5px;padding:10px;"  />
						</span>
					</div><!-- /input-group -->


	</form>

      <form action=Register.php method=get>
   									<div class="input-group" >
   										<span class="input-group-btn">
   											<input type="submit" name=register class="btn btn-warning" value="Register" style="width:150px;border-radius:5px;padding:10px;"  />
   										</span>
   									</div>
      </form>

              <?php
			  if(isset($_REQUEST["Login"]) )
			   {
                  $unm = $_REQUEST["unm"];
	              $pwd = $_REQUEST["pwd"];

	              $con = new mysqli("localhost","root","","thegym");
				  $qry = "Select * from register where Username='$unm' And Password='$pwd';";

				  $result = $con->query($qry);

				  if($result->num_rows>0)
		          {
		                      while($row = $result->fetch_object())
							 {

							    $_SESSION["unm"] = $unm;
							    $_SESSION["role"] = $row->Role;
							    header("Location:index.php");
							 }
				}
			  else
  		         {
  		            echo("<div class='alert alert-danger' role='alert' style='text-align:center'>");
				 	echo("<strong>Invalid Username and Password</strong>");
			        echo("</div>");
			     }
}

			   ?>


		</div>

	</div>
</div>
<!-- //services -->

<?php include("Footer.php"); ob_end_flush(); ?>