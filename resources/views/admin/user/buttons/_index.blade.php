<div class="btn-group pull-right">
    <a class="btn btn-sm btn-primary" href="{{ route('admin.users.show', [$user]) }}">
        <span class="icon"><i class="fa fa-lg fa-eye"></i></span>
        <span>{{ __('crud.button_show') }}</span>
    </a>
    <a class="btn btn-sm btn-warning" href="{{ route('admin.users.edit', [$user]) }}">
        <span class="icon"><i class="fa fa-lg fa-pencil"></i></span>
        <span>{{ __('crud.button_edit') }}</span>
    </a>
    <a data-route="{{ route('admin.users.destroy', [$user]) }}" data-name="{{ $user->name }}" data-target="destroy-model" class="btn btn-sm btn-danger">
        <span class="icon"><i class="fa fa-lg fa-trash"></i></span>
        <span>{{ __('crud.delete') }}</span>
    </a>
</div>