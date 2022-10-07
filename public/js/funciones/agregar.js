let nn=0;
let n=0;


let tabla = document.getElementById("tablanormas");
for (let i = 1, celda; i< tabla.rows.length; i ++){
    celda = tabla.rows[i].cells[0];
    console.log(celda.innerHTML);
}


muestracodigo(tablanormas)

function agregarnorma(){


    

    var text = $("#selector option:selected").text();
    const re= text.split(' ');
    n ++;
    nn ++;
    let fe = re [0];
    console.log(fe);

    $("#ruta").append("<tr id='n"+[n]+"' value='"+[n]+"'>\
    <input type='hidden' name='normaId[]' value='"+fe+"'>\
    <td>"+re[1]+"</td>\
    <td>"+re[2]+"</td>\
    <td><button type='button' onclick='dele(this)' id="+nn+" class='btn btn-primary'>X</button></td>\
    </tr>");

    var ar = document.getElementById('n'+[n]).getAttribute('value');
    const array = [ar];

    var kal=document.getElementById('selector');
    var kel = kal.options[kal.selectedIndex];
    kel.remove();

    

}
function dele(button){
    let ele = button.id;
    let row = document.getElementById('n'+ele)
    console.log(row);
    row.remove();
}


function agregarprograma(){
    var text = $("#selectordos option:selected").text();
    const re= text.split(' ');
    n ++;
    nn ++;
    let fe = re [0];
    console.log(fe);

    $("#ruta").append("<tr id='n"+[n]+"' value='"+[n]+"'>\
    <input type='hidden' name='programaId[]' value='"+fe+"'>\
    <td>"+re[1]+"</td>\
    <td>"+re[2]+"</td>\
    <td><button type='button' onclick='dele(this)' id="+nn+" class='btn btn-primary'>X</button></td>\
    </tr>");
    var ar = document.getElementById('n'+[n]).getAttribute('value');
    const array = [ar];

    var kal=document.getElementById('selectordos');
    var kel = kal.options[kal.selectedIndex];
    kel.remove();

    let tabla = document.getElementById("tablanormas");



    


}
function dele(button){
    let ele = button.id;
    let row = document.getElementById('n'+ele)
    console.log(row);
    row.remove();
}

// let tabla = document.getElementById("tablanormas");


//     for (let i = 1, celda; i< tabla.rows.length; i ++){
//         celda = tabla.rows[i].cells[0];
//         console.log(celda.innerHTML);
//     }


// muestracodigo(tablanormas)

