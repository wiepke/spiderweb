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
		$( ".toggle-modell" ).show();
		$( "#previousmikro").show();
		$( "#nextmikro").show();
		$( "#previousmeso").show();
		$( "#nextmeso").show();
	};
	
	$('document').ready(checksvg);
	function checksvg() {
		if ( $( "svg" ).length > 0 ) {
 
			$( ".toggle-modell" ).show();
			
 
		} else {
			$( ".toggle-modell" ).hide();
			$( "#previousmikro" ).hide();
			$( "#nextmikro" ).hide();
			$( "#previousmeso" ).hide();
			$( "#nextmeso" ).hide();
			
		}
	}
	
	
</script>

<style>
html.with-featherlight {
    overflow: scroll;
}
</style>

</head> <!-- all the libraries-->
<body class="home blog custom-background results" onLoad="
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
<?php
$conn = mysqli_connect("localhost", "root", "", "test");
$allOfIt=[];
$REQUEST="SELECT Uni,Kurs,Fachbereich,AnzahlStudenten,SemesterZahl FROM `mikroebene`";
$queryObj = mysqli_query($conn, $REQUEST);
$exists = false;
while ($result = mysqli_fetch_object($queryObj)){
    $temp=$result;
    $temp->Uni=utf8_encode($result->Uni);
    $temp->Kurs=utf8_encode($result->Kurs);
    $temp->Fachbereich=utf8_encode($result->Fachbereich);
    $temp->AnzahlStudenten=utf8_encode($result->AnzahlStudenten);
    $temp->SemesterZahl=utf8_encode($result->SemesterZahl);
    array_push($allOfIt, $temp);
};
$conn->close();
echo "<script> let allOfIt=[];\n let chosenFilter={Uni:'',Kurs:'',Fachbereich:'',AnzahlStudenten:'',SemesterZahl:''};\n";
for ($i=0; $i<count($allOfIt);$i++){
    echo "allOfIt.push({\n"
        ."Uni: '".$allOfIt[$i]->Uni."',\n"
        ."Kurs: '".$allOfIt[$i]->Kurs."',\n"
        ."Fachbereich: '".$allOfIt[$i]->Fachbereich."',\n"
        ."AnzahlStudenten: '".$allOfIt[$i]->AnzahlStudenten."',\n"
        ."Semesterzahl: '".$allOfIt[$i]->SemesterZahl."'\n"
        ."});\n";
}
echo"</script>";
?>
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
										//$('document').ready(showfilter);
										
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
									
										<p id="Pagination0" hidden> dummy von dummy </p>

										<p class="course-meta" id="Unilabel0">Dummy </p> <p id="Kurslabel0" class="course-meta">Dummy</p>  <p id="Fachbereichlabel0" class="course-meta last"> Dummy </p>
									
										<br style="line-height: .5em;"> 
										
										<p  class="course-meta-sub-label">Anzahl von Studierenden:</p>
										
										<p id="AnzahlStudentenlabel0" class="course-meta-sub">Dummy</p>
									
										<p class="course-meta-sub-label">Semesterzahl der Studierenden:</p>
								   
										<p id="Semesterzahllabel0" class="course-meta-sub last">Dummy</p> 
											  
									</div>
										
									<div class="lightbox" id="fl1"><img src="img/mikro.png"></div>
									<div  id="diagram0" class="dia"></div>
									<a class="toggle-modell" style="margin:0 0 10px 0;width:100%; display:inline-block;" href="#" data-featherlight="#fl1" data-featherlight-root="#diagram0"><i class="glyphicon glyphicon-picture"></i> Modell einblenden, um zu vergleichen</a>
									
									
									
									<button id="previousmikro" type="button" class="btn btn-primary" disabled onClick="previous(Listingmikro(),true);return false;">Letztes Ergebnis</button>
									<button id="nextmikro" type="button" class="btn btn-primary" disabled onClick="next(Listingmikro(),true);return false;">Nächstes Ergebnis</button>
								
								</div>
						
								<div class="right-col">
								<button type="button" class="btn expand-area" id="expandbutton" data-toggle="collapse" data-target="#table" aria-expanded="false">Nach weiteren Ergebnissen suchen</button>
									<div class="collapse" id="table"  >
									<table class="table table-striped js-options-table">
										<tr>
                                            <td>
                                                Hochschule:
                                            </td>
                                            <td colspan="3">
                                                <!-- <input name="Uni" value="" class="stringFilterMikro" size="40"> -->
                                                <select name="Uni" class="stringFilterMikro">
                                                    <option value="">Wählen Sie die Hochschule</option>
                                                    <?php
                                                    //////////////////Finds all the options there are in "Uni"/////////////////////////////////
                                                    $options=[];
                                                    array_push($options, $allOfIt[0]->Uni);
                                                    $next=0;
                                                    for ($i=0; $i<count($allOfIt);$i++){
                                                        $exists=false;
                                                        for ($j=0;$j<count($options);$j++){
                                                            if ($options[$j]===$allOfIt[$i]->Uni){
                                                                $exists=true;
                                                                break;
                                                            }
                                                        }
                                                        if (!$exists){
                                                            array_push($options,$allOfIt[$i]->Uni);
                                                        }
                                                    }
                                                    //////////////////Finds all the options there are in "Uni"///////////////////////////////
                                                    sort($options);
                                                    //////////////////Writes the options in a dropdown menu///////////////////////////////////
                                                    for ($i=0;count($options)>$i;$i++){
                                                        echo "<option value='".$options[$i]."' id='".$options[$i]."UniId' class='Uni'>".$options[$i]."</option>";
                                                    }
                                                    //////////////////Writes the options in a dropdown menu///////////////////////////////////
                                                    ?>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Titel der Lehrveranstaltung::
                                            </td>
                                            <td colspan="3">
                                                <!-- <input name="Kurs" value="" class="stringFilterMikro" size="40"> -->
                                                <select name="Kurs" class="stringFilterMikro">
                                                    <option value="">Lehrveranstaltung</option>
                                                    <?php
                                                    //////////////////Finds all the options there are in "Kurs"/////////////////////////////////
                                                    $options=[];
                                                    array_push($options, $allOfIt[0]->Kurs);
                                                    $next=0;
                                                    for ($i=0; $i<count($allOfIt);$i++){
                                                        $exists=false;
                                                        for ($j=0;$j<count($options);$j++){
                                                            if ($options[$j]===$allOfIt[$i]->Kurs){
                                                                $exists=true;
                                                                break;
                                                            }
                                                        }
                                                        if (!$exists){
                                                            array_push($options,$allOfIt[$i]->Kurs);
                                                        }
                                                    }
                                                    //////////////////Finds all the options there are in "Kurs"///////////////////////////////
                                                    sort($options);
                                                    //////////////////Writes the options in a dropdown menu///////////////////////////////////
                                                    for ($i=0;count($options)>$i;$i++){
                                                        echo "<option value='".$options[$i]."' id='".$options[$i]."KursId' class='Kurs'>".$options[$i]."</option>";
                                                    }
                                                    //////////////////Writes the options in a dropdown menu///////////////////////////////////
                                                    ?>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Fachbereich:
                                            </td>
                                            <td colspan="3">
                                                <!-- <input name="Fachbereich" value="" class="stringFilterMikro" size="40"> -->
                                                <select name="Fachbereich" class="stringFilterMikro">
                                                    <option value="">Wählen Sie einen Fachbereich</option>
                                                    <?php
                                                    //////////////////Finds all the options there are in "Fachbereich"/////////////////////////////////
                                                    $options=[];
                                                    array_push($options, $allOfIt[0]->Fachbereich);
                                                    $next=0;
                                                    for ($i=0; $i<count($allOfIt);$i++){
                                                        $exists=false;
                                                        for ($j=0;$j<count($options);$j++){
                                                            if ($options[$j]===$allOfIt[$i]->Fachbereich){
                                                                $exists=true;
                                                                break;
                                                            }
                                                        }
                                                        if (!$exists){
                                                            array_push($options,$allOfIt[$i]->Fachbereich);
                                                        }
                                                    }
                                                    //////////////////Finds all the options there are in "Fachbereich"///////////////////////////////
                                                    sort($options);
                                                    //////////////////Writes the options in a dropdown menu///////////////////////////////////
                                                    for ($i=0;count($options)>$i;$i++){
                                                        echo "<option value='".$options[$i]."' id='".$options[$i]."FachbereichId' class='Fachbereich'>".$options[$i]."</option>";
                                                    }
                                                    //////////////////Writes the options in a dropdown menu///////////////////////////////////
                                                    ?>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                Anzahl an Studierenden:
                                            </td>
                                            <td colspan="3">
                                                <!-- <input name="AnzahlStudenten" value="" class="stringFilterMikro" size="40"> -->
                                                <select name="AnzahlStudenten" class="stringFilterMikro">
                                                    <option value="">Wählen Sie eine Anzahl</option>
                                                    <option value="1" id="AnzahlStudenten1">1-10</option>
                                                    <option value="11" id="AnzahlStudenten11">11-20</option>
                                                    <option value="21" id="AnzahlStudenten21">21-30</option>
                                                    <option value="30" id="AnzahlStudenten30">über 30</option>
                                                </select>
                                            </td>
										</tr>
										<tr>
											<td>
												Semesterzahl der Studierenden:
											</td>
											<td colspan="3">
												<!-- <input name="Semesterzahl" value="" class="stringFilterMikro" size="40"> -->
                                                <select name="Semesterzahl" class="stringFilterMikro">
                                                    <option value="">Wählen Sie eine Anzahl</option>
                                                    <option value="1" id="Semesterzahl1">1-3</option>
                                                    <option value="3" id="Semesterzahl3">3-6</option>
                                                    <option value="6" id="Semesterzahl6"> mehr als 6</option>
                                                </select>
											</td>
										</tr>
										</table>
										<button type="button" class="btn expand-area" id="expandbutton2" data-target="#table2" data-toggle="collapse"  aria-expanded="false">Erweiterte Optionen</button>
										<div  class="collapse" id="table2">
											<table class="table table-striped js-options-table">
											<tr class="header">
												<td colspan="2">
													Prüfungsrahmen:
												</td>
											</tr>
											<tr>
												<td width="10px">
													
													<input type="radio" name="Assessment" class="dimensionFilterMikro" value="1">
												</td>
											
												<td>
													Prüfungsform festgelegt
												</td>
											</tr>
											<tr>
												<td  width="10px">
													<input type="radio" name="Assessment" class="dimensionFilterMikro" value="2">
												</td>
												
												<td>
													Wahlmöglichkeiten
												</td>
											</tr>
											<tr>
											
												<td  width="10px">
													<input type="radio" name="Assessment" class="dimensionFilterMikro" value="3">
												</td>
												<td>
													keine Prüfung
												</td>
											</tr>
											
											<tr class="header">
												<td colspan="2">
													Forschungsthema:
												</td>
											</tr>
											<tr>
												
												<td >
												
													<input type="radio" name="Forschungsthema" class="dimensionFilterMikro" value="1">
												</td>
												<td>
													vorgegeben
												</td>
											</tr>
											<tr>
												<td>
													<input type="radio" name="Forschungsthema" class="dimensionFilterMikro" value="2">
												</td>
												<td>
													ausgehandelt
												
												</td>
											</tr>
											<tr>
												<td>
													<input type="radio" name="Forschungsthema" class="dimensionFilterMikro" value="3">
												</td>
												<td>
													selbstbestimmt
												</td>
											</tr>
													
											<tr class="header">
												<td colspan="2">
													Forschungsfrage:
												</td>
											</tr>
											<tr>
												<td>
													<input type="radio" name="Forschungsfrage" class="dimensionFilterMikro" value="1">
												</td>
												<td>
													vorgegeben
												</td>
											</tr>
											<tr>
												<td>
													<input type="radio" name="Forschungsfrage" class="dimensionFilterMikro" value="2">
												</td>
												<td>
												ausgehandelt
												</td>
											</tr>
												<td >
													<input type="radio" name="Forschungsfrage" class="dimensionFilterMikro" value="3">
												</td>
												<td>
												selbstbestimmt
												</td>
											
											</tr>
													
											<tr class="header">
												<td colspan="2">
													Planung:
												</td>
											</tr>
											<tr>
												
												
												<td >
													<input type="radio" name="Planung" class="dimensionFilterMikro" value="1">
												</td>
												<td>
												angeleitet
												</td>
											</tr>
											<tr>
												<td >
													<input type="radio" name="Planung" class="dimensionFilterMikro" value="2">
												</td>
												<td>
												unterstützt
												</td>
											</tr>
											<tr>	
												<td >
													<input type="radio" name="Planung" class="dimensionFilterMikro" value="3">
												</td>
												<td>
													selbstständig
												</td>
											</tr>
													
											<tr class="header">
												<td colspan="2">
													Durchführung:
												</td>
											</tr>
											<tr>
												
												
												<td >
													<input type="radio" name="Durchfuhrung" class="dimensionFilterMikro" value="1">
												</td>
												<td>
													angeleitet
												</td>
											</tr>
											<tr>
												<td >
													<input type="radio" name="Durchfuhrung" class="dimensionFilterMikro" value="2">
												</td>
												<td>
												unterstützt
												</td>
											</tr>
											<tr>
												<td >
													<input type="radio" name="Durchfuhrung" class="dimensionFilterMikro" value="3">
												</td>
												<td>
													selbstständig
												</td>
												
											</tr>
														
											<tr class="header">
												<td colspan="2">
													Reflexion:
												</td>
											</tr>
											<tr>
												<td>
													<input type="radio" name="Reflexion" class="dimensionFilterMikro" value="1">
												</td>
												<td>
												angeleitet
												</td>
											</tr>
											<tr>
												<td >
													<input type="radio" name="Reflexion" class="dimensionFilterMikro" value="2">
												</td>
												<td>
												unterstützt
												</td>
											</tr>
											<tr>
												<td >
													<input type="radio" name="Reflexion" class="dimensionFilterMikro" value="3">
												</td>
												<td>
												selbstständig
												</td>
											</tr>
													
											<tr class="header">
												<td colspan="2">
													Ergebnisdarstellung:
												</td>
											</tr>
											<tr>
											
												<td>
													<input type="radio" name="Ergebnisdarstellung" class="dimensionFilterMikro" value="1">
												</td>
												<td>
													geschlossen
												</td>
											</tr>
											<tr>
												<td >
													<input type="radio" name="Ergebnisdarstellung" class="dimensionFilterMikro" value="2">
												</td>
												<td>
													teilöffentlich
												</td>
											</tr>
											<tr>
												<td>
													<input type="radio" name="Ergebnisdarstellung" class="dimensionFilterMikro" value="3">
												</td>
												<td>
													öffentlich
												</td>
											</tr>
										</table>
									</div>
									<div>
									<button type="button" class="btn btn-primary bottomspace halfwidth" onClick="showall(Listingmikro(),true);hidediv();">Filter anwenden</button>
									<button type="button" class="btn btn-primary bottomspace halfwidth" onClick="cleanFilter(); return false">bereinige Filter</button>
									</div>
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
							<p id="Pagination1" hidden> dummy von dummy</p>
								<p class="course-meta" id="Unilabel1">Dummy </p> <p id="Kurslabel1" class="course-meta">Dummy</p>  <p id="Fachbereichlabel1" class="course-meta last"> Dummy </p>
							
							   <br style="line-height: .5em;"> 
								
								<p  class="course-meta-sub-label">Anzahl von Studierenden:</p>
								
								<p id="AnzahlStudentenlabel1" class="course-meta-sub">Dummy</p>
							
								<p class="course-meta-sub-label">Semesterzahl der Studierenden:</p>
						   
								<p id="Semesterzahllabel1" class="course-meta-sub last">Dummy</p>
									  
							</div>
							
							
							<div  id="diagram1" class="dia"></div>
                            
							<button id="previousmeso" type="button" class="btn btn-primary" disabled onClick="previous(Listingmeso(),false);return false;">Letztes Ergebnis</button>
							<button id="nextmeso" type="button" class="btn btn-primary" disabled onClick="next(Listingmeso(),false);return false;">Nächstes Ergebnis</button>
							
						</div> <!-- end left col -->
						
						<div class="right-col">
							<button type="button" class="btn expand-area" data-toggle="collapse" data-target="#table1" >Nach weiteren Ergebnissen suchen</button>
							
							<div class="collapse" id="table1"  >
							
							<table class="table table-striped js-options-table">
								<tr>
									<td>
										Hochschule:
									</td>
									<td colspan="3">
										<!-- <input name="Uni" value="" class="stringFilterMeso" size="40"> -->
										<select>
									  <option value="volvo">Wählen Sie die Hochschule</option>
									  <option value="saab">bla</option>
									  <option value="mercedes">bla</option>
									  <option value="audi">bla</option>
									</select>
									</td>
								</tr>
								<tr>
									<td>
										Titel der Lehrveranstaltung:
									</td>
									<td colspan="3">
										<!-- <input name="Kurs" value="" class="stringFilterMeso" size="40"> -->
										<select>
										  <option value="volvo">wählen Sie aus den Lehrveranstaltungen</option>
										  <option value="saab">bla</option>
										  <option value="mercedes">bla</option>
										  <option value="audi">bla</option>
									</select>
									</td>
								</tr>
								
								<tr>
									<td>
										Fachbereich:
									</td>
									<td colspan="3">
										<!-- <input name="Fachbereich" value="" class="stringFilterMeso" size="40"> -->
										<select>
										  <option value="volvo">Wählen Sie einen Fachbereich</option>
										  <option value="saab">bla</option>
										  <option value="mercedes">bla</option>
										  <option value="audi">bla</option>
									</select>
									</td>
								</tr>
								
								<tr>
									<td>
										 Anzahl an Studierenden:
									</td>
									<td colspan="3">
										<!-- <input name="AnzahlStudenten" value="" class="stringFilterMeso" size="40"> -->
										<select>
										  <option value="volvo">1-10</option>
										  <option value="saab">11-20</option>
										  <option value="mercedes">21-50</option>
										  <option value="audi">51-100</option>
										  <option value="audi">über 100</option>
									</select>
									</td>
								</tr>
								<tr>
									<td>
										  Semesterzahl der Studierenden 
									</td>
									<td colspan="3">
										<!-- <input name="Semesterzahl" value="" class="stringFilterMeso" size="40"> -->
										<select>
										  <option value="volvo">1-3</option>
										  <option value="saab">3-6</option>
										
									</select>
									</td>
								</tr>
							</table>
							<button type="button" class="btn expand-area" data-toggle="collapse" data-target="#table4" >Erweiterte Optionen</button>
							
							<div class="collapse" id="table4"  >
								<table  class="table table-striped js-options-table">
									
									<tr class="header">
										<td colspan="2">
											Curriculare Einbindung:
										</td>
									</tr>
									<tr>
										<td width="10px">
											
											<input type="radio" name="Einbindung" class="dimensionFilterMeso" value="1">
										</td>
										<td>
											CP & benotet
										</td>
									</tr>
									<tr>
										<td width="10px">
											 <input type="radio" name="Einbindung" class="dimensionFilterMeso" value="2">
										</td>
										<td>
											CP und unbenotet
										</td>
									</tr>
									<tr>
										<td width="10px">
											 <input type="radio" name="Einbindung" class="dimensionFilterMeso" value="3">
										</td>
										<td>
											ohne CP
										</td>
									</tr>
									
									<tr class="header">
										<td colspan="2">
											Modulare Verortung:
										</td>
									</tr>
									<tr>
										<td>
										
											<input type="radio" name="Verortung" class="dimensionFilterMeso" value="1">
										</td>
										<td>
											Pflicht
										</td>
									</tr>
									<tr>
										<td>
											<input type="radio" name="Verortung" class="dimensionFilterMeso" value="2">
										</td>
										<td>
											Wahlpflicht
										</td>
									</tr>
									<tr>
										<td>
											<input type="radio" name="Verortung" class="dimensionFilterMeso" value="3">
										</td>
										<td>
											keine
										</td>
									</tr>
											
									
											
									<tr class="header">
										<td colspan="2">
											Prüfungsrahmen:
										</td>
									</tr>
									<tr>
										
										<td >
											<input type="radio" name="Prufungsrahmen" class="dimensionFilterMeso" value="1">
										</td>
										<td>
											Prüfungsform festgelegt
										</td>
									</tr>
									<tr>
										
										<td >
											<input type="radio" name="Prufungsrahmen" class="dimensionFilterMeso" value="2">
										</td>
										<td>
											Wahlmöglichkeiten
										</td>
									</tr>
									<tr>
										<td >
											<input type="radio" name="Prufungsrahmen" class="dimensionFilterMeso" value="3">
										</td>
										<td>
											keine Prüfung
										</td>
									</tr>
											
									<tr class="header">
										<td colspan="2">
											Zeitrahmen:
										</td>
									</tr>
									<tr>
										
										
										<td >
											<input type="radio" name="Zeitrahmen" class="dimensionFilterMeso" value="1">
										</td>
										<td>
											semesterbezogen
										</td>
									</tr>
									<tr>
										<td >
											<input type="radio" name="Zeitrahmen" class="dimensionFilterMeso" value="2">
										</td>
										<td>
											semesterübergreifend
										</td>
									</tr>
									<tr>
										<td >
											<input type="radio" name="Zeitrahmen" class="dimensionFilterMeso" value="3">
										</td>
										<td>
											studienbegleitend
										</td>
									</tr>
												
									<tr class="header">
										<td colspan="2">
											Ressourcenrahmen:
										</td>
									</tr>
									<tr>
										<td>
											<input type="radio" name="Ressourcenrahmen" class="dimensionFilterMeso" value="1">
										</td>
										<td>
											keine Ressourcen
										</td>
									</tr>
									<tr>
										<td >
											<input type="radio" name="Ressourcenrahmen" class="dimensionFilterMeso" value="2">
										</td>
										<td>
											befristet
										</td>
									</tr>
									<tr>
										<td >
											<input type="radio" name="Ressourcenrahmen" class="dimensionFilterMeso" value="3">
										</td>
										<td>
											dauerhaft
										</td>
									</tr>
											
									
								</table>
							</div>
							<div>
								<button type="button" class="btn btn-primary" onClick="showall(Listingmeso(),false)">Filter anwenden</button>
								<button type="button" class="btn btn-primary" onClick="cleanFilter(); return false">bereinige Filter</button>
							</div>
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