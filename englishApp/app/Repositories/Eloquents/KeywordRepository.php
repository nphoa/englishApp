<?php

namespace App\Repositories\Eloquents;

use App\Repositories\Base\BaseRepository;
use App\Models\Keyword;

class KeywordRepository extends BaseRepository{
    public function __construct(Keyword $keyword)
    {
        $this->model = $keyword;
    }

}
