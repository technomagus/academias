
<section class="post">
    <div class="video-holder">
        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/video-img.png" alt="" />
    </div>

    <div class="post-cnt">
        <h2>Videos</h2>
        <p><strong>Video do evento</p>
    </div>
    <div class="cl">&nbsp;</div>
</section>
<section class="testimonial">
    <?php CController::renderPartial('/eventos/eventosInicial', array(
        'dataProvider'=>Eventos::model()->aGetEventosInicial(),
    ));?>
</section>
