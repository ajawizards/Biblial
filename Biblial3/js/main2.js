$(document).ready(function(){ // pour commencer à manipuler des eléments de mon dom html une fois chargé

    let user =  $('.utilisateur').val(); // assigner à la variable user l'id de l'utilisateur connecté
    console.log(user);

  $('.ajoutlivre').click(function(e){
    console.log(e); // lire mon event
    console.log(e.originalEvent.path[7].id); // aller chercher la donnée qui m'interesse ici l'id du modalvue qui est egal à celui des livres. 
    
    let idmodal=e.originalEvent.path[7].id;
    let idlivre=idmodal.substring(10,8); // substring va permettre de parser l'élément modalvue pour garder juste l'id 
    console.log(idlivre);
  
    $.ajax({
        type: "POST",
        url: "http://localhost/Biblial3/ajoutlivre.php",
        data:{
            livre: idlivre, // data qui correspond à l'id du livre
            userconnecté : user, // data qui correspond à l'id de l'user co 
        },
        success: function(data){
          /* console.log(data); */
          $('.ajoutlivre').popover('show'); 
        }
      })
    });  
});