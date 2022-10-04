let nn=0;
let n=0;
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

    if(kal == document.getElementById('$codigounic')){

    }


}
function dele(button){
    let ele = button.id;
    let row = document.getElementById('n'+ele)
    console.log(row);
    row.remove();
}



// let nn=0;
// let n=0;
// function agregarnorma(){
// var text = $("#selector option:selected").text();
// n ++;
// nn ++;
// console.log(text);
// $("#ruta").append("<tr id='n"+[n]+"' value='"+[n]+"'>\
// <td>"+text+"</td>\
// <td><button type='button' onclick='dele(this)' id="+nn+" class='btn btn-primary'>X</button></td>\
// </tr>");
// }

