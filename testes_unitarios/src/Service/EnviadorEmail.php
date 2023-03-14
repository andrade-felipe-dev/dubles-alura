<?php

namespace Alura\Leilao\Service;
use Alura\Leilao\Model\Leilao;

class EnviadorEmail
{
    public function notificarTerminoLeilao(Leilao $leilao):void
    {
        $sucess = mail('usuario@email.com', 'Leilão finalizado', 'Leilão Finalizado');
        if(!$sucess) {
            throw new \DomainException('Erro ao enviar e-mail');
        }
    }
}