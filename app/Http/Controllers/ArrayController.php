<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArrayController extends Controller
{
    public function ArrayFood(Request $request)
    {
        $type = $request->menu;
        $foodName = ['Seblak','Cilok','Nasi Goreng','Ikan Bakar','Semur Jengkol','Cah Kangkung','Ayam Bakar'];

        if ($type === 'MenuPertama') {
            $menuPertama = $foodName[0];

            return response()->json([
                "Menu Pertama" => $menuPertama
            ]);
        }
        if ($type === 'MenuTerakhir') {
            $menuTerakhir = end($foodName);

            return response()->json([
                "Menu Terakhir" => $menuTerakhir
            ]);
        }
        if ($type === 'MenuKesukaan') {
            $fav = $foodName[4];

            return response()->json([
                "Menu Kesukaan" => $fav
            ]);
        }
        if ($type === 'JumlahMenu') {
            $totalMenu = count($foodName);

            return response()->json([
                'Jumlah Menu' => $totalMenu
            ]);
        }
        else {
            return response()->json([
                'Status' => 'Menu tidak ada'
            ]);
        }
    }
}
