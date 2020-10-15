
 
    function validarNombre() {
        // Variable que usaremos para determinar si el input es valido
        let isValid = false;

        // El input que queremos validar
        const input = document.forms['forms']['nombre'];

        //El div con el mensaje de advertencia:
        const message = document.getElementById('messageName');

        input.willValidate = false;

        // El tamaño maximo para nuestro input
        const maximo = 45;

        // El pattern que vamos a comprobar
        const pattern = new RegExp('^[A-Z ]+$', 'i');

        // Primera validacion, si input esta vacio entonces no es valido
        if (!input.value) {
            isValid = false;
            message.innerText = "The name cannot be empty";
        } else {
            // Segunda validacion, si input es mayor que 45
            if (input.value.length > maximo) {
                isValid = false;
                message.innerText = "The name cannot contain more than 45 characters";
            } else {
                // Tercera validacion, si input contiene caracteres diferentes a los permitidos
                if (!pattern.test(input.value)) {
                    // Si queremos agregar letras acentuadas y/o letra ñ debemos usar
                    // codigos de Unicode (ejemplo: Ñ: \u00D1  ñ: \u00F1)
                    isValid = false;
                } else {
                    // Si pasamos todas la validaciones anteriores, entonces el input es valido
                    isValid = true;
                }
            }
        }

        //Ahora coloreamos el borde de nuestro input
        if (!isValid) {
            // rojo: no es valido
            input.style.borderColor = 'salmon'; 
            // mostramos mensaje
            message.hidden = false;
        } else {
            // verde: si es valido
            input.style.borderColor = 'palegreen'; 
            // ocultamos mensaje;
            message.hidden = true;
        }

        // devolvemos el valor de isValid
        return isValid;
    }

    function validarCorreo() {
        // Variable que usaremos para determinar si el input es valido
        let isValid = false;

        // El input que queremos validar
        const input = document.forms['forms']['correo'];

        //El div con el mensaje de advertencia:
        const message = document.getElementById('messageEmail');

        input.willValidate = false;
        // El tamaño maximo para nuestro input
        const maximo = 120;
        // El pattern que vamos a comprobar
        const pattern = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
        // Primera validacion, si input esta vacio entonces no es valido
        if (!input.value) {
            isValid = false;
            message.innerText = "Mail cannot be empty";
        } else {
            // Segunda validacion, si input es mayor que 120
            if (input.value.length > maximo) {
                isValid = false;
                message.innerText = "The email cannot contain more than 120 characters ";
            } else {
                // Tercera validacion, si input contiene caracteres diferentes a los permitidos
                if (!pattern.test(input.value)) {
                    // Si queremos agregar letras acentuadas y/o letra ñ debemos usar
                    // codigos de Unicode (ejemplo: Ñ: \u00D1  ñ: \u00F1)
                    isValid = false;
                } else {
                    // Si pasamos todas la validaciones anteriores, entonces el input es valido
                    isValid = true;
                }
            }
        }
        //Ahora coloreamos el borde de nuestro input
        if (!isValid) {
            // rojo: no es valido
            input.style.borderColor =
                'salmon'; 
            // mostramos mensaje
            message.hidden = false;
        } else {
            // verde: si es valido
            input.style.borderColor = 'palegreen'; 

            // ocultamos mensaje;
            message.hidden = true;
        }

        // devolvemos el valor de isValid
        return isValid;
    }

    function validarTelefono() {
        // Variable que usaremos para determinar si el input es valido
        let isValid = false;

        // El input que queremos validar
        const input = document.forms['forms']['telefono'];

        //El div con el mensaje de advertencia:
        const message = document.getElementById('messagePhone');

        input.willValidate = false;
        // El tamaño maximo para nuestro input
        const maximo = 15;
        // El pattern que vamos a comprobar
        const pattern = /^(\([0-9]{3}\)\s*|[0-9]{3}\-)[0-9]{3}-[0-9]{4}$/;
        // Primera validacion, si input esta vacio entonces no es valido
        if (!input.value) {
            isValid = false;
            message.innerText = "The phone cannot be empty";
        } else {
            // Segunda validacion, si input es mayor que 15
            if (input.value.length > maximo) {
                isValid = false;
                message.innerText = "The phone cannot contain more than 15 characters ";
            } else {
                // Tercera validacion, si input contiene caracteres diferentes a los permitidos
                if (!pattern.test(input.value)) {
                    // Si queremos agregar letras acentuadas y/o letra ñ debemos usar
                    // codigos de Unicode (ejemplo: Ñ: \u00D1  ñ: \u00F1)
                    isValid = false;
                } else {
                    // Si pasamos todas la validaciones anteriores, entonces el input es valido
                    isValid = true;
                }
            }
        }
        //Ahora coloreamos el borde de nuestro input
        if (!isValid) {
            // rojo: no es valido
            input.style.borderColor =
                'salmon'; 
            // mostramos mensaje
            message.hidden = false;
        } else {
            // verde: si es valido
            input.style.borderColor = 'palegreen'; 
            // ocultamos mensaje;
            message.hidden = true;
        }

        // devolvemos el valor de isValid
        return isValid;
    }

    function validarMessage() {
        // Variable que usaremos para determinar si el input es valido
        let isValid = false;

        // El input que queremos validar
        const input = document.forms['forms']['message'];

        //El div con el mensaje de advertencia:
        const message = document.getElementById('messageCustomer');

        input.willValidate = false;
        // El tamaño maximo para nuestro input
        const maximo = 250;
        // El pattern que vamos a comprobar
        const pattern = new RegExp('^[A-Z ]+$', 'i');
        // Primera validacion, si input esta vacio entonces no es valido
        if (!input.value) {
            isValid = false;
            message.innerText = "The message cannot be empty";
        } else {
            // Segunda validacion, si input es mayor que 15
            if (input.value.length > maximo) {
                isValid = false;
                message.innerText = "The message cannot contain more than 250 characters ";
            } else {
                // Tercera validacion, si input contiene caracteres diferentes a los permitidos
                if (!pattern.test(input.value)) {
                    // Si queremos agregar letras acentuadas y/o letra ñ debemos usar
                    // codigos de Unicode (ejemplo: Ñ: \u00D1  ñ: \u00F1)
                    isValid = false;
                } else {
                    // Si pasamos todas la validaciones anteriores, entonces el input es valido
                    isValid = true;
                }
            }
        }
        //Ahora coloreamos el borde de nuestro input
        if (!isValid) {
            // rojo: no es valido
            input.style.borderColor =
                'salmon'; 
            // mostramos mensaje
            message.hidden = false;
        } else {
            // verde: si es valido
            input.style.borderColor = 'palegreen'; 

            // ocultamos mensaje;
            message.hidden = true;
        }

        // devolvemos el valor de isValid
        return isValid;
    }