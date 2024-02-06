<?php
    namespace App\Enums;
    
    enum EmployeStatutEnum:string{
        case Fonctionnaire = 'fonctionnaire';
        case Non_Fonctionnaire = 'non fonctionnaire';
        case Substitue = 'substitue';
        case Contrat_special = 'contrat special';
    }