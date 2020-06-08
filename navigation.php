<?php
include_once 'language.php';
?>

<script type="text/javascript">


    $('document').ready(langswitchde);

    function langswitchde() {

        var wholeadress=window.location.href;
        //alert (wholeadress);
        var replaceVar = "="+"<?php echo $lang['this']?>";
        var newLangVar = "="+"<?php echo $lang['other']?>";
        //alert(replaceVar);
        var adress2=wholeadress.replace(replaceVar, newLangVar);
        //alert(adress2);
        $("a.lang-switch").attr("href", (adress2));
    }
</script>
<header class="mythemes-miss-header-image">
        <nav class="white mythemes-topper" role="navigation">

				
             <div class="nav-wrapper container">
             <!-- header button -->
                <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mythemes-icon-menu"></i></a>

                    <!-- Site Logo, Title and Description -->
					<div class="mythemes-blog-identity">
						<a class="mythemes-blog-logo" href="http://fides-projekt.de/" title=" - Begleitforschung zum Qualitätspakt Lehre" style="margin-top: 0px; margin-bottom: 0px;">
							<img src="img/fides-logo_Maren02.svg" title=" - Begleitforschung zum Qualitätspakt Lehre"/>
						</a>
						<a class="mythemes-blog-description" href="http://fides-projekt.de/" title=" - Begleitforschung zum Qualitätspakt Lehre"><?php echo $lang['Nav_Titel']?></a>
					</div>
					
					<div class="not-collapsed-wrapper">

						<ul id="menu-menue-oben" class="right hide-on-med-and-down">
							<li id="menu-item-160" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-160"><a href="http://fides-projekt.de"><?php echo $lang['Nav_1']?></a></li>
							<li id="menu-item-116" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-116"><a href="http://fides-projekt.de/das-projekt/"><?php echo $lang['Nav_2']?></a></li>
							<li id="menu-item-78" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-78"><a href="http://fides-projekt.de/forschungsdesign/"><?php echo $lang['Nav_3']?></a></li>
							<li id="menu-item-159" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-159"><a href="http://fides-projekt.de/forschungsergebnisse/"><?php echo $lang['Nav_4']?></a></li>
							<li id="menu-item-79" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-79"><a href="http://fides-projekt.de/leseempfehlung/"><?php echo $lang['Nav_5']?></a></li>
							<li id="menu-item-80" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-80"><a href="http://fides-projekt.de/team/"><?php echo $lang['Nav_6']?></a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-258"><a class="lang-switch" href=""><?php echo $lang['Nav_Language']?></a></li>                        </ul>
                    </div>

                    <div class="collapsed-wrapper">
                        <ul id="nav-mobile" class="side-nav">
                            <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-160"><a href="http://fides-projekt.de"><?php echo $lang['Nav_1']?></a></li>
							<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-116"><a href="http://fides-projekt.de/das-projekt/"><?php echo $lang['Nav_2']?></a></li>
							<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-78"><a href="http://fides-projekt.de/forschungsdesign/"><?php echo $lang['Nav_3']?></a></li>
							<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-159"><a href="http://fides-projekt.de/forschungsergebnisse/"><?php echo $lang['Nav_4']?></a></li>
							<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-79"><a href="http://fides-projekt.de/leseempfehlung/"><?php echo $lang['Nav_5']?></a></li>
							<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-80"><a href="http://fides-projekt.de/team/"><?php echo $lang['Nav_6']?></a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-258"><a class="lang-switch" href="http://fides-projekt.de/english-version/"><?php echo $lang['Nav_Language']?></a></li>
						</ul>
					</div>                
			</div>
        </nav>
		
    </header>