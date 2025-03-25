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
        .ventajas {
    margin-top: 2rem;
    text-align: center;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 1rem;
}

th, td {
    border: 1px solid #ddd;
    padding: 12px;
    text-align: center;
}

th {
    background-color:rgb(123, 167, 189);
    color: white;
}




.ejemplos {
    margin-top: 2rem;
    text-align: center;
}

.galeria {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-top: 1rem;
}

.item {
    text-align: center;
    width: 45%;
}

.item img {
    width: 100%;
    max-width: 300px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.item p {
    margin-top: 0.5rem;
    font-size: 0.9rem;
}

    </style>
<section class="ventajas">
    <h3>Comparativa Rápida</h3>
    <table>
        <thead>
            <tr>
                <th>Aspecto</th>
                <th>Manhua Chino</th>
                <th>Manhwa Coreano</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>📖 Lectura</td>
                <td>Izquierda a derecha</td>
                <td>Izquierda a derecha</td>
            </tr>
            <tr>
                <td>🎨 Estilo Visual</td>
                <td>Colores vibrantes, detalles clásicos</td>
                <td>Formato digital con tonos vibrantes</td>
            </tr>
            <tr>
                <td>📚 Formato</td>
                <td>Capítulos sueltos en revista o web</td>
                <td>Webtoon con desplazamiento vertical</td>
            </tr>
            <tr>
                <td>🌟 Popularidad</td>
                <td>Más popular en China y Taiwán</td>
                <td>Extremadamente popular a nivel mundial</td>
            </tr>
        </tbody>
    </table>
</section>

<section class="ejemplos">
    <h3>Ejemplos Visuales</h3>
    <div class="galeria">
        <div class="item">
            <img src="https://media.ikigaimangas.cloud/series/911803101750263809/915458288392110083/02.webp" alt="Manhua Chino">
            <p>Ejemplo de Manhua</p>
        </div>
        <div class="item">
            <img src="https://media.ikigaimangas.cloud/series/911803292380921857/954941330532990978/03.webp" alt="Manhwa Coreano">
            <p>Ejemplo de Manhwa</p>
        </div>
    </div>
</section>

</body>
</html>
@endsection