<?php
include_once 'language.php';
?>

    <!DOCTYPE html>
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
                $(".toggle-modell").show();
                $("#previousmikro").show();
                $("#nextmikro").show();
                $("#previousmeso").show();
                $("#nextmeso").show();
            };

            $('document').ready(checksvg);
            function checksvg() {
                if ($("svg").length > 0) {
                    $(".toggle-modell").show();
                } else {
                    $("#previousmikro").hide();
                    $("#nextmikro").hide();
                    $("#previousmeso").hide();
                    $("#nextmeso").hide();

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
    <?php include 'displayrequest.php'
    ?>
    <script>
        let background = true;
    </script>
    <div class="content">

        <!-- the container ( align to center ) -->
        <div class="container">
            <div class="row">

                <!-- content -->
                <section class="col s12 m12 l9 mythemes-classic mythemes-classic">
                    <!-- post content wrapper -->
                    <!-- post content wrapper -->
                    <article class="post-915 post type-post status-publish format-standard hentry">

                        <h2 class="post-title" style="color:#666666;"><?php echo $lang['Display_Titel']?></h2>
                        <div class="clear"></div>

                        <?php
                        if (isset($_GET["mikroid"])) {
                            echo "<p>";
                            echo $lang['Display_Text_Results'];
                            echo "</p>";
                        } else {
                            echo "<p>";
                            echo $lang['Display_Text_look_at'];
                            echo "<a href='mikroquestion.php?lang=";echo $lang['this']."'";
                            echo "class='poll-link'>";
                            echo $lang['Display_Link'];
                            echo "</a><br>";
                            echo "</p>";
                        }
                        echo "<p>";
                        echo $lang['Display_Text_Browse'];
                        echo "</p>";
                        echo "<script type=\"text/javascript\">
							      //$('document').ready(showfilter);
							      function showfilter() {
							      	$('.collapse').addClass('in');
							      	$('.expand-area').attr('aria-expanded','true');
							      	$('.collapse').attr('aria-expanded','true');
							      	let table2 =$('#table2');
							      	table2.attr('aria-expanded','false');
							      	table2.toggleClass('in');
							      	let table4 =$('#table4');
							      	table4.attr('aria-expanded','false');
							      	table4.toggleClass('in');
							      }
							  </script>"; //end output
                        ?>

                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#tab1" data-toggle="tab"><?php echo $lang['Display_Mikro']?> </a>
                            </li>
                            <li>
                                <a href="#tab2" data-toggle="tab" ><?php echo $lang['Display_Meso']?> </a>
                            </li>
                        </ul>

                        <!-- begin modell content -->
                        <div class="tab-content ">

                            <div class="tab-pane active" id="tab1">
                                <div class="left-col">

                                    <div class="placeholderdiv">
                                        <p class="course-meta last"> <?php echo $lang['Display_Tab_Titel']?></p><br>
                                        <p class="course-meta-sub-label"><?php echo $lang['Display_Tab_Beschreibung']?></p>

                                    </div>

                                    <div id="labels0">

                                        <p id="Pagination0" hidden> dummy von dummy </p>

                                        <p class="course-meta" id="Unilabel0">Dummy </p>
                                        <p id="Kurslabel0" class="course-meta">Dummy</p>
                                        <p id="Fachbereichlabel0" class="course-meta last"> Dummy </p>

                                        <br style="line-height: .5em;">

                                        <p class="course-meta-sub-label"><?php echo $lang['Display_Result_Studierende']?></p>

                                        <p id="AnzahlStudentenlabel0" class="course-meta-sub">Dummy</p>

                                        <p class="course-meta-sub-label"><?php echo $lang['Display_Result_Semester']?></p>

                                        <p id="Semesterzahllabel0" class="course-meta-sub last">Dummy</p>

                                    </div>
                                    <a class="toggle-modell" style="margin:0 0 10px 0;width:100%; display:inline-block;cursor:pointer;"
                                       onclick="background=!background; updateDiagram(null,null,0,background)"><i
                                                class="glyphicon glyphicon-picture"></i> <?php echo $lang['Display_Results_Show']?></a>

                                    <div class="lightbox" id="fl1"><img src="img/mikro-<?php echo $lang['this']?>.png"></div>
                                    <ul style="position:relative;height:480px;width:480px">
                                        <li>
                                            <div style="position:absolute;margin-top:-8px;margin-left:37px;"
                                                 id="background0" class="dia"></div>
                                        </li>
                                        <li>
                                            <div style="position:absolute;width:90%; margin-top: -16.5px;" id="diagram0"
                                                 class="dia"></div>
                                        </li>
                                    </ul>
                                    <!--<div  id="diagram0" class="dia"></div>-->
                                    <div class="beneficialExists"><h5><?php echo $lang['Display_Tab_Text1']?></h5>
                                        <p id="beneficialmikro"></p></div>
                                    <div class="poorlyExists"><h5><?php echo $lang['Display_Tab_Text2']?></h5>
                                        <p id="poorlymikro"></p></div>
                                    <div class="emailExists"><h5><?php echo $lang['Display_Tab_Text3']?></h5>
                                        <p id="contactmikro"></p></div>


                                    <button id="previousmikro" type="button" class="btn btn-primary" disabled
                                            onClick="previous(Listingmikro(),true, background, '<?php echo $lang['this']?>');return false;"><?php echo $lang['Display_Btn_Result_Last']?>
                                    </button>
                                    <button id="nextmikro" type="button" class="btn btn-primary" disabled
                                            onClick="next(Listingmikro(),true, background, '<?php echo $lang['this']?>');return false;"><?php echo $lang['Display_Btn_Result_Next']?>
                                    </button>


                                </div>

                                <div class="right-col">
                                    <button type="button" class="btn expand-area" id="expandbutton" data-toggle="collapse"
                                            data-target="#table"><?php echo $lang['Display_Drop']?>
                                    </button>
                                    <div class="collapse" id="table">
                                        <table class="table table-striped js-options-table">
                                            <tr>
                                                <td>
                                                    <?php echo $lang['Display_Drop_Select_1_Name']?>
                                                </td>
                                                <td colspan="3">
                                                    <!-- <input name="Uni" value="" class="stringFilterMikro" size="40"> -->
                                                    <select name="Uni" class="stringFilterMikro" id="UniMikro">
                                                        <option value=""><?php echo $lang['Display_Drop_Select_1']?></option>
                                                        <?php
                                                        //////////////////Finds all the options there are in "Uni"/////////////////////////////////
                                                        $options = [];
                                                        array_push($options, $allOfItMikro[0]->Uni);
                                                        $next = 0;
                                                        for ($i = 0; $i < count($allOfItMikro); $i++) {
                                                            $exists = false;
                                                            for ($j = 0; $j < count($options); $j++) {
                                                                if ($options[$j] === $allOfItMikro[$i]->Uni) {
                                                                    $exists = true;
                                                                    break;
                                                                }
                                                            }
                                                            if (!$exists) {
                                                                array_push($options, $allOfItMikro[$i]->Uni);
                                                            }
                                                        }
                                                        //////////////////Finds all the options there are in "Uni"///////////////////////////////
                                                        sort($options);
                                                        //////////////////Writes the options in a dropdown menu///////////////////////////////////
                                                        for ($i = 0; count($options) > $i; $i++) {
                                                            echo "<option value='" . utf8_decode($options[$i]) . "' id='" . $options[$i] . "UniMikroId' class='UniMikro'>" . utf8_decode($options[$i]) . "</option>";
                                                        }
                                                        //////////////////Writes the options in a dropdown menu///////////////////////////////////
                                                        ?>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <?php echo $lang['Display_Drop_Select_2_Name']?>
                                                </td>
                                                <td colspan="3">
                                                    <!-- <input name="Kurs" value="" class="stringFilterMikro" size="40"> -->
                                                    <select name="Kurs" class="stringFilterMikro" id="KursMikro">
                                                        <option value=""><?php echo $lang['Display_Drop_Select_2']?></option>
                                                        <?php
                                                        //////////////////Finds all the options there are in "Kurs"/////////////////////////////////
                                                        $options = [];
                                                        array_push($options, $allOfItMikro[0]->Kurs);
                                                        $next = 0;
                                                        for ($i = 0; $i < count($allOfItMikro); $i++) {
                                                            $exists = false;
                                                            for ($j = 0; $j < count($options); $j++) {
                                                                if ($options[$j] === $allOfItMikro[$i]->Kurs) {
                                                                    $exists = true;
                                                                    break;
                                                                }
                                                            }
                                                            if (!$exists) {
                                                                array_push($options, $allOfItMikro[$i]->Kurs);
                                                            }
                                                        }
                                                        //////////////////Finds all the options there are in "Kurs"///////////////////////////////
                                                        sort($options);
                                                        //////////////////Writes the options in a dropdown menu///////////////////////////////////
                                                        for ($i = 0; count($options) > $i; $i++) {
                                                            echo "<option value='" . utf8_decode($options[$i]) . "' id='" . $options[$i] . "KursMikroId' class='KursMikro'>" . utf8_decode($options[$i]) . "</option>";
                                                        }
                                                        //////////////////Writes the options in a dropdown menu///////////////////////////////////
                                                        ?>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <?php echo $lang['Display_Drop_Select_3_Name']?>
                                                </td>
                                                <td colspan="3">
                                                    <!-- <input name="Fachbereich" value="" class="stringFilterMikro" size="40"> -->
                                                    <select name="Fachbereich" class="stringFilterMikro"
                                                            id="FachbereichMikro">
                                                        <option value=""><?php echo $lang['Display_Drop_Select_3']?></option>
                                                        <?php
                                                        //////////////////Finds all the options there are in "Fachbereich"/////////////////////////////////
                                                        $options = [];
                                                        array_push($options, $allOfItMikro[0]->Fachbereich);
                                                        $next = 0;
                                                        for ($i = 0; $i < count($allOfItMikro); $i++) {
                                                            $exists = false;
                                                            for ($j = 0; $j < count($options); $j++) {
                                                                if ($options[$j] === $allOfItMikro[$i]->Fachbereich) {
                                                                    $exists = true;
                                                                    break;
                                                                }
                                                            }
                                                            if (!$exists) {
                                                                array_push($options, $allOfItMikro[$i]->Fachbereich);
                                                            }
                                                        }
                                                        //////////////////Finds all the options there are in "Fachbereich"///////////////////////////////
                                                        sort($options);
                                                        //////////////////Writes the options in a dropdown menu///////////////////////////////////
                                                        for ($i = 0; count($options) > $i; $i++) {
                                                            echo "<option value='" . utf8_decode($options[$i]) . "' id='" . $options[$i] . "FachbereichMikroId' class='FachbereichMikro'>" . utf8_decode($options[$i]) . "</option>";
                                                        }
                                                        //////////////////Writes the options in a dropdown menu///////////////////////////////////
                                                        ?>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <?php echo $lang['Display_Drop_Select_4_Name']?>
                                                </td>
                                                <td colspan="3">
                                                    <!-- <input name="AnzahlStudenten" value="" class="stringFilterMikro" size="40"> -->
                                                    <select name="AnzahlStudenten" class="stringFilterMikro"
                                                            id="AnzahlStudentenMikro">
                                                        <option value=""><?php echo $lang['Display_Drop_Select_4']?> </option>
                                                        <option value="1" id='AnzahlStudentenMikroId1'
                                                                class='AnzahlStudentenMikro'>1-10
                                                        </option>
                                                        <option value="11" id='AnzahlStudentenMikroId11'
                                                                class='AnzahlStudentenMikro'>11-20
                                                        </option>
                                                        <option value="21" id='AnzahlStudentenMikroId21'
                                                                class='AnzahlStudentenMikro'>21-30
                                                        </option>
                                                        <option value="30" id='AnzahlStudentenMikroId30'
                                                                class='AnzahlStudentenMikro'>> 30
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <?php echo $lang['Display_Drop_Select_5_Name']?>
                                                </td>
                                                <td colspan="3">
                                                    <select name="Semesterzahl" class="stringFilterMikro"
                                                            id="SemesterZahlMikro">
                                                        <option value=""><?php echo $lang['Display_Drop_Select_5']?> </option>
                                                        <option value="1" id='SemesterZahlMikroId1'
                                                                class='SemesterZahlMikro'><?php echo $lang['Display_Drop_Select_5_Antwort1']?>
                                                        </option>
                                                        <option value="4" id='SemesterZahlMikroId4'
                                                                class='SemesterZahlMikro'><?php echo $lang['Display_Drop_Select_5_Antwort2']?>
                                                        </option>
                                                        <option value="6" id='SemesterZahlMikroId6'
                                                                class='SemesterZahlMikro'><?php echo $lang['Display_Drop_Select_5_Antwort3']?>
                                                        </option>
                                                        <option value="8" id='SemesterZahlMikroId8'
                                                                class='SemesterZahlMikro'><?php echo $lang['Display_Drop_Select_5_Antwort4']?>
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                        </table>
                                        <button type="button" class="btn expand-area" id="expandbutton2"
                                                data-target="#table2" data-toggle="collapse" aria-expanded="false">
                                            <?php echo $lang['Display_Drop2']?>
                                        </button>
                                        <div class="collapse" id="table2">
                                            <table class="table table-striped js-options-table">
                                                <tr class="header">
                                                    <td colspan="2">
                                                        <?php echo $lang['Display_Mikro_Drop_1_Text']?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="10px">

                                                        <input type="radio" name="feedback" class="dimensionFilterMikro"
                                                               value="1">
                                                    </td>

                                                    <td>
                                                        <?php echo $lang['Display_Mikro_Drop_1_Antwort1']?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="10px">
                                                        <input type="radio" name="feedback" class="dimensionFilterMikro"
                                                               value="2">
                                                    </td>

                                                    <td>
                                                        <?php echo $lang['Display_Mikro_Drop_1_Antwort2']?>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td width="10px">
                                                        <input type="radio" name="feedback" class="dimensionFilterMikro"
                                                               value="3">
                                                    </td>
                                                    <td>
                                                        <?php echo $lang['Display_Mikro_Drop_1_Antwort3']?>
                                                    </td>
                                                </tr>

                                                <tr class="header">
                                                    <td colspan="2">
                                                        <?php echo $lang['Display_Mikro_Drop_2_Text']?>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td>

                                                        <input type="radio" name="Forschungsthema"
                                                               class="dimensionFilterMikro" value="1">
                                                    </td>
                                                    <td>
                                                        <?php echo $lang['Display_Mikro_Drop_23_Antwort1']?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="Forschungsthema"
                                                               class="dimensionFilterMikro" value="2">
                                                    </td>
                                                    <td>
                                                        <?php echo $lang['Display_Mikro_Drop_23_Antwort2']?>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="Forschungsthema"
                                                               class="dimensionFilterMikro" value="3">
                                                    </td>
                                                    <td>
                                                        <?php echo $lang['Display_Mikro_Drop_23_Antwort3']?>
                                                    </td>
                                                </tr>

                                                <tr class="header">
                                                    <td colspan="2">
                                                        <?php echo $lang['Display_Mikro_Drop_3_Text']?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="Forschungsfrage"
                                                               class="dimensionFilterMikro" value="1">
                                                    </td>
                                                    <td>
                                                        <?php echo $lang['Display_Mikro_Drop_23_Antwort1']?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="Forschungsfrage"
                                                               class="dimensionFilterMikro" value="2">
                                                    </td>
                                                    <td>
                                                        <?php echo $lang['Display_Mikro_Drop_23_Antwort2']?>
                                                    </td>
                                                </tr>
                                                <td>
                                                    <input type="radio" name="Forschungsfrage" class="dimensionFilterMikro"
                                                           value="3">
                                                </td>
                                                <td>
                                                    <?php echo $lang['Display_Mikro_Drop_23_Antwort3']?>
                                                </td>

                                                </tr>

                                                <tr class="header">
                                                    <td colspan="2">
                                                        <?php echo $lang['Display_Mikro_Drop_4_Text']?>
                                                    </td>
                                                </tr>
                                                <tr>


                                                    <td>
                                                        <input type="radio" name="Planung" class="dimensionFilterMikro"
                                                               value="1">
                                                    </td>
                                                    <td>
                                                        <?php echo $lang['Display_Mikro_Drop_45_Antwort1']?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="Planung" class="dimensionFilterMikro"
                                                               value="2">
                                                    </td>
                                                    <td>
                                                        <?php echo $lang['Display_Mikro_Drop_45_Antwort2']?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="Planung" class="dimensionFilterMikro"
                                                               value="3">
                                                    </td>
                                                    <td>
                                                        <?php echo $lang['Display_Mikro_Drop_45_Antwort3']?>
                                                    </td>
                                                </tr>

                                                <tr class="header">
                                                    <td colspan="2">
                                                        <?php echo $lang['Display_Mikro_Drop_5_Text']?>
                                                    </td>
                                                </tr>
                                                <tr>


                                                    <td>
                                                        <input type="radio" name="Durchfuhrung" class="dimensionFilterMikro"
                                                               value="1">
                                                    </td>
                                                    <td>
                                                        <?php echo $lang['Display_Mikro_Drop_45_Antwort1']?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="Durchfuhrung" class="dimensionFilterMikro"
                                                               value="2">
                                                    </td>
                                                    <td>
                                                        <?php echo $lang['Display_Mikro_Drop_45_Antwort2']?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="Durchfuhrung" class="dimensionFilterMikro"
                                                               value="3">
                                                    </td>
                                                    <td>
                                                        <?php echo $lang['Display_Mikro_Drop_45_Antwort3']?>
                                                    </td>

                                                </tr>

                                                <tr class="header">
                                                    <td colspan="2">
                                                        <?php echo $lang['Display_Mikro_Drop_6_Text']?>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td>
                                                        <input type="radio" name="Ergebnisdarstellung"
                                                               class="dimensionFilterMikro" value="1">
                                                    </td>
                                                    <td>
                                                        <?php echo $lang['Display_Mikro_Drop_6_Antwort1']?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="Ergebnisdarstellung"
                                                               class="dimensionFilterMikro" value="2">
                                                    </td>
                                                    <td>
                                                        <?php echo $lang['Display_Mikro_Drop_6_Antwort2']?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="Ergebnisdarstellung"
                                                               class="dimensionFilterMikro" value="3">
                                                    </td>
                                                    <td>
                                                        <?php echo $lang['Display_Mikro_Drop_6_Antwort3']?>
                                                    </td>
                                                </tr>
                                                <tr class="header">
                                                    <td colspan="2">
                                                        <?php echo $lang['Display_Mikro_Drop_7_Text']?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="Reflexion" class="dimensionFilterMikro"
                                                               value="1">
                                                    </td>
                                                    <td>
                                                        <?php echo $lang['Display_Mikro_Drop_7_Antwort1']?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="Reflexion" class="dimensionFilterMikro"
                                                               value="2">
                                                    </td>
                                                    <td>
                                                        <?php echo $lang['Display_Mikro_Drop_7_Antwort2']?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="Reflexion" class="dimensionFilterMikro"
                                                               value="3">
                                                    </td>
                                                    <td>
                                                        <?php echo $lang['Display_Mikro_Drop_7_Antwort3']?>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div>
                                            <button type="button" class="btn btn-primary bottomspace halfwidth"
                                                    onClick="background = true; showall(Listingmikro(),true, background, '<?php echo $lang['this']?>');hidediv();"><?php echo $lang['Display_Btn_Filter_Go']?>
                                            </button>
                                            <button type="button" class="btn btn-primary bottomspace halfwidth"
                                                    onClick="cleanFilter(); return false"><?php echo $lang['Display_Btn_Filter_Del']?>
                                            </button>
                                        </div>
                                    </div> <!-- collapse -->


                                </div> <!-- end right-col -->
                            </div> <!-- end 1st tab -->

                            <div class="tab-pane " id="tab2">
                                <div class="left-col">
                                    <div class="placeholderdiv">
                                        <p class="course-meta last"> <?php echo $lang['Display_Tab_Titel']?> </p><br>
                                        <p class="course-meta-sub-label"><?php echo $lang['Display_Tab_Beschreibung']?></p>

                                    </div>

                                    <div id="labels1">
                                        <p id="Pagination1" hidden> dummy von dummy</p>
                                        <p class="course-meta" id="Unilabel1">Dummy </p>
                                        <p id="Kurslabel1" class="course-meta">Dummy</p>
                                        <p id="Fachbereichlabel1" class="course-meta last"> Dummy </p>

                                        <br style="line-height: .5em;">

                                        <p class="course-meta-sub-label"><?php echo $lang['Display_Result_Studierende']?></p>

                                        <p id="AnzahlStudentenlabel1" class="course-meta-sub">Dummy</p>

                                        <p class="course-meta-sub-label"><?php echo $lang['Display_Result_Semester']?></p>

                                        <p id="Semesterzahllabel1" class="course-meta-sub last">Dummy</p>

                                    </div>
                                    <a class="toggle-modell" style="margin:0 0 10px 0;width:100%; display:inline-block;cursor:pointer;"
                                       onclick="background=!background; updateDiagram(null,null,1,background)"><i
                                                class="glyphicon glyphicon-picture"></i> <?php echo $lang['Display_Results_Show']?></a>
                                    <div class="lightbox" id="fl2"><img src="img/meso-<?php echo $lang['this']?>.png"></div>
                                    <ul style="position:relative;height:480px;width:480px">
                                        <li>
                                            <div style="position:absolute;margin-top:-8px;margin-left:37px;"
                                                 id="background1" class="dia"></div>
                                        </li>
                                        <li>
                                            <div style="position:absolute;width:90%; margin-top: -16.5px;" id="diagram1" class="dia"></div>
                                        </li>
                                    </ul>
                                    <div class="beneficialExists">
                                        <h5><?php echo $lang['Display_Tab_Text1']?></h5>
                                        <p id="beneficialmeso"></p>
                                    </div>
                                    <div class="poorlyExists">
                                        <h5><?php echo $lang['Display_Tab_Text2']?></h5>
                                        <p id="poorlymeso"></p>
                                    </div>
                                    <div class="emailExists">
                                        <h5><?php echo $lang['Display_Tab_Text3']?></h5>
                                        <p id="contactmeso"></p>
                                    </div>
                                    <button id="previousmeso" type="button" class="btn btn-primary" disabled
                                            onClick="previous(Listingmeso(),false, background,  '<?php echo $lang['this']?>');return false;"><?php echo $lang['Display_Btn_Result_Last']?>
                                    </button>
                                    <button id="nextmeso" type="button" class="btn btn-primary" disabled
                                            onClick="next(Listingmeso(),false, background,  '<?php echo $lang['this']?>');return false;"><?php echo $lang['Display_Btn_Result_Next']?>
                                    </button>

                                </div> <!-- end left col -->

                                <div class="right-col">
                                    <button type="button" class="btn expand-area" data-toggle="collapse"
                                            data-target="#table1"><?php echo $lang['Display_Drop']?>
                                    </button>

                                    <div class="collapse" id="table1">

                                        <table class="table table-striped js-options-table">
                                            <tr>
                                                <td>
                                                    <?php echo $lang['Display_Drop_Select_1_Name']?>
                                                </td>
                                                <td colspan="3">
                                                    <select name="Uni" class="stringFilterMeso" id="UniMeso">
                                                        <option value=""><?php echo $lang['Display_Drop_Select_1']?></option>
                                                        <?php
                                                        //////////////////Finds all the options there are in "Uni"/////////////////////////////////
                                                        $options = [];
                                                        array_push($options, $allOfItMeso[0]->Uni);
                                                        $next = 0;
                                                        for ($i = 0; $i < count($allOfItMeso); $i++) {
                                                            $exists = false;
                                                            for ($j = 0; $j < count($options); $j++) {
                                                                if ($options[$j] === $allOfItMeso[$i]->Uni) {
                                                                    $exists = true;
                                                                    break;
                                                                }
                                                            }
                                                            if (!$exists) {
                                                                array_push($options, $allOfItMeso[$i]->Uni);
                                                            }
                                                        }
                                                        //////////////////Finds all the options there are in "Uni"///////////////////////////////
                                                        sort($options);
                                                        //////////////////Writes the options in a dropdown menu///////////////////////////////////
                                                        for ($i = 0; count($options) > $i; $i++) {
                                                            echo "<option value='" . utf8_decode($options[$i]) . "' id='" . $options[$i] . "UniMesoId' class='UniMeso'>" . utf8_decode($options[$i]) . "</option>";
                                                        }
                                                        //////////////////Writes the options in a dropdown menu///////////////////////////////////
                                                        ?>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <?php echo $lang['Display_Drop_Select_2_Name']?>
                                                </td>
                                                <td colspan="3">
                                                    <select name="Kurs" class="stringFilterMeso" id="KursMeso">
                                                        <option value=""><?php echo $lang['Display_Drop_Select_2']?></option>
                                                        <?php
                                                        //////////////////Finds all the options there are in "Kurs"/////////////////////////////////
                                                        $options = [];
                                                        array_push($options, $allOfItMeso[0]->Kurs);
                                                        $next = 0;
                                                        for ($i = 0; $i < count($allOfItMeso); $i++) {
                                                            $exists = false;
                                                            for ($j = 0; $j < count($options); $j++) {
                                                                if ($options[$j] === $allOfItMeso[$i]->Kurs) {
                                                                    $exists = true;
                                                                    break;
                                                                }
                                                            }
                                                            if (!$exists) {
                                                                array_push($options, $allOfItMeso[$i]->Kurs);
                                                            }
                                                        }
                                                        //////////////////Finds all the options there are in "Kurs"///////////////////////////////
                                                        sort($options);
                                                        //////////////////Writes the options in a dropdown menu///////////////////////////////////
                                                        for ($i = 0; count($options) > $i; $i++) {
                                                            echo "<option value='" . utf8_decode($options[$i]) . "' id='" . $options[$i] . "KursMesoId' class='KursMeso'>" . utf8_decode($options[$i]) . "</option>";
                                                        }
                                                        //////////////////Writes the options in a dropdown menu///////////////////////////////////
                                                        ?>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <?php echo $lang['Display_Drop_Select_3_Name']?>
                                                </td>
                                                <td colspan="3">
                                                    <select name="Fachbereich" class="stringFilterMeso"
                                                            id="FachbereichMeso">
                                                        <option value=""><?php echo $lang['Display_Drop_Select_3']?></option>
                                                        <?php
                                                        //////////////////Finds all the options there are in "Fachbereich"/////////////////////////////////
                                                        $options = [];
                                                        array_push($options, $allOfItMeso[0]->Fachbereich);
                                                        $next = 0;
                                                        for ($i = 0; $i < count($allOfItMeso); $i++) {
                                                            $exists = false;
                                                            for ($j = 0; $j < count($options); $j++) {
                                                                if ($options[$j] === $allOfItMeso[$i]->Fachbereich) {
                                                                    $exists = true;
                                                                    break;
                                                                }
                                                            }
                                                            if (!$exists) {
                                                                array_push($options, $allOfItMeso[$i]->Fachbereich);
                                                            }
                                                        }
                                                        //////////////////Finds all the options there are in "Fachbereich"///////////////////////////////
                                                        sort($options);
                                                        //////////////////Writes the options in a dropdown menu///////////////////////////////////
                                                        for ($i = 0; count($options) > $i; $i++) {
                                                            echo "<option value='" . utf8_decode($options[$i]) . "' id='" . $options[$i] . "FachbereichMesoId' class='FachbereichMeso'>" . utf8_decode($options[$i]) . "</option>";
                                                        }
                                                        //////////////////Writes the options in a dropdown menu///////////////////////////////////
                                                        ?>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <?php echo $lang['Display_Drop_Select_4_Name']?>
                                                </td>
                                                <td colspan="3">
                                                    <select name="AnzahlStudenten" class="stringFilterMeso"
                                                            id="AnzahlStudentenMeso">
                                                        <option value=""><?php echo $lang['Display_Drop_Select_4']?></option>
                                                        <option value="1" id='AnzahlStudentenMesoId1'
                                                                class='AnzahlStudentenMeso'>1-10
                                                        </option>
                                                        <option value="11" id='AnzahlStudentenMesoId11'
                                                                class='AnzahlStudentenMeso'>11-20
                                                        </option>
                                                        <option value="21" id='AnzahlStudentenMesoId21'
                                                                class='AnzahlStudentenMeso'>21-30
                                                        </option>
                                                        <option value="30" id='AnzahlStudentenMesoId30'
                                                                class='AnzahlStudentenMeso'>>30
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <?php echo $lang['Display_Drop_Select_5_Name']?>
                                                </td>
                                                <td colspan="3">
                                                    <select name="Semesterzahl" class="stringFilterMeso"
                                                            id="SemesterZahlMeso">
                                                        <option value=""><?php echo $lang['Display_Drop_Select_5']?></option>
                                                        <option value="1" id='SemesterZahlMesoId1' class='SemesterZahlMeso'>
                                                            <?php echo $lang['Display_Drop_Select_5_Antwort1']?>
                                                        </option>
                                                        <option value="4" id='SemesterZahlMesoId4' class='SemesterZahlMeso'>
                                                            <?php echo $lang['Display_Drop_Select_5_Antwort2']?>
                                                        </option>
                                                        <option value="6" id='SemesterZahlMesoId6' class='SemesterZahlMeso'>
                                                            <?php echo $lang['Display_Drop_Select_5_Antwort3']?>
                                                        </option>
                                                        <option value="8" id='SemesterZahlMesoId8' class='SemesterZahlMeso'>
                                                            <?php echo $lang['Display_Drop_Select_5_Antwort4']?>
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                        </table>
                                        <button type="button" class="btn expand-area" data-toggle="collapse"
                                                data-target="#table4"><?php echo $lang['Display_Drop2']?>
                                        </button>

                                        <div class="collapse" id="table4">
                                            <table class="table table-striped js-options-table">

                                                <tr class="header">
                                                    <td colspan="2">
                                                        <?php echo $lang['Display_Meso_Drop_1_Text']?>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td>
                                                        <input type="radio" name="Prufungsrahmen"
                                                               class="dimensionFilterMeso" value="1">
                                                    </td>
                                                    <td>
                                                        <?php echo $lang['Display_Meso_Drop_1_Antwort1']?>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td>
                                                        <input type="radio" name="Prufungsrahmen"
                                                               class="dimensionFilterMeso" value="2">
                                                    </td>
                                                    <td>
                                                        <?php echo $lang['Display_Meso_Drop_1_Antwort2']?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="Prufungsrahmen"
                                                               class="dimensionFilterMeso" value="3">
                                                    </td>
                                                    <td>
                                                        <?php echo $lang['Display_Meso_Drop_1_Antwort3']?>
                                                    </td>
                                                </tr>

                                                <tr class="header">
                                                    <td colspan="2">
                                                        <?php echo $lang['Display_Meso_Drop_2_Text']?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="10px">

                                                        <input type="radio" name="Einbindung" class="dimensionFilterMeso"
                                                               value="1">
                                                    </td>
                                                    <td>
                                                        <?php echo $lang['Display_Meso_Drop_2_Antwort1']?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="10px">
                                                        <input type="radio" name="Einbindung" class="dimensionFilterMeso"
                                                               value="2">
                                                    </td>
                                                    <td>
                                                        <?php echo $lang['Display_Meso_Drop_2_Antwort2']?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="10px">
                                                        <input type="radio" name="Einbindung" class="dimensionFilterMeso"
                                                               value="3">
                                                    </td>
                                                    <td>
                                                        <?php echo $lang['Display_Meso_Drop_2_Antwort3']?>
                                                    </td>
                                                </tr>
                                                <tr class="header">
                                                    <td colspan="2">
                                                        <?php echo $lang['Display_Meso_Drop_3_Text']?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="10px">

                                                        <input type="radio" name="CreditPoints" class="dimensionFilterMeso"
                                                               value="1">
                                                    </td>
                                                    <td>
                                                        <?php echo $lang['Display_Meso_Drop_3_Antwort1']?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="10px">
                                                        <input type="radio" name="CreditPoints" class="dimensionFilterMeso"
                                                               value="2">
                                                    </td>
                                                    <td>
                                                        <?php echo $lang['Display_Meso_Drop_3_Antwort2']?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="10px">
                                                        <input type="radio" name="CreditPoints" class="dimensionFilterMeso"
                                                               value="3">
                                                    </td>
                                                    <td>
                                                        <?php echo $lang['Display_Meso_Drop_3_Antwort3']?>
                                                    </td>
                                                </tr>

                                                <tr class="header">
                                                    <td colspan="2">
                                                        <?php echo $lang['Display_Meso_Drop_4_Text']?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>

                                                        <input type="radio" name="Verortung" class="dimensionFilterMeso"
                                                               value="1">
                                                    </td>
                                                    <td>
                                                        <?php echo $lang['Display_Meso_Drop_4_Antwort1']?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="Verortung" class="dimensionFilterMeso"
                                                               value="2">
                                                    </td>
                                                    <td>
                                                        <?php echo $lang['Display_Meso_Drop_4_Antwort2']?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="Verortung" class="dimensionFilterMeso"
                                                               value="3">
                                                    </td>
                                                    <td>
                                                        <?php echo $lang['Display_Meso_Drop_4_Antwort3']?>
                                                    </td>
                                                </tr>

                                                <tr class="header">
                                                    <td colspan="2">
                                                        <?php echo $lang['Display_Meso_Drop_5_Text']?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="Ressourcenrahmen"
                                                               class="dimensionFilterMeso" value="1">
                                                    </td>
                                                    <td>
                                                        <?php echo $lang['Display_Meso_Drop_5_Antwort1']?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="Ressourcenrahmen"
                                                               class="dimensionFilterMeso" value="2">
                                                    </td>
                                                    <td>
                                                        <?php echo $lang['Display_Meso_Drop_5_Antwort2']?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="Ressourcenrahmen"
                                                               class="dimensionFilterMeso" value="3">
                                                    </td>
                                                    <td>
                                                        <?php echo $lang['Display_Meso_Drop_5_Antwort3']?>
                                                    </td>
                                                </tr>

                                                <tr class="header">
                                                    <td colspan="2">
                                                        <?php echo $lang['Display_Meso_Drop_6_Text']?>
                                                    </td>
                                                </tr>
                                                <tr>


                                                    <td>
                                                        <input type="radio" name="Zeitrahmen" class="dimensionFilterMeso"
                                                               value="1">
                                                    </td>
                                                    <td>
                                                        <?php echo $lang['Display_Meso_Drop_6_Antwort1']?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="Zeitrahmen" class="dimensionFilterMeso"
                                                               value="2">
                                                    </td>
                                                    <td>
                                                        <?php echo $lang['Display_Meso_Drop_6_Antwort2']?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="Zeitrahmen" class="dimensionFilterMeso"
                                                               value="3">
                                                    </td>
                                                    <td>
                                                        <?php echo $lang['Display_Meso_Drop_6_Antwort3']?>
                                                    </td>
                                                </tr>


                                            </table>
                                        </div>
                                        <div>
                                            <button type="button" class="btn btn-primary"
                                                    onClick="background = true;showall(Listingmeso(),false, background, '<?php echo $lang['this']?>');hidediv();"><?php echo $lang['Display_Btn_Filter_Go']?>
                                            </button>
                                            <button type="button" class="btn btn-primary"
                                                    onClick="cleanFilter(); return false"><?php echo $lang['Display_Btn_Filter_Del']?>
                                            </button>
                                        </div>
                                    </div> <!--- end collapse -->

                                </div> <!-- end right col -->
                            </div> <!-- end tab 2 -->
                        </div> <!-- end tab content-->

                        <!-- end of modell content -->

                        <div class="clearfix"></div>
            </div> <!-- ende post content -->
            </article>

            <div class=" aligncenter"></div>

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