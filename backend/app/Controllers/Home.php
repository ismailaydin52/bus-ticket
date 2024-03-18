<?php
namespace App\Controllers;
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
    public function kullanıcı(){
        return view("kullanıcı");
    }
    public function allbus(){
        return view("allbus");
    }


}
?>
