<?php

use CodeIgniter\Model;

class activeloginModel extends Model{

    public function giris($username, $password)
    {
        $data = $this->findAll();
        foreach ($data as $row)
        {
            if($row['username'] == $username && $row['password'] == $password)
            {
                return $row;
            }
        }
        return ["username" => "null"]; 
    
    }
}






?>