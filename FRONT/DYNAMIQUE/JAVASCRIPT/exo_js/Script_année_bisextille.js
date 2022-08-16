
/*Exo année*/


let a = window.prompt("Entrer votre année");
let b = "ERREUR"
console.log(a);
if(a%4 == 0){
        if(a%100 == 0){
        if(a%400 == 0){
                        b = "Oui ces une année bissextile";
                }else{
                        b = "Non ce n'es pas une année bissextile";
                }
        }else{
                b = "Oui ces une année bis";
        }
}else{
        b = "non ce n'es pas une année bissextile(365j)";
}
alert(b);



//  let a = window.prompt("Entrer votre année");
//  let b = "ERREUR"
//  console.log(a);
//  if(a%4 == 0){
//          if((a%100 == 0) && (a%400 !== 0)){
//                  b = "Ces pas année bissextile"
//          }else{
//                  b = "ces une année bis";
//          }
//  }else{
//          b = "non ce n'es pas une année bissextile(365j)";
//  }
//  alert(b);

// let a = window.prompt("Entrer votre année");
// let b = "ERREUR"
// if(((a%4 == 0) && (a%100 !== 0)) || (a%400 == 0)){
//                b = "Ces une année bissextile"

// }else{
//                b = "non";
// }

//  b = ((a%4 == 0) && (a%100 !== 0)) || (a%400 == 0) ? "Ces une année bissextile" : "non";
// alert(b);