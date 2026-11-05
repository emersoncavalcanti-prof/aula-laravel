<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardápio Digital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    @vite(['resources/css/app.css','resources/js/app.js',])
</head>
<body class="bg-primary text-white py-3">

    <div class="container mt-5">

        <div class="row">

            <div class="col-7">
                <h1>Cardápio Digital</h1>

                <p>
                    Bem-vindo ao nosso cardápio digital! Aqui você pode explorar nossas deliciosas opções de pratos e bebidas. Navegue pelas categorias e descubra o que temos a oferecer. Aproveite sua experiência gastronômica conosco!
                </p>

            </div>

            <div class="col-5">
                @yield('conteudo')
            </div>

        </div>

    </div>

   


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>