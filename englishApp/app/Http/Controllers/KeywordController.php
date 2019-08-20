<?php

namespace App\Http\Controllers;

use App\Repositories\Eloquents\KeywordRepository;
use Illuminate\Http\Request;

class KeywordController extends Controller
{
    protected $keywordRepository;
    public function __construct(KeywordRepository $keywordRepository)
    {
        $this->keywordRepository = $keywordRepository;
    }
    public function createKeyword(Request $req){
        $this->keywordRepository->create($req->all());
        dd($req->all());
    }

    public function getAll(){

        dd($this->keywordRepository->getAll());
    }
}
