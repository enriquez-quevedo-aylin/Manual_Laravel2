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
        body {
            background-color:rgb(255, 255, 255);
            color: #333;
        }
        .hero {
            background: url('https://piunikaweb.com/wp-content/uploads/2019/11/Sweet-Bite-Chinese-Manhua-img.jpg') center/cover;
            color: black;
            text-align: center;
            padding: 100px 20px;
            backdrop-filter: brightness(0.9);
        }
        .card {
            background-color:rgb(254, 254, 254);
            border: 1px solid #ddd;
        }
        .bienvenida {
        color: white;
}
</style>
<section class="hero">
<h1 class="bienvenida">Bienvenido a MundoMc</h1>
<p class="bienvenida">Explora nuestra colección de mangas y únete a la comunidad.</p>
</section>
<section class="container my-5">
        <h2 class="text-center mb-4">Manhuas y Manhwa Populares</h2>
        <div class="row text-center">
            <div class="col-md-4">
                <div class="card p-3 shadow">
                    <img src="https://media.ikigaimangas.cloud/series/covers/911793574292783107/beaf4ef8-f019-43c5-9648-4fbc85c33442-xl.webp" class="card-img-top" alt="One Piece">
                    <h3>Princesa encantada</h3>
                    <p>¡La bella Athanasia fue asesinada a manos de su propio padre biológico, Claude de Obelia, el emperador de sangre fría!</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 shadow">
                    <img src="https://media.ikigaimangas.cloud/series/covers/911803268285071362/ilTBvolEXEtmsi4c6LS4Ythhpyigo3-metaR0RvWXBkbmF3QUFrTFNELnBuZw==--xl.webp" class="card-img-top" alt="Attack on Titan">
                    <h3>La villana es una marioneta</h3>
                    <p>Renací en la novela de "La dama de la rosa negra" como Cayena, la Princesa Imperial que era conocida como la mujer más bella</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 shadow">
                    <img src="https://media.ikigaimangas.cloud/series/covers/911803101750263809/0ee9ebd9-6d8d-4c06-8d52-9c7fc62a03f2-xl.webp" class="card-img-top" alt="Death Note">
                    <h3>Death Note</h3>
                    <p>Feng Su Nuan, una famosa doctora moderna, Reencarno en una joven tonta que estaba prometida al Rey jin.</p>
                </div>
            </div>
        </div>
    </section> 
</body>
</html>
@endsection