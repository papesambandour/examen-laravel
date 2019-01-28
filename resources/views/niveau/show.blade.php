


@extends('layout-admin')

@section('title')
    {{trans('etudiant.title_details')}}
@endsection
@section('css')

@endsection

@section('content')

    <div class="row">
        <div class="col-md-6 grid-margin stretch-card offset-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center">Retourner sur la liste</h4>

                    <table class="table table-striped table-active">
                        <thead>
                        <tr>
                            <td>Niveaux</td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{$niveau->id}}</td>
                            <td>{{$niveau->libelle}}</td>

                        </tr>
                        </tbody>
                        <tfoot>
                        <a class="btn btn-primary btn-xs" href="{{url('/niveau/list')}}">{{trans('etudiant.gobacklist')}}</a>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')

@endsection

