<?php

/**
 * This is the model class for table "admin".
 *
 * The followings are the available columns in table 'admin':
 * @property integer $adm_id
 * @property string $adm_nome
 * @property string $adm_email
 * @property string $adm_senha
 * @property integer $adm_nivel
 * @property integer $adm_status
 */
class Admin extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Admin the static model class
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
		return 'admin';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('adm_nome, adm_email, adm_senha, adm_nivel, adm_status', 'required'),
			array('adm_nivel, adm_status', 'numerical', 'integerOnly'=>true),
			array('adm_nome', 'length', 'max'=>80),
			array('adm_email', 'length', 'max'=>128),
			array('adm_senha', 'length', 'max'=>32),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('adm_id, adm_nome, adm_email, adm_senha, adm_nivel, adm_status', 'safe', 'on'=>'search'),
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
			'adm_id' => 'Admin',
			'adm_nome' => 'Nome',
			'adm_email' => 'Email',
			'adm_senha' => 'Senha',
			'adm_nivel' => 'Nivel',
			'adm_status' => 'Status',
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

		$criteria->compare('adm_id',$this->adm_id);
		$criteria->compare('adm_nome',$this->adm_nome,true);
		$criteria->compare('adm_email',$this->adm_email,true);
		$criteria->compare('adm_senha',$this->adm_senha,true);
		$criteria->compare('adm_nivel',$this->adm_nivel);
		$criteria->compare('adm_status',$this->adm_status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function aGetAdmByNivel($nNivel)
        {
            $criteria = new CDbCriteria;
            $criteria->condition = 'adm_status = 1 AND adm_nivel = '.$nNivel;
            $dataProvider = self::findAll($criteria);
            if(!empty($dataProvider))
            {
                $admin = array();
                foreach($dataProvider as $data)
                {
                    $admin[$data->adm_email] = $data->adm_senha;
                }
                return $admin;
            }
        }
        public function isAdmin($username)
        {
            $data = self::findByAttributes(array('adm_email'=>$username));
            if(!empty($data))
            {
                return true;
            }
        }
        public function aGetAllAdm()
        {
            $dataProvider = self::findAllByAttributes(array('adm_status'=> 1));
            if(!empty($dataProvider))
            {
                $admin = array();
                foreach($dataProvider as $data)
                {
                    $admin[$data->adm_email] = $data->adm_senha;
                }
                return $admin;
            }
        }
}