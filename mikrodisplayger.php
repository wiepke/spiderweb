<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include 'header.php' ?>
</head> <!-- all the libraries-->
<body class="home blog custom-background" onLoad="
<?php
echo "showResults([";
if (isset($_GET["mikroid"])) {
    echo "'mikroid',";
    echo $_GET["mikroid"];
    if (isset($_GET["mesoid"])) {
        echo ',';
    }
}
if (isset($_GET["mesoid"])) {
    echo "'mesoid',";
    echo $_GET["mesoid"];
}
echo "])";

?>
        ">
<script src="libs/jquery.js"></script>
<script src="libs/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script src="bonsai.js"></script>
<script src="diagram.js"></script>
<script src="serviceout.js"></script>
<script src="Listingout.js"></script>
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

						<h2 class="post-title" style="color:#666666;">Auswertung der eingegebenen Daten</h2>
								<div class="clear"></div>
								<?php
								if (isset($_GET["mikroid"])) {
									echo "<p> Vielen Dank für die Teilnahme an unserer Umfrage! In den beiden Registerkarten Meso und Mikro finden Sie die grafische Auswertung ihrer Eingaben.<br> Über \"Nach weiteren Ergebnissen suchen\" können Sie in unserer Datenbank stöbern. Die Parameter des Filters beziehen sich jeweils auf die Mirko- oder Makroebene der Befragung - wechseln Sie die Registrkarte, um die jeweils anderen Filtereinstellungen vornehmen zu können.
									
									
									</p>
									";
									
									
								} else {
									echo "<p> Wählen Sie eine der Registerkarten Mikro oder Meso, um in den Ergebnissen der Befragung zu stöbern. Durch die Eingabe von Filterparametern und einen Klick auf \"Filter anwenden \" erhalten sie eine grafische Darstellung der Ergebnisse, die ihren gewählten Parametern entsrpechen.<br>
									Wir freuen uns, wenn Sie im Anschluss &nbsp;
									<a href=\"mikroger.php\" class=\"poll-link\">  den Fragebogen selbst ausfüllen </a><br><br>
									
									
									</p>							

									"; //end output
								}
								
								?>
						
						<ul class="nav nav-tabs">
									<li class="active">
										<a  href="#tab1" data-toggle="tab">Mikro</a>
									</li>
									<li>
										<a href="#tab2" data-toggle="tab">Meso</a>
									</li>
								</ul>

						<!-- begin modell content -->
						<div class="tab-content ">
									
									<div class="tab-pane active" id="tab1">
						<div class="left-col">
                           <div id="labels0">
	
								<p class="course-meta" id="Unilabel0">Dummy </p> <p id="Kurslabel0" class="course-meta">Dummy</p>  <p id="Fachbereichlabel0" class="course-meta last"> Dummy </p>
							
								<br style="line-height: .5em;"> 
								
								<p  class="course-meta-sub-label">Anzahl von Studierenden:</p>
								
								<p id="AnzahlStudentenlabel0" class="course-meta-sub">Dummy</p>
							
								<p class="course-meta-sub-label">Semesterzahl der Studierenden:</p>
						   
								<p id="Semesterzahllabel0" class="course-meta-sub last">Dummy</p> 
									  
							</div>
											
							<div  id="diagram0" class="dia"></div> 
							
								
							<div id="labels2">
										  
								<p>Universität3:</p>
												
								<p id="Unilabel2">Dummy</p>
						   
								<p>Projekttitel:</p>
						   
								<p id="Kurslabel2">Dummy</p>
							
								<p>Fachbereich:</p>
							
								<p id="Fachbereichlabel2">Dummy</p>
						   
								<p>Anzahl von Studierenden:</p>
							
								<p id="AnzahlStudentenlabel2">Dummy</p>
						
								<p>Semesterzahl der Studierenden:</p>
							
								<p id="Semesterzahllabel2">Dummy</p>
							</div>				  
							<div  id="diagram2" class="dia"></div>
							
							<button id="previous" type="button" class="btn btn-primary" disabled onClick="previous(Listing());return false;">Letztes Ergebnis</button>
							<button id="next" type="button" class="btn btn-primary" disabled onClick="next(Listing());return false;">Nächstes Ergebnis</button>
						
						</div>
						
						<div class="right-col">
						<button type="button" class="btn expand-area" id="expandbutton" data-toggle="collapse" data-target="#table" aria-expanded="false">Nach weiteren Ergebnissen suchen</button>
							<div class="collapse" id="table"  >
							<table class="table table-striped js-options-table">
								<tr>
									<td>
										Uni:
									</td>
									<td colspan="3">
										<input name="Uni" value="" class="stringFilter" size="40">
									</td>
								</tr>
								<tr>
									<td>
										Kurs:
									</td>
									<td colspan="3">
										<input name="Kurs" value="" class="stringFilter" size="40">
									</td>
								</tr>
								<tr>
									<td>
										Assessment:
									</td>
									<td>
										
										<input type="radio" name="Assessment" class="dimensionFilter" value="1">
									</td>
									<td>
										<input type="radio" name="Assessment" class="dimensionFilter" value="2">
									</td>
									<td>
										<input type="radio" name="Assessment" class="dimensionFilter" value="3">
									</td>
								</tr>
								
								<tr>
									<td>
										Forschungsthema:
									</td>
									<td>
									
										<input type="radio" name="Forschungsthema" class="dimensionFilter" value="1">
									</td>
									<td>
										<input type="radio" name="Forschungsthema" class="dimensionFilter" value="2">
									</td>
									<td>
										<input type="radio" name="Forschungsthema" class="dimensionFilter" value="3">
									</td>
								</tr>
										
								<tr>
									<td>
										Forschungsfrage:
									</td>
									<td>
										<input type="radio" name="Forschungsfrage" class="dimensionFilter" value="1">
									</td>
									<td>
										<input type="radio" name="Forschungsfrage" class="dimensionFilter" value="2">
									</td>
									<td >
										<input type="radio" name="Forschungsfrage" class="dimensionFilter" value="3">
									</td>
								
								</tr>
										
								<tr>
									<td>
										Planung:
									</td>
									
									
									<td >
										<input type="radio" name="Planung" class="dimensionFilter" value="1">
									</td>
									<td >
										<input type="radio" name="Planung" class="dimensionFilter" value="2">
									</td>
									<td >
										<input type="radio" name="Planung" class="dimensionFilter" value="3">
									</td>
								</tr>
										
								<tr>
									<td>
										Durchführung:
									</td>
									
									
									<td >
										<input type="radio" name="Durchfuhrung" class="dimensionFilter" value="1">
									</td>
									<td >
										<input type="radio" name="Durchfuhrung" class="dimensionFilter" value="2">
									</td>
									<td >
										<input type="radio" name="Durchfuhrung" class="dimensionFilter" value="3">
									</td>
								</tr>
											
								<tr>
									<td>
										Reflexion:
									</td>
									<td>
										<input type="radio" name="Reflexion" class="dimensionFilter" value="1">
									</td>
									<td >
										<input type="radio" name="Reflexion" class="dimensionFilter" value="2">
									</td>
									<td >
										<input type="radio" name="Reflexion" class="dimensionFilter" value="3">
									</td>
								</tr>
										
								<tr>
									<td>
										Ergebnisdarstellung:
									</td>
									<td>
										<input type="radio" name="Ergebnisdarstellung" class="dimensionFilter" value="1">
									</td>
									<td >
										<input type="radio" name="Ergebnisdarstellung" class="dimensionFilter" value="2">
									</td>
									<td>
										<input type="radio" name="Ergebnisdarstellung" class="dimensionFilter" value="3">
									</td>
								</tr>
							</table>
							
							<button type="button" class="btn btn-primary bottomspace halfwidth" onClick="showall(Listing())">Filter anwenden</button>
							<button type="button" class="btn btn-primary bottomspace halfwidth" onClick="cleanFilter(); return false">bereinige Filter</button>
							
							</div> <!-- collapse -->
						
							
								
								
								
								
						
						</div> <!-- end right-col -->
					</div> <!-- end 1st tab -->
					
					<div class="tab-pane " id="tab2">
						<div class="left-col">
							<div id="labels1" >
								<p class="course-meta" id="Unilabel1">Dummy </p> <p id="Kurslabel1" class="course-meta">Dummy</p>  <p id="Fachbereichlabel1" class="course-meta last"> Dummy </p>
							
							   <br style="line-height: .5em;"> 
								
								<p  class="course-meta-sub-label">Anzahl von Studierenden:</p>
								
								<p id="AnzahlStudentenlabel1" class="course-meta-sub">Dummy</p>
							
								<p class="course-meta-sub-label">Semesterzahl der Studierenden:</p>
						   
								<p id="Semesterzahllabel1" class="course-meta-sub last">Dummy</p>
									  
							</div>
							
							<div  id="diagram1" class="dia"></div>
							
							<button id="previous1" type="button" class="btn btn-primary" disabled onClick="previous(Listing());return false;">Letztes Ergebnis</button>
							<button id="next1" type="button" class="btn btn-primary" disabled onClick="next(Listing());return false;">Nächstes Ergebnis</button>
							
						</div> <!-- end left col -->
						
						<div class="right-col">
							<button type="button" class="btn expand-area" data-toggle="collapse" data-target="#table1" >Nach weiteren Ergebnissen suchen</button>
							
							<div class="collapse" id="table1"  >
							
								<table class="table table-striped js-options-table">
								<tr>
									<td>
										Uni:
									</td>
									<td colspan="3">
										<input name="Uni" value="" class="stringFilter" size="40">
									</td>
								</tr>
								<tr>
									<td>
										Kurs:
									</td>
									<td colspan="3">
										<input name="Kurs" value="" class="stringFilter" size="40">
									</td>
								</tr>
								
								<tr>
									<td>
										Fachbereich:
									</td>
									<td colspan="3">
										<input name="Fachbereich" value="" class="stringFilter" size="40">
									</td>
								</tr>
								
								<tr>
									<td>
										 Anzahl von Studierenden:
									</td>
									<td colspan="3">
										<input name="AnzahlStudenten" value="" class="stringFilter" size="40">
									</td>
								</tr>
								<tr>
									<td>
										 Semesterzahl der Studierenden:
									</td>
									<td colspan="3">
										<input name="Semesterzahl" value="" class="stringFilter" size="40">
									</td>
								</tr>
								
								<tr>
									<td>
										Curriculare Einbindung:
									</td>
									<td>
										
										<input type="radio" name="Einbindung" class="dimensionFilter" value="1">
									</td>
									<td>
										 <input type="radio" name="Einbindung" class="dimensionFilter" value="2">
									</td>
									<td>
										 <input type="radio" name="Einbindung" class="dimensionFilter" value="3">
									</td>
								</tr>
								
								<tr>
									<td>
										Modulare Verortung:
									</td>
									<td>
									
										<input type="radio" name="Verortung" class="dimensionFilter" value="1">
									</td>
									<td>
										<input type="radio" name="Verortung" class="dimensionFilter" value="2">
									</td>
									<td>
										<input type="radio" name="Verortung" class="dimensionFilter" value="3">
									</td>
								</tr>
										
								<tr>
									<td>
										Inhaltsrahmen:
									</td>
									<td>
										<input type="radio" name="Inhaltsrahmen" class="dimensionFilter" value="1">
									</td>
									<td>
										<input type="radio" name="Inhaltsrahmen" class="dimensionFilter" value="2">
									</td>
									<td >
										<input type="radio" name="Inhaltsrahmen" class="dimensionFilter" value="3">
									</td>
								
								</tr>
										
								<tr>
									<td>
										Prüfungsrahmen:
									</td>
									
									
									<td >
										<input type="radio" name="Prufungsrahmen" class="dimensionFilter" value="1">
									</td>
									<td >
										<input type="radio" name="Prufungsrahmen" class="dimensionFilter" value="2">
									</td>
									<td >
										<input type="radio" name="Prufungsrahmen" class="dimensionFilter" value="3">
									</td>
								</tr>
										
								<tr>
									<td>
										Zeitrahmen:
									</td>
									
									
									<td >
										<input type="radio" name="Zeitrahmen" class="dimensionFilter" value="1">
									</td>
									<td >
										<input type="radio" name="Zeitrahmen" class="dimensionFilter" value="2">
									</td>
									<td >
										<input type="radio" name="Zeitrahmen" class="dimensionFilter" value="3">
									</td>
								</tr>
											
								<tr>
									<td>
										Ressourcenrahmen:
									</td>
									<td>
										<input type="radio" name="Ressourcenrahmen" class="dimensionFilter" value="1">
									</td>
									<td >
										<input type="radio" name="Ressourcenrahmen" class="dimensionFilter" value="2">
									</td>
									<td >
										<input type="radio" name="Ressourcenrahmen" class="dimensionFilter" value="3">
									</td>
								</tr>
										
								
							</table>
							<button type="button" class="btn btn-primary" onClick="showall(Listing())">Filter anwenden</button>
								<button type="button" class="btn btn-primary" onClick="cleanFilter(); return false">bereinige Filter</button>
							
						</div> <!--- end collapse -->
						
					</div> <!-- end right col -->
				</div> <!-- end tab 2 -->
			</div> <!-- end tab content-->
						
			<!-- end of modell content -->
						
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