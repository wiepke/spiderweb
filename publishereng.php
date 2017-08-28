<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <?php include 'header.php' ?>
</head>
<body class="home blog custom-background">

<script src="libs/jquery.js"></script>
<script src="libs/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script src="formchecker.js"></script>

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

                    <h2 class="post-title" style="color:#666666;">Publish</h2>
                    <div class="clear"></div>

                    <!-- model content starts here -->
                    <div class="post-content">

                        <div class="dropdown"  style="text-align:right;">
                            <button class="btn btn-primary dropdown-toggle"  type="button" data-toggle="dropdown">Sprache
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="#">german</a></li>
                                <li><a href="indexeng.html">english</a></li>
                            </ul>
                        </div> <!-- language toogle -->
                        <form name="survey" method="POST" action="publishin.php?utf8=✓<?php if (isset($_GET["mikroid"])) {echo "&mikroid=";echo $_GET["mikroid"];}?><?php if (isset($_GET["mesoid"])) {echo "&mesoid=";echo $_GET["mesoid"];}?>" style="width:950px">
                            <div class="panel-group" id="forms">
                                <div class="panel panel-default">
                                    <table style="width:900px" class="table table-bordered table-striped js-options-table">
                                        <tr>
                                            <td colspan="3">
                                                <p align="center">
                                                    Do you want to publish your results?
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="27%">
                                                Yes, everyone shall see my course.
                                            <td width="27%">
                                                No, the results are just for me.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center">
                                                <input type="radio" name="published" value="1">
                                            </td>
                                            <td align="center">
                                                <input type="radio" name="published" value="0">
                                            </td>
                                        </tr>
                                    </table> <!---knowledgebuilding negotiable topic question tasks inquiry audience assessment -->
                                    <button class="btn btn-primary" type="submit">bestätigen</button>
                                </div>
                            </div> <!--complete form div -->
                        </form>
                    </div>
                </article>
            </section>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>
</body>
</html>
