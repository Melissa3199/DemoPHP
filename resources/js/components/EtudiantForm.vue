<template>

<form class="flex flex-col" @submit.prevent="submitDonnees">
     <input type="text" name="nom" placeholder="Nom" class="border rounded p-3" v-model="nom"/>
    
    <input type="text" name="prenom" placeholder="Prenom" class="border rounded p-3" v-model="prenom"/>
    
     <input type="text" name="niveau" placeholder="Niveau" class="border rounded p-3" v-model="niveau"/>
   
    <input type="text" name="section" placeholder="Section" class="border rounded p-3" v-model="section"/>
    
     <input type="text" name="specialite" placeholder="Specialite" class="border rounded p-3" v-model="specialite"/>
    
     <input type="number" name="groupe" placeholder="Groupe" class="border rounded p-3" v-model="groupe"/>
  
      <input type="text" name="promo" placeholder="Promo" class="border rounded p-3" v-model="promo"/>
    
    
      <input type="text" name="adresse" placeholder="Adresse" class="border rounded p-3" v-model="adresse"/>
    
    
    <button type="submit" class="border rounded py-3"> Enregistrer </button>
    
    </form>
</template>

<script>

    export default{

        props : ['etudiants'],
        data(){
            return{
                nom: '',
                prenom: '',
                niveau: '',
                section: '',
                specialite: '',
                groupe: '',
                promo: '',
            //   date_naissance : new Date().toISOString().slice(0,10),
                adresse:'',

            }
        },

        methods:{
            submitDonnees(){
                axios.post('/DemoPHP/public/api/etudiants', {
                    nom: this.nom,
                    prenom: this.prenom,
                    niveau: this.niveau,
                    section: this.section,
                    specialite: this.specialite,
                    groupe: this.groupe,
                    promo: this.promo,
             //       date_naissance: this.date_naissance,
                    adresse: this.adresse,

                })
                .then(response => { 
                     console.log(response)
                 })
                .catch(error => {
                    console.log(error.response)
                 })
            }
        }

    }
    
    
</script>
