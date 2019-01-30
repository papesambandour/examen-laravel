


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

                    <h4 class="card-title text-center">{{trans('etudiant.title_add')}}</h4>
                    <form class="forms-sample" action="{{url('/etudiants/save')}}" method="post">
                        <div class="form-group">
                            <label for="nom">{{trans('etudiant.l_name')}}</label>
                            <input type="text" class="form-control{{ $errors->has('nom') ? ' is-invalid' : '' }}" id="nom" name="nom" placeholder="{{trans('etudiant.l_name')}}" value="{{ old('nom') }}" >
                            @if ($errors->has('nom'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nom') }}</strong>
                                    </span>
                            @endif

                        </div>
                        <div class="form-group">
                            <label for="prenom">{{trans('etudiant.f_name')}}</label>
                            <input type="text" class="form-control{{ $errors->has('prenom') ? ' is-invalid' : '' }}" id="prenom" name="prenom" value="{{ old('prenom') }}"  placeholder="{{trans('etudiant.f_name')}}">
                            @if ($errors->has('prenom'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('prenom') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="niveau_id">{{trans('etudiant.level')}}</label>
                            <select id="niveau_id" name="niveau_id" class="form-control" required>
                                <option value="" hidden disabled selected>--Faite votre choix--</option>
                                @foreach($listeNiveau as $niveau)
                                 <option value="{{$niveau->id}}">{{$niveau->libelle}}</option>
                                @endforeach
                            </select>

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

