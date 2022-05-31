<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalizaController extends Controller
{
    public function __invoke(Request $request)
    {
        $pp =
        [
            ['Nombre' => 'Consola central',
            'Apellido' => '',
            "Contacto"=>'Desde $23.00',
            "Web"=>'',
            "img"=>'https://http2.mlstatic.com/D_NQ_NP_671588-MEC47978773656_102021-V.webp'
            ],

            ["Nombre"=>'Computador Cerebro',
            "Apellido"=>'',
            "Contacto"=>'DESDE $399,00',
            "Web"=>'',
            "img"=>'https://http2.mlstatic.com/D_NQ_NP_621820-MEC49036926453_022022-V.webp'
        ],
            ["Nombre"=>'Tacometro Medidor',
            "Apellido"=>'',
            "Contacto"=>'DESDE $65,00',
            "Web"=>'',
            "img"=>'https://http2.mlstatic.com/D_NQ_NP_878536-MEC47760132723_102021-V.webp'
        ]
        ];
    return view('personaliza',compact('pp'));
    }
}
