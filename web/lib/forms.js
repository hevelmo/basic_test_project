function formhash(form, username, password, acepto, mail, mail2) {
    // Create a new element input, this will be our hashed password field. 
    var p = document.createElement("input");
 
    if(username.value && password.value && acepto.value && mail.value && mail2.value && (mail.value === mail2.value)) {
        
        form.appendChild(p);
        p.name = "p";
        p.type = "hidden";
        p.value = hex_sha512(password.value);

        password.value = "";
        form.submit();

    } else {
        alert('todos los datos son requeridos, verifica tu información');
    }
}

function formhashid(form, password) {
    // Create a new element input, this will be our hashed password field. 
    var p = document.createElement("input");
 
    // Add the new element to our form. 
    form.appendChild(p);
    p.name = "p";
    p.type = "hidden";
    p.value = hex_sha512(password.value);
 
    // Make sure the plaintext password doesn't get sent. 
    password.value = "";
    // Finally submit the form. 
    form.submit();
}
 
function regformhash(form, uid, email, password, conf) {
     // Check each field has a value
    if (uid.value == ''        || 
          email.value == ''  || 
          password.value == ''       || 
          conf.value == '') {
 
        alert('No proporcionaste los datos completos');
        return false;
    }
 
    // Check the username
 
    re = /^[A-Za-z ]+$/;
    if(!re.test(form.username.value)) { 
        alert("Username must contain only letters, numbers and underscores. Please try again"); 
        form.username.focus();
        return false; 
    }
 
    // Check that the password is sufficiently long (min 6 chars)
    // The check is duplicated below, but this is included to give more
    // specific guidance to the user
    // after 6
    if (password.value.length < 6) {
        alert('El password debe tener al menos 6 caracteres');
        form.password.focus();
        return false;
    }
 
    // At least one number, one lowercase and one uppercase letter 
    // At least six characters 
    // After var re = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/; 
 
    var re = /(?=.*\d)/; 
    if (!re.test(password.value)) {
        alert('El password debe tener al menos 6 caracteres');
        return false;
    }
 
    // Check password and confirmation are the same
    if (password.value != conf.value) {
        alert('Tus password no son iguales. Intentalo de nuevo');
        form.password.focus();
        return false;
    }
 
    // Create a new element input, this will be our hashed password field. 
    var p = document.createElement("input");
 
    // Add the new element to our form. 
    form.appendChild(p);
    p.name = "p";
    p.type = "hidden";
    p.value = hex_sha512(password.value);
 
    // Make sure the plaintext password doesn't get sent. 
    password.value = "";
    conf.value = "";
 
    // Finally submit the form. 
    form.submit();
    return true;
}


// Alerts


function formRegister(form, username, email, email_re, password, btn_acepto) {
    $(document).ready(function() {
        // Create a new element input, this will be our hashed password field. 
        var p = document.createElement("input");
        var full, equal, noMail, data;
        alert("entra");
        full = false;
        equal = false;
        noMail = false;
 
        // Add the new element to our form. 
        form.appendChild(p);
        p.name = "p";
        p.type = "hidden";
        p.value = hex_sha512(password.value);

        full = (username.value, email.value, email_re.value, password.value) ? true : false;

        if(!full) {
            setTimeout(function () { 
                alertify.alert("Todos los campos deben estar llenos");
            }, 3000);  
            //alert("Todos los campos deben estar llenos");
        }

        equal = (email.value === email_re.value) ? true : false;

        if(!equal) {
            //alert("Ambos correos deben ser iguales");
            setTimeout(function () { 
                alertify.alert("Ambos correos deben ser iguales");
            }, 3000);  
            email_re.value = '';
        } else {
            data = OHR.getInternalJSON('../api/v1/get/candidate/email/' + email.value);
            noMail = (data.ohrpa.length === 0) ? true : false;
            if(!noMail) {
                setTimeout(function () { 
                    alertify.alert("Todos los campos deben estar llenos");
                }, 3000);
                alert("Ya se ha registrado el correo " + email.value);
            }

        }

        // Make sure the plaintext password doesn't get sent. 
        password.value = "";

        if(full && equal && noMail) {
            setTimeout(function () { 
                alertify.alert("Se ha enviado un correo de activación a '" + email.value + "'");
            }, 3000);  
            //alert("Se ha enviado un correo de activación a '" + email.value + "'");
            // Finally submit the form. 
            form.submit();
        }
    });
}

function formLogIn(form, email, password) {
    $(document).ready(function() {
        // Create a new element input, this will be our hashed password field. 
        var p = document.createElement("input");
        var logged, full;
        logged = false;
        full = false;

        // Add the new element to our form. 
        form.appendChild(p);
        p.name = "p";
        p.type = "hidden";
        p.value = hex_sha512(password.value);

        full = (email.value, password.value) ? true : false;

        if(!full) {
            alert("Todos los campos deben estar llenos");
        }


        // Make sure the plaintext password doesn't get sent. 
        password.value = "";
        // Finally submit the form. 

        data = OHR.getInternalJSON('../api/v1/get/candidate/login/' + email.value + '/' + p.value);

        logged = (data.ohrpa.length !== 0) ? true : false;
        if(!logged) {
            alert("Sus datos son incorrectos, no se ha podido iniciar sesion");
        }

        // Make sure the plaintext password doesn't get sent. 
        password.value = "";

        if(full && logged) {
            form.submit();
        }

    });
}



function formActivate(form, email, password, can_id) {
    $(document).ready(function() {
        // Create a new element input, this will be our hashed password field. 
        var p = document.createElement("input");
        var logged, full;
        logged = false;
        full = false;

        // Add the new element to our form. 
        form.appendChild(p);
        p.name = "p";
        p.type = "hidden";
        p.value = hex_sha512(password.value);

        full = (email.value, password.value, can_id.value) ? true : false;

        if(!full) {
            alert("Todos los campos deben estar llenos");
        }


        // Make sure the plaintext password doesn't get sent. 
        password.value = "";
        // Finally submit the form. 

        data = OHR.getInternalJSON('../api/v1/get/candidate/login/' + email.value + '/' + p.value + '/' + can_id.value);

        logged = (data.ohrpa.length !== 0) ? true : false;
        if(!logged) {
            alert("Sus datos son incorrectos, no se ha podido activar tu cuenta");
        }

        // Make sure the plaintext password doesn't get sent. 
        password.value = "";

        if(full && logged) {
            form.submit();
        }

    });
}


function formRecoverPass(form, email) {
    $(document).ready(function() {
        var full, mail;
        full = false;
        isMail = false;

        full = (email.value) ? true : false;

        if(!full) {
            alert("Todos los campos deben estar llenos");
        }

        data = OHR.getInternalJSON('../api/v1/get/candidate/email/' + email.value);
        isMail = (data.ohrpa.length !== 0) ? true : false;

        if(!isMail) {
            alert("El correo '" + email.value + "' no existe en nuestra base de datos.");
        }

        if(full && isMail) {
            alert("Se ha enviado un correo a '" + email.value + "', con los pasos para restaurar su contraseña");
            // Finally submit the form. 
            form.submit();
        }

    });
}

function formResetPass(form, password) {
    $(document).ready(function() {
        // Create a new element input, this will be our hashed password field. 
        var p = document.createElement("input");
 
        // Add the new element to our form. 
        form.appendChild(p);
        p.name = "p";
        p.type = "hidden";
        p.value = hex_sha512(password.value);

        // Make sure the plaintext password doesn't get sent. 
        password.value = "";
        // Finally submit the form. 
        form.submit();
    });
}