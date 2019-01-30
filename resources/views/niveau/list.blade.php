


@extends('layout-admin')

@section('title')
    {{trans('commun.title_level')}}
@endsection
@section('css')

@endsection

@section('content')
    <div class="row">
        @if(isset($add))
            <div class="alert alert-success">
                {{trans('commun.nv_msm_succes_saved')}}
            </div>
        @endif

            @if(isset($edit))
                <div class="alert alert-success">
                    {{trans('commun.nv_msm_succes_updated')}}
                </div>
            @endif
            @if(isset($delete))
                <div class="alert alert-success">
                    {{trans('commun.nv_msm_succes_delete')}}
                </div>
            @endif
    </div>
    <div class="row">

        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"> <a href="{{url('/niveau/add')}}" class="badge badge-gradient-danger btn" id="item_time">{{trans('commun.nv_add')}}</a></h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>{{trans('etudiant.level')}}</th>
                                <th style="text-align: center">{{trans('etudiant.action')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($niveaux as $n)
                                <tr>

                                    <td>{{$n->libelle}}</td>
                                    <td style="text-align: center">
                                        <a class="btn btn-success btn-sm" href="{{url('/niveau/show/').'/'.$n->id}}">{{trans('commun.details')}}</a>
                                        <a class="btn btn-warning btn-sm"   href="{{url('/niveau/edit/').'/'.$n->id}}">{{trans('commun.update')}}</a>
                                        <a class="btn btn-danger btn-sm" onclick="return confirm('Voulez-vous suprimer l\'etudiant ?')" href="{{url('/niveau/delete/').'/'.$n->id}}">{{trans('commun.delete')}}</a>
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
        {{$niveaux->links()}}
    </div>


@endsection

@section('js')
<script>
    setTimeout(function(){$('.alert-success').remove()},3000)
</script>
@endsection

