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

						<h2 class="post-title" style="color:#666666;">[ENG]Fragebogen Mesoebene</h2>
						<div class="clear"></div>
					
						<!-- model content starts here -->
						<div class="post-content">
					
											
							<p>
				 With this survey you can see the meso-level of your lecture (teach-/learn -setting), which contains the decisions of your institute. These decisions effect you and your radius of operation.
				</p>
				
							<!-- start poll mikro -->
	
							<form name="survey" method="POST" action="mesoin.php?utf8=✓<?php if (isset($_GET["mikroid"])) {echo "&mikroid=";echo $_GET["mikroid"];}?>">
								<div class="panel-group" id="forms">
									<div class="panel panel-default">
										<div class="panel-collapse collapse in" id="zero">
											<p>
											   Here you can choose between different dimensions of your lecture. Your choice comprehends your didactic methods, which you used related to research learning. Be advised to have a specific course in mind to reflect the same or to build up a concept for a new similar course. After finishing this survey you will see a graphic of your results and you can compare your course to others.
											</p> <!-- explanation text -->
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
														Course:
													</td>
													<td colspan="3">
														<div align="right"><input id="kursInput" name="Kurs" placeholder="Kurs"  ></div>
													</td>
                                                </tr>
												<tr>
                                                    <td width="38%">
                                                        Department:
                                                    </td>
                                                    <td colspan="3">
                                                        <div align="right"><input id="fachbereichInput" name="Fachbereich" placeholder="Fachbereich" size="72%" ></div>
                                                    </td>
                                                </tr>
                                            </table> <!-- all dimensions of the universities -->
											<button id="zeroButton" type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#first"> Next </button>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-collapse collapse" id="first">
											<table class="table js-options-table">
												<tr>
													<td width="38%">
														 Number of Students:
													</td>
													<td colspan="3">
														<div align="right"><input id="anzahlInput" name="AnzahlStudenten" placeholder="0" size="72%" ></div>
													</td>
												</tr>
												<tr>
													<td width="38%">
														Semester count:
													</td>
													<td colspan="3">
														<div align="right"><input id="semesterInput" name="Semesterzahl" placeholder="0" size="72%" ></div>
													</td>
												</tr>
											</table>
											<button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#zero"> Back </button>
											<button id="firstButton" type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#second"> Next </button>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-collapse collapse" id="second">
											<table style="width:900px" class="table js-options-table">
												<tr class="header">
														<td colspan="2">
															 What is the bonding in the curriculum?
														</td>
												</tr>
											
												<tr>
													<td width="10px">
														<input type="radio" name="Einbindung" value="1">
													</td>
													<td>
												
														The student research will bring Credit Points and a grade.
													</td>
												</tr>
												<tr>
													<td width="10px">
														<input type="radio" name="Einbindung" value="2">
													</td>
													<td>
														The student research will bring Credit Points without a grade.
													</td>
												</tr>
												<tr>
													<td width="10px">
														<input type="radio" name="Einbindung" value="3">
													</td>
													<td>
														There are nor Credit Points for the student Research.
													</td>
												</tr>
												
											</table> <!---knowledgebuilding negotiable topic question tasks inquiry audience assessment -->
											<button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#first"> Back </button>
											<button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#third"> Next </button>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-collapse collapse" id="third">
											<table class="table js-options-table">
												<tr class="header">
													<td colspan="2">
														
														How much is the pay-off in (CP-Number) curriculum?
														
													</td>
												</tr>
												<tr>
													<td width="10px">
														<input type="radio" name="Inhaltsrahmen" value="1">
													</td>
													<td>
														The research is fairly high rated.
													</td>
												</tr>
												<tr>
													<td width="10px">
														<input type="radio" name="Inhaltsrahmen" value="2">
													</td>
													<td>
														The research is fairly low rated.
													</td>
												</tr>
												<tr>
													<td width="10px">
														<input type="radio" name="Inhaltsrahmen" value="3">
													</td>
													<td>
														 The research is of ideally value.
													</td>
												</tr>
											
											</table> <!---knowledgebuilding negotiable topic question tasks inquiry audience assessment -->
											<button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#second"> Back </button>
											<button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#fourth"> Next </button>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-collapse collapse" id="fourth">
											<table class="table js-options-table">
												<tr class="header">
													<td colspan="2">
														
														How does the modular location happen?
														
													</td>
												</tr>
												<tr>
													<td width="10px">
														<input type="radio" name="Verortung" value="1">
													</td>
													<td>
														The student research is an obligation.
													</td>
												</tr>
												<tr>
													<td width="10px">
														<input type="radio" name="Verortung" value="2">

													</td>
													<td>
														 The student research is an obligation to vote.
													</td>
												</tr>
												<tr>
													<td width="10px">
														<input type="radio" name="Verortung" value="3">
													</td>
													<td>
														Students volunteer to take part.
													</td>
												</tr>
											
											</table> <!---knowledgebuilding negotiable topic question tasks inquiry audience assessment -->
											<button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#third"> Back </button>
											<button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#fifth"> Next </button>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-collapse collapse" id="fifth">
											<table class="table js-options-table">
												<tr class="header">
													<td colspan="2">
														
														 How is the assessment-setting?
														
													</td>
												</tr>
												<tr>
													<td width="10px">
														<input type="radio" name="Prufungsrahmen" value="1">
													</td>
													<td>
														For assessement of student research there is a set test-frame.
													</td>
												</tr>
												<tr>
													<td width="10px">
														<input type="radio" name="Prufungsrahmen" value="2">
													</td>
													<td>
														You can choose between different forms for assessment of student research.
													</td>
												</tr>
												<tr>
													<td width="10px">
														<input type="radio" name="Prufungsrahmen" value="3">
													</td>
													<td>
														 There will be no exam for the student research.
													</td>
												</tr>
												
											</table> <!---knowledgebuilding negotiable topic question tasks inquiry audience assessment -->
											<button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#fourth"> Back </button>
											<button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#sixth"> Next </button>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-collapse collapse" id="sixth">
											<table class="table js-options-table">
												<tr class="header">
													<td colspan="2">
														
													  How is the time-setting?
														
													</td>
												</tr>
												<tr>
													<td width="10px">
														<input type="radio" name="Zeitrahmen" value="1">
													</td>
													<td>
														Students have one semester for their research.
													</td>
												</tr>
												<tr>
													<td width="10px">
														<input type="radio" name="Zeitrahmen" value="2">
													</td>
													<td>
														There is more than one semester for student research.
													</td>
												</tr>
												<tr>
													<td width="10px">
														<input type="radio" name="Zeitrahmen" value="3">
													</td>
													<td>
														 The research of students can be done during their study times.
													</td>
												</tr>
											
											</table> <!---knowledgebuilding negotiable topic question tasks inquiry audience assessment -->
											<button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#fifth"> Back </button>
											<button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#seventh"> Next </button>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-collapse collapse" id="seventh">
											<table class="table js-options-table">
												<tr class="header">
													<td colspan="2">
														
														How is the resource-setting?
														
													</td>
												</tr>
												<tr>
													<td width="10px">
														<input type="radio" name="Ressourcenrahmen" value="1">
													</td>
													<td>
														 There are no additional resources for student research.
													</td>
												</tr>
												<tr>
													<td width="10px">
														<input type="radio" name="Ressourcenrahmen" value="2">
													</td>
													<td>
														There are limited additional resources for student research.
													</td>
												</tr>
												<tr>
													<td width="10px">
														<input type="radio" name="Ressourcenrahmen" value="3">
													</td>
													<td>
														There are additional planable resources for student research.
													</td>
												</tr>
												
											</table> <!---knowledgebuilding negotiable topic question tasks inquiry audience assessment -->
											<button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#sixth"> Back </button>
											<button class="btn btn-primary" type="submit">Send</button>
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