<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    protected $fillable = ['nom','prenom','niveau','section','specialite','groupe','date_naissance','adresse'];
}
