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
									<div class="panel-collapse collapse in" id="zero">
									   <table class="table js-options-table ">
											<tr >
												<td >
														   
													  <input type="checkbox" name="agreement" value="agreement">
														   
												</td>
												<td>
												 Durch die Nutzung des Tools zum FideS-Doppelradmodell erkläre ich mich einverstanden, dass meine Eingaben anonymisiert in die weitere Forschungsarbeit des FideS-Projekts einfließen können. Eine Weitergabe an Dritte erfolgt nicht.
												</td>
											</tr>
											
										</table> 
									   
									   
										 <button id="firstButton" type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#one"> weiter </button>
									</div>
									<div class="panel-collapse collapse " id="one">
										
									<table class="table js-options-table tablebg">
											<tr class="header">
												<td colspan="2">
														   
													Sie erhalten nun auf Basis Ihrer Eingaben eine grafische Darstellung Ihrer Lehrveranstaltung. Um Ihr Ergebnis einschätzen zu können und Anregungen von anderen Lehrenden zu erhalten, können Sie Ihre Lehrveranstaltung danach mit anderen vergleichen. Wir freuen uns, wenn auch Sie bereit sind, Ihr Ergebnis zu veröffentlichen, so dass andere Lehrende von Ihren Erfahrungen profitieren können.
														   
												</td>
											</tr>
											<tr>
												<td width="10px" >
													<input type="radio" name="published" value="1" required>
												</td>
												<td>
													Ja, andere Nutzer*innen sollen ihre Lehrveranstaltungen mit meinen vergleichen können.
												</td>
													
											</tr>
											<tr>
												<td width="10px" >
													<input type="radio" name="published" value="0" required>
												</td>
												<td>
													Nein, nur ich soll die Auswertung meiner Eingaben einsehen können.
												</td>
												
												
											</tr>
										</table> <!---knowledgebuilding negotiable topic question tasks inquiry audience assessment -->
										<button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#zero"> zurück </button>
										<button class="btn btn-primary" type="submit">weiter</button>
									</div>
                                    
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
