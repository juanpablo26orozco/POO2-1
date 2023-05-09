<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>Formulario de Datos Personales</title>
    <link rel="stylesheet" href="Style.css">
    <style>
        body {
            background-color: #f5f5f5;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-7">
                <div class="illustration-wrapper">
                    
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 600 600" class="illustration">

                        <circle class="illustration-circle" cx="97.5" cy="414.5" r="48.5" />
                        <circle class="illustration-circle" cx="97.5" cy="414.5" r="48.5" />

                        <polyline points="246 469 186.31 372.29 185.99 371.77" />
                        <line x1="134.13" y1="287.76" x2="38" y2="132" />
                        <path d="M269.3,332.6A104,104,0,1,1,441.4,217.34c.18.33.36.66.53,1" />
                        <path d="M290.1,352a104,104,0,0,0,163.22-73.22" />
                        <line x1="38" y1="132" x2="515" y2="463" />
                        <polyline points="409 251.65 266.08 205.56 38 132" />
                        <line x1="562" y1="301" x2="363" y2="164" />
                        <polyline points="246 469 266.49 414.66 290.1 352.03 303.58 316.29" />
                        <path d="M515,463c-91.08,0-176.16-17.67-248.51-48.34" />
                        <path d="M186.58,372.16l-.59-.39C94.8,311.5,38,226.4,38,132" />
                        <path d="M363,164c0,75.72,89,137,199,137" />
                        <polygon points="283.96 123.28 244.68 71.61 219.57 131.47 283.96 123.28" />
                        <line x1="375" y1="89.18" x2="268.34" y2="102.73" />
                        <line x1="229.56" y1="107.66" x2="38" y2="132" />
                        <rect x="375" y="65" width="44" height="44"></rect>
                        <path d="M402.61,109c11.21,48.63,57.24,85,112.39,85" />
                        <path d="M447.71,95.7a114,114,0,0,1,46,35.65A103.18,103.18,0,0,1,515,194" />
                        <line x1="419" y1="65" x2="542" y2="52" />
                        <polyline points="441 218 441.13 217.79 462.75 182.25" />
                        <line x1="542" y1="52" x2="493.72" y2="131.35" />
                        <line x1="515" y1="194" x2="419" y2="109" />
                        <polyline points="542 52 447.71 95.7 419 109" />
                        <line x1="253" y1="201" x2="251.47" y2="127.41" />
                        <polyline points="442 367 442 349 478 349 478 367" />
                        <rect x="493" y="355" width="24" height="24" />
                        <polyline points="493 367 478 367 442 367 379 367" />
                        <polyline points="141.37 393.78 186.31 372.29 186.58 372.16 269.3 332.6 303.5 316.24" />
                        <circle cx="97.5" cy="414.5" r="48.5" />
                        <line x1="159" y1="548" x2="117.39" y2="458.75" />
                        <path d="M159,548c0-43.67,38.91-79,87-79" />
                        <line x1="178" y1="229" x2="69" y2="375" />
                        <circle cx="199" cy="244" r="26" />
                    </svg>
                </div>
            </div>

            <div class="col-5 h-100vh align-self-center">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Datos Personales</h5>
                        <form>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Usario</label>
                                <input type="text" class="form-control" id="nombre" placeholder="Ingrese su usuario">
                            </div>
                            <div class="mb-3">
                                <label for="apellidos" class="form-label">Clave</label>
                                <input type="text" class="form-control" id="apellidos" placeholder="Ingresa su Clave">
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>