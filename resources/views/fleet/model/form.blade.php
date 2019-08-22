@csrf
<vehicle-make-select-component value="{{ old('make_id', $model->make ? $model->make->id : '') }}"></vehicle-make-select-component>

<form-input name="name"
                      title="Name"
                      placeholder="Name"
                      value="{{ old('name', $model->name) }}"
                      error="{{ $errors->first('name') }}">
</form-input>
