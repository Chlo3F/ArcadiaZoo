let modal = document.querySelector('#modal');

// Ecouter la modification du pseudo
modal.pseudo.addEventListener('change', function() {
    validPseudo(this);
});


// Ecouter la modification du comment
modal.comment.addEventListener('change', function() {
    validComment(this);
});





//*************Validation PSEUDO  *********/ 
const validPseudo = function(inputPseudo) {
    let msg;
    let valid = false;
    let trimmedValue = inputPseudo.value.trim();

        // Vérifiez si les pseudo ne sont pas vides
    if (trimmedValue.length === 0) {
        msg = 'Veuillez choisir un pseudo';
    }
    // Vérifiez si les pseudo ont au moins 3 caractères
    else if (trimmedValue.length < 3) {
        msg = 'Le pseudo est trop court';
    }
    // Pseudo valide
    else {
        valid = true;
        msg = ''
    }

    let small = inputPseudo.nextElementSibling;

    if (valid) {
      small.innerHTML = msg;
      small.classList.remove('text-danger');
      small.classList.add('text-success');
    } else {
      small.innerHTML = msg;
      small.classList.remove('text-success');
      small.classList.add('text-danger');
    }
};


//*************Validation COMMENT  *********/ 
const validComment = function(inputComment) {
    let msg;
    let valid = false;
    let trimmedValue = inputComment.value.trim();

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

    let small = inputComment.nextElementSibling;
    
    if (valid) {
      small.innerHTML = msg;
      small.classList.remove('text-danger');
      small.classList.add('text-success');
    } else {
      small.innerHTML = msg;
      small.classList.remove('text-success');
      small.classList.add('text-danger');
    }
}; 
