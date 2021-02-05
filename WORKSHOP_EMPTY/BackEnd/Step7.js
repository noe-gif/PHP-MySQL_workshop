/*
** Workshop
** EPITECH 2021
*/

/* JS function that will be called each time one selected option of the droplist changes -> (triggered event : onChange)*/
function displayDataFromId()
{
    /* fill the gap to get the right id of html element (the droplist one) */
    dropList = document.getElementById("XXXXXXXX").value;
    console.log(dropList);
    if (dropList != "") /* if droplist exists */ 
    {
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
                        /* fill the gaps to get data from the exact row names */
                        var Nom = data[a].XXXXXX;
                        var Prenom = data[a].XXXXXX;
                        var Tel = data[a].XXXXXX;
                        var Email = data[a].XXXXXX;
                        html += "<p id=\"dataSearcher\">Nom du chercheur :    " + XXXXXX + "<br>";
                        html += "Prénom du chercheur :    " + XXXXXX + "<br>";
                        html += "Tel du chercheur :    " + XXXXXX + "<br>";
                        html += "Email du chercheur :    " + XXXXXX + "<br></p>";
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