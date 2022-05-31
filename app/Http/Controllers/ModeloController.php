<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModeloController extends Controller
{
    
    public function __invoke(Request $request)
    {
        $autos =
        [
            ['Nombre' => 'Rio 5',
            'Apellido' => '',
            "Contacto"=>'Desde $68.890.000',
            "Web"=>'',
            "img"=>'https://www.kia.com/content/dam/kwcms/ec/es/images/SHOWROOM2021/Rio5/features/rio5_side.png'
            ],

            ["Nombre"=>'Stinger',
            "Apellido"=>'',
            "Contacto"=>'DESDE $17,999',
            "Web"=>'',
            "img"=>'https://www.kia.com/kmc/images/showroom/Stinger_CK_18MY/Features/kia-stinger-silver-byo.png'
        ],
            ["Nombre"=>'Rio Sedan',
            "Apellido"=>'',
            "Contacto"=>'DESDE $43,890.00',
            "Web"=>'',
            "img"=>'https://www.kia.com/content/dam/kwcms/ec/es/images/SHOWROOM2021/RioSedan/features/riosedan_side.png'
        ]
        ];
    return view('modelos',compact('autos'));
    }
}
