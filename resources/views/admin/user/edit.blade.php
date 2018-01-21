@extends('layouts.app')

@section('title')
    {{ __('crud.edit_name', ['name' => lcfirst($user->name)]) }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    {{ Breadcrumbs::render('admin.user.edit', $user) }}
                    <div class="panel-heading clearfix">
                        <h1 class="panel-title pull-left">
                            {{ __('crud.edit_name', ['name' => lcfirst($user->name)]) }}
                        </h1>
                        <div class="btn-group pull-right">
                            <a href="{!! route('admin.users.index') !!}" title="{{ __('crud.view_all', ['model' => lcfirst(__('user.users'))]) }}" class='btn btn-sm btn-primary'>
                                {{ __('crud.view_all', ['model' => lcfirst(__('user.users'))]) }}&nbsp;<span class="icon"><i class="fa fa-list"></i></span>
                            </a>
                            <a href="{!! route('admin.users.show', [$user->id]) !!}" title="{{ __('crud.show') }}" class="btn btn-sm btn-info">
                                {{ __('crud.show') }}&nbsp;<span class="icon"><i class="fa fa-eye"></i></span>
                            </a>
                            {!! Form::open(['route' => ['admin.users.destroy', $user->id], 'method' => 'delete', 'class' => 'btn-group pull-right']) !!}
                            {!! Form::button(__('crud.delete'). '&nbsp;<i class="fa fa-trash"></i>', ['type' => 'submit', 'title'=> __('crud.delete'),'class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('".__('crud.are_you_sure')."')"]) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>

                    <div class="panel-body">
                        {!! Form::model($user, ['route' => ['admin.users.update', $user->id], 'method' => 'patch', 'class' => 'form-horizontal']) !!}

                        @include('admin.user._fields')

                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success">
                                    <span class="icon is-small"><i class="fa fa-floppy-o"></i></span>
                                    <span>{{ __('crud.update') }}</span>
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