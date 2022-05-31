<?php


function menuNavegation($data)
{
    return request()->routeIs($data)?'active':'';
}

function Bienvenida()
{
    return 'Hola es una funcion creada';
}
