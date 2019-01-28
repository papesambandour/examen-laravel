


@extends('layout-admin')

@section('title')
    {{trans('etudiant.title_add')}}
@endsection
@section('css')

@endsection

@section('content')

    <div class="row">
        <div class="col-md-6 grid-margin stretch-card offset-3">

            <div class="card">
                <div class="card-body">

                    <h4 class="card-title text-center">Ajout niveau</h4>
                    <form class="forms-sample" action="{{url('/user/save')}}" method="post">
                        <div class="form-group">
                            <label for="nom">Nom complet</label>
                            <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" name="name" placeholder="nom complete" value="{{ old('name') }}" required>
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif

                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" placeholder="email" value="{{ old('email') }}" >
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif

                        </div>

                        <button type="submit" class="btn btn-gradient-primary mr-2">{{trans('commun.save')}}</button>
                        <button class="btn btn-light">{{trans('commun.cancel')}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')

@endsection

