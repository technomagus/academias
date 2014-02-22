<?php

class ImagensController extends Controller
{
    /**
    * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
    * using two-column layout. See 'protected/views/layouts/column2.php'.
    */
    public $layout='/layouts/column2';

    /**
    * @return array action filters
    */
    public function filters()
    {
        return array(
            'accessControl', // perform access control for CRUD operations
        );
    }

    /**
    * Specifies the access control rules.
    * This method is used by the 'accessControl' filter.
    * @return array access control rules
    */
    public function accessRules()
    {
        return array(
            array('allow',  // allow all users to perform 'index' and 'view' actions
                'actions'=>array(),
                'users'=>array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions'=>array(),
                'users'=>array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions'=>array('admin','delete', 'cadastraImagens', 'verImagens', 'create','update'),
                'users'=>array('admin'),
            ),
            array('deny',  // deny all users
                'users'=>array('*'),
            ),
        );
    }

    /**
    * Displays a particular model.
    * @param integer $id the ID of the model to be displayed
    */
    public function actionView($id)
    {
        $this->render('view',array(
            'model'=>$this->loadModel($id),
        ));
    }

    /**
    * Creates a new model.
    * If creation is successful, the browser will be redirected to the 'view' page.
    */
    public function actionCreate()
    {
        $model=new Imagens;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['Imagens']))
        {
            $model->attributes=$_POST['Imagens'];
            if($model->save())
            $this->redirect(array('view','id'=>$model->im_id));
        }

        $this->render('create',array(
            'model'=>$model,
        ));
    }

    /**
    * Updates a particular model.
    * If update is successful, the browser will be redirected to the 'view' page.
    * @param integer $id the ID of the model to be updated
    */
    public function actionUpdate($id)
    {
        $model=$this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['Imagens']))
        {
            $model->attributes=$_POST['Imagens'];
            if($img = CUploadedFile::getInstance($model, 'im_imagem'))
            {
                $model->bSalvaImagem($img);
                
            }
            if($model->save())
               $this->redirect(array('verImagens', 'id'=>$model->im_id_estran, 'tipo'=>$model->im_tipo));
        }

        $this->render('update',array(
            'model'=>$model,
        ));
    }

    /**
    * Deletes a particular model.
    * If deletion is successful, the browser will be redirected to the 'admin' page.
    * @param integer $id the ID of the model to be deleted
    */
    public function actionDelete($id)
    {
        if(Yii::app()->request->isPostRequest)
        {
            // we only allow deletion via POST request
            $this->loadModel($id)->delete();

            // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
            if(!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
        }
        else
            throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
    }

    /**
    * Lists all models.
    */
    public function actionIndex()
    {
       $model=new Imagens('search');
        $model->unsetAttributes();  // clear any default values
        if(isset($_GET['Imagens']))
            $model->attributes=$_GET['Imagens'];

        $this->render('admin',array(
            'model'=>$model,
        ));
    }

    /**
    * Manages all models.
    */
    public function actionAdmin()
    {
        $model=new Imagens('search');
        $model->unsetAttributes();  // clear any default values
        if(isset($_GET['Imagens']))
            $model->attributes=$_GET['Imagens'];

        $this->render('admin',array(
            'model'=>$model,
        ));
    }
    public function actionAdminAlbum()
    {
        $model=new Imagens('adminAlbum');
        $model->unsetAttributes();  // clear any default values
        if(isset($_GET['Imagens']))
            $model->attributes=$_GET['Imagens'];

        $this->render('admin',array(
            'model'=>$model,
        ));
    }

    /**
    * Returns the data model based on the primary key given in the GET variable.
    * If the data model is not found, an HTTP exception will be raised.
    * @param integer the ID of the model to be loaded
    */
    public function loadModel($id)
    {
        $model=Imagens::model()->findByPk($id);
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }

    /**
    * Performs the AJAX validation.
    * @param CModel the model to be validated
    */
    protected function performAjaxValidation($model)
    {
        if(isset($_POST['ajax']) && $_POST['ajax']==='imagens-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
    public function actionCadastraImagens($id, $tipo)
    {
        $model = new Imagens;
        if($tipo == 'modalidades')
        {
            $data = Modalidades::model()->findByPk($id);
        }else{
            $data = Eventos::model()->findByPk($id);
        }
        if(!empty($_POST)){
            $imagens = CUploadedFile::getInstances($model, 'im_imagem');
            $i = 0;
            foreach ($imagens as $img){
                $imagens = new Imagens;
                $imagens->bSalvaImagem($img);
                $imagens->im_titulo = $_POST['Imagens']['im_titulo'][$i];
                $imagens->im_descricao = $_POST['Imagens']['im_descricao'][$i];
                $imagens->im_id_estran= $data->nGetId();
                $imagens->im_tipo = $data->aGetTipo();
                $imagens->save();
                $i++;
            }
            $this->redirect(array('verImagens', 'id'=>$id, 'tipo'=>$tipo));
        }
        $this->render('cadastraImagens', array(
            'model'=>$model,
            'data'=>$data,
        ));
    }
    public function actionVerImagens($id, $tipo)
    {
        $model = new Imagens;
        $model->unsetAttributes();  // clear any default values
        if(isset($_GET['Imagens']))
            $model->attributes=$_GET['Imagens'];

        $this->render('verImagens',array(
            'model'=>$model,
            'id'=>$id,
            'tipo'=>$tipo
        ));
    }
}
