<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include 'header.php' ?>
  <?php
	if (isset($_GET["mikroid"])) {
									
	echo "<style type=\"text/css\" >
			.placeholderdiv {
			display:none;
			}
			</style>";					
									
	} else {
		echo "<style type=\"text/css\" >
			.placeholderdiv {
			display:block;
			}
			</style>";								
	}
								
?>

<script type="text/javascript">
	function hidediv() {
		$('.placeholderdiv').hide();
	};
</script>
  
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
<script src="js/bonsai.js"></script>
<script src="js/diagram.js"></script>
<script src="js/serviceout.js"></script>
<script src="js/Listingout.js"></script>
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

						<h2 class="post-title" style="color:#666666;"> Ergebnisse der Anwendung des Doppelradmodells</h2>
								<div class="clear"></div>
								<?php
								if (isset($_GET["mikroid"])) {
									echo "<p> Unter den Registerkarten „Meso“ und „Mikro“ finden Sie nun die grafische Darstellung Ihrer Eingaben.
Unter „nach weiteren Ergebnissen suchen“ können Sie in unserer Datenbank stöbern, die Darstellungen anderer Lehrveranstaltungen einsehen und sie mit Ihren Ergebnissen vergleichen. Die Filterfunktion können Sie nutzen, um einen bestimmten Fokus zu setzen. So können Sie beispielsweise Lehrveranstaltungen finden, die auf einer bestimmten Dimension die gleiche (oder die gegenteilige) Ausprägung aufweisen wie Ihre Lehrveranstaltung. Die Parameter des Filters beziehen sich jeweils auf die Mikro- oder die Mesoebene. Bitte wechseln sie die Registerkarte, um die Filtereinstellungen für die andere Ebene vorzunehmen.
									
									</p>
									";
									
									
								} else {
									echo "<p>
Hier können Sie die Ergebnisse von Lehrenden sehen, die unser Modell auf ihre Lehrveranstaltungen angewandt haben. Die grafischen Darstellungen von forschendem Lernen entstehen nach Ausfüllen unseres Fragebogens und helfen, die eigene Lehrveranstaltung einzuschätzen und zu reflektieren.
Wir freuen uns, wenn Sie unseren Fragebogen ausfüllen: &nbsp;
									<a href=\"mikroger.php\" class=\"poll-link\">  Wir freuen uns, wenn Sie unseren Fragebogen ausfüllen. </a><br><br>
									
									
									</p>		

									 <script type=\"text/javascript\">
										$('document').ready(showfilter);
										
										function showfilter() {
											$('.collapse').addClass('in');
											$('.expand-area').attr('aria-expanded','true');
											$('.collapse').attr('aria-expanded','true');
											
										
										}
										</script>		
										
										
										

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
						
							<div class="placeholderdiv">
								<p class="course-meta last"> Ergebnisedarstellung </p><br>
								<p  class="course-meta-sub-label">Wählen sie auf der rechten Seite Ihre Suchkriterien</p>
								<div class="dia" style="width:90%; height:400px; background-color:#f9f9f9; margin-bottom:20px;"></div> 
							</div>
                            <div id="labels0">

                                <p class="course-meta" id="Unilabel0">Dummy </p> <p id="Kurslabel0" class="course-meta">Dummy</p>  <p id="Fachbereichlabel0" class="course-meta last"> Dummy </p>
							
								<br style="line-height: .5em;"> 
								
								<p  class="course-meta-sub-label">Anzahl von Studierenden:</p>
								
								<p id="AnzahlStudentenlabel0" class="course-meta-sub">Dummy</p>
							
								<p class="course-meta-sub-label">Semesterzahl der Studierenden:</p>
						   
								<p id="Semesterzahllabel0" class="course-meta-sub last">Dummy</p> 
									  
                            </div>
                            <div  id="diagram0" class="dia"></div>
							
                            
							<p id="Pagination0" hidden> dummy von dummy</p>
							<button id="previousmikro" type="button" class="btn btn-primary" disabled onClick="previous(Listingmikro(),true);return false;">Letztes Ergebnis</button>
							<button id="nextmikro" type="button" class="btn btn-primary" disabled onClick="next(Listingmikro(),true);return false;">Nächstes Ergebnis</button>
						
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
										<input name="Uni" value="" class="stringFilterMikro" size="40">
									</td>
								</tr>
								<tr>
									<td>
										Kurs:
									</td>
									<td colspan="3">
										<input name="Kurs" value="" class="stringFilterMikro" size="40">
									</td>
								</tr>
                                <tr>
                                    <td>
                                        Fachbereich:
                                    </td>
                                    <td colspan="3">
                                        <input name="Fachbereich" value="" class="stringFilterMikro" size="40">
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Anzahl von Studierenden:
                                    </td>
                                    <td colspan="3">
                                        <input name="AnzahlStudenten" value="" class="stringFilterMikro" size="40">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Semesterzahl der Studierenden:
                                    </td>
                                    <td colspan="3">
                                        <input name="Semesterzahl" value="" class="stringFilterMikro" size="40">
                                    </td>
                                </tr>
								<tr>
									<td>
										Assessment:
									</td>
									<td>
										
										<input type="radio" name="Assessment" class="dimensionFilterMikro" value="1">
									</td>
									<td>
										<input type="radio" name="Assessment" class="dimensionFilterMikro" value="2">
									</td>
									<td>
										<input type="radio" name="Assessment" class="dimensionFilterMikro" value="3">
									</td>
								</tr>
								
								<tr>
									<td>
										Forschungsthema:
									</td>
									<td>
									
										<input type="radio" name="Forschungsthema" class="dimensionFilterMikro" value="1">
									</td>
									<td>
										<input type="radio" name="Forschungsthema" class="dimensionFilterMikro" value="2">
									</td>
									<td>
										<input type="radio" name="Forschungsthema" class="dimensionFilterMikro" value="3">
									</td>
								</tr>
										
								<tr>
									<td>
										Forschungsfrage:
									</td>
									<td>
										<input type="radio" name="Forschungsfrage" class="dimensionFilterMikro" value="1">
									</td>
									<td>
										<input type="radio" name="Forschungsfrage" class="dimensionFilterMikro" value="2">
									</td>
									<td >
										<input type="radio" name="Forschungsfrage" class="dimensionFilterMikro" value="3">
									</td>
								
								</tr>
										
								<tr>
									<td>
										Planung:
									</td>
									
									
									<td >
										<input type="radio" name="Planung" class="dimensionFilterMikro" value="1">
									</td>
									<td >
										<input type="radio" name="Planung" class="dimensionFilterMikro" value="2">
									</td>
									<td >
										<input type="radio" name="Planung" class="dimensionFilterMikro" value="3">
									</td>
								</tr>
										
								<tr>
									<td>
										Durchführung:
									</td>
									
									
									<td >
										<input type="radio" name="Durchfuhrung" class="dimensionFilterMikro" value="1">
									</td>
									<td >
										<input type="radio" name="Durchfuhrung" class="dimensionFilterMikro" value="2">
									</td>
									<td >
										<input type="radio" name="Durchfuhrung" class="dimensionFilterMikro" value="3">
									</td>
								</tr>
											
								<tr>
									<td>
										Reflexion:
									</td>
									<td>
										<input type="radio" name="Reflexion" class="dimensionFilterMikro" value="1">
									</td>
									<td >
										<input type="radio" name="Reflexion" class="dimensionFilterMikro" value="2">
									</td>
									<td >
										<input type="radio" name="Reflexion" class="dimensionFilterMikro" value="3">
									</td>
								</tr>
										
								<tr>
									<td>
										Ergebnisdarstellung:
									</td>
									<td>
										<input type="radio" name="Ergebnisdarstellung" class="dimensionFilterMikro" value="1">
									</td>
									<td >
										<input type="radio" name="Ergebnisdarstellung" class="dimensionFilterMikro" value="2">
									</td>
									<td>
										<input type="radio" name="Ergebnisdarstellung" class="dimensionFilterMikro" value="3">
									</td>
								</tr>
							</table>
							
							<button type="button" class="btn btn-primary bottomspace halfwidth" onClick="showall(Listingmikro(),true);hidediv();">Filter anwenden</button>
							<button type="button" class="btn btn-primary bottomspace halfwidth" onClick="cleanFilter(); return false">bereinige Filter</button>
							
							</div> <!-- collapse -->
						
							
								
								
								
								
						
						</div> <!-- end right-col -->
					</div> <!-- end 1st tab -->
					
					<div class="tab-pane " id="tab2">
						<div class="left-col">
							<div class="placeholderdiv">
								<p class="course-meta last"> Ergebnisedarstellung </p><br>
								<p  class="course-meta-sub-label">Wählen sie auf der rechten Seite Ihre Suchkriterien</p>
								<div class="dia" style="width:90%; height:400px; background-color:#f9f9f9; margin-bottom:20px;"></div> 
							</div>
							<div id="labels1" >
								<p class="course-meta" id="Unilabel1">Dummy </p> <p id="Kurslabel1" class="course-meta">Dummy</p>  <p id="Fachbereichlabel1" class="course-meta last"> Dummy </p>
							
							   <br style="line-height: .5em;"> 
								
								<p  class="course-meta-sub-label">Anzahl von Studierenden:</p>
								
								<p id="AnzahlStudentenlabel1" class="course-meta-sub">Dummy</p>
							
								<p class="course-meta-sub-label">Semesterzahl der Studierenden:</p>
						   
								<p id="Semesterzahllabel1" class="course-meta-sub last">Dummy</p>
									  
							</div>
							
							<div  id="diagram1" class="dia"></div>
                            <p id="Pagination1" hidden> dummy von dummy</p>
							<button id="previousmeso" type="button" class="btn btn-primary" disabled onClick="previous(Listingmeso(),false);return false;">Letztes Ergebnis</button>
							<button id="nextmeso" type="button" class="btn btn-primary" disabled onClick="next(Listingmeso(),false);return false;">Nächstes Ergebnis</button>
							
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
										<input name="Uni" value="" class="stringFilterMeso" size="40">
									</td>
								</tr>
								<tr>
									<td>
										Kurs:
									</td>
									<td colspan="3">
										<input name="Kurs" value="" class="stringFilterMeso" size="40">
									</td>
								</tr>
								
								<tr>
									<td>
										Fachbereich:
									</td>
									<td colspan="3">
										<input name="Fachbereich" value="" class="stringFilterMeso" size="40">
									</td>
								</tr>
								
								<tr>
									<td>
										 Anzahl von Studierenden:
									</td>
									<td colspan="3">
										<input name="AnzahlStudenten" value="" class="stringFilterMeso" size="40">
									</td>
								</tr>
								<tr>
									<td>
										 Semesterzahl der Studierenden:
									</td>
									<td colspan="3">
										<input name="Semesterzahl" value="" class="stringFilterMeso" size="40">
									</td>
								</tr>
								
								<tr>
									<td>
										Curriculare Einbindung:
									</td>
									<td>
										
										<input type="radio" name="Einbindung" class="dimensionFilterMeso" value="1">
									</td>
									<td>
										 <input type="radio" name="Einbindung" class="dimensionFilterMeso" value="2">
									</td>
									<td>
										 <input type="radio" name="Einbindung" class="dimensionFilterMeso" value="3">
									</td>
								</tr>
								
								<tr>
									<td>
										Modulare Verortung:
									</td>
									<td>
									
										<input type="radio" name="Verortung" class="dimensionFilterMeso" value="1">
									</td>
									<td>
										<input type="radio" name="Verortung" class="dimensionFilterMeso" value="2">
									</td>
									<td>
										<input type="radio" name="Verortung" class="dimensionFilterMeso" value="3">
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
										<input type="radio" name="Inhaltsrahmen" class="dimensionFilterMeso" value="2">
									</td>
									<td >
										<input type="radio" name="Inhaltsrahmen" class="dimensionFilterMeso" value="3">
									</td>
								
								</tr>
										
								<tr>
									<td>
										Prüfungsrahmen:
									</td>
									
									
									<td >
										<input type="radio" name="Prufungsrahmen" class="dimensionFilterMeso" value="1">
									</td>
									<td >
										<input type="radio" name="Prufungsrahmen" class="dimensionFilterMeso" value="2">
									</td>
									<td >
										<input type="radio" name="Prufungsrahmen" class="dimensionFilterMeso" value="3">
									</td>
								</tr>
										
								<tr>
									<td>
										Zeitrahmen:
									</td>
									
									
									<td >
										<input type="radio" name="Zeitrahmen" class="dimensionFilterMeso" value="1">
									</td>
									<td >
										<input type="radio" name="Zeitrahmen" class="dimensionFilterMeso" value="2">
									</td>
									<td >
										<input type="radio" name="Zeitrahmen" class="dimensionFilterMeso" value="3">
									</td>
								</tr>
											
								<tr>
									<td>
										Ressourcenrahmen:
									</td>
									<td>
										<input type="radio" name="Ressourcenrahmen" class="dimensionFilterMeso" value="1">
									</td>
									<td >
										<input type="radio" name="Ressourcenrahmen" class="dimensionFilterMeso" value="2">
									</td>
									<td >
										<input type="radio" name="Ressourcenrahmen" class="dimensionFilterMeso" value="3">
									</td>
								</tr>
										
								
							</table>
							<button type="button" class="btn btn-primary" onClick="showall(Listingmeso(),false)">Filter anwenden</button>
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