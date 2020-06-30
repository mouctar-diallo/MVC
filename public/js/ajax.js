$(document).ready(function(){

    const URL = "http://localhost/sonatel_academy/projet_mvc/"; 

    $('.etudiants').click(function(){
        tr = $(this);
    });
    $('.chambres').click(function(){
        tr_chambre = $(this);
    });
    //delete etudiant
   $(document).on('click','.remove',function(){
    if(confirm("voulez vraiment supprimé l'etudiant ?")){
        id_etudiant = $(this).attr('id');
         $.ajax({
             url: `${URL}Etudiant/delete`,
             type: 'POST',
             data:{
                 id : id_etudiant,
             },
             success: function(response){
                if (response=="supprimer") {
                    alert("l'etudiant' a eté supprimer avec succès");
                    //supprimons la ligne correspondante
                    tr.hide( 2000, function() {
                        $( this ).remove();
                    });
                }else{
                    alert("l'etudiant' n'a pas eté supprimer");
                }
            }
        })
    }
    return false;
});

//delete chambre
$(document).on('click','.delete',function(){
    if(confirm("voulez vraiment supprimé la chambre ?")){
        id_Chambre = $(this).attr('id');
         $.ajax({
             url: `${URL}Chambre/delete`,
             type: 'POST',
             data:{
                 id : id_Chambre,
             },
             success: function(response){
                 alert(response)
                if (response=="supprimer") {
                    alert("la chambre a eté supprimer avec succès");
                    //supprimons la ligne correspondante
                    tr_chambre.hide( 2000, function() {
                        $( this ).remove();
                    });
                }else{
                    alert("la chambre n'a pas eté supprimer");
                }
            }
        })
    }
    return false;
});

function editEtudiants(id_ligne,newValue,champ_a_modifier){
    $.ajax({
        url: `${URL}Etudiant/update`,
        type: 'POST',
        data:{
            id: id_ligne,
            value: newValue,
            cible: champ_a_modifier,
        },
        success: function(response){
            alert(response)
        }
    })
 }
 
 function editChambres(id_ligne,newValue,champ_a_modifier){
     $.ajax({
         url: `${URL}Chambre/update`,
         type: 'POST',
         data:{
             id: id_ligne,
             value: newValue,
             cible: champ_a_modifier,
         },
         success: function(response){
             alert(response)
         }
     })
  }

 $(document).on('blur','.nom',function(){
    id_ligne = $(this).data('id');
    nom = $(this).text();
    editEtudiants(id_ligne,nom,'nom')
});
$(document).on('blur','.prenom',function(){
    id_ligne = $(this).data('id');
    prenom = $(this).text();
    editEtudiants(id_ligne,prenom,'prenom')
});
$(document).on('blur','.adresse',function(){
    id_ligne = $(this).data('id');
    adresse = $(this).text();
    editEtudiants(id_ligne,adresse,'adresse')
});
$(document).on('blur','.telephone',function(){
    id_ligne = $(this).data('id');
    telephone = $(this).text();
    editEtudiants(id_ligne,telephone,'telephone')
});
$(document).on('blur','.bourse',function(){
    id_ligne = $(this).data('id');
    bourse = $(this).text();
    editEtudiants(id_ligne,bourse,'bourse')
});
$(document).on('blur','.typeChambre',function(){
    id_ligne = $(this).data('id');
    typeChambre = $(this).text();
    editChambres(id_ligne,typeChambre,'type')
});
$(document).on('blur','.batiment',function(){
    id_ligne = $(this).data('id');
    batiment = $(this).text();
    editChambres(id_ligne,batiment,'numero_batiment')
});

})