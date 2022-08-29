let i;              //Permet de rajouter 1 pour faire la table de multiplication
let M;              //Multiplicateur
let r = 0;       //Resultat de le multiplication
 


function TableMultiplication(mult){

    for(i=0 ; i<=10 ; i++){ 
            console.log(mult);  
            r=mult*i;
            console.log(i + " X " + mult + " = " + r);
            alert (i + " X " + mult + " = " + r);
        };
}

M = Number(window.prompt('Entrer votre Multiplicateur'));

TableMultiplication(M);
//console.log(r);
//console.log(M);
//console.log(M*i);
