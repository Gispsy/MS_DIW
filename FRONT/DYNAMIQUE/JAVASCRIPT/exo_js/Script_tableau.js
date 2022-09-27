// let test = ["pain", "lait", "fromage", "nouilles"];
// test;
// console.log(test);

// let second_test = [415, 400, 250, 300];
// second_test;
// console.log(second_test);

// let trosieme_test = ["god", 51, "fallen",[65, "come on"]];
// trosieme_test;
// console.log(trosieme_test);




// let shopping = ["pain", "lait", "fromage", "houmous", "nuilles"];
// shopping;

// shopping[0];
// // renvoie "pain"

// shopping[0] = "crème de sésame";
// shopping;
// // shopping renvoie maintenant ["crème de sésame", "lait", "fromage", "houmous", "nouilles"]

// let sequence = [1,1,2,3,5,8,13];
// let random = ["arbre", 795, [0, 1, 2]];

// random [2][2];




// sequence.length
// // renvoie 7
// let sequence2 = [1,1,2,3,5,8,13];
//     for ( let i = 0; i < sequence.length; i++) {
//         console.log(sequence[i]);
//     }

//ce code dit : 
//1.Commencer la boucle à l'élément 0 du tableau.
//2.Arrêter de tourner quand le dernier élément du tableau sera atteint.Cela fonctionne pour n'importe quelle dimension de tableau;
//dans notre cas, on sortira de la boucle à l'élément que nous souhaitons que la boucle traite est le 6.
//3.Afficher chaque élément sur la console de l'expplorateur avec console.log().























//Exo 1

// let t = window.prompt("Entrer taille du tableau")   //t = Taille du tableau
// let myTableau = new Array(t);    //myTableau = Création du tableau via la valeur de t

// for (i=0 ;i<=t-1;i++)
// {
//     if(i<=t-1){
//         let valeur_saisie = window.prompt("Entrer vos valeur pour le tableau");  //i = Valeur pour le tableau
//         myTableau[i] = valeur_saisie;
//         console.log(myTableau[i]);
//     }else{
//         break;
//     }
// }
// console.table(myTableau)

//Exo 2

let longueur_tab = Number(window.prompt("Entrer nombre de poste"));
let d = 0;
d= d+longueur_tab;
let myTableau;

function InitTab(p)
{
    myTableau = Array(p);
   return myTableau;
}

console.log(InitTab(longueur_tab));
InitTab(longueur_tab);

//Fonction saisie des poste

let i;                  // i rempplie les valeur du tableau
let valeur;             // valeur sers a aider i a recevoir ces valeur
let s = 0               // Pour additionner les valeurs 
function SaisieTab()
{


    for(i=0 ;i<longueur_tab ;i++){
        if(i<longueur_tab){
            valeur = Number(window.prompt("Entrer valeur"));
            s= s+valeur;
            myTableau[i] = valeur;
        }else{
            break;
        }
    }

console.log(myTableau);

};
SaisieTab();

//Fonction Affiche Tableau

function Affiche(myTableau)
{
    console.table(myTableau);
    return;
    
};
Affiche(myTableau)

//Fonction recherche dans le tableau

let r;
let separation = ";";


function RechercheTab()
{
    r = window.prompt("Entrer la ligne a chercher entre");      //Recherche de la bonne ligne du tableau
    r = r-1;
    console.log(myTableau [r]);
    return;
};

RechercheTab();


//Fonction Info Tableau

let somme=0;                //Somme de toute les valeurs du tableau
let division = 0;           //Moyenne de toute les valeur
function InfoTab()
{
    somme = somme + s;
    division = somme/d;
    console.log(somme);
    console.log(division);
};
InfoTab()


//Tri a bulle

let p;
let v;
let change = false;
let tmp;
function tri()
{
    for (p = 0; p <= Number(myTableau.length-1); p++)
    {
        change = false;

    for(v = 0; v <= (myTableau.length-1) ; v++)
    {    
        if( myTableau[v] > myTableau[v+1] )
        {
                tmp = myTableau[v];
                myTableau[v] = myTableau[v+1];
                myTableau[v+1] = tmp;
                change = true;
            }
            if(!change)
            {
                break;
            }
        }
    }
}
tri();
console.log(myTableau);