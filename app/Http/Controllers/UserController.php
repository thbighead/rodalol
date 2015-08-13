<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('static.cadastroUsuario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        if(isset($_POST['g-recaptcha-response'])&&($_POST['g-recaptcha-response'])){
            $secret = "6LcHIAsTAAAAAAXWdv0xdMYNfmYPBMILZVRTkMaK";
            $captcha = $_POST['g-recaptcha-response'];
            $ip = $_SERVER['REMOTE_ADDR'];
            $rsp = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip=$ip");
            $arr = json_decode($rsp, TRUE);
            if ($arr['success']){
                $user = \App\User::create(["nome" => $request->nome,
                    "sexo" => $request->sexo,
                    "email" => $request->email,
                    "cpf" => $request->cpf,
                    "cep" => $request->cep,
                    "estado" => $request->estado,
                    "cidade" => $request->cidade,
                    "bairro" => $request->bairro,
                    "logradouro" => $request->logradouro,
                    "numero" => $request->numero]);
                $user->senha = bcrypt($request->senha);
                $user->admPower = false;
                if($user->save()) {
                    echo '<script type="text/javascript">alert("Cadastro efetuado com sucesso!");</script>';
                } else {
                    echo '<script type="text/javascript">alert("O cadastro falhou...");</script>';
                }
            } else {
                echo '<script type="text/javascript">alert("Erro ao carregar recaptcha, por favor atualize a página");</script>';
            }
        } else {
            echo '<script type="text/javascript">alert("Por favor, prove que não é um robô respondendo ao recaptcha");</script>';
        }

        return view('static.cadastroUsuario');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
