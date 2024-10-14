<?php
namespace App\Enums;

enum StatusEnum: string
{
    case Request = 'request';
    case WaitingPayment = 'waiting_payment';
    case PaymenSuccess = 'paymen_success';
    case Packaging = 'packaging';
    case Delivery = 'delivery';
    case Arrive = 'arrive';
    case success = 'success';

    public function getLabel(): ?string
    {
        return ucfirst($this->name);
    }
}
