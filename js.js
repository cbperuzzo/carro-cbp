$(document).ready(function(){

    $("#gravar").click(function(){

        let xht = new XMLHttpRequest();

        xht.onload = function(){

            $("#resp").html(this.responseText);

        }

        xht.open("POST" ,"env.php");
        xht.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xht.send(
            "modelo="+$("#modelo").val()+"&"
            +"placa="+$("#placa").val()+"&"
            +"nome="+$("#nome").val()+"&"
            +"origem="+$("#origem").val()+"&"
            +"ltr="+$("#ltr").val()+"&"
            +"percorrido="+$("#percorrido").val()+"&"
            +"destino="+$("#destino").val()+"&"
            +"valor="+$("#valor").val()+"&"
                 
            );

    });

    

});

function ngc(){

    let tablis = new XMLHttpRequest();
    tablis.onload = function(){

        $("#listab").html(this.responseText);

    }
    tablis.open("GET","list.php");
    tablis.send();

}
