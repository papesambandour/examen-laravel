


@extends('layout-admin')

@section('title')
    {{trans('etudiant.title_update')}}
@endsection
@section('css')

@endsection

@section('content')

    <div class="row">
        <div class="col-md-6 grid-margin stretch-card offset-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center">Mise a jour niveaux</h4>

                    <form class="forms-sample" action="{{url('/user/update').'/'.$user->id}}" method="post">
                        <div class="form-group">
                            <label for="name">Nom complet</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}" placeholder="Nom complet" required>

                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}" placeholder="Email" required>

                        </div>

                        <button type="submit" class="btn btn-gradient-primary mr-2">{{trans('commun.edit')}}</button>
                        <a  class="btn btn-light" href="{{url('/user/list')}}">{{trans('commun.cancel')}}</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')

@endsection

