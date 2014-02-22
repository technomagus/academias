<?php

/**
 * This is the model class for table "cliente".
 *
 * The followings are the available columns in table 'cliente':
 * @property integer $CLIENTE_ID
 * @property string $CLI_NOME
 * @property string $CLI_CPF
 * @property string $CLI_RG
 * @property string $CLI_DATANASCIMENTO
 * @property string $CLI_DATAMATRICULA
 * @property string $CLI_FOTO
 * @property string $CLI_CEP
 * @property string $CLI_CIDADE
 * @property string $CLI_UF
 * @property string $CLI_BAIRRO
 * @property string $CLI_ENDERECO
 * @property string $CLI_LOGRAOUDO
 * @property string $CLI_FONE
 * @property string $CLI_CELULAR
 * @property string $CLI_EMAIL
 * @property integer $CLI_STATUS
 *
 * The followings are the available model relations:
 * @property Financeiro[] $financeiros
 */
class Cliente extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cliente';
	}
        
	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CLI_NOME', 'required'),
			array('CLI_STATUS', 'numerical', 'integerOnly'=>true),
			array('CLI_NOME', 'length', 'max'=>50),
			array('CLI_CPF, CLI_RG, CLI_FONE, CLI_CELULAR', 'length', 'max'=>24),
			array('CLI_CEP', 'length', 'max'=>9),
			array('CLI_CIDADE, CLI_ENDERECO', 'length', 'max'=>60),
			array('CLI_UF', 'length', 'max'=>2),
			array('CLI_BAIRRO, CLI_LOGRAOUDO', 'length', 'max'=>40),
			array('CLI_EMAIL', 'length', 'max'=>100),
			array('CLI_DATANASCIMENTO, CLI_DATAMATRICULA, CLI_FOTO', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('CLIENTE_ID, CLI_NOME, CLI_CPF, CLI_RG, CLI_DATANASCIMENTO, CLI_DATAMATRICULA, CLI_FOTO, CLI_CEP, CLI_CIDADE, CLI_UF, CLI_BAIRRO, CLI_ENDERECO, CLI_LOGRAOUDO, CLI_FONE, CLI_CELULAR, CLI_EMAIL, CLI_STATUS', 'safe', 'on'=>'search'),
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
			'financeiros' => array(self::HAS_MANY, 'Financeiro', 'FIN_CLIENTEID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'CLIENTE_ID' => 'Id',
			'CLI_NOME' => 'Nome',
			'CLI_CPF' => 'CPF/CNPJ',
			'CLI_RG' => 'RG/INSC',
			'CLI_DATANASCIMENTO' => 'Nascimento',
			'CLI_DATAMATRICULA' => 'Matricula',
			'CLI_FOTO' => 'Imagem',
			'CLI_CEP' => 'CEP',
			'CLI_CIDADE' => 'Cidade',
			'CLI_UF' => 'UF',
			'CLI_BAIRRO' => 'Bairro',
			'CLI_ENDERECO' => 'Endereço',
			'CLI_LOGRAOUDO' => 'Logradoudo',
			'CLI_FONE' => 'Fone',
			'CLI_CELULAR' => 'Celular',
			'CLI_EMAIL' => 'E-mail',
			'CLI_STATUS' => 'Status',
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
	public function searchAtivo()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('CLIENTE_ID',$this->CLIENTE_ID);
		$criteria->compare('CLI_NOME',$this->CLI_NOME,true);
		$criteria->compare('CLI_CPF',$this->CLI_CPF,true);
		$criteria->compare('CLI_RG',$this->CLI_RG,true);
		$criteria->compare('CLI_DATANASCIMENTO',$this->CLI_DATANASCIMENTO,true);
		$criteria->compare('CLI_DATAMATRICULA',$this->CLI_DATAMATRICULA,true);
		$criteria->compare('CLI_FOTO',$this->CLI_FOTO,true);
		$criteria->compare('CLI_CEP',$this->CLI_CEP,true);
		$criteria->compare('CLI_CIDADE',$this->CLI_CIDADE,true);
		$criteria->compare('CLI_UF',$this->CLI_UF,true);
		$criteria->compare('CLI_BAIRRO',$this->CLI_BAIRRO,true);
		$criteria->compare('CLI_ENDERECO',$this->CLI_ENDERECO,true);
		$criteria->compare('CLI_LOGRAOUDO',$this->CLI_LOGRAOUDO,true);
		$criteria->compare('CLI_FONE',$this->CLI_FONE,true);
		$criteria->compare('CLI_CELULAR',$this->CLI_CELULAR,true);
		$criteria->compare('CLI_EMAIL',$this->CLI_EMAIL,true);
		$criteria->compare('CLI_STATUS',1);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function searchDesligado()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('CLIENTE_ID',$this->CLIENTE_ID);
		$criteria->compare('CLI_NOME',$this->CLI_NOME,true);
		$criteria->compare('CLI_CPF',$this->CLI_CPF,true);
		$criteria->compare('CLI_RG',$this->CLI_RG,true);
		$criteria->compare('CLI_DATANASCIMENTO',$this->CLI_DATANASCIMENTO,true);
		$criteria->compare('CLI_DATAMATRICULA',$this->CLI_DATAMATRICULA,true);
		$criteria->compare('CLI_FOTO',$this->CLI_FOTO,true);
		$criteria->compare('CLI_CEP',$this->CLI_CEP,true);
		$criteria->compare('CLI_CIDADE',$this->CLI_CIDADE,true);
		$criteria->compare('CLI_UF',$this->CLI_UF,true);
		$criteria->compare('CLI_BAIRRO',$this->CLI_BAIRRO,true);
		$criteria->compare('CLI_ENDERECO',$this->CLI_ENDERECO,true);
		$criteria->compare('CLI_LOGRAOUDO',$this->CLI_LOGRAOUDO,true);
		$criteria->compare('CLI_FONE',$this->CLI_FONE,true);
		$criteria->compare('CLI_CELULAR',$this->CLI_CELULAR,true);
		$criteria->compare('CLI_EMAIL',$this->CLI_EMAIL,true);
		$criteria->compare('CLI_STATUS',0);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Cliente the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
