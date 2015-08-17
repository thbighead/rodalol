<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;

class UserController extends Controller
{
    private $userModel;

    public function __construct(User $userModel)
    {
        $this->userModel = $userModel;
    }

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
        $users = $this->userModel->all();

        return view('usuario.cadastroUsuario', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        if(($request->input('recaptcha'))!=null){
            $secret = "6LcHIAsTAAAAAAXWdv0xdMYNfmYPBMILZVRTkMaK";
            $captcha = $request->input('recaptcha');
            $ip = $_SERVER['REMOTE_ADDR'];
            $rsp = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip=$ip");
            $arr = json_decode($rsp, TRUE);
            if ($arr['success']){
                $user = $this->userModel->fill($input);
                $user->password = bcrypt("$request->password");
                if($user->save()) {
                    $msg = "Cadastro efetuado com sucesso!";
                } else {
                    $msg = "O cadastro falhou...";
                }
            } else {
                $msg = "Erro ao carregar recaptcha, por favor atualize a página";
            }
        } else {
            $msg = "Por favor, prove que não é um robô respondendo ao recaptcha";
        }

        return response()->json(['msg' => $msg]);
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

    //funcao para preencher endereco a partir do CEP
    public function cepFill(Request $request)
    {
        $cep = $request->input('cep');

        $reg = simplexml_load_file("http://cep.republicavirtual.com.br/web_cep.php?formato=xml&cep=".$cep);

        $dados['sucesso'] = (string) $reg->resultado;
        $dados['logradouro'] = (string) $reg->tipo_logradouro.' '.$reg->logradouro;
        $dados['bairro'] = (string) $reg->bairro;
        $dados['cidade'] = (string) $reg->cidade;
        $dados['estado'] = (string) $reg->uf;

        return json_encode($dados);
    }

    //funcao para checar se o email esta ou nao disponivel
    public function checkEmail(Request $request)
    {
//        $email = $this->userModel->where('email', $request->input('email'));
//        if ($email != null) {
//            return true;
//        } else {
//            return false;
//        }
        return true;
    }

    //funcao para checar se o cpf esta ou nao disponivel
    public function checkCPF(Request $request)
    {
        return true;
    }
}
