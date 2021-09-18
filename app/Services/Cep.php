<?php

namespace App\Services;


use GuzzleHttp\Client;


class Cep
{
    protected $cep;

    public function buscarCep(string $cep)
    {
        $response = $this->buscarInfoCep($cep);
        if(@$response->erro) {
            echo json_encode(['erro'=>1]);
            return;
        }

        return $this->returnResponse($response);
    }

    public function buscarInfoCep($cepFormated)
    {
        $url = "https://viacep.com.br/ws/$cepFormated/json/";

        $client = new Client;
        $response = $client->request('GET', $url);

        $responseBody = json_decode($response->getBody());

        return $responseBody;
    }

    public function returnResponse($responseBody)
    {
        switch ($responseBody->uf) {
            case "AC":
                $uf = 'Acre';
                break;
            case "AL":
                $uf = 'Alagoas';
                break;
            case "AP":
                $uf = 'Amapa';
                break;
            case "AM":
                $uf = 'Amazonas';
                break;
            case "BA":
                $uf = 'Bahia';
                break;
            case "CE":
                $uf = 'Ceara';
                break;
            case "ES":
                $uf = 'Espirito Santo';
                break;
            case "GO":
                $uf = 'Goias';
                break;
            case "MA":
                $uf = 'Maranhao';
                break;
            case "MT":
                $uf = 'Mato Grosso';
                break;
            case "MS":
                $uf = 'Mato Grosso do Sul';
                break;
            case "MG":
                $uf = 'Minas Gerais';
                break;
            case "PA":
                $uf = 'Para';
                break;
            case "PB":
                $uf = 'Paraiba';
                break;
            case "PR":
                $uf = 'Parana';
                break;
            case "PE":
                $uf = 'Pernambuco';
                break;
            case "PI":
                $uf = 'Piaui';
                break;
            case "RJ":
                $uf = 'Rio de Janeiro';
                break;
            case "RN":
                $uf = 'Rio Grande do Norte';
                break;
            case "RS":
                $uf = 'Rio Grande do Sul';
                break;
            case "RO":
                $uf = 'Rondonia';
                break;
            case "RR":
                $uf = 'Roraima';
                break;
            case "SC":
                $uf = 'Santa Catarina';
                break;
            case "SP":
                $uf = 'Sao Paulo';
                break;
            case "SE":
                $uf = 'Sergipe';
                break;
            case "TO":
                $uf = 'Tocantins';
                break;
            case "DF":
                $uf = 'Distrito Federal';
                break;
        }

        echo json_encode([
            'logradouro' => $responseBody->logradouro,
            'bairro' => $responseBody->bairro,
            'cidade' => $responseBody->localidade,
            'uf' => $responseBody->uf,
            'cep' => $responseBody->cep,
            'uf_extenso' => $uf,
            'erro' => 0
        ]);
    }
}