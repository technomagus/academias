
<h2 class="copperplate text-center" style="color: white; border-bottom: 1px solid #353535">TM</h2>   
<?php
    $this->widget('bootstrap.widgets.TbMenu',array(
//    'brand'=>'TECHNOMAGUS',
//    'collapse'=>true,
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
));
?>
