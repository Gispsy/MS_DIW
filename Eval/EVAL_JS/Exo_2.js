let i;              //Permet de rajouter 1 pour faire la table de multiplication
let M;              //Multiplicateur
let r = 0;       //Resultat de le multiplication
 


function TableMultiplication(mult){
    M = Number(window.prompt('Entrer votre Multiplicateur'));
    
    for(i=0 ; i<=10 ; i++){ 
            console.log(mult);  
            r=M*i;
            console.log(i + " X " + M + " = " + r);
            alert (i + " X " + M + " = " + r);
        };


}
TableMultiplication;
//console.log(r);
//console.log(M);
//console.log(M*i);
