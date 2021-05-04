<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminModel extends Model
{
    public function data(){
        return
        [
            [
            'nama' => 'Hasan Nasrullah',
            'email' => 'hnasrul22@gmail.com'
            ],
            [
            'nama' => 'Yanuar Bimantara',
            'email' => 'yanuarba@gmail.com'
            ],
            [
            'nama' => 'Fairuz Zain',
            'email' => 'fairuzf@gmail.com'
            ]
        ];
    }
}
