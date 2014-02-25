<?php

/**
 * This is the model class for table "admin".
 *
 * The followings are the available columns in table 'admin':
 */
class Tema extends CActiveRecord
{
    public $tema = null;
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
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tema, adm_email, adm_senha, adm_nivel, adm_status', 'required'),
		);
	}
        
        
}