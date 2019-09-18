<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

use App\Cliente;

class buscaControler extends Controller
{
    //
    public function index(){
        return view('index');
    }

    public function cliente(Request $request){

        $validatedData = $request->validate([      'cpf' => 'required|integer'      ]);   


        $req =  $request->all();
        $cliente = Cliente::where("cpf", "=", $req['cpf'])->first();
        
        if($cliente === NULL){
            $token = "0EDD914036468074745FCE0E75C6D66E043F83432EDC9DFBF9882981429E59CE"; 
            $cliente = new Client();
            
            try {
            $res = $cliente->request('GET', 'https://api.federalconsig.com.br/api/prova/cliente/'.$req['cpf'], [
                'referer' => true,
                'headers' => [
                    'Authorization' => 'Bearer '.$token,
                    'Accept' => 'application/json',
                ],
            ]); 
            } catch (\GuzzleHttp\Exception\ConnectException $e) {
                // This is will catch all connection timeouts
                // Handle accordinly
            } catch (\GuzzleHttp\Exception\ClientException $e) {
                // This will catch all 400 level errors.
                return view('cliente', ["status"=>0]);
            }

            $dado =  json_decode($res->getBody(), true);

            // var_dump($dado);

            $r=[ "cpf"=>$req['cpf'], 
                "nome"=>$dado['cliente']['data']['cadastro']['nome'], 
                "nascimento"=> date('Y-m-d', strtotime($dado['cliente']['data']['cadastro']['dataNascimento'])), 
                "idade"=>$dado['cliente']['data']['cadastro']['idade'], 
                "signo"=>$dado['cliente']['data']['cadastro']['signo'], 
                "status"=>$dado['cliente']['data']['cadastro']['status'],
                "maeNome"=>$dado['cliente']['data']['cadastro']['maeNome'],        
            ];



            $novo = new Cliente();
            $novo = $novo->create($r);
        }

        $cliente = Cliente::where("cpf", "=", $req['cpf'])->first();

       // var_dump($cliente);
        return view('cliente', ["cliente"=>$cliente,"status"=>1]);
    }


}
