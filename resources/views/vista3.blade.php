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
        .comparativa {
    padding: 2rem;
    background-color: #f9f9f9;
    text-align: center;
}

.contenido {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 20px;
    max-width: 900px;
    margin: 0 auto;
}

.imagen {
    width: 45%;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.texto {
    width: 50%;
    text-align: left;
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
<section class="comparativa">
    <div class="contenido">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTFNXXZGKNIalb6m6t1U_FDsJZSvIn9dwq-Uw&s" alt="Comparativa Manhuas" class="imagen">
        <div class="texto">
            <h2>Diferencias entre Manhuas Coreanos y Chinos</h2>
            <p><strong>📚 Manhua Chino:</strong>  
                - Se leen de izquierda a derecha, similar al cómic occidental.  
                - Los géneros más comunes incluyen acción, romance y fantasía.  
                - Sus ilustraciones tienden a ser más coloridas y detalladas.
            </p>
            <p><strong>🎨 Manhwa Coreano:</strong>  
                - También se leen de izquierda a derecha.  
                - Se publican principalmente en formato webtoon, con desplazamiento vertical.  
                - Predomina el estilo de dibujo digital con tonos vibrantes.
            </p>
        </div>
    </div>
</section>

</body>
</html>
@endsection