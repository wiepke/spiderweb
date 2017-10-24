<?php
?>
<!DOCTYPE html>
<html lang="en">
    <head>

		<?php include 'header.php' ?>
		
		<script src="libs/jquery.js"></script>
		<script src="libs/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
		<script src="js/formchecker.js"></script>
		
</head>
   
<body class="home blog custom-background">
      
	
  
   <!-- header navigation -->
    <?php include 'navigation.php' ?>
        
	<div class="content">

		<!-- the container ( align to center ) -->
		<div class="container">
			<div class="row">
	 
				<!-- content -->
				<section class="col s12 m12 l9 mythemes-classic mythemes-classic">
				<!-- post content wrapper -->
				<!-- post content wrapper -->
					<article class="post-915 post type-post status-publish format-standard hentry">

						<h2 class="post-title" style="color:#666666;">Fides Doppelradmodell</h2>
						<div class="clear"></div>
					
						<!-- model content starts here -->
						<div class="post-content">
					
						
							<!-- start poll mikro -->
					
							<form name="survey" method="POST" action="additionalin.php?utf8=✓<?php if (isset($_GET["mikroid"])) {echo "&mikroid=";echo $_GET["mikroid"];}?><?php if (isset($_GET["mesoid"])) {echo "&mesoid=";echo $_GET["mesoid"];}?>">
								<div class="panel-group" id="forms">
									<div class="panel panel-default">
										
											<p>Um anderen Lehrenden einen Einblick in Ihre Lehrveranstaltung zu geben, bitten wir Sie um eine kurze Einschätzung:</p> 
											<table class="table js-options-table" style="width:70%;">
												<tr>
													<td >
														In meiner Lehrveranstaltung hat gut funktioniert…
													</td>
												</tr>
												<tr>
													<td >
														<div  >
														<textarea rows="4" cols="50" name="beneficial" ></textarea><br><br></div>
													</td>
												</tr>
												<tr>
													<td>
														An meiner Lehrveranstaltung fand ich kritisch/schwierig…
													</td>
												</tr>
												<tr>
													<td>
														<div align="right"><textarea rows="4" cols="50" name="poorly" ></textarea><br><br></div>
													</td>
                                                </tr>
												<tr>
                                                    <td>
                                                        Optional können Sie eine (E-Mail-)Adresse oder Webseite hinterlegen, um mit anderen Lehrenden in den Kontakt zu treten
                                                    </td>
												</tr>
												<tr>
                                                    <td >
                                                        <div align="right"><input name="contact" placeholder="Mailadresse oder Webseite" size="72%" ></textarea><br><br></div>
                                                    </td><br><br>
                                                </tr>
                                            </table> 
                                        <button id="submitButton" class="btn btn-primary" type="submit">weiter</button>
                                       
                                    </div>
          
								</div> <!--complete form div -->
							</form>
					
							<!--model content ends here -->
				
							<div class="clearfix"></div>
						</div> <!-- ende post content -->
					</article>
					<div class=" aligncenter"> </div>
						
				</section>
			
				<!-- widgets -->		
				<?php include 'aside.php' ?>
			</div> <!-- end row -->

		</div><!-- .container -->
	</div><!-- .content -->

   <?php include 'footer.php' ?>
    </body>
<?php
?>