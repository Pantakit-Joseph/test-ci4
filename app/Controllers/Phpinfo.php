<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Phpinfo extends BaseController
{
    public function index()
    {
        echo base_url('test');
        echo '<br>';
        echo site_url('test');
        return phpinfo();
    }
}
