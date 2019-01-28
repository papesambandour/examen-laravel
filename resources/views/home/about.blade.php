@extends('layout-admin')

@section('title')
    Gestion Universite
@endsection
@section('css')

@endsection

@section('content')
    {{--TITLE START--}}
    <div class="page-header">
        <h3 class="page-title">
              <span class="page-title-icon bg-gradient-primary text-white mr-2">
                <i class="mdi mdi-home"></i>
              </span>
            A Propos
        </h3>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <span></span>{{trans('commun.deschome')}}
                    <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                </li>
            </ul>
        </nav>
    </div>

    {{--TITLE END--}}


    <div class="row">
        <div class="col-md-6 stretch-card grid-margin">
            <div class="card bg-gradient-danger card-img-holder text-white">
                <div class="card-body">
                    <h5 class="h5">Pape samba ndour</h5>
                    <div>
                        Etudiant en DITI 5<br>
                        Developpeur Chez payexpresse,empire digital<br>
                        Email: pape.ndour@empiredigital.info<br>
                        Telephone: 22177729382
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 stretch-card grid-margin">
            <div class="card bg-gradient-success card-img-holder text-white">
                <div class="card-body">
                    <h5 class="h5">Mamadou Cisse</h5>
                    <div>
                        Etudiant en DITI 5<br>
                        Developpeur Geomaticien<br>
                        Email: cissemam88@gmail.com<br>
                        Telephone: 777293282
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection

@section('js')

@endsection
