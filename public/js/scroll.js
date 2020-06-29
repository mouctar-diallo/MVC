   //scroll table etudiant
   $(document).ready(function(){

    const URL = 'http://localhost/sonatel_academy/projet_mvc/'; 
    
    let offset = 0;
    const tbody = $('#tbody');
    
    $.ajax({
            type: "POST",
            url:  `${URL}Etudiant/delete`,
            data: {limit:4,offset:offset},
            dataType: "JSON",
            success: function (data) {
                alert(data)
                tbody.html('')
                printData(data,tbody);
                offset +=4
            }
        });
    
     //  Scroll
    const scroll = $('#scroll')
    scroll.scroll(function(){
    //console.log(scroll[0].clientHeight)
    const st = scroll[0].scrollTop;
    const sh = scroll[0].scrollHeight;
    const ch = scroll[0].clientHeight;
    
    console.log(st,sh, ch);
    
    if(sh-st <= ch){
        $.ajax({
            type: "POST",
            url:  `${URL}Etudiant/delete`,
            data: {limit:4,offset:offset},
            dataType: "JSON",
            success: function (data) {
                alert(data)
                printData(data,tbody);
                offset +=4;
            }
        });
    }
       
    })
    });
    
    function printData(data,tbody){
    $.each(data, function(indice,vente){
        tbody.append(`
        <tr class="text-center">
            <td>${vente.heure}</td>
            <td>${vente.telephone}</td>
            <td>${vente.montant}</td>
        </tr>
    `);
    });
    }