


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
                    <h4 class="card-title text-center">{{trans('etudiant.title_update')}}</h4>

                    <form class="forms-sample" action="{{url('/etudiants/update').'/'.$etudiant->id}}" method="post">
                        <div class="form-group">
                            <label for="nom">{{trans('etudiant.l_name')}}</label>
                            <input type="hidden" name="id" id="id">
                            <input type="text" class="form-control" id="nom" name="nom" value="{{$etudiant->nom}}" placeholder="{{trans('etudiant.l_name')}}">

                        </div>
                        <div class="form-group">
                            <label for="prenom">{{trans('etudiant.f_name')}}</label>
                            <input type="text" class="form-control" value="{{$etudiant->prenom}}"  id="prenom" name="prenom" placeholder="{{trans('etudiant.f_name')}}">
                        </div>
                        <div class="form-group">
                            <label for="niveau_id">Niveau</label>
                            <select id="niveau_id" name="niveau_id" CLASS="form-control" required>
                                <option value="" hidden disabled selected>--Faite votre choix--</option>
                                @foreach($listeNiveau as $niveau)
                                    <option value="{{$niveau->id}}" @if($etudiant->niveau_id == $niveau->id) selected @endif >{{$niveau->libelle}}</option>
                                @endforeach
                            </select>

                        </div>

                        <button type="submit" class="btn btn-gradient-primary mr-2">{{trans('commun.edit')}}</button>
                        <a  class="btn btn-light" href="{{url('/etudiants/list')}}">{{trans('commun.cancel')}}</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')

@endsection

