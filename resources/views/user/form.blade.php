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
<form-password name="password"
            title="Password"
            placeholder="Password"
            value="{{ old('password', 'hiddensecret') }}"
            error="{{ $errors->first('password') }}">
</form-password>
<form-password name="password_confirmation"
            title="Confirm Password"
            placeholder="Password"
            value="{{ old('password_confirmation', 'hiddensecret') }}"
            error="{{ $errors->first('password_confirmation') }}">
</form-password>
