


@extends('layout-admin')

@section('title')
    {{trans('etudiant.listetu')}}
@endsection
@section('css')

@endsection

@section('content')
    <div class="row">
        @if(isset($add))
            <div class="alert alert-success">
                {{trans('etudiant.msm_succes_saved')}}
            </div>
        @endif

            @if(isset($edit))
                <div class="alert alert-success">
                    {{trans('etudiant.msm_succes_updated')}}
                </div>
            @endif
            @if(isset($delete))
                <div class="alert alert-success">
                    {{trans('etudiant.msm_succes_delete')}}
                </div>
            @endif
    </div>
    <div class="row">

        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"> <a href="{{url('/user/add')}}" class="badge badge-gradient-danger btn" id="item_time">Ajout Utilisateur</a></h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Nom complet</th>
                                <th>Email</th>
                                <th style="text-align: center">{{trans('etudiant.action')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $u)
                                <tr>

                                    <td>{{$u->name}}</td>
                                    <td>{{$u->email}}</td>
                                    <td style="text-align: center">
                                        <a class="btn btn-success btn-sm" href="{{url('/user/show/').'/'.$u->id}}">{{trans('commun.details')}}</a>
                                        <a class="btn btn-warning btn-sm"   href="{{url('/user/edit/').'/'.$u->id}}">{{trans('commun.update')}}</a>
                                        <a class="btn btn-danger btn-sm" onclick="return confirm('Voulez-vous suprimer l\'etudiant ?')" href="{{url('/user/delete/').'/'.$u->id}}">{{trans('commun.delete')}}</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        {{$users->links()}}
    </div>


@endsection

@section('js')
<script>
    setTimeout(function(){$('.alert-success').remove()},3000)
</script>
@endsection

