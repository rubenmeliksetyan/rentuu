<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Collection;

interface ITagService
{
    function find(): Collection;
}
