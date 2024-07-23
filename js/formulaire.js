let form = document.querySelector('#contact');
 
// Ecouter la modification de category
form.subject.addEventListener('change', function() {
     validSubject(this);
});

// Ecouter la modification du comment
form.message.addEventListener('change', function() {
    validMessage(this);
});

// Ecouter la modification de l'email
form.email.addEventListener('change', function() {
    validEmail(this);
});





//**********Validation SUBJECT *************/
const validSubject = function(inputSubject) {
    let msg = '';
    let valid = false;
    let trimmedValue = inputSubject.value.trim();
    // Vérifiez si le sujet n'est pas vide
    if (trimmedValue.length === 0) {
        msg = 'La case sujet ne peut pas être vide';
    }
    // Vérifiez si les commentaires ont au moins 15 caractères
    else if (trimmedValue.length < 3) {
        msg = 'Le sujet est trop court';
    }

    // Récupération de la balise SMALL
    let small = inputSubject.nextElementSibling;

    //Test de l'expression régulière
    if (valid) {
        small.innerHTML = ''; // Pas de message si valide
        small.classList.remove('text-danger', 'text-success');
        return true;  
    } 
    else {
        small.innerHTML = msg;
        small.classList.remove('text-success');
        small.classList.add('text-danger');
        return false;
    }
};


 //*************Validation COMMENT  *********/ 
 const validMessage = function(inputMessage) {
    let msg;
    let valid = false;
    let trimmedValue = inputMessage.value.trim();

        // Vérifiez si les commentaires ne sont pas vides
    if (trimmedValue.length === 0) {
        msg = 'Le commentaire ne peut pas être vide';
    }
    // Vérifiez si les commentaires ont au moins 15 caractères
    else if (trimmedValue.length < 15) {
        msg = 'Le commentaire est trop court';
    }
    // Commentaire valide
    else {
        valid = true;
        msg = ''
    }
    // Récupération de la balise SMALL
    let small = inputMessage.nextElementSibling;

    //Test de l'expression régulière
    if (valid) {
      small.innerHTML = msg;
      small.classList.remove('text-danger');
      small.classList.add('text-success');
      return true;  
    } 
    else {
      small.innerHTML = msg;
      small.classList.remove('text-success');
      small.classList.add('text-danger');
      return false;
    }
}; 

//*********Validation EMAIL ************** 
const validEmail = function(inputEmail) {
    //Creation de la reg exp pour la validation email
    let emailRegExp = new RegExp (
        '^[a-zA-Z0-9.-_]+[@]{1}[a-zA-Z0-9.-_]+[.]{1}[a-z]{2,10}$', 'g'
    );

    // Récupération de la balise SMALL
    let small = inputEmail.nextElementSibling;

      //Test de l'expression régulière
    if(emailRegExp.test(inputEmail.value)){
        small.innerHTML = 'Adresse Valide';
        small.classList.remove('text-danger');
        small.classList.add('text-success');
        return true;
    } 
    else{
        small.innerHTML = 'Adresse Non Valide';
        small.classList.remove('text-success');
        small.classList.add('text-danger');
        return false;
    }
};

