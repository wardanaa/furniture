<?php
namespace App\Enums;

enum DiscountTypeEnum: string
{
    case Nominal = 'nominal';
    case Percentage = 'percentage';

    public function getLabel(): ?string
    {
        return ucfirst($this->name);
    }
}
