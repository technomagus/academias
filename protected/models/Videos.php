<?php

/**
 * This is the model class for table "videos".
 *
 * The followings are the available columns in table 'videos':
 * @property integer $nnumevid
 * @property string $clink
 * @property string $Titulo
 * @property string $Descricao
 */
class Videos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'videos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Titulo, Descricao', 'required'),
			array('clink', 'length', 'max'=>180),
			array('Titulo', 'length', 'max'=>40),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('nnumevid, clink, Titulo, Descricao', 'safe', 'on'=>'search'),
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
			'nnumevid' => 'Id',
			'clink' => 'Link',
			'Titulo' => 'Titulo',
			'Descricao' => 'Descrição',
		);
	}

        public function xaGetAllVideos()
        {
            $dataProvider = Videos::model()->findAll();
            if(!empty($dataProvider)){
                return $dataProvider;
            }
            return false;
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

		$criteria->compare('nnumevid',$this->nnumevid);
		$criteria->compare('clink',$this->clink,true);
		$criteria->compare('Titulo',$this->Titulo,true);
		$criteria->compare('Descricao',$this->Descricao,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Videos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
