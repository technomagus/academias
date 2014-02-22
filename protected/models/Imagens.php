<?php

/**
 * This is the model class for table "imagens".
 *
 * The followings are the available columns in table 'imagens':
 * @property integer $im_id
 * @property integer $im_id_estran
 * @property string $im_tipo
 * @property string $im_imagem
 * @property string $im_titulo
 * @property string $im_descricao
 */
class Imagens extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Imagens the static model class
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
		return 'imagens';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('im_id_estran, im_tipo, im_imagem,', 'required'),
			array('im_id_estran', 'numerical', 'integerOnly'=>true),
			array('im_tipo', 'length', 'max'=>20),
			array('im_titulo', 'length', 'max'=>40),
                        array('im_imagem', 'file', 'types'=>'jpg, png, pneg, jpeg', 'maxSize'=>1024 *1024 * 2, 'tooLarge'=>'Imagem deve ter menos de 2mb', 'allowEmpty'=>true),
			array('im_descricao', 'length', 'max'=>128),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('im_id, im_id_estran, im_tipo, im_imagem, im_titulo, im_descricao', 'safe', 'on'=>'search'),
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
			'im_id' => 'ID',
			'im_id_estran' => 'Id Estran',
			'im_tipo' => 'Tipo',
			'im_imagem' => 'Imagem',
			'im_titulo' => 'Titulo',
			'im_descricao' => 'Descrição',
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

		$criteria->compare('im_id',$this->im_id);
		$criteria->compare('im_id_estran',$this->im_id_estran);
		$criteria->compare('im_tipo',$this->im_tipo,true);
		$criteria->compare('im_imagem',$this->im_imagem,true);
		$criteria->compare('im_titulo',$this->im_titulo,true);
		$criteria->compare('im_descricao',$this->im_descricao,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}