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

                    <h2 class="post-title" style="color:#666666;">Eine letzte Frage ... </h2>
                    <div class="clear"></div>

                    <!-- model content starts here -->
                    <div class="post-content">

                        
                        <form name="survey" method="POST" action="publishin.php?utf8=✓<?php if (isset($_GET["mikroid"])) {echo "&mikroid=";echo $_GET["mikroid"];}?><?php if (isset($_GET["mesoid"])) {echo "&mesoid=";echo $_GET["mesoid"];}?>" >
                            <div class="panel-group" id="forms">
                                <div class="panel panel-default">
                                   <table class="table js-options-table tablebg">
                                        <tr class="header">
											<td colspan="2">
													   
												 Do you want to publish your results?
													   
											</td>
										</tr>
                                        <tr>
											<td width="10px" >
                                                <input type="radio" name="published" value="1" required>
                                            </td>
                                            <td>
                                                Yes, everyone shall see my course.
                                            </td>
                                                
                                        </tr>
                                        <tr>
											<td width="10px" >
                                                <input type="radio" name="published" value="0" required>
                                            </td>
											<td>
												 No, the results are just for me.
                                            </td>
                                            
                                            
                                        </tr>
                                    </table> <!---knowledgebuilding negotiable topic question tasks inquiry audience assessment -->
                                    <button class="btn btn-primary" type="submit">Confirm</button>
                                </div>
                            </div> <!--complete form div -->
                        </form>
                    </div>
                </article>
            </section>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>
</body>
</html>
