    // Exo 1


var reponse1 = window.prompt("Saisissez votre nom");
var reponse2 = window.prompt("Saisissez votre prénom");

var val = confirm("Etes-vous un homme ?");
if( val == true) {
        document.write ("l'utilisateur veut continuer!");
}else{
        document.write ("L'utilisateur ne veut pas continuer!");
}
var val = ("Monsieur")
alert("Bonjour "+ val + reponse1 + reponse2 + " ,Bienvenue sur la site web !");

/* Exemple en plus*/


/*var a = "100";
alert("Ceci est une chaîne de caractères :" + a);
var b = 100;
b == b--;
alert(b);
var c = 1.00;
c = a+c ;
alert(c);
var d = new Boolean(true);
d = !d;
alert(d)*/