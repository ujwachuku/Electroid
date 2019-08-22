@csrf
<form-input name="name"
                      title="Name"
                      placeholder="Name"
                      value="{{ old('name', $make->name) }}"
                      error="{{ $errors->first('name') }}">
</form-input>
