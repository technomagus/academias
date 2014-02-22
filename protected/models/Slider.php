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
			array('sl_titulo, sl_link, sl_descricao, sl_dtcricao, sl_status', 'required'),
			array('sl_status', 'numerical', 'integerOnly'=>true),
			array('sl_titulo, sl_link, sl_descricao', 'length', 'max'=>256),
                        array('sl_img', 'file', 'types'=>'jpg, jpeg, png, pneg', 'maxSize'=>1024 * 1024 *2, 'tooLarge'=>'Imagem deve ter no Máximo 2 MB'),
                        array('sl_img', 'file', 'types'=>'jpg, jpeg, png, pneg', 'maxSize'=>1024 * 1024 *2, 'tooLarge'=>'Imagem deve ter no Máximo 2 MB', 'allowEmpty'=>'true', 'on'=>'update'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('sl_id, sl_titulo, sl_link, sl_descricao, sl_dtcricao, sl_status', 'safe', 'on'=>'search'),
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
			'sl_dtcricao' => 'Data de criação',
			'sl_status' => 'Status',
		);
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
        public function aGetImgDir()
        {
            if(!empty($this->sl_img)){
                return $this->aGetDir() . $this->sl_img; 
            }
        }
        public function aGetDescricao()
        {
            if(!empty($this->sl_dtcricao)){
                return $this->sl_descricao;
            }
        }
        public function aGetTitulo()
        {
            if(!empty($this->sl_titulo)){
                return $this->sl_titulo;
            }
        }
        public function aGetSliderInicial()
        {
            $criteria = new CDbCriteria;
            $criteria->condition = 'sl_status = 1';
            $criteria->limit = 5;
            return self::findAll($criteria);
        }
        public function afterFind()
        {
            $this->aGetDtCriacao();
        }
}