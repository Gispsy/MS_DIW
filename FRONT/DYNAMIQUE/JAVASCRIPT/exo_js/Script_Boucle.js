//Exo Boucle 


//let N ="";

//while (true) {
//        N = window.prompt("Entrer votre prénom :");
//        if (N) {
//                N = N + "";
//        }else{
//                break;
//        }
//}
//alert(N)

// let N = window.prompt("Entrer votre chiffre");


// //décrémentation
// for(i= (N-1); i>=0;i--){
//         alert(i);
// }

//incrémentation

// for(i=0;i>N;i++){
//         alert(i);
// }



// while(N>=0){

// if(N!=0){
//         N=N-1;
// }else {
//         break;
// }

// // alert("N vaut :"+N);

// // }

// do{

//     if(N==0){
//         break;
//     }else{    
//         N=N-1;   
// alert("N vaut :"+N);
// }

// }
// while (N>=0)

        //exo fait met pas bon personne me la dit merci au formateur

// let a = parseInt(window.prompt("Nombre entier 1"));       // Premier chiffre
// let b = parseInt(window.prompt("Nombre entier 2"));       //Deuxieme chiffre
// let n = "Erreur";                                              //valeur de a + b || Erreur


//  while (n =a+b){   
        
//         console.log(n%2);
//         additions de a + b                     
//         alert("l'addition des deux vaut " +n);
        


//          if(n%2 == 0){                             // si n%2
//                 alert("La moyen est de " +n/2);
//                   break;                          //stop la boucle
//           }else{                                  //sinon alert 
//                 alert("Mauvais résultat");
//                 break;
//         }
// }


//Exo 3

// let ok=true;
// let n;
// let somme=0;
// let compteur=0;
// let div=0;

// while (ok){
//         n=parseInt(window.prompt("Entrer une valeur"));
//         compteur ++;
//         somme = somme+n;
//         if(n<=0){
//                 ok=false;
//                 console.log(somme);
//                 }else{
//                         continue;
//                 }
// } 
// div=somme%compteur
// alert('La sommme de tout vaut' +somme);
// alert('la division du tout vaut ' +div);


//Exo 4 

let N;
let X;
let i;
let R;

N= window.prompt("Entrer Multiplicateur");
X= window.prompt("Entrer Multiplier");
for (i=N; i>=N; i++){
        if(N*X){
                R=N*X;
                alert(N+"*"+X+"="+R);
                N--
        }else{
                break;
        }
}
//Exo 5

let ok = true
//on récupère le mot saisi qui vaut M
let M= window.prompt("Entrer le mot que vous voulez");

 longueur_mot=M.length;

alert("longueur du mot : "+longueur_mot);

console.log(M.indexOf ('M')); 
        M.substring (0);
        M.indexOf ('M');
while (ok){
        if(M=="M"){
        alert ("Il y a "+M+" voyelle(s)");
        ok = false;
        }else{
                ok = false;
        }
}