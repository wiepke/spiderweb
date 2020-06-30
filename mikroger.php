<?php
?>
    <!DOCTYPE html>
    <html lang="en">
<?php
include_once 'language.php';
?>
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

                    <h2 class="post-title" style="color:#666666;"><?php echo $lang['Mikro_Titel']?></h2>
                    <div class="clear"></div>

                    <!-- model content starts here -->
                    <div class="post-content">

                        <!-- start poll mikro -->

                        <form name="survey" method="POST" action="mikroin.php?utf8=✓">
                            <div class="panel-group" id="forms">
                                <div class="panel panel-default">
                                    <div class="panel-collapse collapse in" id="zero">
                                        <p ><?php echo $lang['Mikro_Titel_1_Beschreibung']?></p> <!-- explanation text -->
                                        <table class="table js-options-table">
                                            <tr>
                                                <td width="10%" class="middle">
                                                    <?php echo $lang['Mikro_1_Text1']?>
                                                </td>
                                                <td colspan="3">
                                                    <div  ><input id="uniInput" name="Uni" placeholder="<?php echo $lang['Mikro_1_Inputtext1']?>" autofocus required ></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="10%" class="middle">
                                                    <?php echo $lang['Mikro_1_Text2']?>
                                                </td>
                                                <td colspan="3">
                                                    <div align="right"><input id="kursInput" name="Kurs" placeholder="<?php echo $lang['Mikro_1_Inputtext2']?>" required></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="38%">
                                                    <?php echo $lang['Mikro_1_Text3']?>
                                                </td>
                                                <td colspan="3">
                                                    <div align="right"><input id="fachbereichInput" name="Fachbereich" placeholder="<?php echo $lang['Mikro_1_Inputtext3']?>" size="72%" required ></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="38%">
                                                    <?php echo $lang['Mikro_1_Text4']?>
                                                </td>
                                                <td colspan="3">
                                                    <div align="right"><input id="anzahlInput" name="AnzahlStudenten" placeholder="0" size="72%" required ></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="38%" >
                                                    <?php echo $lang['Mikro_1_Text5']?> <span class="question"><span class="tooltipp"><?php echo $lang['Mikro_1_Infotext']?></span> </span>:
                                                </td>
                                                <td colspan="3">
                                                    <div align="right"><input name="Semesterzahl" id="semesterInput" placeholder="0" size="72%" required></div>
                                                </td>
                                            </tr>
                                        </table> <!-- all dimensions of the universities -->

                                        <button id="firstButton" type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#second"> <?php echo $lang['Btn_Next']?> </button>

                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-collapse collapse" id="second">
                                        <p>
                                            <?php echo $lang['Mikro_Titel_1_Beschreibung']?>
                                        </p>
                                        <table class="table js-options-table">

                                            <tr class="header">
                                                <td colspan="2">

                                                    <?php echo $lang['Mikro_2_Frage']?>

                                                </td>
                                            </tr>

                                            <tr>
                                                <td width="10px">
                                                    <input type="radio" name="Forschungsthema" value="1" id="second-1" >
                                                </td>
                                                <td >
                                                    <label class="hentry" for="second-1"><?php echo $lang['Mikro_2_Text1']?></label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td  width="10px" >
                                                    <input type="radio" name="Forschungsthema" value="2"  id="second-2">
                                                </td>

                                                <td >
                                                    <label class="hentry" for="second-2"><?php echo $lang['Mikro_2_Text2']?></label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td  width="10px">
                                                    <input type="radio" name="Forschungsthema" value="3" id="second-3">
                                                </td>
                                                <td >
                                                    <label class="hentry" for="second-3"><?php echo $lang['Mikro_2_Text3']?></label>
                                                </td>
                                            </tr>


                                        </table> <!---knowledgebuilding negotiable topic question tasks inquiry audience assessment -->
                                        <button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#zero"> <?php echo $lang['Btn_Back']?> </button>
                                        <button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#third"> <?php echo $lang['Btn_Next']?> </button>

                                    </div>
                                </div> <!-- .panel -->

                                <div class="panel panel-default">
                                    <div class="panel-collapse collapse" id="third">
                                        <table class="table js-options-table">
                                            <tr class="header">
                                                <td colspan="2">

                                                    <?php echo $lang['Mikro_3_Frage']?>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="10px">
                                                    <input type="radio" name="Forschungsfrage" value="1" id="third-1">
                                                </td>
                                                <td>
                                                    <label class="hentry" for="third-1"><?php echo $lang['Mikro_3_Text1']?> </label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="10px">
                                                    <input type="radio" name="Forschungsfrage" value="2" id="third-2">
                                                </td>
                                                <td>
                                                    <label class="hentry" for="third-2"><?php echo $lang['Mikro_3_Text2']?></label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="10px">
                                                    <input type="radio" name="Forschungsfrage" value="3" id="third-3">
                                                </td>
                                                <td >
                                                    <label class="hentry" for="third-3"><?php echo $lang['Mikro_3_Text3']?></label>
                                                </td>

                                            </tr>

                                        </table> <!---knowledgebuilding negotiable topic question tasks inquiry audience assessment -->
                                        <button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#second"> <?php echo $lang['Btn_Back']?> </button>
                                        <button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#fourth"> <?php echo $lang['Btn_Next']?> </button>
                                    </div>
                                </div> <!-- .panel -->

                                <div class="panel panel-default">
                                    <div class="panel-collapse collapse" id="fourth">
                                        <table class="table js-options-table">
                                            <tr class="header">
                                                <td colspan="2">

                                                    <?php echo $lang['Mikro_4_Frage']?>

                                                </td>
                                            </tr>

                                            <tr>
                                                <td width="10px">
                                                    <input type="radio" name="Planung" value="1"  id="fourth-1" >
                                                </td>
                                                <td >
                                                    <label class="hentry" for="fourth-1"><?php echo $lang['Mikro_4_Text1']?> </label>                                               </td>
                                            </tr>
                                            <tr>

                                                <td width="10px">
                                                    <input type="radio" name="Planung" value="2" id="fourth-2">
                                                </td>
                                                <td >
                                                    <label class="hentry" for="fourth-2"><?php echo $lang['Mikro_4_Text2']?></label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="10px">
                                                    <input type="radio" name="Planung" value="3" id="fourth-3">
                                                </td>
                                                <td >
                                                    <label class="hentry" for="fourth-3"><?php echo $lang['Mikro_4_Text3']?></label>
                                                </td>

                                            </tr>
                                        </table> <!---knowledgebuilding negotiable topic question tasks inquiry audience assessment -->
                                        <button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#third"> <?php echo $lang['Btn_Back']?> </button>
                                        <button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#fifth"> <?php echo $lang['Btn_Next']?> </button>
                                    </div>
                                </div> <!-- .panel -->

                                <div class="panel panel-default">
                                    <div class="panel-collapse collapse" id="fifth">
                                        <table class="table js-options-table">
                                            <tr class="header">
                                                <td colspan="2">

                                                    <?php echo $lang['Mikro_5_Frage']?>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td  width="10px">
                                                    <input type="radio" name="Durchfuhrung" value="1" id="fifth-1">
                                                </td>
                                                <td >
                                                    <label class="hentry" for="fifth-1"><?php echo $lang['Mikro_5_Text1']?></label>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td  width="10px">
                                                    <input type="radio" name="Durchfuhrung" value="2" id="fifth-2">
                                                </td>
                                                <td >
                                                    <label class="hentry" for="fifth-2"><?php echo $lang['Mikro_5_Text2']?> </label>                                             </td>
                                            </tr>
                                            <tr>
                                                <td  width="10px">
                                                    <input type="radio" name="Durchfuhrung" value="3" id="fifth-3">
                                                </td>
                                                <td>
                                                    <label class="hentry" for="fifth-3"><?php echo $lang['Mikro_5_Text3']?></label>
                                                </td>
                                            </tr>

                                        </table>
                                        <button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#fourth"> <?php echo $lang['Btn_Back']?> </button>
                                        <button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#sixth"> <?php echo $lang['Btn_Next']?> </button>
                                    </div>
                                </div> <!-- .panel -->

                                <div class="panel panel-default">
                                    <div class="panel-collapse collapse" id="sixth">
                                        <table class="table  js-options-table">
                                            <tr class="header">
                                                <td colspan="2">

                                                    <?php echo $lang['Mikro_6_Frage']?>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="10px">
                                                    <input type="radio" name="feedback" value="1"  id="sixth-1">
                                                </td>
                                                <td >
                                                    <label class="hentry" for="sixth-1"><?php echo $lang['Mikro_6_Text1']?></label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="10px">
                                                    <input type="radio" name="feedback" value="2" id="sixth-2">
                                                </td>
                                                <td >
                                                    <label class="hentry" for="sixth-2"><?php echo $lang['Mikro_6_Text2']?></label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="10px">
                                                    <input type="radio" name="feedback" value="3" id="sixth-3">
                                                </td>
                                                <td>
                                                    <label class="hentry" for="sixth-3"><?php echo $lang['Mikro_6_Text3']?></label>
                                                </td>
                                            </tr>

                                        </table> <!---knowledgebuilding negotiable topic question tasks inquiry audience assessment -->
                                        <button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#fifth"> <?php echo $lang['Btn_Back']?> </button>
                                        <button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#seventh"> <?php echo $lang['Btn_Next']?> </button>
                                    </div>
                                </div>  <!-- .panel -->

                                <div class="panel panel-default">
                                    <div class="panel-collapse collapse" id="seventh">
                                        <table class="table  js-options-table">
                                            <tr class="header">
                                                <td colspan="2">

                                                    <?php echo $lang['Mikro_7_Frage']?>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="10px">
                                                    <input type="radio" name="Ergebnisdarstellung" value="1"  id="seventh-1">
                                                </td>
                                                <td >
                                                    <label class="hentry" for="seventh-1"><?php echo $lang['Mikro_7_Text1']?></label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="10px">
                                                    <input type="radio" name="Ergebnisdarstellung" value="2" id="seventh-2">
                                                </td>
                                                <td >
                                                    <label class="hentry" for="seventh-2"><?php echo $lang['Mikro_7_Text2']?></label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="10px">
                                                    <input type="radio" name="Ergebnisdarstellung" value="3" id="seventh-3">
                                                </td>
                                                <td >
                                                    <label class="hentry" for="seventh-3"><?php echo $lang['Mikro_7_Text3']?></label>
                                                </td>
                                            </tr>

                                        </table> <!---knowledgebuilding negotiable topic question tasks inquiry audience assessment -->
                                        <button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#sixth"> <?php echo $lang['Btn_Back']?> </button>
                                        <button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#eighth"> <?php echo $lang['Btn_Next']?> </button>
                                    </div>
                                </div> <!-- .panel -->

                                <div class="panel panel-default">
                                    <div class="panel-collapse collapse" id="eighth">
                                        <table class="table  js-options-table">
                                            <tr class="header">
                                                <td colspan="2">

                                                    <?php echo $lang['Mikro_8_Frage']?>
                                                    <!--Wie wird der Erfolg der Forschung bewertet?-->

                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="10px" >
                                                    <input type="radio" name="Reflexion" value="1"  id="eighth-1">
                                                </td>
                                                <td >
                                                    <label class="hentry" for="eighth-1"><?php echo $lang['Mikro_8_Text1']?></label>
                                                    <!--Es gibt eine vorgegebene Form zur Bewertung (z.B. über eine Prüfung).-->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="10px">
                                                    <input type="radio" name="Reflexion" value="2" id="eighth-2">
                                                </td>
                                                <td >
                                                    <label class="hentry" for="eighth-2"><?php echo $lang['Mikro_8_Text2']?></label>
                                                    <!--Lehrende und Studierende bestimmen im Prozess, wie die Forschung bewertet werden kann.-->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="10px">
                                                    <input type="radio" name="Reflexion" value="3" id="eighth-3">
                                                </td>
                                                <td >
                                                    <label class="hentry" for="eighth-3"><?php echo $lang['Mikro_8_Text3']?></label>
                                                    <!--Studierende entscheiden selbst, ob und wie ihre Forschung bewertet wird.-->
                                                </td>
                                            </tr>

                                        </table> <!---knowledgebuilding negotiable topic question tasks inquiry audience assessment -->
                                        <button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#seventh"> <?php echo $lang['Btn_Back']?> </button>
                                        <button id="submitButton" class="btn btn-primary" type="submit"><?php echo $lang['Btn_Next']?></button>
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