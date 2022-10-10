let nn=0;
let n=0;



muestracodigo(tablanormas)

function agregarnorma(){
    let tabla = document.getElementById("tablanormas");

    var text = $("#selector option:selected").text();


    const re= text.split(' ');
    for (let i = 1, celda; i< tabla.rows.length; i ++){
        celda = tabla.rows[i].cells[0].innerHTML;
        console.log(tabla.rows[i].cells[0].innerHTML + "=" +re[1]);

        if(celda == re[1]){
            console.log("son inguales");
            alert("No se puede registrar la norma , ya ha sido ingresada anteriormente");
            return;
        }repetida
       
    }
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

    let tabla2 = document.getElementById("tablaprograma");
    var text = $("#selectordos option:selected").text();
    const re= text.split(' ');

    for (let i = 1, celda; i< tabla2.rows.length; i ++){
        celda = tabla2.rows[i].cells[0].innerHTML;
        console.log(tabla2.rows[i].cells[0].innerHTML + "=" +re[1]);
        
        if(celda == re[1]){
            console.log("son inguales");
            alert("el programa no se puede  registrar, ya ha sido ingresada anteriormente");
            return;
        }
       
    }

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

}
function dele(button){
    let ele = button.id;
    let row = document.getElementById('n'+ele)
    console.log(row);
    row.remove();
}


