<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Sumanto Lover Fan'
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Sumanto'
        ];
        echo view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'contact',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jl. Setro 666',
                    'kota' => 'Jombang'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jl. Telang',
                    'kota' => 'Bangkalan'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }
}
