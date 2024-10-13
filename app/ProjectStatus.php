<?php

namespace App;

enum ProjectStatus: string
{
    case Open = 'open';
    case Close = 'closed';

    public function label():string{

        return match ($this) {
            self::Open => 'Aceitando Propostas' ,
            self::Close => 'Encerrado' ,
        };

    }
}
