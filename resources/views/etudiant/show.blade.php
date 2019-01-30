


@extends('layout-admin')

@section('title')
    {{trans('commun.title_etudent')}}
@endsection
@section('css')

@endsection

@section('content')

    <div class="row">
        <div class="col-md-6 grid-margin stretch-card offset-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center">{{trans('etudiant.title_details')}}</h4>

                    <table class="table table-striped table-active">
                        <thead>
                        <tr>
                            <td>{{trans('etudiant.id')}}</td>
                            <td>{{trans('etudiant.l_name')}}</td>
                            <td>{{trans('etudiant.f_name')}}</td>
                            <td>{{trans('etudiant.level')}}</td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{$etudiant->id}}</td>
                            <td>{{$etudiant->nom}}</td>
                            <td>{{$etudiant->prenom}}</td>
                            <td>{{$etudiant->niveau->libelle}}</td>

                        </tr>
                        </tbody>
                        <tfoot>
                        <a class="btn btn-primary btn-xs" href="{{url('/etudiants/list')}}">{{trans('etudiant.gobacklist')}}</a>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')

@endsection

