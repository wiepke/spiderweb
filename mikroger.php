<?php
?>
<!DOCTYPE html>
<html lang="en">
    <head>

		<?php include 'header.php' ?>
		
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
					
							<form name="survey" method="POST" action="mikroin.php?utf8=✓">
								<div class="panel-group" id="forms">
									<div class="panel panel-default">
										<div class="panel-collapse collapse in" id="zero">
											<p >Zunächst bitten wir Sie um einige allgemeine Angaben zu Ihrer Lehrveranstaltung.</p> <!-- explanation text -->
											<table class="table js-options-table">
												<tr>
													<td width="10%" class="middle">
														Hochschule:
													</td>
													<td colspan="3">
														<div  ><input id="uniInput" name="Uni" placeholder="Uni" autofocus  ></div>
													</td>
												</tr>
												<tr>
													<td width="10%" class="middle">
														Titel der Lehrveranstaltung:
													</td>
													<td colspan="3">
														<div align="right"><input id="kursInput" name="Kurs" placeholder="Kurs"   ></div>
													</td>
                                                </tr>
												<tr>
                                                    <td width="38%">
                                                        Fachbereich:
                                                    </td>
                                                    <td colspan="3">
                                                        <div align="right"><input id="fachbereichInput" name="Fachbereich" placeholder="Fachbereich" size="72%"  ></div>
                                                    </td>
                                                </tr>
												<tr>
                                                    <td width="38%">
                                                        Anzahl an Studierenden:
                                                    </td>
                                                    <td colspan="3">
                                                        <div align="right"><input id="anzahlInput" name="AnzahlStudenten" placeholder="0" size="72%"  ></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="38%" >
                                                        Semesterzahl der Studierenden <span class="question"><span class="tooltipp">In welchem Semester sind die Studierenden in Ihrer Lehrveranstaltung (Angabe "von x bis y" möglich)?"</span> </span>:
                                                    </td>
                                                    <td colspan="3">
                                                        <select name="Semesterzahl" id="semesterInput">
                                                            <option value="">Wählen Sie eine Anzahl</option>
                                                            <option value="1">1-3 Bachelor</option>
                                                            <option value="4">4-6 Bachelor</option>
                                                            <option value="6">Master</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                            </table> <!-- all dimensions of the universities -->
											 
                                            <button id="firstButton" type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#second"> weiter </button>
                                           
                                        </div>
                                    </div>
                                   
									<div class="panel panel-default">
										<div class="panel-collapse collapse" id="second">
										<p>
											Im folgenden betrachten wir die <em>Mikroebene</em> Ihrer Lehrveranstaltungen (Lehr-/Lernsetting), d.h. die Entscheidungen, die Sie persönlich für Ihren Kurs treffen. Diese haben Auswirkungen auf die Autonomie der Studierenden und ihre Handlungsspielräume.
										</p>
											<table class="table js-options-table">
											
												<tr class="header">
													<td colspan="2">
														
															Wer bestimmt das Forschungsthema?
														
													</td>
												</tr>
									
												<tr>
													<td width="10px">
														<input type="radio" name="Forschungsthema" value="1"  >
													</td>
													
													<td >
														Lehrende geben das Forschungsthema vor.
													</td>
												</tr>
												<tr>
													<td  width="10px" >
														<input type="radio" name="Forschungsthema" value="2"  >
													</td>
													
													<td >
														Innerhalb eines vorgegebenen Rahmens legen die Studierenden ihr Forschungsthema fest.
													</td>
												</tr>
												<tr>
													<td  width="10px">
														<input type="radio" name="Forschungsthema" value="3" >
													</td>
													<td >
														Die Studierenden legen das Thema ihrer Forschungsarbeit selbst fest.
													</td>
												</tr>
												
												
											</table> <!---knowledgebuilding negotiable topic question tasks inquiry audience assessment -->
										<button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#zero"> zurück </button>
										<button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#third"> weiter </button>
										
										</div>
									</div> <!-- .panel -->
					   
								    <div class="panel panel-default">
										<div class="panel-collapse collapse" id="third">
											<table class="table js-options-table">
												<tr class="header">
													<td colspan="2">
														
														Wer entwickelt die Forschungsfrage?
														
													</td>
												</tr>
												<tr>
												
													<td width="10px">
														<input type="radio" name="Forschungsfrage" value="1"  >
													</td>
													<td>
														Lehrende geben die Forschungsfrage vor.
													</td>
												</tr>
												<tr>
													<td width="10px">
														<input type="radio" name="Forschungsfrage" value="2" >
													</td>
													<td>
														Die Studierenden entwickeln die Forschungsfrage unter Anleitung von Lehrenden.
													</td>
												</tr>
												<tr>
													<td width="10px">
														<input type="radio" name="Forschungsfrage" value="3" >
													</td>
													<td >
														Die Studierenden entwickeln die Forschungsfrage selbst.
													</td>
													
												</tr>
												
											</table> <!---knowledgebuilding negotiable topic question tasks inquiry audience assessment -->
											<button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#second"> zurück </button>
											<button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#fourth"> weiter </button>
										</div>
									</div> <!-- .panel -->
									
									<div class="panel panel-default">
										<div class="panel-collapse collapse" id="fourth">
											<table class="table js-options-table">
												<tr class="header">
													<td colspan="2">
													   
														Wie planen die Studierenden den Forschungsprozess?
													   
													</td>
												</tr>
											   
											   <tr>
													<td width="10px">
														<input type="radio" name="Planung" value="1"   >
													</td>
													<td >
														Lehrende geben Phasen und Fristen des Forschungs-prozesses vor.
													</td>
												</tr>
												<tr>
													
													 <td width="10px">
														<input type="radio" name="Planung" value="2" >
													</td>
													<td >
														Die Studierenden planen unter Anleitung von Lehrenden den Forschungsprozess.
													</td>
												</tr>
												<tr>
													<td width="10px">
														<input type="radio" name="Planung" value="3" >
													</td>
													<td >
														Die Studierenden planen den Forschungsprozess selbständig.
													</td>
											   
												</tr>
											</table> <!---knowledgebuilding negotiable topic question tasks inquiry audience assessment -->
											<button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#third"> zurück </button>
											<button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#fifth"> weiter </button>
										</div>
									</div> <!-- .panel -->
									
									<div class="panel panel-default">
										<div class="panel-collapse collapse" id="fifth">
											<table class="table js-options-table">
												<tr class="header">
													<td colspan="2">
														
														Wie führen die Studierenden die Forschung durch?
													  
													</td>
												</tr>
												<tr>
													<td  width="10px">
														<input type="radio" name="Durchfuhrung" value="1"   >
													</td>
													<td >
														Lehrende (oder Tutoren) leiten die Durchführung der Forschung an.
													</td>
													
												</tr>
												<tr>
													 <td  width="10px">
														<input type="radio" name="Durchfuhrung" value="2" >
													</td>
													<td >
														Die Studierenden führen mit Unterstützung von Lehrenden (oder Tutoren) ihre Forschung durch.
													</td>
												</tr>
												<tr>
													 <td  width="10px">
														<input type="radio" name="Durchfuhrung" value="3" >
													</td>
													<td>
														Die Studierenden führen die Forschung selbständig durch.
													</td>
												</tr>
											  
											</table>
											<button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#fourth"> zurück </button>
											<button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#sixth"> weiter </button>
										</div>
									</div> <!-- .panel -->
									
									<div class="panel panel-default">
										<div class="panel-collapse collapse" id="sixth">
											<table class="table  js-options-table">
												<tr class="header">
													<td colspan="2">
														
														Wie erhalten die Studierenden Feedback im Forschungs-prozess?
													   
													</td>
												</tr>
												<tr>
													 <td width="10px">
														<input type="radio" name="Reflexion" value="1"  >
													</td>
													<td >
														Lehrende (oder Tutoren) geben (oder fordern) zu gesetzten Zeitpunkten (Peer-)Feedback.
													</td>
												</tr>
												<tr>
													 <td width="10px">
														<input type="radio" name="Reflexion" value="2" >
													</td>
													<td >
														Gesetztes und selbst eingeholtes Feedback werden kombiniert
													</td>
												</tr>
												<tr>
													 <td width="10px">
														<input type="radio" name="Reflexion" value="3" >
													</td>
													<td>
														Die Studierenden erfragen selbst Feedback bei Lehrenden oder Peers.
													</td>
												</tr>
											   
											</table> <!---knowledgebuilding negotiable topic question tasks inquiry audience assessment -->
											<button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#fifth"> zurück </button>
											<button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#seventh"> weiter </button>
										</div>
									</div>  <!-- .panel -->
									
									<div class="panel panel-default">
										<div class="panel-collapse collapse" id="seventh">
											<table class="table  js-options-table">
												<tr class="header">
													<td colspan="2">
														
														Was passiert mit den Ergebnissen studentischer Forschung?
														
													</td>
												</tr>
												<tr>
													 <td width="10px">
														<input type="radio" name="Ergebnisdarstellung" value="1"  >
													</td>
													<td >
														Die Ergebnisse bleiben im geschützten Rahmen der Beteiligten.
													</td>
												</tr>
												<tr>
													 <td width="10px">
														<input type="radio" name="Ergebnisdarstellung" value="2" >
													</td>
													<td >
														Die Ergebnisse werden im Fachbereich / in der Fakultät öffentlich gemacht.
													</td>
												</tr>
												<tr>
													 <td width="10px">
														<input type="radio" name="Ergebnisdarstellung" value="3" >
													</td>
													<td >
														Die Ergebnisse werden veröffent-licht und hochschulweit sichtbar.
													</td>
												</tr>
											   
											</table> <!---knowledgebuilding negotiable topic question tasks inquiry audience assessment -->
											<button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#sixth"> zurück </button>
											<button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#eighth"> weiter </button>
										</div>
									</div> <!-- .panel -->
									
									<div class="panel panel-default">
										<div class="panel-collapse collapse" id="eighth">
											<table class="table  js-options-table">
												<tr class="header">
													<td colspan="2">
													   
														Wie wird der Erfolg der Forschung bewertet?
													   
													</td>
												</tr>
												<tr>
													<td width="10px" >
														<input type="radio" name="feedback" value="1"  >
													</td>
													<td >
														Es gibt eine vorgegebene Form zur Bewertung (z.B. über eine Prüfung).
													</td>
												</tr>
												<tr>
													<td width="10px">
														<input type="radio" name="feedback" value="2" >
													</td>
													<td >
														Lehrende und Studierende bestimmen im Prozess, wie die Forschung bewertet werden kann.
													</td>
												</tr>
												<tr>
												   <td width="10px">
														<input type="radio" name="feedback" value="3">
													</td>
												   <td >
														Studierende entscheiden selbst, ob und wie ihre Forschung bewertet wird.
													</td>
												</tr>
												
											</table> <!---knowledgebuilding negotiable topic question tasks inquiry audience assessment -->
											<button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#seventh"> zurück </button>
											<button id="submitButton" class="btn btn-primary" type="submit">weiter</button>
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