<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="pt-br">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="pt-br" />

<link rel="stylesheet"
         type="text/css"
         href="<?php echo $this->module->assetsUrl; ?>/css/styles.css"/>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<?php Yii::app()->bootstrap->register(); ?>
</head>

<body>

<?php $this->widget('bootstrap.widgets.TbNavbar',array(
    'type' => 'inverse',
        'brand' => 'Área administrativa',
        'brandUrl' => '#',
        'collapse' => true, // requires bootstrap-responsive.css
//        'fixed' => false,
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'Clientes', 'url'=>array('/siteadmin/cliente/')),
                array('label'=>'Modalidades', 'url'=>array('/siteadmin/modalidades/')),
                array('label'=>'Eventos', 'url'=>array('/siteadmin/eventos/')),
                array('label'=>'Slider', 'url'=>array('/siteadmin/slider/')),
                array('label'=>'Admins', 'url'=>array('/siteadmin/admin/')),
                array('label'=>'Temas', 'url'=>array('/siteadmin/tema/')),
                array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
        ),
    ),
)); ?>

<div class="container" id="page">


	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
