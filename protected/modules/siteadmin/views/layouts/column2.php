<?php /* @var $this Controller */ ?>
<?php $this->beginContent('/layouts/main'); ?>
<div class="row">
     <div class="span3">
        <div id="sidebar">
        <?php
            $this->beginWidget('zii.widgets.CPortlet', array(
                'title'=>'Operações',
                'titleCssClass' => 'text-center',
		
            ));
            $this->widget('bootstrap.widgets.TbMenu', array(
                'type'=>'list',
                'items'=>$this->menu,
                'encodeLabel' =>false,
                'htmlOptions'=>array('class'=>'operations'),
            ));
            $this->endWidget();
        ?>
        </div><!-- sidebar -->
    </div>
    <div class="span9">
        <div id="content">
            <?php echo $content; ?>
        </div><!-- content -->
    </div>
   
</div>
<?php $this->endContent(); ?>