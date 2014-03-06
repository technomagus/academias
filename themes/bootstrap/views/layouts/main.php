<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-47412609-1', 'technomagus.com.br');
	  ga('send', 'pageview');

	</script>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/add.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<?php Yii::app()->bootstrap->register(); ?>
</head>

<body>
    <!-- FACEBOOK PLUGIN -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <!-- FIM FACEBOOK PLUGIN -->
    
<!--<div class="container">
    <div class="row-fluid">
        <div class="logo span5">
            <?php echo CHtml::image(Yii::app()->theme->baseUrl .'/img/LOGO-EQUILIBRIO.png', 'Technomagus', array('class'=>'logotopo')); ?>
        </div>
        <div class="span7 text-right">
            <ul class="menutopo copperplate font18">
                <li><?php echo CHtml::link('Início', Yii::app()->createUrl('/site/index')); ?></li>
                <li>Área do Aluno</li>
                <li>Sobre nós</li>
                <li><?php echo CHtml::link('Contato', Yii::app()->createUrl('/site/contact')); ?></li>
            </ul>
        </div>
    </div>
</div>-->

        
<?php
$this->widget('bootstrap.widgets.TbNavbar',array(
    'brand'=>CHtml::image(Yii::app()->theme->baseUrl .'/img/LOGO-EQUILIBRIO.png', 'Technomagus', array('class'=>'logotopo')),
    'collapse'=>true,
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
	array('label'=>'Início', 'url'=>array('/site/index')),
	array('label'=>'Modalidades', 'items'=>Modalidades::model()->aGetSubMenuModalidades()),
	array('label'=>'Eventos', 'url'=>array('/eventos/lista')),
	array('label'=>'Área do Aluno', 'url'=>array('/site/login')),
	array('label'=>'Sobre Nós', 'url'=>array('/site/page', 'view'=>'about')),
	array('label'=>'Contato', 'url'=>array('/site/contact')),
//	array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
//	array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
        ),
    ),
));
?>
<!--<div class="clearfix"><br/></div>-->
<div class="container" id="page">
<!--<br/>-->
	<?php
//        if(isset($this->breadcrumbs)):?>
		<?php // $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
//			'links'=>$this->breadcrumbs,
//		)); 
                ?><!-- breadcrumbs -->
	<?php // endif ?>

	<?php echo $content; ?>

	<div class="clear"></div>

<!--	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php // echo Yii::powered(); ?>
	</div> footer -->

</div><!-- page -->
<div class="rodape">
    <div class="container" style="max-width: 960px !important;">
        <div class="row-fluid">
            <div class="span5">
                <?php echo CHtml::image(Yii::app()->theme->baseUrl .'/img/logorodape.png', 'Technomagus', array('class'=>'logorodape')); ?>
            </div>
            <div class="span7">
                
            </div>
        </div>
    </div>
</div>
<div class="container-fluid direitos copperplate text-center">
    &copy;TECHNOMAGUS <?php echo date('Y'); ?> - Todos os direitos reservados
</div>
</body>
</html>
