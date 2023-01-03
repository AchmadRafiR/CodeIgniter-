<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Kategori_M;

class Menu extends BaseController
{
    public function index()
    {
        return view('menu/form');
    }

    public function select()
    {
        echo '<h1>tempat untuk menampilkan data</h1>';
    }

    public function update($id = null, $nama = null)
    {
        echo "<h1>tempat untuk mengupdate dengan id : $id $nama</h1>";
    }

    public function insert()
    {
        $file = $this->request->getFile('gambar');
        $name = $file->getName();

        $file->move('./images');
        echo $name . "sudah di upload";
    }

    public function option()
    {
        $model = new Kategori_M();
        $kategori = $model->findAll();

        $data = [
            'kategori' => $kategori
        ];

        return view('template/option', $data);
    }
}
