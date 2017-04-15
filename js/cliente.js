function lista_clientes(valor){
    $.ajax({
        url:'..controllers/clientes.php',
        type:'POST',
        data:'valor='+valor+'&boton=buscar'
    }).done(function(resp){
        //alert(resp);
        var valores = eval(resp);
        html="<table class='table-bordered'><thead><tr><th>#</th><th>Nombre</th><th>Saldo</th><th>Opciones</th></tr></thead><tbody>";
        for(i=0;i<valores.length;i++){
            html+="<tr><td>"+(i+1)+"</td><td>"+valores[i][1]+"</td><td>"+valores[i][2]+"</td><td>"+valores[i][3]"</td></tr>";
        }
        htmm+="</tbody></table>";
        $("#lista").html(html);
    });
}