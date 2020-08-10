<?php include_once 'language.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <?php include 'header.php' ?>

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

                    <h2 class="post-title" style="color:#666666;"> <?php echo $lang['Publisher_Titel']?>  </h2>
                    <div class="clear"></div>

                    <!-- model content starts here -->
                    <div class="post-content">


                        <form name="survey" method="POST" action="publishin.php?utf8=✓<?php if (isset($_GET["mikroid"])) {echo "&mikroid=";echo $_GET["mikroid"];}?><?php if (isset($_GET["mesoid"])) {echo "&mesoid=";echo $_GET["mesoid"];}?>">
                            <div class="panel-group" id="forms">
                                <div class="panel panel-default">
									<div class="panel-collapse collapse in" id="zero">
									   <table class="table js-options-table ">
											<tr >
												<td >
														   
													  <input type="checkbox" name="agreement" value="1" onclick="document.getElementById('firstButton').disabled=!document.getElementById('firstButton').disabled;">
														   
												</td>
												<td>
                                                    <?php echo $lang['Publisher_1_Text']?>
												</td>
											</tr>
											
										</table> 
									   
									   
										 <button id="firstButton" type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#one" disabled> <?php echo $lang['Btn_Next']?> </button>
									</div>
									<div class="panel-collapse collapse " id="one">
										
									<table class="table js-options-table">
											<tr class="header">
												<td colspan="2">

                                                    <?php echo $lang['Publisher_2_Beschreibung']?>
												</td>
											</tr>
											<tr>
												<td width="10px" >
													<input type="radio" name="published" value="1" required id="one-1">
												</td>
												<td>
                                                    <label class="hentry" for="one-1"><?php echo $lang['Publisher_2_Text1']?></label>
                                                </td>
													
											</tr>
											<tr>
												<td width="10px" >
													<input type="radio" name="published" value="0" required id="one-2">
												</td>
												<td>
                                                    <label class="hentry" for="one-2"><?php echo $lang['Publisher_2_Text2']?></label>
                                                </td>
											</tr>
										</table> <!---knowledgebuilding negotiable topic question tasks inquiry audience assessment -->
										<button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#zero"> <?php echo $lang['Btn_Back']?> </button>
										<button class="btn btn-primary" type="submit"><?php echo $lang['Btn_Next']?></button>
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