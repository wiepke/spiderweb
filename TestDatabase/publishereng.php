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
<?php include 'navigationeng.php' ?>

<div class="content">

    <!-- the container ( align to center ) -->
    <div class="container">
        <div class="row">

            <!-- content -->
            <section class="col s12 m12 l9 mythemes-classic mythemes-classic">
                <!-- post content wrapper -->
                <!-- post content wrapper -->
                <article class="post-915 post type-post status-publish format-standard hentry">

                    <h2 class="post-title" style="color:#666666;">Organisatorisches zum Schluss </h2>
                    <div class="clear"></div>

                    <!-- model content starts here -->
                    <div class="post-content">

                        
                        <form name="survey" method="POST" action="publishin.php?utf8=✓<?php if (isset($_GET["mikroid"])) {echo "&mikroid=";echo $_GET["mikroid"];}?><?php if (isset($_GET["mesoid"])) {echo "&mesoid=";echo $_GET["mesoid"];}?>" >
                            <div class="panel-group" id="forms">
                                <div class="panel panel-default">
									<div class="panel-collapse collapse in" id="zero">
									   <table class="table js-options-table ">
											<tr >
												<td >
														   
													  <input type="checkbox" name="agreement" value="1">
														   
												</td>
												<td>
												 With usage of tools of the Fides-Doppelradmodell I accept my given information as anonymous part of research. My Data will not be given to third parties.
												</td>
											</tr>
											
										</table> 
									   
									   
										 <button id="firstButton" type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#one"> Next </button>
									</div>
									<div class="panel-collapse collapse " id="one">
										
									<table class="table js-options-table tablebg">
											<tr class="header">
												<td colspan="2">
													You will now get a visual reply based on your given information. Furthermore you can look at other courses, compare them to yours and get contact details of the teacher. We are happy about your assent, to publish your results, so others can benefit from your experiences.
														   
												</td>
											</tr>
											<tr>
												<td width="10px" >
													<input type="radio" name="published" value="1" required>
												</td>
												<td>
                                                    Yes, other users shall see my course.
												</td>
													
											</tr>
											<tr>
												<td width="10px" >
													<input type="radio" name="published" value="0" required>
												</td>
												<td>
                                                    No, I want my results to be just seen by me.
												</td>
												
												
											</tr>
										</table> <!---knowledgebuilding negotiable topic question tasks inquiry audience assessment -->
										<button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#zero"> Back </button>
										<button class="btn btn-primary" type="submit">Next</button>
									</div>
                                    
                                </div>
                            </div> <!--complete form div -->
                        </form>
                    </div>
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
