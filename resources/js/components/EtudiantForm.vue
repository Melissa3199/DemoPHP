<template>
<body >
<form class="flex flex-col" @submit="submitDonnees" style="margin-top =100px;">

    <h2  style="font-style = Poppins,Arial,Helvetica Neue,sans-serif;font-size:24px;color:#525252;font-weight:400;margin-bottom:40px;; margin-top:100px;">Formulaire d'ajout d'étudiants</h2>
    <div style=" display: flex;flex-wrap: wrap;">
     <label class="label" style="color:#555;font-family:georgia,garamond,serif;font-size:16px;font-style:bold;margin-right:15px; margin-top:8px;">Nom</label>
     <input type="text" name="nom" placeholder="Nom" class="border rounded p-3" v-model="nom"/>
    </div>
     <br>
     <div style=" display: flex;flex-wrap: wrap;">
     <label class="label" style="color:#555;font-family:georgia,garamond,serif;font-size:16px;font-style:bold;margin-right:15px; margin-top:8px; ">Prenom</label>
     <input type="text" name="prenom" placeholder="Prenom" class="border rounded p-3" v-model="prenom"/>
     </div>
     <br>
     <div style=" display: flex;flex-wrap: wrap;">
    <label class="label" style="color:#555;font-family:georgia,garamond,serif;font-size:16px;font-style:bold; margin-right:15px; margin-top:8px;">Niveau</label>
    <SELECT name="niveau"  placeholder="Niveau" class="border rounded p-3" v-model="niveau">
        <option disabled="disabled" selected="selected" style="color:#919c94;">Choisir un niveau</option>

        <option>1CP</option>
        <option>2CP</option>
        <option>1CS</option>
        <option>2CS</option>
        <option>3CS</option>
    </SELECT>
     </div>
 <br>
     <!--<input type="text" name="niveau" placeholder="Niveau" class="border rounded p-3" v-model="niveau"/>-->
    <div style=" display: flex;flex-wrap: wrap;">
    <label class="label" style="color:#555;font-family:georgia,garamond,serif;font-size:16px;font-style:bold;margin-right:15px; margin-top:8px; ">Section</label>
    <SELECT name="section"  placeholder="Section" class="border rounded p-3" v-model="section">
        <option disabled="disabled" selected="selected" style="color:#919c94;">Choisir une section</option>
        <option>A</option>
        <option>B</option>
        <option>C</option>
      
    </SELECT>
     </div>
    <!--<input type="text" name="section" placeholder="Section" class="border rounded p-3" v-model="section"/>-->
   <br>

   <div style=" display: flex;flex-wrap: wrap;">
    <label class="label" style="color:#555;font-family:georgia,garamond,serif;font-size:16px;font-style:bold;margin-right:15px; margin-top:8px; ">Specialite</label>
    <SELECT name="specialite"  placeholder="Specialite" class="border rounded p-3" v-model="specialite">
        <option disabled="disabled" selected="selected" style="color:#919c94;">Choisir une spécialité</option>
        <option>SL</option>
        <option>ST</option>
        <option>SQ</option>
      
    </SELECT>
   </div>
    <!-- <input type="text" name="specialite" placeholder="Specialite" class="border rounded p-3" v-model="specialite"/>-->
     <br>

     <div style=" display: flex;flex-wrap: wrap;">
     <label class="label" style="color:#555;font-family:georgia,garamond,serif;font-size:16px;font-style:bold;margin-right:15px; margin-top:8px;">Groupe</label>
     <input type="number" name="groupe" placeholder="Groupe" class="border rounded p-3" v-model="groupe"/>
     </div>
   <br>
   <div style=" display: flex;flex-wrap: wrap;">
    <label class="label" style="color:#555;font-family:georgia,garamond,serif;font-size:16px;font-style:bold;margin-right:15px ; margin-top:8px;">Promo</label>
    <input type="text" name="promo" placeholder="Promo" class="border rounded p-3" v-model="promo"/>
    </div>
     <br>
     <div style=" display: flex;flex-wrap: wrap;">
    <label class="label" style="color:#555;font-family:georgia,garamond,serif;font-size:16px;font-style:bold;margin-right:15px ; margin-top:8px;">Adresse</label>
    <input type="text" name="adresse" placeholder="Adresse" class="border rounded p-3" v-model="adresse"/>
     </div>
     <br>
    <button type="submit" class="border rounded p-3" style="color:#229492" > Enregistrer </button>
    
    </form>
</body>
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
