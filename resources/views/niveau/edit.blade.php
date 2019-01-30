


@extends('layout-admin')

@section('title')
    {{trans('commun.title_level')}}
@endsection
@section('css')

@endsection

@section('content')

    <div class="row">
        <div class="col-md-6 grid-margin stretch-card offset-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center">{{trans('commun.nv_update')}}</h4>

                    <form class="forms-sample" action="{{url('/niveau/update').'/'.$niveau->id}}" method="post">
                        <div class="form-group">
                            <label for="libelle">{{trans('commun.libelle')}}</label>
                            <input required type="text" class="form-control" id="libelle" name="libelle" value="{{$niveau->libelle}}" placeholder="{{trans('commun.level')}}">

                        </div>

                        <button type="submit" class="btn btn-gradient-primary mr-2">{{trans('commun.edit')}}</button>
                        <a  class="btn btn-light" href="{{url('/niveau/list')}}">{{trans('commun.cancel')}}</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')

@endsection

