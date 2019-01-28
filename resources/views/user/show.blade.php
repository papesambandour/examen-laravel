


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
                            <td>Nom complete</td>
                            <td>Email</td>
                            <td>id</td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->id}}</td>

                        </tr>
                        </tbody>
                        <tfoot>
                        <a class="btn btn-primary btn-xs" href="{{url('/user/list')}}">{{trans('etudiant.gobacklist')}}</a>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')

@endsection

