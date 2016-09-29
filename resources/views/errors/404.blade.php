@extends('master')

@section('content')

	<div id="content">
            <div class="container">

                <div class="col-sm-6 col-sm-offset-3" id="error-page">

                    <div class="box">

                        <p class="text-center">
                            <a href="index.html">
                                <img src="img/logo@500px.png" alt="Obaju template">
                            </a>
                        </p>

                        <br>

                        <h3>Tyvärr kunde vi inte hitta sidan du sökte.</h3>
                        <h4 class="text-muted">Error 404 - Page not found</h4>

                        <p class="buttons"><a href="/" class="btn btn-template-main"><i class="fa fa-home"></i> Gå till hem</a>
                        </p>
                    </div>


                </div>
                <!-- /.col-sm-6 -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->

@endsection