@extends('layouts.master')
@section('titulo', 'Home')
@section('contenido')

    <main role="main">
      <div class="" style="background-color:rgb(40, 9, 7);color: #FFF;">
        <h1 style="text-align:center;">Bienvenido</h1>
        <p style="text-align:center;">@username</p>
      </div>
        <!-- <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://live.staticflickr.com/4010/4292074142_9c60a8cc2c_b.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">

                    </div>
                </div>
            </div>
        </div> -->


        <!-- Marketing messaging and featurettes
================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">

            <!-- Three columns of text below the carousel -->
            <div class="row mt-4">
                <div class="col-lg-4">
                    <img class="rounded-circle" src="https://i7.uihere.com/icons/429/380/1020/goods-6cac497f8866e87e2b8e997417347f14.png" alt="Generic placeholder image" width="140" height="140">
                    <h2>Recepcion</h2>
                    <p>Pendientes: {{ $recibidos }}</p>
                    <p><a class="btn btn-secondary" href="/recepcion_act" role="button">Ver más</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="rounded-circle" src="https://iconape.com/wp-content/files/xh/367685/svg/send-logo-icon-png-svg.png" alt="Generic placeholder image" width="140" height="140">
                    <h2>Traslados</h2>
                    <p>Pendientes: {{ $en_transito }}</p>
                    <p><a class="btn btn-secondary" href="/traslado_act" role="button">Ver más</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="rounded-circle" src="https://icon-library.com/images/x-icon-png/x-icon-png-25.jpg" alt="Generic placeholder image" width="140" height="140">
                    <h2>Dados de baja</h2>
                    <p>Pendientes: {{ $dados_de_baja }}</p>
                    <p><a class="btn btn-secondary" href="/salida_act" role="button">Ver más</a></p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->


        </div><!-- /.container -->


        <!-- FOOTER -->
        <footer class="container">
            <!-- <p class="float-right"><a href="#">Back to top</a></p> -->
            <p>© 2022 Toldopamba S.A.S. · <a href="#">Privacidad</a> · <a href="#">Terms</a></p>
        </footer>
    </main>

@stop
