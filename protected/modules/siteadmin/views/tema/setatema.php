
<form id="setatema">
    <input type="radio" value="bootstrap" name="tema" checked=true/>Tema 1
    <br/><br/>
    <input type="radio" value="curv" name="tema"/>Tema 2
    <br/><br/>
    <input type="submit" value="Alterar tema"/>
</form>

<script type="text/javascript">
    
    $('form').submit(function(e){
        console.log($('input:checked').val());
        e.preventDefault();
        $.ajax({url:'<?php echo Yii::app()->createUrl("/siteadmin/tema/setaTema/")?>',
                data: { data: $('input:checked').val() },
                type: 'post',
            }).done(function(){
                window.location ='http://localhost/www/technomagus/academias/index.php'; 
            })
    });
</script>

