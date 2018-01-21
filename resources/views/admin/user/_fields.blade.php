<div class="col-md-12">
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="name" class="col-md-4 control-label">{{ __('user.name') }}</label>
        <div class="col-md-6">
            {!! Form::text('name', old('name'), ['class' => 'form-control', 'required']) !!}
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="email" class="col-md-4 control-label">{{ __('user.email') }}</label>
        <div class="col-md-6">
            {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <label for="password" class="col-md-4 control-label">{{ __('user.password') }}</label>
        <div class="col-md-6">
            {!! Form::password('password', ['class' => 'form-control']) !!}
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('company_id') ? ' has-error' : '' }}">
        <label for="company_id" class="col-md-4 control-label">{{ __('user.company_id') }}</label>
        <div class="col-md-6">
            {!! Form::select('company_id', \App\Models\Company::getFormData(), null, ['class' => 'select2', 'placeholder'=> __('user.select_company')]) !!}
            @if ($errors->has('company_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('company_id') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group">
        <label for="is_admin" class="col-md-4 control-label">{{ __('user.is_admin') }}</label>
        <div class="col-md-6">
            <input type="checkbox" id="is_admin" name="is_admin" value="1" {{ old('is_admin', $user->is_admin) ? 'checked' : '' }}>
        </div>
    </div>

    <div class="form-group">
        <label for="is_active" class="col-md-4 control-label">{{ __('user.is_active') }}</label>
        <div class="col-md-6">
            <input type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', $user->is_active) ? 'checked' : '' }}>
        </div>
    </div>
</div>


@push('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            $("select").select2({
                placeholder: {placeholder: ''}
            });
        });
    </script>
@endpush