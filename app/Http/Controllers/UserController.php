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

        $this->validate($request, [
            'nome' => array("required", "max:255"),
            'email' => 'required | max:255 | email | unique:users',
            'password' => 'required | min:5 | max:20',
            'confirm' => 'required | min:5 | max:20 | same:password',
            'cpf' => 'required | min:11 | max:14 | unique:users',
            'sexo' => 'required',
            'cep' => 'required | min:8 | max:10',
            'logradouro' => 'required',
            'numero' => 'required | numeric',
            'bairro' => 'required',
            'estado' => 'required | size:2 | in:AC,AL,AP,AM,BA,CE,DF,ES,GO,MA,MT,MS,MG,PA,PB,PR,PE,PI,RJ,RN,RS,RO,RR,SC,SP,SE,TO',
            'cidade' => 'required'
        ]);

//        $input->input('cep') ltrim($input->input('cep'), ".-");

        $user = $this->userModel->fill($input);
        $user->password = bcrypt("$request->password");
        if($user->save()) {
            $msg = "Cadastro efetuado com sucesso!";
        } else {
            $msg = "O cadastro falhou...";
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

        return response()->json($dados);
    }

    //funcao para checar se o recaptcha foi respondido
    public function checkRecaptcha(Request $request)
    {
        // Include the reCaptcha library
        require_once app_path()."/lib/recaptchalib.php";

        $privatekey = "6LcHIAsTAAAAAAXWdv0xdMYNfmYPBMILZVRTkMaK";

        // reCaptcha looks for the POST to confirm
        $resp = recaptcha_check_answer ($privatekey,
            $_SERVER["REMOTE_ADDR"],
            $_POST["recaptcha_challenge_field"],
            $_POST["recaptcha_response_field"]);

        // If the entered code is correct it returns true (or false)
        if ($resp->is_valid) {
            return response()->json("true");
        } else {
            return response()->json("false");
        }
    }

    //funcao para checar se o email esta ou nao disponivel
    public function checkEmail(Request $request)
    {
        $email = $this->userModel->where('email', $request->input('email'))->first();
        if ($email != null) {
            return response()->json(false);
        } else {
            return response()->json(true);
        }
    }

    //funcao para checar se o cpf esta ou nao disponivel
    public function checkCPF(Request $request)
    {
        $cpf = $this->userModel->where('cpf', $request->input('cpf'))->first();
        if ($cpf != null) {
            return response()->json(false);
        } else {
            return response()->json(true);
        }
    }
}
