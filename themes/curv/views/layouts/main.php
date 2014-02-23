<!DOCTYPE html>
<html lang="en" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;">
<head>
    <meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />
	<title>Technomagus</title>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/favicon.ico" />
	<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/flexslider.css" type="text/css" media="all" />
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,500,700' rel='stylesheet' type='text/css' />
	
	
	
	<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.flexslider-min.js" type="text/javascript"></script>
	<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/functions.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.jcoverflip.js" type="text/javascript"></script>
</head>

<body>
<!-- wraper -->
	<div id="wrapper">
		<!-- shell -->
		<div class="shell">
			<!-- container -->
			<div class="containercurv">
				<!-- header -->
				<header id="header">
					<h1 id="logo"><a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/logo.png" alt="" /></a></h1>
					<!-- search -->
					<div class="search">
						<form method="post">
							<span class="field"><input type="text" class="field" value="keywords here ..." title="keywords here ..." /></span>
							<input type="submit" class="search-btn" value="" />
						</form>
					</div>
					<!-- end of search -->
				</header>
				<!-- end of header -->
				<!-- navigation -->
                                <?php
    $this->widget('bootstrap.widgets.TbNavbar',array(
            'brand'=>'',
            'collapse'=>true,
            'fixed'=>false,
            'items'=>array(
                array(
                    'class'=>'bootstrap.widgets.TbMenu',
                    'items'=>array(
                    array('label'=>'Início', 'url'=>array('/site/index')),
                    array('label'=>'Área do Aluno', 'url'=>array('/site/login')),
                    array('label'=>'Modalidades','items'=>  Modalidades::model()->aGetSubMenuModalidades()),    
                    array('label'=>'Sobre Nós', 'url'=>array('/site/page', 'view'=>'about')),
                    array('label'=>'Contato', 'url'=>array('/site/contact')),
            ),
        ),
    ),
));
?>
'	
<?php
$dataprovider =  Modalidades::model()->aGetModalidadesInicial();
?>

<div class="m-slider">
    <div class="slider-holder">
        <span class="slider-shadow"></span>
        <span class="slider-b"></span>
        <div class="slider flexslider">
            <ul class="slides">
            <?php 
                foreach($dataprovider as $data)
                {
            ?>
            <li>
                <div class="img-holder">
                    <img src="<?php echo $data->MOD_IMAGE; ?>" width="100%" style="box-shadow: #000 0 0 10px; border-radius:1em;"/>
                </div>
                <div class="slide-cnt">
                    <h2><?php echo  $data->MOD_TITULO;?></h2>
                    <div class="box-cnt">
                        <p><?php echo $data->aGetModalidadeDescPeq(300); ?></p>
                    </div>
                    <a href="#" class="grey-btn">Saiba mais</a>
                </div>
            </li>
        <?php }?>
        </ul>
    </div>
</div>
</div>		
                        <!-- end of slider -->
                        <!-- main -->
                        <div class="main">

                            <?php echo $content; ?>




                        </div>
                        <!-- end of main -->
                        <div class="socials">
                                <div class="socials-inner">
                                        <h3>Siga-nos</h3>
                                        <ul>
                                                <li><a href="#" class="facebook-ico"><span></span>Facebook</a></li>
                                                <li><a href="#" class="twitter-ico"><span></span>Twitter</a></li>
                                                <li><a href="#" class="rss-feed-ico"><span></span>Rss-feed</a></li>
                                                <li><a href="#" class="myspace-ico"><span></span>myspace</a></li>
                                        </ul>
                                        <div class="cl">&nbsp;</div>
                                </div>
                        </div>
                        <div id="footer">
                                <div class="footer-cols">
                                        <div class="col">

                                        </div>
                                        <div class="col">

                                        </div>
                                        <div class="col">

                                        </div>
                                        <div class="col">
                                                <h2>Parceiros</h2>
                                                <ul>
                                                        <li><a href="#">Empresa 1</a></li>
                                                        <li><a href="#">Empresa 2</a></li>
                                                        <li><a href="#">Empresa 3</a></li>
                                                        <li><a href="#">Empresa 4</a></li>
                                                </ul>
                                        </div>
                                        <div class="cl">&nbsp;</div>
                                </div>
                                <!-- end of footer-cols -->
                                <div class="footer-bottom">
                                        <nav class="footer-nav">

                                        </nav>
                                        <p class="copy">&copy; Copyright 2012 Technomagus <span>|</span> 
                                        <div class="cl">&nbsp;</div>
                                </div>
                        </div>
                </div>
                <!-- end of container -->	
        </div>
        <!-- end of shell -->	
</div>
<!-- end of wrapper -->
</body>
</html>