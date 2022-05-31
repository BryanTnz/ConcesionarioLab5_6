<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function __invoke(Request $request)
    {
        $persons =
        [
            ['Nombre' => 'Poleth',
            'Apellido' => 'Arias',
            "Contacto"=>'',
            "Web"=>'poleth.arias@epn.edu.ec',
            "img"=>'https://avatars.githubusercontent.com/u/74626663?v=4'
            ],

            ["Nombre"=>'Majo',
            "Apellido"=>'',
            "Contacto"=>'',
            "Web"=>'maría.chala@epn.edu.ec',
            "img"=>'https://avatars.githubusercontent.com/u/74751902?v=4'
        ],
            ["Nombre"=>'Mateo',
            "Apellido"=>'Cueva',
            "Contacto"=>'',
            "Web"=>'mateo.cueva@epn.edu.ec',
            "img"=>'https://avatars.githubusercontent.com/u/74993888?s=96&v=4'
        ],
            ["Nombre"=>'Jean',
            "Apellido"=>'Fuentes',
            "Contacto"=>'',
            "Web"=>'jean.fuentes@epn.edu.ec',
            "img"=>'https://avatars.githubusercontent.com/u/74626067?v=4'
        ],
            ["Nombre"=>'Christian',
            "Apellido"=>'Palacios',
            "Contacto"=>'',
            "Web"=>'christian.palacios@epn.edu.ec',
            "img"=>'https://avatars.githubusercontent.com/u/74626089?v=4'
        ],
            ["Nombre"=>'Bryan',
            "Apellido"=>'Tandazo',
            "Contacto"=>'',
            "Web"=>'bryan.tandazo@epn.edu.ec',
            "img"=>'https://avatars.githubusercontent.com/u/66330281?v=4'
            ]
        ];


        return view('personal',compact('persons'));
    }
}




