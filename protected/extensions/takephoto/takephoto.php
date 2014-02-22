<?php

class takephoto extends CWidget{
    public $model;
    public function init(){
        parent::init();
//        Yii::app()->clientScript->registerCoreScript( 'jquery' );
       
         Yii::app()->clientScript->registerScript(CClientScript::POS_LOAD, "
                var video;
                var dataURL;
                function setup() {
                navigator.myGetMedia = (navigator.getUserMedia ||
                                        navigator.webkitGetUserMedia ||
                                        navigator.mozGetUserMedia ||
                                        navigator.msGetUserMedia);
                navigator.myGetMedia({ video: true }, connect, error);
                
                
                
            }
                
                function connect(stream) {
                    video = document.getElementById('video');
                    video.src = window.URL ? window.URL.createObjectURL(stream) : stream;
                    video.play();
                    var el = document.getElementById('take');
                    el.addEventListener('click', captureImage, false);
                }         
                
                function error(e) { console.log(e); }
                
                addEventListener('load', setup);
                
                function captureImage() {
                    var canvas = document.createElement('canvas');
                    canvas.id = 'hiddenCanvas';
                    //adiciona canvas ao corpo
                    document.body.appendChild(canvas);
                    //adicioona canvas ao #canvasHolder
                    document.getElementById('canvasHolder').appendChild(canvas);
                    var ctx = canvas.getContext('2d');
                    canvas.width  = 400;
                    canvas.height = 400;
                    
                    ctx.drawImage(video, 0, 0, canvas.width, canvas.height);
                    console.log(canvas);
                    //save canvas image as data url
                    dataURL = canvas.toDataURL();
                    //set preview image src to dataURL
                    //document.getElementById('preview').src = dataURL;
                    // place the image value in the text box
                    document.getElementById('imageToForm').value = dataURL;
                    //Bind a click to a button to capture an image from the video stream
                    
                    
                 }  
                 
            ");
        
    }
    
    public function run() {
                parent::run();

      $canvas ='<div id="main">
                    <video id="video"></video>
                </div>
                <div id="sidebar">
                <a id="take">Camera button</a>
                <div id="canvasHolder"></div>
                <label>base64 image:</label>
                    <input id="imageToForm" type="text" />
                </div>
        ';
        echo $canvas;
    }
}



?>
