<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('user.email') ? 'invalid' : '' }}">
        <label class="form-label required" for="email">{{ trans('cruds.user.fields.email') }}</label>
        <input class="form-control" type="email" name="email" id="email" required wire:model.defer="user.email">
        <div class="validation-message">
            {{ $errors->first('user.email') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.user.fields.email_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('user.password') ? 'invalid' : '' }}">
        <label class="form-label" for="password">{{ trans('cruds.user.fields.password') }}</label>
        <input class="form-control" type="password" name="password" id="password" wire:model.defer="password">
        <div class="validation-message">
            {{ $errors->first('user.password') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.user.fields.password_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('roles') ? 'invalid' : '' }}">
        <label class="form-label required" for="roles">{{ trans('cruds.user.fields.roles') }}</label>
        <x-select-list class="form-control" required id="roles" name="roles" wire:model="roles" :options="$this->listsForFields['roles']" multiple />
        <div class="validation-message">
            {{ $errors->first('roles') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.user.fields.roles_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('user.investor_type') ? 'invalid' : '' }}">
        <label class="form-label">{{ trans('cruds.user.fields.investor_type') }}</label>
        <select class="form-control" wire:model="user.investor_type">
            <option value="null" disabled>{{ trans('global.pleaseSelect') }}...</option>
            @foreach($this->listsForFields['investor_type'] as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
        <div class="validation-message">
            {{ $errors->first('user.investor_type') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.user.fields.investor_type_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('user.refcode') ? 'invalid' : '' }}">
        <label class="form-label" for="refcode">{{ trans('cruds.user.fields.refcode') }}</label>
        <input class="form-control" type="text" name="refcode" id="refcode" wire:model.defer="user.refcode">
        <div class="validation-message">
            {{ $errors->first('user.refcode') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.user.fields.refcode_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('user.user_type') ? 'invalid' : '' }}">
        <label class="form-label">{{ trans('cruds.user.fields.user_type') }}</label>
        <select class="form-control" wire:model="user.user_type">
            <option value="null" disabled>{{ trans('global.pleaseSelect') }}...</option>
            @foreach($this->listsForFields['user_type'] as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
        <div class="validation-message">
            {{ $errors->first('user.user_type') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.user.fields.user_type_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>