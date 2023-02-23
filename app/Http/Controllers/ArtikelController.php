<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class ArtikelController extends Controller
{
    public function show($id)
    {
        return "Halaman artikel dengan id $id";
    }    

}
?>
