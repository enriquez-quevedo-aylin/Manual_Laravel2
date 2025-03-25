@extends('plantilla')
@section('contenido')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        .comunidad-manga-container {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 60vh;
    padding: 40px 0;
    background-color:rgb(143, 171, 185);
}

.comunidad-manga {
    background-color: rgb(123, 167, 189);
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 40px;
    text-align: center;
    max-width: 800px;
    width: 100%;
}

.comunidad-manga-header {
    margin-bottom: 30px;
}

.comunidad-manga-header h2 {
    font-size: 2.5rem;
    color: #fff;
}

.comunidad-manga-content p {
    font-size: 1.1rem;
    line-height: 1.6;
    color: #fff;
    margin-bottom: 20px;
}

.comunidad-manga-content p strong {
    font-weight: bold;
    color: #fff;
}
    </style>
    <section class="comunidad-manga-container">
        <div class="comunidad-manga">
            <div class="comunidad-manga-header">
                <h2>Apoya a nuestra comunidad manga </h2>
            </div>
            <div class="comunidad-manga-content">
                <p>En esta pagina, la comunidad de manga  no es solo un grupo de aficionados por los mangas y manhuas ¡es una verdadera familia!.Aqui, cada lector y creador tiene un espacio de trabajo agradable para que puedan subir sus proyectos de manera eficiente y confiable sin miedo
                    a que puedan robarlos 
                </p>
                <p>Nos enorgullese ofrcer un espacio seguro yt acogedor donde todos puedan expresarse libremente,compratir su opiniones, y participar en difucion que van desde teorias hasta analisis profundos sobre los temas de cada manga y manhua que se encuentran en la pagina  </p>
            </div>
        </div>

    </section>
</body>
</html>
@endsection