@csrf
<form-input name="name"
                      title="Name"
                      placeholder="Name"
                      value="{{ old('name', $type->name) }}"
                      error="{{ $errors->first('name') }}">
</form-input>

<div class="form-group">
    <label for="description">Description</label>
    <textarea name="description" id="description" class="form-control" placeholder="Description" rows="5">{{ old('description', $type->description) }}</textarea>
    @error('description')
    <div class="text-danger">*{{ $message }}</div>
    @enderror
</div>
