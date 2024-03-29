<?php
namespace App\Models;

use CodeIgniter\Model;

class activeloginModel extends Model{

    public function giris($username, $password)
    {
        $query = $this->db->query('SELECT
        Id,
        Ad,
        Soyad,
        Yaş,
        Cinsiyet,
        Telefon,
        Tc_Kimlik,
        Meslek,
        eposta
        FROM 
        yolcular;');
        $data = $query->getResultArray();
        foreach ($data as $row)
        {
            if($row['eposta'] == $username && $row['Tc_Kimlik'] == $password)
            {
                return $row;
            }
        }
        return ["username" => "null"]; 
    
    }

    public function guncele($tcNo,$ad,$eposta,$telefon,$id){
        $query = $this->db->query('UPDATE Yolcular
        SET Tc_Kimlik = ? , Ad =? , eposta = ?, Telefon = ?
        WHERE Id = ?;',array($tcNo,$ad,$eposta,$telefon,$id));

    }
}






?>