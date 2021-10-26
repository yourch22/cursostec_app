<?php

namespace App\Http\Controllers;

use App\Services\Serviciosapi;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    protected $serviciosapi;
    public function __construct(Serviciosapi $serviciosapi)
    {
        $this->serviciosapi = $serviciosapi;
    }
}
