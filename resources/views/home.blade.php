@extends('plantilla')
@section('contenido')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/home.css">

    <title>Document</title>
</head>
<body>
    <style>
        .manhwa-info {
    padding: 2rem;
    background-color: #f9f9f9;
    text-align: center;
}

.contenido-manhwa {
    display: flex;
    justify-content: center;
    align-items: flex-start;
    gap: 20px;
    max-width: 900px;
    margin: 0 auto;
    text-align: left;
}

.video {
    width: 50%;
}

.texto-manhwa {
    width: 50%;
}

h2 {
    margin-bottom: 1rem;
    color:rgb(123, 167, 189);
}

p {
    margin-bottom: 1rem;
    line-height: 1.6;
}

    </style>
<section class="manhwa-info">
    <div class="contenido-manhwa">
        
        <div class="video">
        <img src="https://media.ikigaimangas.cloud/series/covers/911793558467117058/RFXQVMZwJPPFotyzabi5awgcSkNcU9-metacmVzb3VyY2UzLmpwZw==--xl.webp" class="card-img-top" alt="Death Note">
        </div>
        
        <!-- Información del Manhwa a la derecha -->
        <div class="texto-manhwa">
            <h2>Padre, No Quiero Casarme</h2>
            <p>
                Este manhwa cuenta la historia de **Jubellian Eloy Floyen**, quien es la hija de un poderoso duque.
                Después de recordar su vida pasada, Jubellian se da cuenta de que está destinada a morir trágicamente tras 
                ser utilizada como herramienta política. Con su conocimiento del futuro, decide hacer todo lo posible 
                para evitar su destino. Sin embargo, las cosas toman un giro inesperado cuando su padre, el duque Floyen, 
                la protege en secreto y otro personaje poderoso entra en su vida.
            </p>
            <p>
                A medida que Jubellian trata de evitar su destino, su relación con el príncipe heredero, quien también 
                tiene sus propios secretos, comienza a cambiar.
            </p>
        </div>
    </div>
</section>

</body>
</html>
@endsection
