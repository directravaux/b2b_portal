@extends('layout.index')
@section('content')
<!--================================
            START 403 AREA
    =================================-->
    <section class="four_o_four_area section--padding2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 text-center">
                    <div class="not_found">
                        <h3>403 Forbidden</h3>
                        <a href="{{url('/')}}" class="btn btn--round btn--default">Retour à l'Accueil</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================================
            END 403 AREA
    =================================-->
@stop