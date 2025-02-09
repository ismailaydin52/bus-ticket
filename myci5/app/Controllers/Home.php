<?php
namespace App\Controllers;

use App\Models\activeloginModel;

class Home extends BaseController
{
    public function index()
    {
        
        return view('deneme');
        
    }
    public function form(){
        return view('form');
    }
    public function güzergahlar(){ 
        return view('güzergahlar');
            
    }
    public function admin(){
        return view('admin');
    }  
    public function seferkontrol(){ 
        return view('seferkontrol');
    }
    public function biletkontrolü(){
        return view('biletkontrolü');
    }
    public function kayıtol(){
        return view('kayıtol');
    }
    public function login(){
        return view('login');
    }
    public function adminlogin(){
        if($_SERVER['HTTP_REFERER']=base_url('admin/adminlogin')){
        return view('adminlogin');
    }
    else{
        echo "404 Not Found";
    }}

    public function forgetpassword(){
        if ($_SERVER['HTTP_REFERER'] =base_url('login/forgetpassword')) {
            
            return view('forgetpassword');
        }
        else{
            //404 hatası ver
            echo "404 NOT Found";
    }
    }

    public function allbus(){

        return view('allbus'); 
    }
    public function busdetail(){
        return view('busdetail');
    }
    public function soforliste(){
        return view('soforliste');
    }
    public function odeme(){
        return view('odeme');
    }
    public function adminseferler(){
        return view('adminseferler');
    }
    public function koltuksec(){
        return view('koltuksec');
    }
    public function hesabım(){
        return view('hesabım');
    }
    public function giris(){
        $email = $_POST["email"];
        $pasword = $_POST["sifre"];
        $kullaniciModel = new activeloginModel;
        $user = $kullaniciModel->giris($email, $pasword);
        $sesion = session();
        $sesion->set('user',$user);
        if(isset($user["eposta"])){
            return view('hesabım');
        }
        else{
            return view('kayıtol');
        }

    }
    public function guncelle(){
        $kullaniciModel = new activeloginModel;
        $tcNo = $_POST["ktp"];
        $ad = $_POST["nama"];
        $eposta = $_POST["email"];
        $telefon = $_POST["hp"];
        $session = session();
        $user = $session->get('user');
        $id = $user['Id'];
        $kullaniciModel->guncele($tcNo,$ad,$eposta,$telefon,$id);
        $sesion = session();
        $user = $session->get('user');
        $email = $user['eposta'];
        $pasword = $user['Tc_Kimlik'];
        $user = $kullaniciModel->giris($email, $pasword);
        $sesion->set('user',$user);
        return view('hesabım');
    }
    public function admin_view(){
        return view('admin_view');
    }
    public function grafik1(){
        return view('grafik1');
    }
    public function grafik2(){
        return view('grafik2');
    }
    public function kişiselbiletlerim(){
        return view('kişiselbiletlerim');
    }
    

}
?>
