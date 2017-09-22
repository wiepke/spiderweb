<?php
?>
<!DOCTYPE html>
<html lang="en">
    <head>

		<?php include 'header.php' ?>
		
		<script src="js/formchecker.js"></script>
		<script>
		
  </script
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

						<h2 class="post-title" style="color:#666666;">Fides Doppelradmodell</h2>
						<div class="clear"></div>
					
						<!-- model content starts here -->
						<div class="post-content">
					
							
						
							
				
							<!-- start poll mikro -->
					
							<form name="survey" method="POST" action="mikroin.php?utf8=✓">
								<div class="panel-group" id="forms">
									<div class="panel panel-default">
										<div class="panel-collapse collapse in" id="zero">
											<p> Please give us some general information about your course </p> <!-- explanation text -->
											<table class="table js-options-table">
												<tr>
													<td width="10%" class="middle">
														University:
													</td>
													<td colspan="3">
														<div  ><input id="uniInput" name="Uni" placeholder="University" autofocus ></div>
													</td>
												</tr>
												<tr>
													<td width="10%" class="middle">
														Course:
													</td>
													<td colspan="3">
														<div align="right"><input id="kursInput" name="Kurs" placeholder="Course"  ></div>
													</td>
                                                </tr>
												<tr>
                                                    <td width="38%">
                                                        Department:
                                                    </td>
                                                    <td colspan="3">
                                                        <div align="right"><input id="fachbereichInput" name="Fachbereich" placeholder="Department" size="72%"  ></div>
                                                    </td>
                                                </tr>
												<tr>
                                                    <td width="38%">
                                                         Number of students:
                                                    </td>
                                                    <td colspan="3">
                                                        <div align="right"><input id="anzahlInput" name="AnzahlStudenten" placeholder="0" size="72%"  ></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="38%">
                                                        Semester count <span class="question"><span class="tooltipp">In welchem Semester sind die Studierenden in Ihrer Lehrveranstaltung (Angabe "von x bis y" möglich)?"</span> </span>:
                                                    </td>
                                                    <td colspan="3">
                                                        <div align="right"><input  id="semesterInput" name="Semesterzahl" placeholder="0" size="72%"  ></div>
                                                    </td>
                                                </tr>
                                            </table> <!-- all dimensions of the universities -->
                                            <button id="zeroButton" type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#second"> Next </button>
                                        </div>
                                    </div>
                                   
									<div class="panel panel-default">
										<div class="panel-collapse collapse" id="second">
											<table class="table js-options-table">
											
												<tr class="header">
													<td colspan="2">
														
															Who will set the research topic?
														
													</td>
												</tr>
									
												<tr>
													<td width="10px">
														<input type="radio" name="Forschungsthema" value="1"  >
													</td>
													
													<td >
														Teachers give the research topic.
													</td>
												</tr>
												<tr>
													<td  width="10px" >
														<input type="radio" name="Forschungsthema" value="2"  >
													</td>
													
													<td >
														During a firm setting students will find a research topic.
													</td>
												</tr>
												<tr>
													<td  width="10px">
														<input type="radio" name="Forschungsthema" value="3" >
													</td>
													<td >
														Students will set the topic on their own.
													</td>
												</tr>
												
												
											</table> <!---knowledgebuilding negotiable topic question tasks inquiry audience assessment -->
										<button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#zero"> Back </button>
										<button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#third"> Next </button>
										
										</div>
									</div> <!-- .panel -->
					   
								    <div class="panel panel-default">
										<div class="panel-collapse collapse" id="third">
											<table class="table js-options-table">
												<tr class="header">
													<td colspan="2">
														
														 Who evolves the research question?
														
													</td>
												</tr>
												<tr>
												
													<td width="10px">
														<input type="radio" name="Forschungsfrage" value="1"  >
													</td>
													<td>
														Teachers will present the research question
													</td>
												</tr>
												<tr>
													<td width="10px">
														<input type="radio" name="Forschungsfrage" value="2" >
													</td>
													<td>
														Students will evolve the research question under lead of teachers.
													</td>
												</tr>
												<tr>
													<td width="10px">
														<input type="radio" name="Forschungsfrage" value="3" >
													</td>
													<td >
														 Students will evolve the question autonomously.
													</td>
													
												</tr>
												
											</table> <!---knowledgebuilding negotiable topic question tasks inquiry audience assessment -->
											<button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#second"> Back </button>
											<button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#fourth"> Next </button>
										</div>
									</div> <!-- .panel -->
									
									<div class="panel panel-default">
										<div class="panel-collapse collapse" id="fourth">
											<table class="table js-options-table">
												<tr class="header">
													<td colspan="2">
													   
														 How do students plan the research?
													   
													</td>
												</tr>
											   
											   <tr>
													<td width="10px">
														<input type="radio" name="Planung" value="1"   >
													</td>
													<td >
														 Teachers will give deadlines and phases of the process.
													</td>
												</tr>
												<tr>
													
													 <td width="10px">
														<input type="radio" name="Planung" value="2" >
													</td>
													<td >
														Students will plan the research with lead of teachers.
													</td>
												</tr>
												<tr>
													<td width="10px">
														<input type="radio" name="Planung" value="3" >
													</td>
													<td >
														 Students will plan the process autonomously.
													</td>
											   
												</tr>
											</table> <!---knowledgebuilding negotiable topic question tasks inquiry audience assessment -->
											<button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#third"> Back </button>
											<button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#fifth"> Next </button>
										</div>
									</div> <!-- .panel -->
									
									<div class="panel panel-default">
										<div class="panel-collapse collapse" id="fifth">
											<table class="table js-options-table">
												<tr class="header">
													<td colspan="2">
														
														 How will students research?
													  
													</td>
												</tr>
												<tr>
													<td  width="10px">
														<input type="radio" name="Durchfuhrung" value="1"   >
													</td>
													<td >
														  Teachers or tutors will lead the research.
													</td>
													
												</tr>
												<tr>
													 <td  width="10px">
														<input type="radio" name="Durchfuhrung" value="2" >
													</td>
													<td >
														 Students will be supported by teachers or tutors.
													</td>
												</tr>
												<tr>
													 <td  width="10px">
														<input type="radio" name="Durchfuhrung" value="3" >
													</td>
													<td>
														 Students will research autonomously.
													</td>
												</tr>
											  
											</table>
											<button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#fourth"> Back </button>
											<button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#sixth"> Next </button>
										</div>
									</div> <!-- .panel -->
									
									<div class="panel panel-default">
										<div class="panel-collapse collapse" id="sixth">
											<table class="table  js-options-table">
												<tr class="header">
													<td colspan="2">
														
														 How is the feedback during the research?
													   
													</td>
												</tr>
												<tr>
													 <td width="10px">
														<input type="radio" name="Reflexion" value="1"  >
													</td>
													<td >
														 Teachers (or tutors) will give (or claim) (Peer-)Feedback.
													</td>
												</tr>
												<tr>
													 <td width="10px">
														<input type="radio" name="Reflexion" value="2" >
													</td>
													<td >
														 Set and self organised feedback will be organized.
													</td>
												</tr>
												<tr>
													 <td width="10px">
														<input type="radio" name="Reflexion" value="3" >
													</td>
													<td>
														Students will ask for feedback of teachers or tutors.
													</td>
												</tr>
											   
											</table> <!---knowledgebuilding negotiable topic question tasks inquiry audience assessment -->
											<button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#fifth"> Back </button>
											<button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#seventh"> Next </button>
										</div>
									</div>  <!-- .panel -->
									
									<div class="panel panel-default">
										<div class="panel-collapse collapse" id="seventh">
											<table class="table  js-options-table">
												<tr class="header">
													<td colspan="2">
														
														 What will happen to results of the research of students?
														
													</td>
												</tr>
												<tr>
													 <td width="10px">
														<input type="radio" name="Ergebnisdarstellung" value="1"  >
													</td>
													<td >
														Just participates will reach it.
													</td>
												</tr>
												<tr>
													 <td width="10px">
														<input type="radio" name="Ergebnisdarstellung" value="2" >
													</td>
													<td >
														 The faculty will have access to it.
													</td>
												</tr>
												<tr>
													 <td width="10px">
														<input type="radio" name="Ergebnisdarstellung" value="3" >
													</td>
													<td >
														Results will be published and visible for everyone.
													</td>
												</tr>
											   
											</table> <!---knowledgebuilding negotiable topic question tasks inquiry audience assessment -->
											<button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#sixth"> Back </button>
											<button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#eighth"> Next </button>
										</div>
									</div> <!-- .panel -->
									
									<div class="panel panel-default">
										<div class="panel-collapse collapse" id="eighth">
											<table class="table  js-options-table">
												<tr class="header">
													<td colspan="2">
													   
														 How is the success rated in research?
													   
													</td>
												</tr>
												<tr>
													<td width="10px" >
														<input type="radio" name="Assessment" value="1"  >
													</td>
													<td >
														 There is a set form for assessment (e.g. a test).
													</td>
												</tr>
												<tr>
													<td width="10px">
														<input type="radio" name="Assessment" value="2" >
													</td>
													<td >
														Students and teacher evolve an assessment together.
													</td>
												</tr>
												<tr>
												   <td width="10px">
														<input type="radio" name="Assessment" value="3">
													</td>
												   <td >
														 Students decide how and whether they will be proved.
													</td>
												</tr>
												
											</table> <!---knowledgebuilding negotiable topic question tasks inquiry audience assessment -->
											<button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#seventh"> Back </button>
											<button id="submitButton" class="btn btn-primary" type="submit">Next</button>
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