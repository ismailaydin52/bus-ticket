<?php

use CodeIgniter\Model;

class activeloginModel extends Model{

    public function giris($username, $password)
    {
        $data = $this->findAll();
        foreach ($data as $row)
        {
            if($row['eposta'] == $username && $row['Tc_Kimlik'] == $password)
            {
                return $row;
            }
        }
        return ["username" => "null"]; 
    
    }
}






?>