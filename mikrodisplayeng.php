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
    <script src="js/bonsai.js"></script>
    <script src="js/diagram.js"></script>
    <script src="js/serviceout.js"></script>
    <script src="js/Listingout.js"></script>
    <!-- header navigation -->
    <?php include 'navigation.php' ?>
    <?php include 'dbconn.php' ?>
    <?php
    $allOfItMikro=[];
    $allOfItMeso=[];
    $REQUEST="SELECT Uni,Kurs,Fachbereich,AnzahlStudenten,SemesterZahl FROM `mikroebene`";
    if (isset($_GET['anyway'])){
        if ($_GET['anyway']!=='1'){
            $REQUEST = $REQUEST." WHERE published='1'";
        }
    }else {
        $REQUEST = $REQUEST." WHERE published='1'";
    }
    $queryObj = mysqli_query($conn, $REQUEST);
    while ($result = mysqli_fetch_object($queryObj)){
        $temp=$result;
        $temp->Uni=utf8_encode($result->Uni);
        $temp->Kurs=utf8_encode($result->Kurs);
        $temp->Fachbereich=utf8_encode($result->Fachbereich);
        $temp->AnzahlStudenten=utf8_encode($result->AnzahlStudenten);
        $temp->SemesterZahl=utf8_encode($result->SemesterZahl);
        array_push($allOfItMikro, $temp);
    };
    $REQUEST="SELECT Uni,Kurs,Fachbereich,AnzahlStudenten,SemesterZahl FROM `mesoebene`";
    if (isset($_GET['anyway'])){
        if ($_GET['anyway']!=='1'){
            $REQUEST = $REQUEST." WHERE published='1'";
        }
    }else {
        $REQUEST = $REQUEST." WHERE published='1'";
    }
    $queryObj = mysqli_query($conn, $REQUEST);
    while ($result = mysqli_fetch_object($queryObj)){
        $temp=$result;
        $temp->Uni=utf8_encode($result->Uni);
        $temp->Kurs=utf8_encode($result->Kurs);
        $temp->Fachbereich=utf8_encode($result->Fachbereich);
        $temp->AnzahlStudenten=utf8_encode($result->AnzahlStudenten);
        $temp->SemesterZahl=utf8_encode($result->SemesterZahl);
        array_push($allOfItMeso, $temp);
    };
    $conn->close();
    echo "<script> let allOfItMikro=[];\n let chosenFilterMikro={Uni:'',Kurs:'',Fachbereich:'',AnzahlStudenten:'',SemesterZahl:''};\n";
    for ($i=0; $i<count($allOfItMikro);$i++){
        echo "allOfItMikro.push({\n"
            ."Uni: '".$allOfItMikro[$i]->Uni."',\n"
            ."Kurs: '".$allOfItMikro[$i]->Kurs."',\n"
            ."Fachbereich: '".$allOfItMikro[$i]->Fachbereich."',\n"
            ."AnzahlStudenten: '".$allOfItMikro[$i]->AnzahlStudenten."',\n"
            ."Semesterzahl: '".$allOfItMikro[$i]->SemesterZahl."'\n"
            ."});\n";
    }
    echo"</script>";
    echo "<script> let allOfItMeso=[];\n let chosenFilterMeso={Uni:'',Kurs:'',Fachbereich:'',AnzahlStudenten:'',SemesterZahl:''};\n";
    for ($i=0; $i<count($allOfItMeso);$i++){
        echo "allOfItMeso.push({\n"
            ."Uni: '".$allOfItMeso[$i]->Uni."',\n"
            ."Kurs: '".$allOfItMeso[$i]->Kurs."',\n"
            ."Fachbereich: '".$allOfItMeso[$i]->Fachbereich."',\n"
            ."AnzahlStudenten: '".$allOfItMeso[$i]->AnzahlStudenten."',\n"
            ."Semesterzahl: '".$allOfItMeso[$i]->SemesterZahl."'\n"
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

                        <h2 class="post-title" style="color:#666666;"> results in the Doppelradmodell </h2>
                        <div class="clear"></div>
                        <?php
                        if (isset($_GET["mikroid"])) {
                            echo "<p> Under the tabs „Meso“ and „Micro“ you can find a graphical version of your answers. With „search for further results“ you can look through our database and find other courses to compare them with yours. With the Filter option you can set a specific focus. For example you could look for the same value in a chosen dimension as you have. The chosen parameters are unique for the Micro or Meso level, so switch to the tab you want to check and have a look for the results you want to see. 
									
									</p>";
                        } else {
                            echo "<p>
Here you can see results of other teachers, who used our model for their lectures. To see the graphic of your lecture, to evaluate and reflect it, you need to fill out our survey: &nbsp;
									<a href=\"mikroger.php\" class=\"poll-link\"> We are happy about your participation </a>
									
									
									</p>
									<p>
									With „search for further results“ you can look through our database and find other courses to compare them with yours. With the Filter option you can set a specific focus. For example you could look for the same value in a chosen dimension as you have. The chosen parameters are unique for the Micro or Meso level, so switch to the tab you want to check and have a look for the results you want to see. 
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
                                <a  href="#tab1" data-toggle="tab">Micro</a>
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
                                        <p class="course-meta last"> Results </p><br>
                                        <p  class="course-meta-sub-label">Choose your criteria for searching the results in the filter element on the right.</p>
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
                                    <a class="toggle-modell" style="margin:0 0 10px 0;width:100%; display:inline-block;" href="#" data-featherlight="#fl1" data-featherlight-root="#diagram0"><i class="glyphicon glyphicon-picture"></i> Show model to compare </a>

                                    <div class="lightbox" id="fl1"><img src="img/mikro-en.png"></div>
                                    <div  id="diagram0" class="dia"></div>
                                    <h5>What worked fine:</h5>
                                    <p  id="beneficialmikro"></p>
                                    <h5>What did not work that good:</h5>
                                    <p  id="poorlymikro"></p>
                                    <h5>E-Mail to the lecturer:</h5>
                                    <p  id="contactmikro"></p>
                                    <button id="previousmikro" type="button" class="btn btn-primary" disabled onClick="previous(Listingmikro(),true);return false;">Last Result</button>
                                    <button id="nextmikro" type="button" class="btn btn-primary" disabled onClick="next(Listingmikro(),true);return false;">Next Result</button>

                                </div>

                                <div class="right-col">
                                    <button type="button" class="btn expand-area" id="expandbutton" data-toggle="collapse" data-target="#table" aria-expanded="false">Search for further results</button>
                                    <div class="collapse" id="table"  >
                                        <table class="table table-striped js-options-table">
                                            <tr>
                                                <td>
                                                    Uni:
                                                </td>
                                                <td colspan="3">
                                                    <select name="Uni" class="stringFilterMikro" id="UniMikro">
                                                        <option value="">Choose University</option>
                                                        <?php
                                                        //////////////////Finds all the options there are in "Uni"/////////////////////////////////
                                                        $options=[];
                                                        array_push($options, $allOfItMikro[0]->Uni);
                                                        $next=0;
                                                        for ($i=0; $i<count($allOfItMikro);$i++){
                                                            $exists=false;
                                                            for ($j=0;$j<count($options);$j++){
                                                                if ($options[$j]===$allOfItMikro[$i]->Uni){
                                                                    $exists=true;
                                                                    break;
                                                                }
                                                            }
                                                            if (!$exists){
                                                                array_push($options,$allOfItMikro[$i]->Uni);
                                                            }
                                                        }
                                                        //////////////////Finds all the options there are in "Uni"///////////////////////////////
                                                        sort($options);
                                                        //////////////////Writes the options in a dropdown menu///////////////////////////////////
                                                        for ($i=0;count($options)>$i;$i++){
                                                            echo "<option value='".$options[$i]."' id='".$options[$i]."UniMikroId' class='UniMikro'>".$options[$i]."</option>";
                                                        }
                                                        //////////////////Writes the options in a dropdown menu///////////////////////////////////
                                                        ?>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Course:
                                                </td>
                                                <td colspan="3">
                                                    <select name="Kurs" class="stringFilterMikro" id="KursMikro">
                                                        <option value="">Choose Course</option>
                                                        <?php
                                                        //////////////////Finds all the options there are in "Kurs"/////////////////////////////////
                                                        $options=[];
                                                        array_push($options, $allOfItMikro[0]->Kurs);
                                                        $next=0;
                                                        for ($i=0; $i<count($allOfItMikro);$i++){
                                                            $exists=false;
                                                            for ($j=0;$j<count($options);$j++){
                                                                if ($options[$j]===$allOfItMikro[$i]->Kurs){
                                                                    $exists=true;
                                                                    break;
                                                                }
                                                            }
                                                            if (!$exists){
                                                                array_push($options,$allOfItMikro[$i]->Kurs);
                                                            }
                                                        }
                                                        //////////////////Finds all the options there are in "Kurs"///////////////////////////////
                                                        sort($options);
                                                        //////////////////Writes the options in a dropdown menu///////////////////////////////////
                                                        for ($i=0;count($options)>$i;$i++){
                                                            echo "<option value='".$options[$i]."' id='".$options[$i]."KursMikroId' class='KursMikro'>".$options[$i]."</option>";
                                                        }
                                                        //////////////////Writes the options in a dropdown menu///////////////////////////////////
                                                        ?>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Department:
                                                </td>
                                                <td colspan="3">
                                                    <select name="Fachbereich" class="stringFilterMikro" id="FachbereichMikro">
                                                        <option value="">Choose Department</option>
                                                        <?php
                                                        //////////////////Finds all the options there are in "Fachbereich"/////////////////////////////////
                                                        $options=[];
                                                        array_push($options, $allOfItMikro[0]->Fachbereich);
                                                        $next=0;
                                                        for ($i=0; $i<count($allOfItMikro);$i++){
                                                            $exists=false;
                                                            for ($j=0;$j<count($options);$j++){
                                                                if ($options[$j]===$allOfItMikro[$i]->Fachbereich){
                                                                    $exists=true;
                                                                    break;
                                                                }
                                                            }
                                                            if (!$exists){
                                                                array_push($options,$allOfItMikro[$i]->Fachbereich);
                                                            }
                                                        }
                                                        //////////////////Finds all the options there are in "Fachbereich"///////////////////////////////
                                                        sort($options);
                                                        //////////////////Writes the options in a dropdown menu///////////////////////////////////
                                                        for ($i=0;count($options)>$i;$i++){
                                                            echo "<option value='".$options[$i]."' id='".$options[$i]."FachbereichMikroId' class='FachbereichMikro'>".$options[$i]."</option>";
                                                        }
                                                        //////////////////Writes the options in a dropdown menu///////////////////////////////////
                                                        ?>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    Number of Students:
                                                </td>
                                                <td colspan="3">
                                                    <select name="AnzahlStudenten" class="stringFilterMikro" id="AnzahlStudentenMikro">
                                                        <option value="">chosse a number</option>
                                                        <option value="1" id='AnzahlStudentenMikroId1' class='AnzahlStudentenMikro'>1-10</option>
                                                        <option value="11" id='AnzahlStudentenMikroId11' class='AnzahlStudentenMikro'>11-20</option>
                                                        <option value="21" id='AnzahlStudentenMikroId21' class='AnzahlStudentenMikro'>21-30</option>
                                                        <option value="30" id='AnzahlStudentenMikroId30' class='AnzahlStudentenMikro'>über 30</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Semestercount:
                                                </td>
                                                <td colspan="3">
                                                    <select name="Semesterzahl" class="stringFilterMikro" id="SemesterZahlMikro">
                                                        <option value="">choose a Semester</option>
                                                        <option value="1" id='SemesterZahlMikroId1' class='SemesterZahlMikro'>1-3 Bachelor</option>
                                                        <option value="4" id='SemesterZahlMikroId4' class='SemesterZahlMikro'>4-6 Bachelor</option>
                                                        <option value="6" id='SemesterZahlMikroId6' class='SemesterZahlMikro'>Master</option>
                                                    </select>
                                                </td>
                                            </tr>
                                        </table>
                                        <button type="button" class="btn expand-area" id="expandbutton2" data-target="#table2" data-toggle="collapse"  aria-expanded="false">Dimensions of the model</button>
                                        <div  class="collapse" id="table2">
                                            <table class="table table-striped js-options-table">
                                                <tr class="header">
                                                    <td colspan="2">
                                                        Examination frame:
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="10px">

                                                        <input type="radio" name="Assessment" class="dimensionFilterMikro" value="1">
                                                    </td>

                                                    <td>
                                                        exam determined
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td  width="10px">
                                                        <input type="radio" name="Assessment" class="dimensionFilterMikro" value="2">
                                                    </td>

                                                    <td>
                                                        exam eligible
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td  width="10px">
                                                        <input type="radio" name="Assessment" class="dimensionFilterMikro" value="3">
                                                    </td>
                                                    <td>
                                                        no exam
                                                    </td>
                                                </tr>

                                                <tr class="header">
                                                    <td colspan="2">
                                                        Research topic:
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td >

                                                        <input type="radio" name="Forschungsthema" class="dimensionFilterMikro" value="1">
                                                    </td>
                                                    <td>
                                                        provided
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="Forschungsthema" class="dimensionFilterMikro" value="2">
                                                    </td>
                                                    <td>
                                                        negotiated

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="Forschungsthema" class="dimensionFilterMikro" value="3">
                                                    </td>
                                                    <td>
                                                        self-determined
                                                    </td>
                                                </tr>

                                                <tr class="header">
                                                    <td colspan="2">
                                                        Research question:
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="Forschungsfrage" class="dimensionFilterMikro" value="1">
                                                    </td>
                                                    <td>
                                                        provided
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="Forschungsfrage" class="dimensionFilterMikro" value="2">
                                                    </td>
                                                    <td>
                                                        negotiated
                                                    </td>
                                                </tr>
                                                <td >
                                                    <input type="radio" name="Forschungsfrage" class="dimensionFilterMikro" value="3">
                                                </td>
                                                <td>
                                                    self-determined
                                                </td>

                                                </tr>

                                                <tr class="header">
                                                    <td colspan="2">
                                                        Research design:
                                                    </td>
                                                </tr>
                                                <tr>


                                                    <td >
                                                        <input type="radio" name="Planung" class="dimensionFilterMikro" value="1">
                                                    </td>
                                                    <td>
                                                        directed
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td >
                                                        <input type="radio" name="Planung" class="dimensionFilterMikro" value="2">
                                                    </td>
                                                    <td>
                                                        supported
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td >
                                                        <input type="radio" name="Planung" class="dimensionFilterMikro" value="3">
                                                    </td>
                                                    <td>
                                                        self-directed
                                                    </td>
                                                </tr>

                                                <tr class="header">
                                                    <td colspan="2">
                                                        Research conduct:
                                                    </td>
                                                </tr>
                                                <tr>


                                                    <td >
                                                        <input type="radio" name="Durchfuhrung" class="dimensionFilterMikro" value="1">
                                                    </td>
                                                    <td>
                                                        directed
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td >
                                                        <input type="radio" name="Durchfuhrung" class="dimensionFilterMikro" value="2">
                                                    </td>
                                                    <td>
                                                        supported
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td >
                                                        <input type="radio" name="Durchfuhrung" class="dimensionFilterMikro" value="3">
                                                    </td>
                                                    <td>
                                                        self-directed
                                                    </td>

                                                </tr>

                                                <tr class="header">
                                                    <td colspan="2">
                                                        Reflection:
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="Reflexion" class="dimensionFilterMikro" value="1">
                                                    </td>
                                                    <td>
                                                        directed
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td >
                                                        <input type="radio" name="Reflexion" class="dimensionFilterMikro" value="2">
                                                    </td>
                                                    <td>
                                                        supported
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td >
                                                        <input type="radio" name="Reflexion" class="dimensionFilterMikro" value="3">
                                                    </td>
                                                    <td>
                                                        self-directed
                                                    </td>
                                                </tr>

                                                <tr class="header">
                                                    <td colspan="2">
                                                        Presentation of results:
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td>
                                                        <input type="radio" name="Ergebnisdarstellung" class="dimensionFilterMikro" value="1">
                                                    </td>
                                                    <td>
                                                        non-public
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td >
                                                        <input type="radio" name="Ergebnisdarstellung" class="dimensionFilterMikro" value="2">
                                                    </td>
                                                    <td>
                                                        partly-public
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="Ergebnisdarstellung" class="dimensionFilterMikro" value="3">
                                                    </td>
                                                    <td>
                                                        public
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div>

                                            <button type="button" class="btn btn-primary bottomspace halfwidth" onClick="showall(Listingmikro(),true);hidediv();">Apply Filter</button>
                                            <button type="button" class="btn btn-primary bottomspace halfwidth" onClick="cleanFilter(); return false">Clean Filter</button>

                                        </div>
                                    </div> <!-- collapse -->







                                </div> <!-- end right-col -->
                            </div> <!-- end 1st tab -->

                            <div class="tab-pane " id="tab2">
                                <div class="left-col">
                                    <div class="placeholderdiv">
                                        <p class="course-meta last"> Results  </p><br>
                                        <p  class="course-meta-sub-label">Choose your criteria for searching the results in the filter element on the right.</p>
                                        <div class="dia" style="width:90%; height:400px; background-color:#f9f9f9; margin-bottom:20px;"></div>
                                    </div>
                                    <div id="labels1" >
                                        <p id="Pagination1" hidden> dummy von dummy</p>
                                        <p class="course-meta" id="Unilabel1">Dummy </p> <p id="Kurslabel1" class="course-meta">Dummy</p>  <p id="Fachbereichlabel1" class="course-meta last"> Dummy </p>

                                        <br style="line-height: .5em;">

                                        <p  class="course-meta-sub-label">Number of Students:</p>

                                        <p id="AnzahlStudentenlabel1" class="course-meta-sub">Dummy</p>

                                        <p class="course-meta-sub-label">Semester Count:</p>

                                        <p id="Semesterzahllabel1" class="course-meta-sub last">Dummy</p>

                                    </div>

                                    <a class="toggle-modell" style="margin:0 0 10px 0;width:100%; display:inline-block;" href="#" data-featherlight="#fl2" data-featherlight-root="#diagram1"><i class="glyphicon glyphicon-picture"></i> Show model to compare</a>
                                    <div class="lightbox" id="fl2"><img src="img/meso-en.png"></div>

                                    <div  id="diagram1" class="dia"></div>
                                    <h5>What worked fine:</h5>
                                    <p  id="beneficialmeso"></p>
                                    <h5>What did not work that good:</h5>
                                    <p  id="poorlymeso"></p>
                                    <h5>E-Mail to the lecturer:</h5>
                                    <p  id="contactmeso"></p>

                                    <button id="previousmeso" type="button" class="btn btn-primary" disabled onClick="previous(Listingmeso(),false);return false;">Last Result</button>
                                    <button id="nextmeso" type="button" class="btn btn-primary" disabled onClick="next(Listingmeso(),false);return false;">Next Result</button>

                                </div> <!-- end left col -->

                                <div class="right-col">
                                    <button type="button" class="btn expand-area" data-toggle="collapse" data-target="#table1" >Search for further results</button>

                                    <div class="collapse" id="table1"  >

                                        <table class="table table-striped js-options-table">
                                            <tr>
                                                <td>
                                                    Uni:
                                                </td>
                                                <td colspan="3">
                                                    <select name="Uni" class="stringFilterMeso" id="UniMeso">
                                                        <option value="">Choose University</option>
                                                        <?php
                                                        //////////////////Finds all the options there are in "Uni"/////////////////////////////////
                                                        $options=[];
                                                        array_push($options, $allOfItMeso[0]->Uni);
                                                        $next=0;
                                                        for ($i=0; $i<count($allOfItMeso);$i++){
                                                            $exists=false;
                                                            for ($j=0;$j<count($options);$j++){
                                                                if ($options[$j]===$allOfItMeso[$i]->Uni){
                                                                    $exists=true;
                                                                    break;
                                                                }
                                                            }
                                                            if (!$exists){
                                                                array_push($options,$allOfItMeso[$i]->Uni);
                                                            }
                                                        }
                                                        //////////////////Finds all the options there are in "Uni"///////////////////////////////
                                                        sort($options);
                                                        //////////////////Writes the options in a dropdown menu///////////////////////////////////
                                                        for ($i=0;count($options)>$i;$i++){
                                                            echo "<option value='".$options[$i]."' id='".$options[$i]."UniMesoId' class='UniMeso'>".$options[$i]."</option>";
                                                        }
                                                        //////////////////Writes the options in a dropdown menu///////////////////////////////////
                                                        ?>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Course:
                                                </td>
                                                <td colspan="3">
                                                    <select name="Kurs" class="stringFilterMeso"  id="KursMeso">
                                                        <option value="">Choose Course</option>
                                                        <?php
                                                        //////////////////Finds all the options there are in "Kurs"/////////////////////////////////
                                                        $options=[];
                                                        array_push($options, $allOfItMeso[0]->Kurs);
                                                        $next=0;
                                                        for ($i=0; $i<count($allOfItMeso);$i++){
                                                            $exists=false;
                                                            for ($j=0;$j<count($options);$j++){
                                                                if ($options[$j]===$allOfItMeso[$i]->Kurs){
                                                                    $exists=true;
                                                                    break;
                                                                }
                                                            }
                                                            if (!$exists){
                                                                array_push($options,$allOfItMeso[$i]->Kurs);
                                                            }
                                                        }
                                                        //////////////////Finds all the options there are in "Kurs"///////////////////////////////
                                                        sort($options);
                                                        //////////////////Writes the options in a dropdown menu///////////////////////////////////
                                                        for ($i=0;count($options)>$i;$i++){
                                                            echo "<option value='".$options[$i]."' id='".$options[$i]."KursMesoId' class='KursMeso'>".$options[$i]."</option>";
                                                        }
                                                        //////////////////Writes the options in a dropdown menu///////////////////////////////////
                                                        ?>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    Department:
                                                </td>
                                                <td colspan="3">
                                                    <select name="Fachbereich" class="stringFilterMeso" id="FachbereichMeso">
                                                        <option value="">Choose Department</option>
                                                        <?php
                                                        //////////////////Finds all the options there are in "Fachbereich"/////////////////////////////////
                                                        $options=[];
                                                        array_push($options, $allOfItMeso[0]->Fachbereich);
                                                        $next=0;
                                                        for ($i=0; $i<count($allOfItMeso);$i++){
                                                            $exists=false;
                                                            for ($j=0;$j<count($options);$j++){
                                                                if ($options[$j]===$allOfItMeso[$i]->Fachbereich){
                                                                    $exists=true;
                                                                    break;
                                                                }
                                                            }
                                                            if (!$exists){
                                                                array_push($options,$allOfItMeso[$i]->Fachbereich);
                                                            }
                                                        }
                                                        //////////////////Finds all the options there are in "Fachbereich"///////////////////////////////
                                                        sort($options);
                                                        //////////////////Writes the options in a dropdown menu///////////////////////////////////
                                                        for ($i=0;count($options)>$i;$i++){
                                                            echo "<option value='".$options[$i]."' id='".$options[$i]."FachbereichMesoId' class='FachbereichMeso'>".$options[$i]."</option>";
                                                        }
                                                        //////////////////Writes the options in a dropdown menu///////////////////////////////////
                                                        ?>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    Number of Students:
                                                </td>
                                                <td colspan="3">
                                                    <select name="AnzahlStudenten" class="stringFilterMeso" id="AnzahlStudentenMeso">
                                                        <option value="">choose a number</option>
                                                        <option value="1" id='AnzahlStudentenMesoId1' class='AnzahlStudentenMeso'>1-10</option>
                                                        <option value="11" id='AnzahlStudentenMesoId11' class='AnzahlStudentenMeso'>11-20</option>
                                                        <option value="21" id='AnzahlStudentenMesoId21' class='AnzahlStudentenMeso'>21-30</option>
                                                        <option value="30" id='AnzahlStudentenMesoId30' class='AnzahlStudentenMeso'>über 30</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Semestercount:
                                                </td>
                                                <td colspan="3">
                                                    <select name="Semesterzahl" class="stringFilterMeso" id="SemesterZahlMeso">
                                                        <option value="">choose a semester</option>
                                                        <option value="1" id='SemesterZahlMesoId1' class='SemesterZahlMeso'>1-3 Bachelor</option>
                                                        <option value="4" id='SemesterZahlMesoId4' class='SemesterZahlMeso'>4-6 Bachelor</option>
                                                        <option value="6" id='SemesterZahlMesoId6' class='SemesterZahlMeso'>Master</option>
                                                    </select>
                                                </td>
                                            </tr>
                                        </table>
                                        <button type="button" class="btn expand-area" data-toggle="collapse" data-target="#table4" >Dimensions of the model</button>

                                        <div class="collapse" id="table4"  >
                                            <table  class="table table-striped js-options-table">

                                                <tr class="header">
                                                    <td colspan="2">
                                                        Integration in curriculum:
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="10px">

                                                        <input type="radio" name="Einbindung" class="dimensionFilterMeso" value="1">
                                                    </td>
                                                    <td>
                                                        CP & graded
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="10px">
                                                        <input type="radio" name="Einbindung" class="dimensionFilterMeso" value="2">
                                                    </td>
                                                    <td>
                                                        CP & ungraded
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="10px">
                                                        <input type="radio" name="Einbindung" class="dimensionFilterMeso" value="3">
                                                    </td>
                                                    <td>
                                                        without CP
                                                    </td>
                                                </tr>

                                                <tr class="header">
                                                    <td colspan="2">
                                                        Integration in modules:
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>

                                                        <input type="radio" name="Verortung" class="dimensionFilterMeso" value="1">
                                                    </td>
                                                    <td>
                                                        mandatory module
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="Verortung" class="dimensionFilterMeso" value="2">
                                                    </td>
                                                    <td>
                                                        optional module
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="Verortung" class="dimensionFilterMeso" value="3">
                                                    </td>
                                                    <td>
                                                        no module
                                                    </td>
                                                </tr>



                                                <tr class="header">
                                                    <td colspan="2">
                                                        Examination frame:
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td >
                                                        <input type="radio" name="Prufungsrahmen" class="dimensionFilterMeso" value="1">
                                                    </td>
                                                    <td>
                                                        exam determined
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td >
                                                        <input type="radio" name="Prufungsrahmen" class="dimensionFilterMeso" value="2">
                                                    </td>
                                                    <td>
                                                        exam eligible
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td >
                                                        <input type="radio" name="Prufungsrahmen" class="dimensionFilterMeso" value="3">
                                                    </td>
                                                    <td>
                                                        exam determined
                                                    </td>
                                                </tr>

                                                <tr class="header">
                                                    <td colspan="2">
                                                        Time frame:
                                                    </td>
                                                </tr>
                                                <tr>


                                                    <td >
                                                        <input type="radio" name="Zeitrahmen" class="dimensionFilterMeso" value="1">
                                                    </td>
                                                    <td>
                                                        tri-/semester
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td >
                                                        <input type="radio" name="Zeitrahmen" class="dimensionFilterMeso" value="2">
                                                    </td>
                                                    <td>
                                                        more than a tri-/semester
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td >
                                                        <input type="radio" name="Zeitrahmen" class="dimensionFilterMeso" value="3">
                                                    </td>
                                                    <td>
                                                        whole study program
                                                    </td>
                                                </tr>

                                                <tr class="header">
                                                    <td colspan="2">
                                                        Resource frame:
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="Ressourcenrahmen" class="dimensionFilterMeso" value="1">
                                                    </td>
                                                    <td>
                                                        no resources
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td >
                                                        <input type="radio" name="Ressourcenrahmen" class="dimensionFilterMeso" value="2">
                                                    </td>
                                                    <td>
                                                        temporary
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td >
                                                        <input type="radio" name="Ressourcenrahmen" class="dimensionFilterMeso" value="3">
                                                    </td>
                                                    <td>
                                                        permanent
                                                    </td>
                                                </tr>


                                            </table>
                                        </div>
                                        <div>
                                            <button type="button" class="btn btn-primary" onClick="showall(Listingmeso(),false); hidediv();">Apply Filter</button>
                                            <button type="button" class="btn btn-primary" onClick="cleanFilter(); return false">Clean Filter</button>

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