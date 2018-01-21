@extends('layouts.app')

@section('title')
    {{ __('crud.create_model', ['model' => lcfirst(__('user.user'))]) }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    {{ Breadcrumbs::render('admin.user.create') }}
                    <div class="panel-heading clearfix">
                        <h1 class="panel-title pull-left">
                            {{ __('crud.create_model', ['model' => lcfirst(__('user.user'))]) }}
                        </h1>
                        <div class="btn-group pull-right">
                            <a href="{!! route('admin.users.index') !!}" title="{{ __('crud.view_all', ['model' => lcfirst(__('user.users'))]) }}" class='btn btn-sm btn-primary'>
                                {{ __('crud.view_all', ['model' => lcfirst(__('user.users'))]) }}&nbsp;&nbsp;<span class="icon"><i class="fa fa-list"></i></span>
                            </a>
                        </div>
                    </div>

                    <div class="panel-body">
                        {!! Form::open(['route' => 'admin.users.store', 'class' => 'form-horizontal']) !!}

                        @include('admin.user._fields')

                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success">
                                    <span class="icon is-small"><i class="fa fa-floppy-o"></i></span>
                                    <span>{{ __('crud.create') }}</span>
                                </button>

                                <button type="reset" class="btn btn-warning">
                                    <span class="icon is-small"><i class="fa fa-repeat"></i></span>
                                    <span>{{ __('crud.reset') }}</span>
                                </button>

                                <a class="btn btn-danger" href="{!! route('admin.users.index') !!}" role="button">
                                    <span class="icon is-small"><i class="fa fa-times"></i></span>
                                    <span>{{ __('common.cancel') }}</span>
                                </a>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection