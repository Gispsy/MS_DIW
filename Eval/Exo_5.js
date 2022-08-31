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


//Appelle de function
let bouton_envoyer = document.getElementById("Envoyer");
bouton_envoyer.addEventListener("click", verif_nom);
bouton_envoyer.addEventListener("click", verif_prenom);
bouton_envoyer.addEventListener("click", verif_ville);
bouton_envoyer.addEventListener("click", verif_adress);
bouton_envoyer.addEventListener("click", verif_codepostal);
bouton_envoyer.addEventListener("click", verif_DatedeN);
bouton_envoyer.addEventListener("click", verif_Email);
bouton_envoyer.addEventListener("click", verif_HF);
bouton_envoyer.addEventListener("click", verif_select);
bouton_envoyer.addEventListener("click", verif_question);
bouton_envoyer.addEventListener("click", verif_checkbox);

//Filtre
let resultat
let filtreN = new RegExp("^[A-Z]+[a-z]+$");
let filtreP = new RegExp("^[A-Z]+[a-z]+$");
let filtreV = new RegExp("^[A-Z]+[a-z]+$");
let filtreA = new RegExp("^[0-9]+.[A-Za-z]+.[A-Za-z]+.[A-Za-z]+$");
let filtreC = new RegExp("^[0-9]+$");
let filtreD = new RegExp("^[0-9]{4}[-]{1}[0-9]{2}[-]{1}[0-9]{2}$");
let filtreE = new RegExp("^[a-z0-9]+[.]?[a-z0-9]*@[a-z]+[.][a-z]{2,4}$");
let filtreQ = new RegExp("^.+");


//Nom
function verif_nom(n){

    let N = document.getElementById("nom");

    if(N == 'null'){
        filtreN;
        // alert("Rentre un nom");
        n.preventDefault()
    }else{
        filtreN;
        resultat = filtreN.test(N.value);
    }if(resultat == false){

        document.getElementById('1').innerHTML="Arrete tu t'appelle pas comme ça XD";
        // alert("Arrete tu t'appelle pas comme ça...");
        n.preventDefault();
    }
}
verif_nom;

//Prénom

function verif_prenom(p){

    let P = document.getElementById("prenom");

    if(P == "null"){
        filtreP;
        // alert("Rentre un prenom");
        p.preventDefault()
    }else{
        filtreP;
        resultat = filtreP.test(P.value);
    }if(resultat == false){

        document.getElementById('2').innerHTML="Arrete ces pas ton prénom mdr";
        // alert("Arrete ces pas ton prénom...");
        p.preventDefault();
    }
}
verif_prenom;

//Ville

function verif_ville(v){

    let V = document.getElementById("Ville");

    if(V == "null"){
        filtreV;
        // alert("Aller champion rentre un ville");
        v.preventDefault()
    }else{
        filtreV;
        resultat = filtreV.test(V.value);
    }if(resultat == false){

        document.getElementById('7').innerHTML="Elle peux pas s'appeler comme ça XD";
        // alert("La ville bro");
        v.preventDefault();
    }
}
verif_ville;


//Adress

function verif_adress(a){

    let A = document.getElementById("Adress");

    if(A == "null"){
        filtreA;
        // alert("Rentre une adress bro");
        a.preventDefault();
    }else{
        filtreA;
        resultat = filtreA.test(A.value);
    }if(resultat == false){

        document.getElementById('6').innerHTML="Ba t'es sur qu'elle est bonne ton adresse ?";
        // alert("Ba t'es sur qu'elle est bonne ton adresse ? ");
        a.preventDefault();
    }
}
verif_adress;


//CodePostal

function verif_codepostal(c){

    let C = document.getElementById("CodePostal");

    if(C == "null"){
        filtreC;
        // alert("Rentre un code postal");
        c.preventDefault();
    }else{
        filtreC;
        resultat = filtreC.test(C.value);
    }if(resultat == false){

        document.getElementById('5').innerHTML="Met un code bon frerot";
        // alert("Met un code postal bon frerot");
        c.preventDefault();
    }
}
verif_codepostal;


//Date de Naissance

function verif_DatedeN(d){

    let D = document.getElementById("date");
    // console.log(D)                               //Test pour savoir comment la date s'affiche

    if(D == "null"){
        filtreD;
        // alert("Rentre ta date de naissance");
        d.preventDefault();
    }else{
        filtreD;
        resultat = filtreD.test(D.value);
    }if(resultat == false){

        document.getElementById('4').innerHTML="Met la date de naissance bro";
        // alert("Met la date de naissance bro");
        d.preventDefault();
    }
}
verif_codepostal;


//Email

function verif_Email(e){

    let E = document.getElementById("Email");

    if(E == "null"){
        filtreE;
        // alert("Le mail stp");
        e.preventDefault();
    }else{
        filtreE;
        resultat = filtreE.test(E.value);
    }if(resultat == false){

        document.getElementById('8').innerHTML="Met le mail mec";
        // alert("Met bien ton mail mec");
        e.preventDefault();
    }
}
verif_Email;


//Sexe Homme/Femme

function verif_HF(hf){

    if(document.getElementById("H").checked){
        // alert ("ces bon");
            
    }else if(document.getElementById("F").checked){
            // alert ('tu es bon Jarod')
    }else {
        document.getElementById('3').innerHTML="Faut indiquer ton genre toi";
        // alert("Tu a oublier d'indiquer ton genre")
    }
};
verif_HF;


//Select

function verif_select(s){
    if(document.getElementById("couleur").value == ""){

        document.getElementById('9').innerHTML="Faut selectionner ce que tu veux la";
        // alert("Tu na rien selectionner dans le Sujet");
        s.preventDefault();
    }
}

verif_select;


//Question a poser

function verif_question(q){

    let Q = document.getElementById("questionaposer");
    if(Q == ""){

        filtreQ;
        // alert("Pose moi une question bro");
        q.preventDefault();
    }else{
        filtreQ;
        resultat = filtreQ.test(Q.value);
    }if (resultat == false){

        document.getElementById('11').innerHTML="Troll pas ta question";
        // alert("Ne troll pas ta question");
        q.preventDefault();
    }
}
verif_question;


//CheckBox

function verif_checkbox(k){

    if(document.getElementById("check").checked == ""){

        document.getElementById('10').innerHTML="Coche ta casse mon chou UWU";
        // alert("coche ta case mon chou UWU");
        k.preventDefault();
    }
}
verif_checkbox;