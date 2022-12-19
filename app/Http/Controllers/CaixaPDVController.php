<?php

namespace App\Http\Controllers;

use App\Repositories\ProdutoService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CaixaPDVController extends Controller
{
    protected $id;

    public function __construct(private ProdutoService $produto)
    {
    }
    public function generateUniqueID()
    {
        return Str::uuid();
    }
    public function index($id = 0)
    {
        if ($id === 0) {
            $this->id = $this->generateUniqueID();
        }

        return view('caixa', ['id' => $this->id]);
    }

    public function createOrUpdateVenda()
    {
    }
}
