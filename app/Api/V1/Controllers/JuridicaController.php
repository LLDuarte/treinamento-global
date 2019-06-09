<?php

namespace App\Api\V1\Controllers;

use Dingo\Api\Routing\Helpers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Requests\CreateQuestionaryQuestionRequest;

class JuridicaController extends Controller
{
    public function __construct()
    {
        // $this->middleware('api.auth',              ['except' => ['setOwner']]);
    }

    /**
     * Get data for CNPJ
     * 
     * POST api/juridicas/get-cnpj
    */
	public function get_cnpj(Request $request)
	{
        $input = $request->only('cnpj');

        $cnpj = new \GuzzleHttp\Client();
        $res = $cnpj->request('GET', 'https://www.receitaws.com.br/v1/cnpj/'.$input['cnpj'], ['verify' => false]);
        $json = json_decode($res->getBody()->getContents(), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

        return $json;

    }
}