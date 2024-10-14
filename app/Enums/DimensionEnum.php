<?php
namespace App\Enums;

enum DimensionEnum: string
{
    case Small = 'small';
    case Medium = 'medium';
    case Large = 'large';

    public function getLabel(): ?string
    {
        return ucfirst($this->name);
    }
}
