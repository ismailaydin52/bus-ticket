<?php
namespace App\Controllers;


use activeloginModel;
class activelogin extends BaseController{

    public function index(){
        $user=session();
        $uye=$user->get();
        $uyemodel=new activeloginModel;
        $data=[
                'uye'=>$uyemodel->uyebilgi($uye['ID'])
        ];
           return view('hesabım');
    }
}


?>