@extends('layout.index')
@section('content')
<!--================================
            START 500 AREA
    =================================-->
    <section class="four_o_four_area section--padding2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 text-center">
                    <div class="not_found">
                        <h3>500 Internal Server Error</h3>
                        <a href="{{url('/')}}" class="btn btn--round btn--default">Retour à l'Accueil</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================================
            END 500 AREA
    =================================-->
@stop