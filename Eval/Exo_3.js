 let tab = ["Audrey ","Aurélien ","Flavien ","Jérémy ","Melik ","Nouara ","Samuel ","Stéphane "];
 console.log(tab);
 tab.join(",");


 for (let i=0; i <= tab.length; i--){                   //Boucle pour entrer tout les prénoms 
 let p = window.prompt("Entrer un prénom");             //Entrer le nom avec majuscule
     if(tab.indexOf(p)!== -1){                          //Condition de la selection des prénoms
        
         console.log(tab[p]);
         tab.splice(tab.indexOf(p),1);                  //Split qui va découper la chaine selon le caractére 
         tab.push("  ")                                 //Push un élément vide a la fin de la chaine
         console.log('Element found');
         console.log(tab);

     }else{

        console.log('Element non found');
         alert("Pas de chance il existe pas XD")
         break;

     }
 
 };
 document.write ("Il reste dans le tableau " + tab);




 //TEST de selection

// let tab = ["Audrey","Aurélien","Flavien","Jérémy","Melik","Nouara","Samuel","Stéphane"];
// let p = window.prompt("Entrer un prénom");
// if(tab.indexOf(p)!== -1){
//     console.log('Element found');
// }else{
//     console.log('Element not found');
// }

