// function maFonction() 
// {
//  var plop1 = 123;       
//    return plop1;
// }

// function maFonction2() 
// {
//    plop2 = 456;     
// }

// plop1 = maFonction();

// console.log("fonction 1 / plop1 : "+plop1);

// maFonction2();

// console.log("mafonction2 > plop2 : "+plop2);


//Exo 1

//Rentre mes valeur 

// let x =window.prompt("Entrer le nombre a multiplier");
// console.log("ok nombre");
// let y =window.prompt("Entrer les multiplicateur");
// console.log("ok multiplicateur");


// //fonction pour multiplier les valeur rentrer


// let prod = function produit(x,y)
// {
//     return x * y;
//     }

// console.log(prod(x,y));

// function AfficheImage(image)
// {
// //var img = document.createElement("img");
// //img.src = "Exo JS/papillon.jpg";


// document.getElementById("pp").innerHTML="<img src=exo_js/papillon.jpg></img>";
// return image;
// }

// AfficheImage();

// console.log("ok image");

// // Affichage de  la page
// document.write("Le cube de " + x + " est égal à " + x * x * x +"<br>");
// // Voir pour revenir à la ligne
// document.write("Le produit de "+ x + "x"+ y +" est égale à "+ prod(x,y));


//Exo 2

// Valeur a rentrer pour l'exo

let str1 = window.prompt("Entrer vos valeur");

//Valeur caractere par défaut

let str2 = ";";

//valeur pour choisir son mot dans le tableau

let n = window.prompt("Entrer chiffre");
n = n-1

//Split sers a créer le tableau

let tab = str1.split(str2);

console.log(tab[n]);
alert (tab[n]);

//Fonction pour tout avoir en 1

let strtok =""
function Affichage(strtok)
{

    return strtok = str1.split(str2);
};

let i = Affichage(strtok);

    console.log(i[2]);