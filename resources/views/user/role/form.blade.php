@csrf
<form-input name="name"
                      title="Name"
                      placeholder="Name"
                      value="{{ old('name', $role->name) }}"
                      error="{{ $errors->first('name') }}">
</form-input>
