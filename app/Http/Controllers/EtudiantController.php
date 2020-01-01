<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Etudiant;
use App\Http\Requests;
class EtudiantController extends Controller
{
    function afficher_renseignements()
    {
        $etudiant = Etudiant::all();
        $arr=Array('etudiant'=>$etudiant);
        return view('etudiant.afficher_renseignements',$arr);
    }


   /* function ajouter_etudiant(Request $request)
    {

        if($request->isMethod('post')){
            $newetudiant= new Etudiant();
            $newetudiant->nom=$request->input('nom');
            $newetudiant->prenom=$request->input('prenom');
        
        //Contrôle saisie NIVEAU
            if(($request->input('niveau')!= "1CP") && ($request->input('niveau')!= "2CP") && ($request->input('niveau')!= "1CS") && ($request->input('niveau')!= "2CS") && ($request->input('niveau')!= "3CS") )
            {
                echo 'Ce niveau est inexistant ! Veuillez insérer l un des niveaux suivants : 1CP 2CP 1CS 2CS 3CS';

            }
            else
            {
                $newetudiant->niveau=$request->input('niveau');
            }
            
        //Contrôle saisie Section
            if($newetudiant->niveau== "2CS" || $newetudiant->niveau== "3CS")
            {
                echo'Veuillez remplir le champs Spécialité';
                $newetudiant->section=NULL;
             
            }
            else
            {
                if(($newetudiant->niveau== "1CP" || $newetudiant->niveau=="2CP" && ($request->input('section')!="A" && $request->input('section')!="B"  && $request->input('section')!="C" )))
                {
                    echo'Il y a uniquement 3 sections A, B et C pour les 1CP et 2CP';
                }
                else
                {
                    if(($newetudiant->niveau== "1CS" && ($request->input('section')!="A" && $request->input('section')!="B" )))
                    {
                        echo'Il y a uniquement 2 sections A et B pour les 1CS';
                    }
                    
                }
                $newetudiant->section=$request->input('section');
             
            }
        //Contrôle saisie Specialite
        if($newetudiant->section == NULL)
        {
            if($newetudiant->niveau == "2CS" && ($request->input('specialite')!= "ST" && $request->input('specialite')!= "SL" && $request->input('specialite')!= "SQ"))
            {
                echo'Les trois spécialités sont les suivantes : SL,ST et SQ';
            }
            else
            {
                $newetudiant->specialite=$request->input('specialite');
    
            }

        }




            
        //Contrôle saisie GROUPES
            
         /*   if ($request->input('groupe') <=0 )
            {
             echo'ERREUR ! ';
            }
            else
            {
                if ($newetudiant->niveau== "1CP" )
                {
                    if($request->input('groupe')>12)
                    {
                        echo'Il y a 12 groupes en 1CP';
                    }
                    if($newetudiant->section == "A" && $request->input('groupe')> 4)
                    {
                        echo' Les groupes de la sections A sont 1,2,3 et 4';
                    }
                    if($newetudiant->section == "B" && ($request->input('groupe')< 5 || $request->input('groupe')>8 ))
                    {
                        echo' Les groupes de la sections A sont 5,6,7 et 8';
                    }
                    if($newetudiant->section == "C" && ($request->input('groupe')< 9 || $request->input('groupe')>12 ))
                    {
                        echo' Les groupes de la sections A sont 9,10,11 et 12';
                    }
    
                }
                else{
                    if ($newetudiant->niveau== "2CP" )
                    {
                        if($request->input('groupe')>9)
                        {
                            echo'Il y a 9 groupes en 2CP';
                        }
                        if($newetudiant->section == "A" && $request->input('groupe')> 3)
                        {
                            echo' Les groupes de la sections A sont 1,2 et 3';
                        }
                        if($newetudiant->section == "B" && ($request->input('groupe')< 4 || $request->input('groupe')>6 ))
                        {
                            echo' Les groupes de la sections A sont 4,5 et 6';
                        }
                        if($newetudiant->section == "C" && ($request->input('groupe')< 7 || $request->input('groupe')>9 ))
                        {
                            echo' Les groupes de la sections A sont 7,8 et 9';
                        }
        
                    }
                    else
                    {
                        if ($newetudiant->niveau== "1CS" )
                        {
                            if($request->input('groupe')>9)
                            {
                                echo'Il y a 9 groupes en 1CS';
                            }
                            if($newetudiant->section == "A" && $request->input('groupe')> 5)
                            {
                                echo' Les groupes de la sections A sont 1,2,3,4 et 5';
                            }
                            if($newetudiant->section == "B" && ($request->input('groupe')< 6 || $request->input('groupe')>9 ))
                            {
                                echo' Les groupes de la sections A sont 6, 7, 8 et 9';
                            }
                        }
                        else
                        {
                            if ($newetudiant->niveau== "2CS" )
                            {
                                if($newetudiant->specialite == "SL" && ($request->input('groupe')<1 || $request->input('groupe') >2))
                                {
                                    echo'Il n y a que 2 groupes en SL';
                                }
                                if($newetudiant->specialite == "SQ" && ($request->input('groupe')<1 || $request->input('groupe') >3))
                                {
                                    echo'Il n y a que 3 groupes en SQ';
                                }
                                if($newetudiant->specialite == "ST" && ($request->input('groupe')<1 || $request->input('groupe') >4))
                                {
                                    echo'Il n y a que 4 groupes en ST';
                                }
                
                
                            }
                            else
                            {
                                $newetudiant->groupe=$request->input('groupe');
                            }

                        }

                }
            }
        }


$newetudiant->groupe=$request->input('groupe');

           
            $newetudiant->promo=$request->input('promo'); 
            $newetudiant->date_naissance=$request->input('date_naissance');
            $newetudiant->adresse=$request->input('adresse');
            
            $newetudiant->save();
        }
            return view('etudiant.ajouter_etudiant');

        
    }*/
    public function store()
    {
        request()->validate([
            'nom' => ['required'],
            'prenom' => ['required'],
            'niveau' => ['required'],
            'section' => ['required'],
            'specialite' => ['required'],
            'groupe' => ['required'],
            'date' => ['required'],
            'adresse' => ['required'],


        ]);

        Etudiant::create([
            'nom' => request('nom'),
            'prenom' => request('prenom'),
            'niveau' => request('niveau'),
            'section' => request('section'),
            'specialite' => request('specialite'),
            'groupe' => request('groupe'),
            'date' => request('date'),
            'adresse' => request('adresse'),

        ]); 


        return "Vos données ont bien été ajoutées";
    }

    public function index(){

        $etudiants=Etudiant::all();

        return view('welcome', [
            'Etudiants' => $etudiants,
        ]);

    }

}
