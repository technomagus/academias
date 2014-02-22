<?php

/**
 * This is the model class for table "financeiro".
 *
 * The followings are the available columns in table 'financeiro':
 * @property integer $FINANCEIRO_ID
 * @property integer $FIN_CLIENTEID
 * @property double $FIN_VALOR
 * @property string $FIN_DESCRICAO
 * @property string $FIN_VENCIMENTO
 * @property string $FIN_BAIXA
 *
 * The followings are the available model relations:
 * @property Cliente $fINCLIENTE
 */
class Financeiro extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'financeiro';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('FIN_CLIENTEID, FIN_VALOR, FIN_VENCIMENTO', 'required'),
			array('FIN_CLIENTEID', 'numerical', 'integerOnly'=>true),
			array('FIN_VALOR', 'required'),
			array('FIN_DESCRICAO, FIN_BAIXA', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('FINANCEIRO_ID, FIN_CLIENTEID, FIN_VALOR, FIN_DESCRICAO, FIN_VENCIMENTO, FIN_BAIXA', 'safe', 'on'=>'search'),
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
			'fINCLIENTE' => array(self::BELONGS_TO, 'Cliente', 'FIN_CLIENTEID'),
		);
	}
        
        public function configuraMoeda($valor)
       {
          $valor = number_format($valor, 2, '.', '');
          $nCont = 0;
          $tmp   = "".$valor;
          $saida = "";
          for($nI = strlen($tmp)-1;$nI >= 0; $nI--)
          {
             if($nCont == 2 || $tmp[$nI] == '.')
             {
                  if($tmp[$nI] == '.'){
                      $saida .= ',';
                      $nI--;
                  }
                  else
                      $saida .= '.';
                  $nCont = -1;
             }
             $saida .= $tmp[$nI];
             $nCont++;
          }
          $final = "";
          for($nI = strlen($saida)-1;$nI >= 0; $nI--)
          {
             $final .= $saida[$nI];
          }
          return $final;
       }
        
        public function beforeSave()
        {
           if(!empty($this->FIN_VALOR))
           {
                 $this->FIN_VALOR = str_replace('R$', '', $this->FIN_VALOR);
                 $this->FIN_VALOR = str_replace('.', '', $this->FIN_VALOR);
                 $this->FIN_VALOR = str_replace(',', '.', $this->FIN_VALOR);
           }
           
           if(!empty($this->FIN_VENCIMENTO))
           {
              $tmp = explode("-",$this->FIN_VENCIMENTO);
              $this->FIN_VENCIMENTO = $tmp[2]."-".$tmp[1]."-".$tmp[0];
           }
           
           if(!empty($this->FIN_BAIXA))
           {
              $tmp = explode("-",$this->FIN_BAIXA);
              $this->FIN_BAIXA = $tmp[2]."-".$tmp[1]."-".$tmp[0];
           } 
           return parent::beforeSave();
        }
        
        public function afterFind()
        {
           
           if(!empty($this->FIN_VALOR))
           {
              $this->FIN_VALOR = (double) str_replace(".",",", $this->FIN_VALOR);   
              $this->FIN_VALOR = self::configuraMoeda($this->FIN_VALOR);
           }
           
           
           if(!empty($this->FIN_VENCIMENTO))
           {
              $tmp = explode("-",$this->FIN_VENCIMENTO);
              $this->FIN_VENCIMENTO = $tmp[2]."-".$tmp[1]."-".$tmp[0];
           }
           
           if(!empty($this->FIN_BAIXA))
           {
              $tmp = explode("-",$this->FIN_BAIXA);
              $this->FIN_BAIXA = $tmp[2]."-".$tmp[1]."-".$tmp[0];
           }
           
           return parent::afterFind();
        }

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'FINANCEIRO_ID' => 'Financeiro',
			'FIN_CLIENTEID' => 'Fin Clienteid',
			'FIN_VALOR' => 'Fin Valor',
			'FIN_DESCRICAO' => 'Fin Descricao',
			'FIN_VENCIMENTO' => 'Fin Vencimento',
			'FIN_BAIXA' => 'Fin Baixa',
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

		$criteria->compare('FINANCEIRO_ID',$this->FINANCEIRO_ID);
		$criteria->compare('FIN_CLIENTEID',$this->FIN_CLIENTEID);
		$criteria->compare('FIN_VALOR',$this->FIN_VALOR);
		$criteria->compare('FIN_DESCRICAO',$this->FIN_DESCRICAO,true);
		$criteria->compare('FIN_VENCIMENTO',$this->FIN_VENCIMENTO,true);
		$criteria->compare('FIN_BAIXA',$this->FIN_BAIXA,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Financeiro the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
