
//TEST 1

// let a = window.prompt("Rentrer l'age ");
// let Table = new Array(3);

// for (i=0 ; i <= 100; i++){
//         if(a <= 20){
//             Table[0] = a;
//         }else if(a <= 40){
//             Table[1] = a;
//         }else if(a <= 100){
//             Table[2] = a;
//         }else{
//             break;
//         }
// }

// console.log(Table);
// console.table(Table);

//TEST 2

let moins = 0;
let plus = 0;
let egale = 0;
let cpt =0;
let valeur = 0;

while (valeur <=100){
valeur = window.prompt("entrer un age XD");

    if(valeur<=20){
        moins++;
        console.log(moins);
    }else if(valeur<=40){
        plus++;
        console.log(plus);
    }else{
        egale++;
        console.log(egale);
    }
}

document.write ("il y a " + moins + " personne de moins de 20 ans. <br>");
document.write ("il y a " + plus + " personne de moins de 40 ans. <br>");
document.write ("il y a " + egale + " personne de moins de 100 ans. <br>");




