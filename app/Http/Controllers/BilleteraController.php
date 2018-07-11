<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\Billetera;
class BilleteraController extends Controller
{
    public function create(Request $request)
    {
        $rules = [
            'codigoUsuarioPk' => 'required',

         ];
 
        $customMessages = [
             'required' => 'Please fill attribute :attribute'
        ];
        $this->validate($request, $rules, $customMessages);
 
        try {

            $codigoUsuarioPk = $request->input('codigoUsuarioPk');


            $save = Billetera::create([
                'codigoUsuarioPk'=> (int)$codigoUsuarioPk,
                'saldo'=> 0,

            ]);

            $res['status'] = true;
            $res['message'] = 'Billetera creada!';
            return response($res, 200);
        } catch (\Illuminate\Database\QueryException $ex) {
            $res['status'] = false;
            $res['message'] = $ex->getMessage();
            return response($res, 500);
        }
    }

    public function get_billetera()
    {
        $billetera = Billetera::all();
        if ($billetera) {
            $res['status'] = true;
            $res['message'] = $billetera;

            return response($res);
        }else{
            $res['status'] = false;
            $res['message'] = 'Cannot find user!';

            return response($res);
        }
    }
 

}