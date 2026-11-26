<?php

namespace App\Enums;

enum AgreementStatus: string
{
    case Pending = 'pending';
    case Signed = 'signed';
}