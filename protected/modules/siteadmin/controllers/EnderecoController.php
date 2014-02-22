<?php

class EnderecoController extends Controller
{
    public function buscarCep($cep)
    {
        $ch = curl_init();

        curl_setopt_array($ch, array
        (
            CURLOPT_URL  => "http://www.buscacep.correios.com.br/servicos/dnec/consultaEnderecoAction.do",
            CURLOPT_POST => TRUE,
            CURLOPT_POSTFIELDS => "relaxation=".$cep."&TipoCep=ALL&semelhante=N&cfm=1&Metodo=listaLogradouro&TipoConsulta=relaxation&StartRow=1&EndRow=10",
            CURLOPT_RETURNTRANSFER => TRUE
        ));

        $response = curl_exec($ch);
        curl_close($ch);
        preg_match_all("/>(.*?)<\/td>/", $response, $matches);
        
        //return $matches[1];
        return $matches[1];
    }
    public function ActionGetEndereco()
    {
        if(isset($_REQUEST['cep']))
        {
            echo  utf8_encode(implode('|',$this->buscarCep($_REQUEST['cep'])));
        }else
            echo 'falha';
    }
    
}

