<?php

namespace App\Controllers;

use App\Models\PemainBolaModel;
use CodeIgniter\HTTP\Request;

class PemainBola extends BaseController
{
    protected $pemainBolaModel;

    public function __construct()
    {
        $this->pemainBolaModel = new PemainBolaModel();
    }

    public function index()
    {

        $currentPage = $this->request->getVar('page_pemainbola') ? $this->request->getVar('page_pemainbola') : 1;
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $pemainBola = $this->pemainBolaModel->search($keyword);
        } else {
            $pemainBola = $this->pemainBolaModel;
        }

        $data = [
            'title' => 'Daftar Orang',
            // 'pemainBola' => $this->pemainBolaModel->findAll()
            'pemainBola' => $pemainBola->paginate(5, 'pemainbola'),
            'pager' => $this->pemainBolaModel->pager,
            'currentPage' => $currentPage
        ];

        return view('pemainBola/index', $data);
    }
}
