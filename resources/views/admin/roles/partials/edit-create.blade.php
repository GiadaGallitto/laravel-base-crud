@if ($errors->any())
    <div class="alert alert-danger">
        <h4>Check errors</h4>
    </div>
@endif

<form class="mt-5" action="{{ route($route, $role) }}" method="POST">
    @csrf
    @method($method)

    <div class="mb-3">
        <label for="name" class="form-label">Role Name:</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
            value="{{ old('name', $role->name) }}">
        @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="color" class="form-label">Role Color:</label>
        <input type="color" class="form-control @error('color') is-invalid @enderror" id="color" name="color"
            value="{{ old('color', $role->color) }}">
        @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">{{ $button }}</button>

</form>
