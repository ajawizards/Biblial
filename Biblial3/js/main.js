$(function () {
    let recherche=$("#search"); // assigner variable à mon input
    let resultat=$("#resultat"); // assigner variable à ma div resultat 
    resultat.empty(); // vider la div resultat avant la recherche

    $("#bouton").on("click", function(event){
        event.preventDefault(); // annuler l'évenement du clic 
        console.log(recherche.val());
        resultat.empty(); // vider la div resultat à chaque nouvelle recherche

        $.ajax({ // appel ajax vers l'url de Google Books 
            url: "https://www.googleapis.com/books/v1/volumes?q=" + recherche.val(),
            method: 'GET', // method get pour obtenier les infos des livres
            dataType: "json", // je veux recevoir des données au format json

            success: function(data) {
                console.log(data); // lire les données reçus 
                for(i = 0; i < data.items.length; i++){ // exploiter les données json dans une boucle
                    resultat.append("<h2><strong> Titre: </strong>" + data.items[i].volumeInfo.title + "</h2>");
                    // je vais chercher dans l'objet les infos ici le titre du livre et je l'ajoute à la div resultat
                    try {if (typeof (data.items[i].volumeInfo.seriesInfo.bookDisplayNumber) !== 'undefined') {
                        resultat.append("<p><strong> Numero du tome :</strong> "+ data.items[i].volumeInfo.seriesInfo.bookDisplayNumber + " </p>");
                    }}
                    catch {
                        resultat.append("<p> il n'y a pas de numero de tome pour celui-ci </p>");
                    }// si le numero de tome n'est pas dans les données afficher cette reponse 
                    resultat.append("<p><strong> Auteur(s): </strong> "+ data.items[i].volumeInfo.authors + " </p>");
                    resultat.append("<p class='text-danger justify'><strong> Description:</strong> "+ data.items[i].volumeInfo.description + " </p>");
                    resultat.append("<p><strong> Editeur: </strong>" + data.items[i].volumeInfo.publisher + "</p>");
                    resultat.append("<p><strong>Nombre de pages: </strong>" + data.items[i].volumeInfo.pageCount + "</p>");
                    resultat.append("<p><strong> Date de publication: </strong>" + data.items[i].volumeInfo.publishedDate + "</p>");
                    try {if (typeof (data.items[i].volumeInfo.imageLinks.thumbnail) !== 'undefined') {
                        resultat.append("<img src="+ data.items[i].volumeInfo.imageLinks.thumbnail+">");
                    }} // recuperer l'image
                    catch {
                        resultat.append("<p> il n'y a pas d'image pour cet ouvrage </p>");
                    }// si pas d'image pour un tome afficher cette reponse
/*                     resultat.append(`<button name='btn-${i}' ' id='btn-${i}'  data-title="${data.items[i].volumeInfo.title}" data-authors="${data.items[i].volumeInfo.authors}" data-description="${data.items[i].volumeInfo.description}" data-publisher="${data.items[i].volumeInfo.publisher}" data-pageCount="${data.items[i].volumeInfo.pageCount}"data-publishedDate="${data.items[i].volumeInfo.publishedDate}"  >Ajouter</button>`) 
 */
                    /* à corriger l'envoie de données du numero de tome et image quand ils ne sont pas renseignés dans le json
                    
                    data-bookDisplayNumber="${data.items[i].volumeInfo.seriesInfo.bookDisplayNumber}" 
                    data-imageLinks.thumbnail="${data.items[i].volumeInfo.imageLinks.thumbnail}"*/
                 /*    $(`#btn-${i}`).on("click", function (e) {        
                        console.log(e.target.dataset);
                        let sauvegarde = e.target.dataset; 
                        console.log(sauvegarde);  
                        

                        $.ajax({
                            url: "sauvegarde.php",
                            method: "POST",
                            data : {
                                titre: sauvegarde.title, 
                             
                                auteur: sauvegarde.authors, 
                                resume: sauvegarde.description, 
                                editeur: sauvegarde.publisher, 
                                pages: sauvegarde.pagecount, 
                                publication: sauvegarde.publisheddate 
                            } 
                        }) 
                        .done(function(data){

                            console.log(data);
                        })
                        .fail(function (req, err) {
                            console.log("essai encore!!! "+ err)
                        })
                    }) */
                }
            } 
        });

    });
});

   /* nmrtomes:sauvegarde.bookDisplayNumber, data pour le numéros des tomes */ 