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
 * @property string  $aData Description
 * @property string  $aHora Description
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
			array('ev_pagina, ev_local, ev_status,  aData', 'required'),
			array('ev_status', 'numerical', 'integerOnly'=>true),
			array('ev_titulo, ev_descricao, ev_local', 'length', 'max'=>256),
			array('aHora', 'length', 'max'=>5),
                        array(', ev_valor, ev_data', 'safe'),
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
			'ev_id' => 'Evento',
			'ev_titulo' => 'Titulo',
			'ev_descricao' => 'Descrição',
			'ev_pagina' => 'Pagina',
			'ev_data' => 'Data - Hora',
			'aData' => 'Data',
			'aHora' => 'Hoarario',
			'ev_valor' => 'Valor',
			'ev_local' => 'Local',
			'ev_status' => 'Status',
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

		$criteria->compare('ev_id',$this->ev_id);
		$criteria->compare('ev_titulo',$this->ev_titulo,true);
		$criteria->compare('ev_descricao',$this->ev_descricao,true);
		$criteria->compare('ev_pagina',$this->ev_pagina,true);
		$criteria->compare('ev_data',$this->ev_data,true);
		$criteria->compare('ev_valor',$this->ev_valor);
		$criteria->compare('ev_local',$this->ev_local,true);
		$criteria->compare('ev_status',$this->ev_status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public function searchAtivos()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.
		$criteria=new CDbCriteria;

		$criteria->compare('ev_id',$this->ev_id);
		$criteria->compare('ev_titulo',$this->ev_titulo,true);
		$criteria->compare('ev_descricao',$this->ev_descricao,true);
		$criteria->compare('ev_pagina',$this->ev_pagina,true);
		$criteria->compare('ev_data',$this->ev_data,true);
		$criteria->compare('ev_valor',$this->ev_valor);
		$criteria->compare('ev_local',$this->ev_local,true);
		$criteria->compare('ev_status',1);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public function searchInativos()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.
            	$criteria=new CDbCriteria;

		$criteria->compare('ev_id',$this->ev_id);
		$criteria->compare('ev_titulo',$this->ev_titulo,true);
		$criteria->compare('ev_descricao',$this->ev_descricao,true);
		$criteria->compare('ev_pagina',$this->ev_pagina,true);
		$criteria->compare('ev_data',$this->ev_data,true);
		$criteria->compare('ev_valor',$this->ev_valor);
		$criteria->compare('ev_local',$this->ev_local,true);
		$criteria->compare('ev_status',0);
                
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
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
        public function nTrataValor()
        {
            $nTmp = str_replace('R$', '', $this->ev_valor);
            $nTmp = str_replace('.', '', $nTmp);
            $this->ev_valor = str_replace(',', '.', $nTmp);
        }
        public function beforeSave() 
        {
            $this->nTrataValor();
            $this->aSetEvData();
            return parent::beforeSave();
        }
        public function aSetEvData()
        {
            $aTmp = explode('/', $this->aData);
            $this->ev_data = $aTmp[2].'-'. $aTmp[1].'-'. $aTmp[0] . ' ' . $this->aHora . ':00';
        }
        public function nGetValor()
        {
            if(!empty($this->ev_valor))
                return number_format($this->ev_valor, 2, ',','.');
        }
}