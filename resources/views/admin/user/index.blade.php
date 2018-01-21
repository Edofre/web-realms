@extends('layouts.app')

@section('title')
    {{ __('crud.view_all', ['model' => lcfirst(__('user.users'))]) }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    {{ Breadcrumbs::render('admin.user.index') }}
                    <div class="panel-heading clearfix">
                        <h1 class="panel-title pull-left">
                            {{ __('crud.view_all', ['model' => lcfirst(__('user.users'))]) }}
                        </h1>
                        <div class="btn-group pull-right">
                            <a href="{!! route('admin.users.create') !!}" title="{{ __('crud.create') }}" class='btn btn-sm btn-success'>
                                {{ __('crud.create') }}&nbsp;&nbsp;<span class="icon"><i class="fa fa-plus"></i></span>
                            </a>
                        </div>
                    </div>

                    <div class="panel-body">
                        <table class="table table-responsive table-striped table-hover table-condensed" id="datatable-users">
                            <thead>
                            <tr>
                                <th>{{ __('user.name') }}</th>
                                <th>{{ __('user.email') }}</th>
                                <th>{{ __('user.is_admin') }}</th>
                                <th>{{ __('user.is_active') }}</th>
                                <th>{{ __('user.company_id') }}</th>
                                <th>{{ __('crud.updated_at') }}</th>
                                <th>{{ __('crud.actions') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script type="text/javascript">
        $('#datatable-users').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            ajax: {
                url: '{{ route('admin.datatables.users') }}'
            },
            language: {
                url: "//cdn.datatables.net/plug-ins/1.10.13/i18n/Dutch.json"
            },
            columns: [
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'is_admin', name: 'is_admin'},
                {data: 'is_active', name: 'is_active'},
                {data: 'company_id', name: 'company_id'},
                {data: 'updated_at', name: 'updated_at'},
                {data: 'action', name: 'action', searchable: false, orderable: false}
            ]
        });
    </script>
@endpush