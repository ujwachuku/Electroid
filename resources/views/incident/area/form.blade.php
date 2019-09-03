@csrf
<form-input name="name"
                      title="Name"
                      placeholder="Name"
                      value="{{ old('name', $area->name) }}"
                      error="{{ $errors->first('name') }}">
</form-input>
