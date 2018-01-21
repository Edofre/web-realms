@extends('layouts.app')

@section('title')
    {{ __('crud.show_name', ['name' => lcfirst($user->name)]) }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    {{ Breadcrumbs::render('admin.user.show', $user) }}
                    <div class="panel-heading clearfix">
                        <h1 class="panel-title pull-left">
                            {{ __('crud.show_name', ['name' => lcfirst($user->name)]) }}
                        </h1>
                        <div class="btn-group pull-right">
                            <a href="{!! route('admin.users.index') !!}" title="{{ __('crud.view_all', ['model' => lcfirst(__('user.users'))]) }}" class='btn btn-sm btn-primary'>
                                {{ __('crud.view_all', ['model' => lcfirst(__('user.users'))]) }}&nbsp;&nbsp;<span class="icon"><i class="fa fa-list"></i></span>
                            </a>
                            <a href="{!! route('admin.users.edit', [$user->id]) !!}" title="{{ __('crud.edit') }}" class="btn btn-sm btn-warning">
                                {{ __('crud.edit') }}&nbsp;&nbsp;<span class="icon"><i class="fa fa-pencil"></i></span>
                            </a>
                            {!! Form::open(['route' => ['admin.users.destroy', $user->id], 'method' => 'delete', 'class' => 'btn-group pull-right']) !!}
                            {!! Form::button(__('crud.delete'). '&nbsp;<i class="fa fa-trash"></i>', ['type' => 'submit', 'title'=> __('crud.delete'),'class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('".__('crud.are_you_sure')."')"]) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>

                    <div class="panel-body">
                        <div class="col-md-12">
                            <dl class="dl-horizontal">
                                <dt>{{ __('user.name') }}</dt>
                                <dd>{{ $user->name }}</dd>

                                <dt>{{ __('user.email') }}</dt>
                                <dd>{{ $user->email }}</dd>

                                <dt>{{ __('user.company_id') }}</dt>
                                <dd>{{ !is_null($user->company) ? link_to(route('admin.companies.show', $user->company), $user->company->name) : __('user.no_company') }}</dd>

                                <dt>{{ __('user.is_admin') }}</dt>
                                <dd>@boolean($user->is_admin)</dd>

                                <dt>{{ __('user.is_active') }}</dt>
                                <dd>@boolean($user->is_active)</dd>
                            </dl>
                        </div>
                        <div class="col-md-12">
                            <dl class="dl-horizontal well">
                                <dt>{{ __('crud.created_at') }}</dt>
                                <dd>{{ !is_null($user->created_at) ? $user->created_at->format('Y-m-d H:i:s') : '-' }}</dd>

                                <dt>{{ __('crud.updated_at') }}</dt>
                                <dd>{{ !is_null($user->updated_at) ? $user->updated_at->format('Y-m-d H:i:s') : '-' }}</dd>

                                <dt>{{ __('revisions.revisions') }}</dt>
                                <dd>
                                    @if($user->revisionHistory->isEmpty())
                                        {{ __('crud.no_revision_history') }}
                                    @else
                                        @include('admin.revisions._history', ['route' => route('admin.datatables.revisions.user', [$user->id])])
                                    @endif
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection