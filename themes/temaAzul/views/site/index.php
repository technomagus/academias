  
<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;

?>


<div class="row-fluid">
    <div class="span3 hidden-phone" style="height: 100%; background: #2C2C2C; position: fixed; top:0">
        <?php CController::renderPartial('/site/menu') ;?>
    </div>
    <div class="span9 pull-right" style="position: relative; padding-right: 1%;">
        
    <?php echo CController::renderPartial('/slider/sliderindex', array(
        'dataProvider'=>Slider::model()->aGetSliderInicial(),
    ));?>
    <Br/>
    <div class="clearfix"></div>
    <?php echo CController::renderPartial('/modalidades/modalidadesIndex', array(
        'dataProvider'=>  Modalidades::model()->aGetModalidadesInicial(),
    ));
    ?>  
    <div class="row-fluid" style="height:30px; border-bottom: 1px solid #84bbdb; margin-bottom: 20px "></div>
    <div class="row-fluid">
        <div class="span6 " style="line-height: 30px;">
            <?php 
            CController::renderPartial('/eventos/eventosInicial', array(
                'dataProvider'=>Eventos::model()->aGetEventosInicial(),
            ));
            ?>
        </div>
        <div class="span6 pull-right">
            <h1 class="text-center oswald text-sombra">SOCIAL</h1>
            <div class="fb-like-box pull-right" style="background:white; margin-right: 20px;" data-href="http://www.facebook.com/FacebookDevelopers" data-width="370" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="true" data-show-border="true"></div>
        </div>
    </div>
    <br/>
    </div>
</div>