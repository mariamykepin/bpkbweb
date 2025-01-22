<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function welcome()
    {
        return view('welcome'); // Pastikan file 'welcome.blade.php' ada di folder 'resources/views'
    }
}
