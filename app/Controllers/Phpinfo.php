<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Phpinfo extends BaseController
{
    public function index()
    {
        return phpinfo();
    }
}
