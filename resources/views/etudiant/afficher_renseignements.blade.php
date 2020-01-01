@foreach($etudiant as $etudianti)
    Nom:{{ $etudianti->name}}
    </br>
    Prenom:{{ $etudianti->prenom}}
    </br>
    Niveau:{{ $etudianti->niveau}}
    </br>
    Section:{{ $etudianti->section}}
    </br>
    Groupe:{{ $etudianti->groupe}}
    </br>
    Specialite:{{ $etudianti->specialite}}
    </br>
    Promo:{{ $etudianti->promo}}
    </br>
    Date de naissance:{{ $etudianti->date_naissance}}
    </br>
    Adresse:{{ $etudianti->adresse}}
    </br>

@endforeach