<?php

namespace App\Models;

use CodeIgniter\Model;

class Adminselect extends Model
{
    protected $table = 'ödeme'; // Veritabanındaki ödeme tablosunun adı
    protected $primaryKey = 'Ödeme_id'; // Ödeme tablosunun anahtar sütunu

    protected $allowedFields = ['Yolcu_id', 'Card_numarası', 'Cvv']; // Veritabanından alınacak sütunlar

    public function getir_tablo()
    {
        return $this->findAll(); // Tüm ödemeleri getir
    }
}
