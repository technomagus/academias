<?php

/**
 * This is the model class for table "eventos".
 *
 * The followings are the available columns in table 'eventos':
 * @property integer $ev_id
 * @property string $ev_titulo
 * @property string $ev_descricao
 * @property string $ev_pagina
 * @property string $ev_data
 * @property double $ev_valor
 * @property string $ev_local
 * @property integer $ev_status
 */
class Eventos extends CActiveRecord
{
        protected $aTipo = 'eventos';
        public $aData;
        public $aHora;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Eventos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'eventos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ev_pagina, ev_data, ev_local, ev_status', 'required'),
			array('ev_status', 'numerical', 'integerOnly'=>true),
			array('ev_valor', 'numerical'),
			array('ev_titulo, ev_descricao, ev_local', 'length', 'max'=>256),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ev_id, ev_titulo, ev_descricao, ev_pagina, ev_data, ev_valor, ev_local, ev_status', 'safe', 'on'=>'search'),
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
			'ev_id' => 'Ev',
			'ev_titulo' => 'Ev Titulo',
			'ev_descricao' => 'Ev Descricao',
			'ev_pagina' => 'Ev Pagina',
			'ev_data' => 'Ev Data',
			'ev_valor' => 'Ev Valor',
			'ev_local' => 'Ev Local',
			'ev_status' => 'Ev Status',
		);
	}
        public function aGetTipo()
        {
            return $this->aTipo;
        }
        public function nGetId()
        {
            return $this->ev_id;
        }
        public function isAtivo()
        {
            return $this->ev_status;
        }
        public function hasImagens()
        {
            $criteria = new CDbCriteria;
            $criteria->select = 'im_id';
            $criteria->condition = 'im_id_estran='.$this->ev_id. ' AND im_tipo = "'.$this->aGetTipo().'"';
            $dataProvider = Imagens::model()->findAll($criteria);
            if(!empty($dataProvider)){
                return true;
            }
            return false;
        }
        public function aGetImagens()
        {
            $criteria = new CDbCriteria;
            $criteria->condition = 'im_id_estran='.$this->ev_id. ' AND im_tipo = "'.$this->aGetTipo().'"';
            $dataProvider = Imagens::model()->findAll($criteria);
            if(!empty($dataProvider)){
                return $dataProvider;
            }
            return false;
        }
        public function aSetData()
        {
            $dt = explode(' ', $this->ev_data);
            $data = explode('-', $dt[0]);
            $this->aData = $data[2] .'/'.$data[1].'/'.$data[0];
        }

        public function aSetHora()
        {
            $dt = explode(' ', $this->ev_data);
            $hora = explode(':', $dt[1]);
            $this->aHora = $hora[0] .':'.$hora[1];
        }
        public function afterFind() {
            $this->aSetData();
            $this->aSetHora();
            parent::afterFind();
        }
        public function aGetEventosInicial()
        {
            $criteria = new CDbCriteria;
            $criteria->select = 'ev_id, ev_titulo, ev_descricao, ev_data';
            $criteria->condition = 'ev_status = 1';
            $criteria->limit = 3;
            return self::findAll($criteria);
        }
        public function nGetValor()
        {
            return number_format($this->valor, 2, ',','.');
        }
        public function aGetDescPeq($nTamanho)
        {
            $aTmp = strip_tags($this->ev_pagina);
            if(strlen($aTmp) > $nTamanho){
                $aTxt = substr($aTmp, 0, $nTamanho);
                return $aTxt . ' ...';
            }else{
                return $aTmp;
            }
        }
}