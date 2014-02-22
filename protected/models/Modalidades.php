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
        public function aGetModalidadesInicial(){
            $criteria = new CDbCriteria();
            $criteria->select = 'MODALIDADE_ID, MOD_TITULO, MOD_IMAGE, MOD_DESCRICAO';
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
        public function aGetModalidadeDescPeq($nTamanho)
        {
            $aTmp = strip_tags($this->MOD_DESCRICAO);
            if(strlen($aTmp) > $nTamanho){
                $aTxt = substr($aTmp, 0, $nTamanho);
                return $aTxt . ' ...';
            }else{
                return $aTmp;
            }
        }
        
        public function aGetSubMenuModalidades()
        {
            $dataProvider = self::findAllByAttributes(array('MOD_STATUS'=>1), array(
                'order'=>'MOD_TITULO ASC',
            ));
            $items = array();
            if(!empty($dataProvider)){
                $i = 0;
                foreach($dataProvider as $data){
                    $items[$i]['label'] = $data->MOD_TITULO;
                    $items[$i]['url'] = array('/modalidades/ver', 'id'=>$data->MODALIDADE_ID);
                    $i++;
                }
            }
            return $items;
        }
}
