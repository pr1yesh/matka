<?php

namespace App\Enums;

enum GameType: string
{
    case SINGLE_DIGIT = 'single_digit';
    case JODI = 'jodi';
    case SINGLE_PANNA = 'single_panna';
    case DOUBLE_PANNA = 'double_panna';
    case TRIPLE_PANNA = 'triple_panna';
}