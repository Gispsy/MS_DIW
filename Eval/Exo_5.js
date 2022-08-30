// alert ("Hey pret a verifier le formulaire ?");

// alert ("C'est parti ! XD");

// let filtreM = new RegExp ("^[a-z]$");
// let filtreN = new RegExp("^[A-Z]+[a-z]+$");
// let resultat;
// email.addEventListener("test" , function (mail) {
//     if(email.validity.typeMismatch){
//         email.setCustomValidity("Je veux un mail mon grand");
//     }else{
//         email.setCustomValidity("");
//         filtreM;
//     }
// });


// function verif_nom(e) {


//     let nom = document.getElementById("nom").value;

//     if (verif_nom.value == "") {

//         alert("Veuillez mettre votre nom");
//         e.preventDefault();

//     } else {

//         filtreN;
//         resultat = filtreN.test("nom".value);
//         checkValidity(e)
//         if (resultat == false) {

//             alert("nom saisi pas bon ");
//             e.preventDefault();

//         }


//     }
// };

// function verif_prenom(a) {

//     console.log("su");
//     let prenom = document.getElementById("prenom").value;

//     if (verif_prenom.value == "") {

//         alert("Veuillez mettre votre prenom");
//         a.prevent.Default();

//     } else {

//         filtreN;
//         resultat = filtreN.test(prenom.value);
//         if (resultat == false) {

//             alert("prenom saisi pas bon");
//             a.prevent.Default();

//         }


//     }
// };




// function verif_Email(f){

//     let mail = document.getElementById("Email")

//     if (verif_Email.value == ""){

//         alert("Veuillez rentrer un Email")
//         f.preventDefault();
//     }else{

//         FiltreM;
//         resultat = filtreM.test(Email.value);
//         if (resultat == false){

//             alert("Email pas bon");
//             f.prevent.Default();
//         }
        
//     }
// };


//Nom


let bouton_envoyer = document.getElementById("Envoyer");
bouton_envoyer.addEventListener("click", verif_nom);

let resultat
let filtreN = new RegExp("^[A-Z]+[a-z]+$");

function verif_nom(n){

    let N = document.getElementById("nom");

    if(N == 'null'){
        filtreN;
        alert("Rentre un nom");
        n.preventDefault()
    }else{
        filtreN;
        resultat = filtreN.test(N.value);
    }if(resultat == false){

        alert("Arrete tu t'appelle pas comme ça...");
        n.preventDefault();
    }
}
verif_nom;

//Prénom


let filtreP = new RegExp("^[A-Z]+[a-z]+$");

function verif_prenom(p){

    let P = document.getElementById("prenom");

    if(P == " "){
        filtreP;
        alert("Rentre un prenom");
        p.preventDefault()
    }else{
        filtreP;
        resultat = filtreP.test(P.value);
    }if(resultat == false){

        alert("Arrete ces pas ton prénom...");
        p.preventDefault();
    }
}
verif_prenom;
