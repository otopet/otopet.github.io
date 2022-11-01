<?php

namespace App\Controllers;

use PhpParser\Node\Stmt\Echo_;

class Vitae extends BaseController
{
    public function home()
    {
        echo view('header');
        echo view('biodata');
        echo view('footer');
    }
}
