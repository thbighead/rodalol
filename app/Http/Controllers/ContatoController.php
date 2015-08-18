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
        //
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
            return true;
        } else {
            return false;
        }
    }

    public function sendMail (Request $request)
    {
        $this->validate($request, [
            'nome' => array("required", "max:255"),
            'email' => 'required | max:255 | email',
            'sexo' => 'required | size:1 | in:M,F',
            'estado' => 'required | size:2 | in:AC,AL,AP,AM,BA,CE,DF,ES,GO,MA,MT,MS,MG,PA,PB,PR,PE,PI,RJ,RN,RS,RO,RR,SC,SP,SE,TO',
            'msg' => 'required'
        ]);

        if($this->checkRecaptcha($request)){
            //faço o que tiver de fazer, pois deu bom
            return 'true';
        }

        return 'false';
    }
}
