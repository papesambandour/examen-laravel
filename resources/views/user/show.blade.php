


@extends('layout-admin')

@section('title')
    {{trans('commun.title_user')}}
@endsection
@section('css')

@endsection

@section('content')

    <div class="row">
        <div class="col-md-6 grid-margin stretch-card offset-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center">{{trans('commun.userdetails')}}</h4>

                    <table class="table table-striped table-active">
                        <thead>
                        <tr>
                            <td>{{trans('commun.fullname')}}</td>
                            <td>{{trans('commun.email')}}</td>
                            <td>{{trans('etudiant.id')}}</td>
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
                        <a class="btn btn-primary btn-xs" href="{{url('/user/list')}}">{{trans('commun.goback')}}</a>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')

@endsection

