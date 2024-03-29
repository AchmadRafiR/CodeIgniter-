<?php

namespace App\Models;

use CodeIgniter\Model;

class Menu_M extends Model
{
    protected $table = 'tblmenu';

    protected $primaryKey = 'idmenu';

    protected $allowedFields = ['idkategori', 'menu', 'gambar', 'harga'];

    protected $validationRules    = [
        'menu'     => 'required|alpha_numeric_space|min_length[3]|is_unique[tblmenu.menu]',
        'harga' => 'numeric'
    ];

    protected $validationMessages = [
        'menu' => [
            'alpha_numeric_space' => 'ada simbol',
            'min_length' => 'minimal 3 huruf',
            'is_unique' => 'ada yang sama',
        ],

        'harga' => [
            'numeric' => 'Harus Angka'
        ]
    ];
}
