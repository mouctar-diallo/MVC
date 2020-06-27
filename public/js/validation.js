$(document).ready(function(){
    //validation chambr
    function validFormChambre()
    {
        $('#save-chambre').submit(function(e){
            
           const type = $('#type').val();
           const numero = $('#numero').val();
           if(type == ""){
               $('#error-type').html('ce champ est obligatoire');
               e.preventDefault();
           }
           if (numero == "") {
                $('#error-numero').html('ce champ est obligatoire');
                e.preventDefault();
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
            for (input of inputs) {
                if (input.hasAttribute('error')) {
                    var span = input.getAttribute('error');
                    if (!input.value) {
                        document.getElementById(span).innerText="ce champ est obligatoire";
                        e.preventDefault();
                    }else{
                        document.getElementById(span).innerText=" ";
                    }
                }
            }
            return false;
        });
    }

     validFormChambre();
     valideEtudiant();  
})

