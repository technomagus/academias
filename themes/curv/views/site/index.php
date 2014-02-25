
<div class="cl">&nbsp;</div>
<section class="post">
    <div class="post-cnt">
        <h2>Videos</h2>
        <p><strong>Video do evento</p>
    </div>
    <!--<div class="youtube" id="VdiHN174SOw" style="width: 320px; height: 180px; box-shadow: 0 0 5px black; border: solid 3px #2D5900"></div>-->
        <!--<script src="https://labnol.googlecode.com/files/youtube.js"></script>-->
    <!--</div>-->
<?php

$provider = Videos::model()->xaGetAllVideos();
?>
<?php 

CController::renderPartial('/videos/videos', array('dataProvider'=>$provider)) 
        
        ?>
    
<div class="cl">&nbsp;</div>
</section>
<section class="testimonial">
    <?php CController::renderPartial('/eventos/eventosInicial', array(
        'dataProvider'=>Eventos::model()->aGetEventosInicial(),
    ));?>
</section>
