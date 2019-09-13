@csrf
<role-select-component value="{{ old('role_id', $user->roles->first() ? $user->roles->first()->id : '') }}"></role-select-component>
<form-input name="name"
            title="Name"
            placeholder="Name"
            value="{{ old('name', $user->name) }}"
            error="{{ $errors->first('name') }}">
</form-input>
<form-input name="email"
            title="Email"
            placeholder="Email"
            value="{{ old('email', $user->email) }}"
            error="{{ $errors->first('email') }}">
</form-input>
