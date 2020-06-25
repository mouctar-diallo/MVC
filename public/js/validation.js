$(document).ready(function(){
    //validation chambre
    function validForChambre()
    {
        $('#save-chambre').click(function(e){
            e.preventDefault();
           const type = $('#type').val();
           const numero = $('#numero').val();
           if(type == ""){
               $('#error-type').html('ce champ est obligatoire');
           }
           if (numero == "") {
                $('#error-numero').html('ce champ est obligatoire');
           }
           $('#type').keyup(function(){
                $('#error-type').html(' ');
           });
           $('#numero').keyup(function(){
                $('#error-numero').html(' ');
           });
          
        })
    }
    //validation etudiant
    function valideEtudiant()
    {
        var inputs = document.getElementsByTagName('input');	
        for (input of inputs) {
            input.addEventListener('keyup',function(e){
                if (e.target.hasAttribute('error')) {
                    var span = e.target.getAttribute('error');
                    document.getElementById(span).innerText="";
                }
            })
        }
        document.getElementById('form').addEventListener('submit',function(e){
            var inputs = document.getElementsByTagName('input');
            var erreur = false;
            const  numero_chambre = $('#numero_chambre').val();
            if (numero_chambre==0) {
                $('#errorx').html('ce champ est obligatoire');
            }
            for (input of inputs) {
                if (input.hasAttribute('error')) {
                    var span = input.getAttribute('error');
                    if (!input.value) {
                        document.getElementById(span).innerText="ce champ est obligatoire"
                        e.preventDefault();
                    }else{
                        document.getElementById(span).innerText=" "
                    }
                }
            }
            return false;
        });
    }

     validForChambre();
     valideEtudiant();
        
})

