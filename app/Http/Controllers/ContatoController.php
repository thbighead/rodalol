<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('static.contato');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
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
                $message = $request->nome." - ".$request->email;
                echo '<script type="text/javascript">alert("Mensagem enviada com sucesso!");</script>';
                return view('static.contato');
            } else {
                echo '<script type="text/javascript">alert("Erro ao carregar recaptcha, por favor atualize a p�gina");</script>';
            };
        } else {
            echo '<script type="text/javascript">alert("Por favor, prove que n�o � um rob� respondendo ao recaptcha");</script>';
        };

        $dadosContato = array($request->nome, $request->email, $request->sexo, $request->estado);
        $msg = $request->msg;
        foreach($dadosContato as $dado) {
            echo $dado;
        }
//        return 'Mensagem: '.$msg;
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
