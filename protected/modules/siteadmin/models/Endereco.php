<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Endereco extends CActiveRecord
{
        private $logradouro;
	private $bairro;
	private $localidade;
	private $uf;
	private $cep;

	public function getLogradouro()
	{
		return $this->logradouro;
	}

	public function setLogradouro( $logradouro )
	{
		$this->logradouro = $logradouro;
	}

	public function getBairro()
	{
		return $this->bairro;
	}

	public function setBairro( $bairro )
	{
		$this->bairro = $bairro;
	}

	public function getLocalidade()
	{
		return $this->localidade;
	}

	public function setLocalidade( $localidade )
	{
		$this->localidade = $localidade;
	}

	public function getUf()
	{
		return $this->uf;
	}

	public function setUf( $uf )
	{
		$this->uf = $uf;
	}

	public function getCep()
	{
		return $this->cep;
	}

	public function setCep( $cep )
	{
		$this->cep = $cep;
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