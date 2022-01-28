<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
    @include("componentes.barra_nav",array("username"=>"Nicole"))

    <main role="main">

        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://pizzbur.com/wp-content/uploads/2016/08/Conoce-estas-10-curiosidades-sobre-el-caf%C3%A9-1920.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Bienvenido</h1>
                        <p>@username</p>
                    </div>
                </div>
            </div>
        </div>


        <!-- Marketing messaging and featurettes
================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">

            <!-- Three columns of text below the carousel -->
            <div class="row mt-4">
                <div class="col-lg-4">
                    <img class="rounded-circle" src="https://i7.uihere.com/icons/429/380/1020/goods-6cac497f8866e87e2b8e997417347f14.png" alt="Generic placeholder image" width="140" height="140">
                    <h2>Recepcion</h2>
                    <p>Pendientes: 0</p>
                    <p><a class="btn btn-secondary" href="#" role="button">Ver más</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="rounded-circle" src="https://iconape.com/wp-content/files/xh/367685/svg/send-logo-icon-png-svg.png" alt="Generic placeholder image" width="140" height="140">
                    <h2>Traslados</h2>
                    <p>Pendientes: 0</p>
                    <p><a class="btn btn-secondary" href="#" role="button">Ver más</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="rounded-circle" src="https://icon-library.com/images/x-icon-png/x-icon-png-25.jpg" alt="Generic placeholder image" width="140" height="140">
                    <h2>Dados de baja</h2>
                    <p>Pendientes: 0</p>
                    <p><a class="btn btn-secondary" href="#" role="button">Ver más</a></p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->


        </div><!-- /.container -->


        <!-- FOOTER -->
        <footer class="container">
            <!-- <p class="float-right"><a href="#">Back to top</a></p> -->
            <p>© 2022 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
        </footer>
    </main>


    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
</body>
</html>
