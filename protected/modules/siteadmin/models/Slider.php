<?php

/**
 * This is the model class for table "slider".
 *
 * The followings are the available columns in table 'slider':
 * @property integer $sl_id
 * @property string $sl_titulo
 * @property string $sl_link
 * @property string $sl_descricao
 * @property string $sl_dtcriacao
 * @property integer $sl_status
 */
class Slider extends CActiveRecord
{
    protected $aLinkImg;
    protected $aDirImg;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Slider the static model class
	 */
        public function __construct($scenario = 'insert') {
            parent::__construct($scenario);
            $this->aLinkImg = Yii::app()->request->baseUrl .'/images/slider/';
            $this->aDirImg = Yii::app()->basePath.'/../images/slider/';
        }
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'slider';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sl_titulo, sl_link, sl_descricao, sl_dtcriacao, sl_status', 'required'),
			array('sl_status', 'numerical', 'integerOnly'=>true),
			array('sl_titulo, sl_link, sl_descricao', 'length', 'max'=>256),
                        array('sl_img', 'file', 'types'=>'jpg, jpeg, png, pneg', 'maxSize'=>1024 * 1024 *2, 'tooLarge'=>'Imagem deve ter no Máximo 2 MB'),
                        array('sl_img', 'file', 'types'=>'jpg, jpeg, png, pneg', 'maxSize'=>1024 * 1024 *2, 'tooLarge'=>'Imagem deve ter no Máximo 2 MB', 'allowEmpty'=>'true', 'on'=>'update'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('sl_id, sl_titulo, sl_link, sl_descricao, sl_dtcriacao, sl_status', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'sl_id' => 'ID',
			'sl_titulo' => 'Titulo',
			'sl_link' => 'Link',
			'sl_descricao' => 'Descrição',
			'sl_img' => 'Imagem',
			'sl_dtcriacao' => 'Data de criação',
			'sl_status' => 'Status',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('sl_id',$this->sl_id);
		$criteria->compare('sl_titulo',$this->sl_titulo,true);
		$criteria->compare('sl_link',$this->sl_link,true);
		$criteria->compare('sl_descricao',$this->sl_descricao,true);
		$criteria->compare('sl_img',$this->sl_img,true);
		$criteria->compare('sl_dtcriacao',$this->sl_dtcriacao,true);
		$criteria->compare('sl_status',$this->sl_status);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public function searchAtivos()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('sl_id',$this->sl_id);
		$criteria->compare('sl_titulo',$this->sl_titulo,true);
		$criteria->compare('sl_link',$this->sl_link,true);
		$criteria->compare('sl_descricao',$this->sl_descricao,true);
		$criteria->compare('sl_img',$this->sl_img,true);
		$criteria->compare('sl_dtcriacao',$this->sl_dtcriacao,true);
		$criteria->compare('sl_status',1);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public function searchInativos()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('sl_id',$this->sl_id);
		$criteria->compare('sl_titulo',$this->sl_titulo,true);
		$criteria->compare('sl_link',$this->sl_link,true);
		$criteria->compare('sl_descricao',$this->sl_descricao,true);
		$criteria->compare('sl_img',$this->sl_img,true);
		$criteria->compare('sl_dtcriacao',$this->sl_dtcriacao,true);
		$criteria->compare('sl_status',0);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        public function aGetLink()
        {
            return $this->aLinkImg;
        }
        public function aSetLinkImg($string)
        {
            $this->aLinkImg = $string;
        }
        public function aGetDir()
        {
            return $this->aDirImg;
        }
        public function aSetDirImg($string)
        {
            $this->aDirImg = $string;
        }
        public function nGetProxId()
        {
            $sql = 'SHOW TABLE STATUS LIKE "%'.self::tableName().'"';
            $connection=Yii::app()->db;
            $command = $connection->createCommand($sql);
            $dataReader = $command->query();
            foreach($dataReader as $data){
                return $data['Auto_increment'];
            }
        }
        public function aSetDtCriacao()
        {
            $this->sl_dtcriacao= date('Y-m-d');
        }
        public function aGetDtCriacao()
        {
            $aTmp = explode('-', $this->sl_dtcriacao);
            $this->sl_dtcriacao = $aTmp[2] .'/'.$aTmp[1].'/'.$aTmp[0];
        }
        public function aGetImgLink()
        {
            if(!empty($this->sl_img)){
                return $this->aGetLink() . $this->sl_img;
            }
        }
        /**
         * Retorna o diretorio e nome da imagem
         * @return type
         */
        public function aGetImgDir(){
            if(!empty($this->sl_img)){
                return $this->aGetDir() . $this->sl_img; 
            }
        }
        public function aGetDescricao()
        {
            if(!empty($this->sl_descricao)){
                return $this->sl_descricao;
            }
        }
        public function aGetTitulo()
        {
            if(!empty($this->sl_titulo)){
                return $this->sl_titulo;
            }
        }
        public function bSalvaImg($CUploadedFile, $atualizacao)
        {
            $img = $CUploadedFile;
            if(!$atualizacao){
                $this->sl_img = $this->nGetProxId() .'.'. $img->extensionName;
            }
            $local = $this->aGetImgDir();
            if($img->saveAs($local)){
                $image = Yii::app()->image->load($local);
                $image->resize(960, 368, Image::NONE);
                if($image->save($local)){
                    return true;
                }
            }
            return false;
            
        }
        public function bSalvaSlider($atualizacao = false)
        {
            if($img = CUploadedFile::getInstance($this, 'sl_img'))
            {
                if(!$this->bSalvaImg($img, $atualizacao))
                {
                    throw new CHttpException (400, 'Imagem não pode ser salva');
                }
            }
            $this->sl_dtcriacao = date('Y-m-d');
        }
        public function afterFind()
        {
            $this->aGetDtCriacao();
            return parent::afterFind();
        }
}