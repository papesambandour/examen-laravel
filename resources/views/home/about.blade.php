@extends('layout-admin')

@section('title')
    {{trans('commun.title_about')}}
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
           {{trans('commun.about')}}
        </h3>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <span></span>{{trans('commun.descabout')}}
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
                        {!!  trans('commun.dest_pape')!!}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 stretch-card grid-margin">
            <div class="card bg-gradient-success card-img-holder text-white">
                <div class="card-body">
                    <h5 class="h5">Mamadou Cisse</h5>
                    <div>
                       {!!  trans('commun.dest_cisse')!!}
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection

@section('js')

@endsection
