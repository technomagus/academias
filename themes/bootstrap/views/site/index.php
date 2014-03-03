<div class="row-fluid" style="box-shadow:0px 11px 11px gray">
    
<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;

?>
</div>
<?php echo CController::renderPartial('/slider/sliderindex', array(
    'dataProvider'=>Slider::model()->aGetSliderInicial(),
));?>
<Br/>
<div class="clearfix"></div>
<?php echo CController::renderPartial('/modalidades/modalidadesIndex', array(
    'dataProvider'=>  Modalidades::model()->aGetModalidadesInicial(),
));
?>  
<div class="row-fluid">
    <div class="span8 " style="line-height: 30px;">
        <?php CController::renderPartial('/eventos/eventosInicial', array(
            'dataProvider'=>Eventos::model()->aGetEventosInicial(),
        ));?>
    </div>
    <div class="span4">
        <h1 class="copperplate text-center text-cinza">SOCIAL</h1>
        <div class="fb-like-box" data-href="http://www.facebook.com/FacebookDevelopers" data-width="304" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
    </div>
</div>
<br/>