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
            {{trans('commun.dashboard')}}
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
        <div class="col-md-4 stretch-card grid-margin">
            <div class="card bg-gradient-danger card-img-holder text-white">
                <div class="card-body">
                    <img src="{{asset('admin/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image">
                    <h4 class="font-weight-normal mb-3">{{trans('commun.nbetu')}}
                        <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5"><span id="price_jour">{{$nbetudiant}}</span></h2>
                   {{-- <h6 class="card-text">Ventes :  <span id="vente_jour">{{''}}</span></h6>--}}
                </div>
            </div>
        </div>
        <div class="col-md-4 stretch-card grid-margin">
            <div class="card bg-gradient-info card-img-holder text-white">
                <div class="card-body">
                    <img src="{{asset('admin/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image">
                    <h4 class="font-weight-normal mb-3">{{trans('commun.nbtrans')}}
                        <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5"> <span id="price_heb">{{$nbInscription}}</span></h2>
                   {{-- <h6 class="card-text">Ventes :  <span id="vente_heb">{{$nbTransHeb->nbTrans}}</span></h6>--}}
                </div>
            </div>
        </div>
        <div class="col-md-4 stretch-card grid-margin">
            <div class="card bg-gradient-success card-img-holder text-white">
                <div class="card-body">
                    <img src="{{asset('admin/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image">
                    <h4 class="font-weight-normal mb-3">{{trans('commun.nbprof')}}
                        <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5"><span id="price_mois">{{$nbprof}}</span></h2>
                   {{-- <h6 class="card-text">Ventes :  <span id="vente_mois">{{$nbTransMens->nbTrans}}</span></h6>--}}
                </div>
            </div>
        </div>
    </div>



@endsection

@section('js')

@endsection
