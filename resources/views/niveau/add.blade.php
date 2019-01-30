


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

                    <h4 class="card-title text-center">{{trans('commun.nv_add')}}</h4>
                    <form class="forms-sample" action="{{url('/niveau/save')}}" method="post">
                        <div class="form-group">
                            <label for="nom">{{trans('commun.libelle')}}</label>
                            <input required type="text" class="form-control{{ $errors->has('libelle') ? ' is-invalid' : '' }}" id="libelle" name="libelle" placeholder="{{trans('commun.libelle')}}" value="{{ old('libelle') }}" >
                            @if ($errors->has('libelle'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nom') }}</strong>
                                    </span>
                            @endif

                        </div>

                        <button type="submit" class="btn btn-gradient-primary mr-2">{{trans('commun.save')}}</button>
                        <button type="reset" class="btn btn-light">{{trans('commun.cancel')}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')

@endsection

