<?php

namespace KCS;

class Antis extends Paukstis implements Vandens
{
    public function plauktiLaika(int $kiekLaiko): void
    {
        $this->keistiAmziu($kiekLaiko);
        echo "\nPlaukiu " . $this->amzius . " min.\n";
    }

    public function koksVardas()
    {
        echo $this->vardas;
    }
}
