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

						<h2 class="post-title" style="color:#666666;">Fides Doppelradmodell </h2>
						<div class="clear"></div>
					
						<!-- model content starts here -->
						<div class="post-content">
					
							
							<p>
				Im folgenden betrachten wir die <em>Mesoebene</em> Ihrer Lehrveranstaltungen (//Rahmenbedingungen//), d.h. die Entscheidungen, die auf institutioneller Ebene getroffen werden. Diese haben Auswirkungen auf Sie als Lehrenden und Ihre Handlungsspielräume.	
				</p>
				
							<!-- start poll mikro -->
	
							<form name="survey" method="POST" action="mesoin.php?utf8=✓<?php if (isset($_GET["mikroid"])) {echo "&mikroid=";echo $_GET["mikroid"];}?>">
								<div class="panel-group" id="forms">
									<!-- <div class="panel panel-default">
										<div class="panel-collapse collapse in" id="zero">
											<p>
												Im Folgenden können Sie unterschiedliche Dimensionen wählen, die die Gestaltung Ihrer Lehrveranstaltung prägen. Die Auswahl dient dazu, die didaktischen Entscheidungen, die sich bei der Planung einer Lehrveranstaltung im Modus forschenden Lernens treffen, nachzuvollziehen. Bitte denken Sie beim Ausfüllen an eine bestimmte Lehrveranstaltung, die sie entweder im Nachgang reflektieren oder im Vorfeld neu konzipieren wollen. Nach Absenden des Fragebogens erhalten Sie eine grafische Darstellung Ihres Ergebnisses und können Ihre Lehrveranstaltung mit anderen vergleichen. <br>
											</p> 
											<table class="table js-options-table">
												<tr>
													<td width="10%" class="middle">
														Uni:
													</td>
													<td colspan="3">
														<div  ><input id="uniInput" name="Uni" placeholder="Uni" autofocus></div>
													</td>
												</tr>
												<tr>
													<td width="10%" class="middle">
														Kurs:
													</td>
													<td colspan="3">
														<div align="right"><input id="kursInput" name="Kurs" placeholder="Kurs"  ></div>
													</td>
                                                </tr>
												<tr>
                                                    <td width="38%">
                                                        Fachbereich:
                                                    </td>
                                                    <td colspan="3">
                                                        <div align="right"><input id="fachbereichInput" name="Fachbereich" placeholder="Fachbereich" size="72%" ></div>
                                                    </td>
                                                </tr>
                                            </table> 
											<button id="zeroButton" type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#first"> weiter </button>
										</div>
									</div> -->
									<!-- <div class="panel panel-default">
										<div class="panel-collapse collapse " id="first">
											<table class="table js-options-table">
												<tr>
													<td width="38%">
														Anzahl von Studenten:
													</td>
													<td colspan="3">
														<div align="right"><input id="anzahlInput" name="AnzahlStudenten" placeholder="0" size="72%" ></div>
													</td>
												</tr>
												<tr>
													<td width="38%">
														Semesterzahl:
													</td>
													<td colspan="3">
														<div align="right"><input id="semesterInput" name="Semesterzahl" placeholder="0" size="72%" ></div>
													</td>
												</tr>
											</table>
											<button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#zero"> zurück </button>
											<button id="firstButton" type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#second"> weiter </button>
										</div>
									</div> -->
									<div class="panel panel-default">
										<div class="panel-collapse collapse in" id="second">
											<table style="width:900px" class="table js-options-table">
												<tr class="header">
														<td colspan="2">
															Wie sieht die curriculare Einbindung aus?
														</td>
												</tr>
											
												<tr>
													<td width="10px">
														<input type="radio" name="Einbindung" value="1">
													</td>
													<td>
												
														Die studentische Forschung der ist mit Credit Points versehen und wird benotet.
													</td>
												</tr>
												<tr>
													<td width="10px">
														<input type="radio" name="Einbindung" value="2">
													</td>
													<td>
														Die studentische Forschung ist unbenotet, aber mit Credit Points versehen.
													</td>
												</tr>
												<tr>
													<td width="10px">
														<input type="radio" name="Einbindung" value="3">
													</td>
													<td>
														Die studentische Forschung wird nicht mit Credit Points versehen.
													</td>
												</tr>
												
											</table> <!---knowledgebuilding negotiable topic question tasks inquiry audience assessment -->
										
											<button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#third"> weiter </button>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-collapse collapse" id="third">
											<table class="table js-options-table">
												<tr class="header">
													<td colspan="2">
														
														Wie ist die Gewichtung (CP-Anzahl) im Curriculum?
														
													</td>
												</tr>
												<tr>
													<td width="10px">
														<input type="radio" name="Inhaltsrahmen" value="1">
													</td>
													<td>
														Die studentische Forschung hat im Studiengang / Modul ein relativ großes Gewicht.
													</td>
												</tr>
												<tr>
													<td width="10px">
														<input type="radio" name="Inhaltsrahmen" value="2">
													</td>
													<td>
														Die studentische Forschung hat im Studiengang / Modul ein relativ geringes Gewicht.
													</td>
												</tr>
												<tr>
													<td width="10px">
														<input type="radio" name="Inhaltsrahmen" value="3">
													</td>
													<td>
														Die Forschung hat für die Studierenden ein ausschließlich ideelles Gewicht.
													</td>
												</tr>
											
											</table> <!---knowledgebuilding negotiable topic question tasks inquiry audience assessment -->
											<button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#second"> zurück </button>
											<button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#fourth"> weiter </button>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-collapse collapse" id="fourth">
											<table class="table js-options-table">
												<tr class="header">
													<td colspan="2">
														
														Wie sieht die modulare Verortung aus?
														
													</td>
												</tr>
												<tr>
													<td width="10px">
														<input type="radio" name="Verortung" value="1">
													</td>
													<td>
														Die studentische Forschung ist für Studierende Pflicht.
													</td>
												</tr>
												<tr>
													<td width="10px">
														<input type="radio" name="Verortung" value="2">

													</td>
													<td>
														Die studentische Forschung ist für Studierende ein Wahlpflichtangebot.
													</td>
												</tr>
												<tr>
													<td width="10px">
														<input type="radio" name="Verortung" value="3">
													</td>
													<td>
														Die Studierenden nehmen an der Forschung freiwillig teil.
													</td>
												</tr>
											
											</table> <!---knowledgebuilding negotiable topic question tasks inquiry audience assessment -->
											<button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#third"> zurück </button>
											<button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#fifth"> weiter </button>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-collapse collapse" id="fifth">
											<table class="table js-options-table">
												<tr class="header">
													<td colspan="2">
														
														Wie ist der Prüfungsrahmen gestaltet?
														
													</td>
												</tr>
												<tr>
													<td width="10px">
														<input type="radio" name="Prufungsrahmen" value="1">
													</td>
													<td>
														Für die Bewertung der studentischen Forschung ist eine Prüfungsform vorgegeben.
													</td>
												</tr>
												<tr>
													<td width="10px">
														<input type="radio" name="Prufungsrahmen" value="2">
													</td>
													<td>
														Für die Bewertung der studentischen Forschung kann zwischen mehreren Prüfungsform gewählt werden.
													</td>
												</tr>
												<tr>
													<td width="10px">
														<input type="radio" name="Prufungsrahmen" value="3">
													</td>
													<td>
														Die studentischen Forschung wird nicht über eine Prüfung bewertet.
													</td>
												</tr>
												
											</table> <!---knowledgebuilding negotiable topic question tasks inquiry audience assessment -->
											<button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#fourth"> zurück </button>
											<button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#sixth"> weiter </button>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-collapse collapse" id="sixth">
											<table class="table js-options-table">
												<tr class="header">
													<td colspan="2">
														
														Wie ist der Zeitrahmen gestaltet?
														
													</td>
												</tr>
												<tr>
													<td width="10px">
														<input type="radio" name="Zeitrahmen" value="1">
													</td>
													<td>
														Für die studentische Forschung steht ein Semester zur Verfügung.
													</td>
												</tr>
												<tr>
													<td width="10px">
														<input type="radio" name="Zeitrahmen" value="2">
													</td>
													<td>
														Für die studentische Forschung steht mehr als ein Semester zur Verfügung.
													</td>
												</tr>
												<tr>
													<td width="10px">
														<input type="radio" name="Zeitrahmen" value="3">
													</td>
													<td>
														Studentische Forschung kann begleitend während des Studiums erfolgen.
													</td>
												</tr>
											
											</table> <!---knowledgebuilding negotiable topic question tasks inquiry audience assessment -->
											<button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#fifth"> zurück </button>
											<button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#seventh"> weiter </button>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-collapse collapse" id="seventh">
											<table class="table js-options-table">
												<tr class="header">
													<td colspan="2">
														
															Wie ist der Ressourcenrahmen gestaltet?
														
													</td>
												</tr>
												<tr>
													<td width="10px">
														<input type="radio" name="Ressourcenrahmen" value="1">
													</td>
													<td>
														Für die studentische Forschung stehen keine zusätzlichen Ressourcen zur Verfügung.
													</td>
												</tr>
												<tr>
													<td width="10px">
														<input type="radio" name="Ressourcenrahmen" value="2">
													</td>
													<td>
														Für die studentische Forschung stehen befristet Ressourcen zur Verfügung.
													</td>
												</tr>
												<tr>
													<td width="10px">
														<input type="radio" name="Ressourcenrahmen" value="3">
													</td>
													<td>
														Für die studentische Forschung stehen längerfristig planbare Ressourcen zur Verfügung.
													</td>
												</tr>
												
											</table> <!---knowledgebuilding negotiable topic question tasks inquiry audience assessment -->
											<button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#sixth"> zurück </button>
											<button class="btn btn-primary" type="submit">senden</button>
										</div>
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