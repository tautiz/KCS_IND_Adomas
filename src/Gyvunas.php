<?php

namespace KCS;

class Gyvunas
{
    protected int $amzius;

    public string $vardas;

    public function __construct(int $amzius, string $vardas)
    {
        $this->amzius = $amzius;
        $this->vardas = $vardas;
    }

    public function gautiAmziu(): int
    {
        return $this->amzius;
    }

    public function keistiVardas(string $vardas): void
    {
        $this->vardas = $vardas;
    }

    public function keistiAmziu(int $amzius): void
    {
        $this->amzius = $amzius;
    }
}
