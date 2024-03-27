<?php

namespace App\Controllers;

use App\Models\Adminselect;
use CodeIgniter\Controller;

class AdminController extends Controller
{
    public function index()
    {
        $model = new Adminselect();
        $data['odemeler'] = $model->getir_tablo();

        return view('admin/admin_view', $data);
    }
}
