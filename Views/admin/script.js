function verif() {

    var err=true;
    var nom= document.forms["clubForm"]["nom"].value;  
    var description  = document.forms["clubForm"]["description"].value;
    var prix= document.forms["clubForm"]["prix"].value;
    var quantite = document.forms["clubForm"]["quantite"].value;
    var image = document.forms["clubForm"]["image"].value;



    var errorN = document.getElementById('errornom');
    var errordes = document.getElementById('errordescription');
    var errorprix= document.getElementById('errorprix');
    var errorquantite = document.getElementById('errorquantite');
    var errorimage = document.getElementById('errorimage');


    var letters = /^[A-Za-z]+$/;
    var dateNow = new Date();
    if (nom == "") {
        errorN.innerHTML = "Veuillez entrer votre nom!";
        err=false;

    }
    else if (!(nom.match(letters) && nom.charAt(0).match(/^[A-Z]+$/))) {
        errorN.innerHTML = "Veuillez entrer un nom valid!";
        err=false;
    } else {
        errorN.innerHTML = "";

    }

    if( description == "") {
        errordes.innerHTML = "Veuillez entrer votre email!";
        err=false;
    }
    else if (!email.match('@esprit.tn')) {
        errordes.innerHTML = "Veuillez entrer un email valid!";
        err=false;
    }
    else {
        errordes.innerHTML = "";

    }

    if (prix == "") {
        errorprix.innerHTML = "Veuillez entrer votre mot de passe!";
        err=false;
    }
    else if (!(prix.match(/[0-9]/g) &&
       
    prix.length >= 12)) {
            errorprix.innerHTML = "NOOO.";
        err=false;
    }
    else {
        errorPass.innerHTML = "";

    }

    



    if (quantite== "") {
        errorquantite.innerHTML = "Veuillez choisir une date!";
        err=false;
    }
    
    else {
        errorquantite .innerHTML = "";

    }

    if (image== "") {
        errorimage.innerHTML = "Veuillez choisir votre image";
        err=false;
    }
    
    else {
        errorimage.innerHTML = "";

    }
    
    

}




function validateForm(e) {
    e.preventDefault();
    verif();
}

