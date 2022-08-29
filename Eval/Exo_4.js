let PU;            //Prix Unitaire
let QTECOM;          //Quantité Commander
let PAP;             //Prix a Payer
let REM;             //Remise
let PORT = 6;           //Port = 6E
let TOT;             //PU*QTECOM  total a payer
let TOTAL;             //Total a payer


PU = window.prompt("Entrer le prix unitaire");          //Entrer la valeur du prix
QTECOM = window.prompt("Entrer la quantité commander"); //Entre la quantité du produit 
TOT = PU*QTECOM;
// console.log(TOT);                    //Verifie les total du prix
if(TOT <= 100){
    REM = 0;
    PORT = 6;
    TOTAL = TOT + PORT;
    // console.log('hey');              //Verifie si il rentre bien dans la condition
    alert ("La remise est de "+ REM + " Euros avec "+ PORT +"euros de frais de port. Le total faut "+ TOTAL +" Euros");
}else if(TOT >= 100 && TOT <= 200){
    // console.log("yep")               //Verifie si il rentre bien dans la condition
    REM = TOT*(5/100);
    // console.log(REM)                 //Verifie les remise
    TOT = TOT - REM;
    // console.log(TOT);
         if(TOT >= 100 && TOT <= 200 ){
            // console.log(TOT);            //verifie le prix de base 
            REM = TOT*(2/100);
            TOTAL = PORT + TOT;
            alert ("La remise est de "+ REM + " Euros avec "+ PORT +"euros de frais de port. Le total faut "+ TOTAL +" Euros");
            // console.log(PORT);           //Verifie les frais de port
                if(PORT < 6){
                    PORT = 6;
                    TOTAL = PORT + TOT;
                    // console.log(TOTAL);      //Verifier le total
                    alert ("La remise est de "+ REM + " Euros avec "+ PORT +"euros de frais de port. Le total faut "+ TOTAL +" Euros");
                }
        }
}else if(TOT > 500){
    REM = TOT*(10/100);
    TOT = TOT - REM;
    // console.log(TOT)
    // console.log("hey")                   //Verifie si il rentre bien dans la condition
        if(TOT <=500){
            PORT = TOT *(2/100);
            // console.log(PORT);
            TOTAL = TOT + PORT;
            alert ("La remise est de "+ REM + " Euros avec "+ PORT +"euros de frais de port. Le total faut "+ TOTAL +" Euros");
        }else{
            PORT = 0;
            TOTAL = PORT + TOT
            alert ("La remise est de "+ REM + " Euros avec "+ PORT +"euros de frais de port. Le total faut "+ TOTAL +" Euros");
        }
}


































// PU = window.prompt("Entrer le prix unitaire");          //Entrer la valeur du prix
// QTECOM = window.prompt("Entrer la quantité commander"); //Entre la quantité du produit 
// TOT = PU*QTECOM;
// console.log(TOT);
// if(TOT >= 100 && TOT <= 200){
//         REM = TOT/5;
//         console.log(REM);
//         PORT = TOT/2;
//         TOTAL = TOT - REM + PORT;
//         alert ("La remise est de "+ REM + " Euros avec "+ PORT +" euros de frais de port. Le total faut "+ TOTAL +" Euros.");
// }else if(TOT > 200 && TOT <= 500){
//     REM = TOT/10;
//     PORT = TOT/2;
//     TOTAL = TOT - REM + PORT;
//     alert ("La remise est de "+ REM + " Euros avec "+ PORT +"euros de frais de port. Le tatal faut "+ TOTAL +" Euros");
// }else if(TOT > 500){
//     REM = TOT/10;
//     PORT = 0;
//     TOTAL = TOT - REM;
//     alert ("La remise est de "+ REM + " Euros avec "+ PORT +"euros de frais de port. Le tatal faut "+ TOTAL +" Euros");
// }else{
//     alert ("Rentre des valeurs mon gros XP");
// }