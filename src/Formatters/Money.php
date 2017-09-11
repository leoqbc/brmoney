<?php
namespace BrMoney\Formatters;

class Money
{
    public function toReais(float $value)
    {
        return 'R$ ' . number_format($value, 2, ',', '.');
    }
}