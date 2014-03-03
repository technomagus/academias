<?php

/**
 * This is the model class for table "modalidades".
 *
 * The followings are the available columns in table 'modalidades':
 * @property integer $MODALIDADE_ID
 * @property string $MOD_TITULO
 * @property string $MOD_DESCRICAO
 * @property string $MOD_IMAGE
 * @property string $MOD_HORARIOxTURNOxPRECO
 * @property integer $MOD_STATUS
 */
class Modalidades extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
         protected $nCapaWidth = 370;
         protected $nCapaHeight= 245;
         protected $aTipo = 'modalidades';
         
         protected $aDirImgAlbum;
         protected $aLinkImgAlbum;
         public $aHorario;
         public $aTurno;
         public $aValor;
         
         
        public function __construct($scenario = 'insert') {
            parent::__construct($scenario);
        } 
	public function tableName()
	{
		return 'modalidades';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('MOD_TITULO', 'required'),
			array('MOD_STATUS', 'numerical', 'integerOnly'=>true),
			array('MOD_TITULO', 'length', 'max'=>40),
                        array('MOD_IMAGE', 'file', 'types'=>'jpg, jpeg, png, pneg', 'maxSize'=>1024 *1024 * 2, 'tooLarge'=>'Imagem deve ter menos de 2MB', 'allowEmpty'=>false, 'on'=>'create'),
                        array('MOD_IMAGE', 'file', 'types'=>'jpg, jpeg, png, pneg', 'maxSize'=>1024 *1024 * 2, 'tooLarge'=>'Imagem deve ter menos de 2MB', 'allowEmpty'=>true, 'on'=>'update'),
			array('MOD_DESCRICAO, MOD_IMAGE, MOD_HORARIOxTURNOxPRECO, aHoaraio, aTurno, aValor', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('MODALIDADE_ID, MOD_TITULO, MOD_DESCRICAO, MOD_IMAGE, MOD_HORARIOxTURNOxPRECO, MOD_STATUS', 'safe', 'on'=>'search'),
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
			'MODALIDADE_ID' => 'Modalidade',
			'MOD_TITULO' => 'Titulo',
			'MOD_DESCRICAO' => 'Descrição',
			'MOD_IMAGE' => 'Imagem',
			'MOD_HORARIOxTURNOxPRECO' => 'Horario Turno Valor',
			'MOD_STATUS' => 'Status',
			'aHorario' => 'Horario',
			'aTurno' => 'Turno',
			'aValor' => 'Valor',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('MODALIDADE_ID',$this->MODALIDADE_ID);
		$criteria->compare('MOD_TITULO',$this->MOD_TITULO,true);
		$criteria->compare('MOD_DESCRICAO',$this->MOD_DESCRICAO,true);
		$criteria->compare('MOD_IMAGE',$this->MOD_IMAGE,true);
		$criteria->compare('MOD_HORARIOxTURNOxPRECO',$this->MOD_HORARIOxTURNOxPRECO,true);
		$criteria->compare('MOD_STATUS',$this->MOD_STATUS);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public function searchAtivos()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('MODALIDADE_ID',$this->MODALIDADE_ID);
		$criteria->compare('MOD_TITULO',$this->MOD_TITULO,true);
		$criteria->compare('MOD_DESCRICAO',$this->MOD_DESCRICAO,true);
		$criteria->compare('MOD_IMAGE',$this->MOD_IMAGE,true);
		$criteria->compare('MOD_HORARIOxTURNOxPRECO',$this->MOD_HORARIOxTURNOxPRECO,true);
		$criteria->compare('MOD_STATUS',1);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public function searchInativos()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('MODALIDADE_ID',$this->MODALIDADE_ID);
		$criteria->compare('MOD_TITULO',$this->MOD_TITULO,true);
		$criteria->compare('MOD_DESCRICAO',$this->MOD_DESCRICAO,true);
		$criteria->compare('MOD_IMAGE',$this->MOD_IMAGE,true);
		$criteria->compare('MOD_HORARIOxTURNOxPRECO',$this->MOD_HORARIOxTURNOxPRECO,true);
		$criteria->compare('MOD_STATUS',0);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Modalidades the static model class
	 */
        public function nGetCapaWidth(){
            return $this->nCapaWidth;
        }
        public function nGetCapaHeight(){
            return $this->nCapaHeight;
        }
        public function aGetTipo(){
            return $this->aTipo;
        }
        public function nGetId(){
            return $this->MODALIDADE_ID;
        }
        public static function model($className=__CLASS__)
	{
		return parent::model($className);
        }
        public function isAtivo()
        {
            return $this->MOD_STATUS;
        }
        public function vCadastraTurno($array)
        {
            $aTmp = str_replace(';', '', $array);
            $n = count($array['aTurno']);
            for($i = 0; $i< $n; $i++){
                if(!empty($array['aTurno'][$i]) or ($array['aTurno'][$i] != '')){
                    $ln[$i] = $array['aTurno'][$i] .'|'.$array['aHorario'][$i]. '|'. $array['aValor'][$i];
                }
            }
            if(!empty($ln)){
                return implode(';', $ln);
            }
        }
        public function aGetTurnos()
        {
            if(!empty($this->MOD_HORARIOxTURNOxPRECO)){
                $aTmp = explode(';', $this->MOD_HORARIOxTURNOxPRECO);
                foreach ($aTmp as $turno){
                    $array[] = explode('|', $turno);
                }
                $this->MOD_HORARIOxTURNOxPRECO = $array;
                return true;
            }  else {
                return false;
            }
        }
        public function fSalvaImagem()
        {
            if($imagem = CUploadedFile::getInstance($this, 'MOD_IMAGE')){
                $tp = $imagem->type;
                $image = Yii::app()->image->load($imagem->tempName);
                $image->resize($this->nGetCapaWidth(), $this->nGetCapaHeight(), Image::NONE);
                $temp = $imagem->tempName .'.'.$imagem->extensionName;
                if($image->save($temp)){
                    $ctudo = file_get_contents($temp);
                    $this->MOD_IMAGE = 'data:'.$tp.';base64,'.base64_encode($ctudo);
                    unlink($temp);
                }
            }
        }
        public function aGetModalidadesInicial(){
            $criteria = new CDbCriteria();
            $criteria->select = 'MODALIDADE_ID, MOD_TITULO, MOD_IMAGE';
            $criteria->condition = 'MOD_STATUS = 1';
            $criteria->order = 'rand()';
            $criteria->limit = 3;
            return self::findAll($criteria);
        }
        public function hasImagens()
        {
            $criteria = new CDbCriteria;
            $criteria->select = 'im_id';
            $criteria->condition = 'im_id_estran='.$this->MODALIDADE_ID. ' AND im_tipo = "'.$this->aGetTipo().'"';
            $dataProvider = Imagens::model()->findAll($criteria);
            if(!empty($dataProvider)){
                return true;
            }
            return false;
        }
        public function aGetImagens()
        {
            $criteria = new CDbCriteria;
            $criteria->condition = 'im_id_estran='.$this->MODALIDADE_ID. ' AND im_tipo = "'.$this->aGetTipo().'"';
            $dataProvider = Imagens::model()->findAll($criteria);
            if(!empty($dataProvider)){
                return $dataProvider;
            }
            return false;
        }
        public function aGetPeqDescri($tamanho)
        {
            if(!empty($this->MOD_DESCRICAO)){
                return substr(strip_tags($this->MOD_DESCRICAO), 0, $tamanho);
            }
        }
}
