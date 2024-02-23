<?php
namespace App\Enums;


    enum ProfilUserEnum:int{
        case admin = 1;
        case chefpersonnel = 2;
        case payroll = 3;
        case comptable = 4;
        case agent = 5;
    }