/*
** Workshop
** EPITECH 2021
*/

function displayDataFromId() 
{
    dropList = document.getElementById("idDroplist").value;
    console.log(dropList);
    if (dropList != "") {
        var buttonSend = document.addEventListener('change', function(event) // 1*
        {
            var xhr = new XMLHttpRequest(); // 2*
            xhr.open('post', '../BackEnd/Step7b.php'); // 3*
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded'); // 4*
            xhr.addEventListener('readystatechange', function() // 5*
            { 
                if (xhr.readyState === XMLHttpRequest.DONE) { // 6*
                    console.log(this.responseText);
                    data = JSON.parse(this.responseText);
                    console.log(data);
                    var html = "";
                    for (var a = 0; a < data.length; a++) {
                        var Nom = data[a].Nom;
                        var Prenom = data[a].Prenom;
                        var Tel = data[a].Telephone;
                        var Email = data[a].Email;
                        html += "Nom du chercheur :    " + Nom + "<br>";
                        html += "Prénom du chercheur :    " + Prenom + "<br>";
                        html += "Tel du chercheur :    " + Tel + "<br>";
                        html += "Email du chercheur :    " + Email + "<br>";
                    }
                    document.getElementById("credits").innerHTML = html;   
                }
            });
            xhr.send('dropList=' + dropList); // 7*
        })
    }
    else
        document.getElementById("credits").innerHTML = "";
    document.getElementById("credits").innerHTML = "";
}


// 1*: Je rajoute un Event Listener dessus qui s'activera a chaque click
// 2*: Je crée ma requête AJAX
// 3*: Je l'ouvre en POST, avec comme URL "../BackEnd/Step7b.php"
// 4*: Je met comme Header que je vais encoder les informations en URLEncoded (comme du GET)
// 5*: Je rajoute un Event listener sur la requête AJAX, il s'éxécute a chaque changements d'états de la requête
// 6*: Si la requête est finie (XMLHttpRequest.DONE est une constante valant 4 qui veut juste dire que la requete est finie)
// 7*: On envoie les données en URLEncoded