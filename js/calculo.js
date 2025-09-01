function copiar(p,txt){
    var paragraph = document.getElementById(p);
    paragraph.innerHTML = txt;
}



function calcular(id){

    
    var cantidad = document.getElementById(id).value; /*Captura los elementos de la clase ingresada*/

    var valorUnidad = document.getElementById('valor').getAttribute('data-valor');

    var valor = cantidad*valorUnidad;

    valor = valor.toLocaleString('es-Cl', { useGrouping: true }); /*Se le añaden puntos*/

    /*Ahora se pegan estos valores en los parrafos correspondientes*/
    var txt1 = "$"+valor+"";
    copiar('total',txt1);

    var txt2 = ""+cantidad+" Productos(s)";
    copiar('quantity',txt2);




}