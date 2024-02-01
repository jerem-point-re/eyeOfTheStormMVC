// Création d`une nouvelle instance de l`objet XMLHttpRequest
var xhr = new XMLHttpRequest();

// Configuration de la requête
xhr.open(`GET`, `https://api.example.com/data`, true);

// Gestion de l`événement `readystatechange`
xhr.onreadystatechange = function() {
// Vérification de l`état de la requête (4 signifie terminée) et du code de statut (200 signifie OK)
if (xhr.readyState === 4 && xhr.status === 200) {
// Traitement de la réponse reçue
var data = JSON.parse(xhr.responseText);
console.log(data);
}
};

// Envoi de la requête
xhr.send();

//////////////////////

// Utilisation de la fonction fetch() pour envoyer une requête
fetch(`https://api.example.com/data`)
.then(function(response) {
// Vérification du code de statut de la réponse
if (response.ok) {
// Conversion de la réponse en objet JSON
return response.json();
} else {
throw new Error(`Erreur lors de la requête: ` + response.status);
}
})
.then(function(data) {
// Traitement de la réponse reçue
console.log(data);
})
.catch(function(error) {
// Gestion des erreurs
console.error(`Erreur lors de la récupération des données: `, error);
});