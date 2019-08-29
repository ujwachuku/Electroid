@csrf
<form-input name="name"
                      title="Name"
                      placeholder="Name"
                      value="{{ old('name', $bay->name) }}"
                      error="{{ $errors->first('name') }}">
</form-input>
