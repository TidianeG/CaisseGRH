<?php
    namespace App\Enums;
    
    enum EmployeSituationFamilialeEnum:string{
        case Marie = 'marie';
        case Celibataire = 'celibataire';
        case Veuf = 'veuf';
        case Divorce = 'divorce';
    }