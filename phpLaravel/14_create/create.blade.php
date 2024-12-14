{{-- BEGIN --}}
<h1>Создать категорию</h1>

<form action="{{ route('article_categories.store') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="name">Имя</label>
        <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}">
        @error('name')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="description">Описание</label>
        <textarea id="description" name="description" class="form-control">{{ old('description') }}</textarea>
        @error('description')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="state">Состояние</label>
        <select id="state" name="state" class="form-control">
            <option value="draft" {{ old('state') == 'draft' ? 'selected' : '' }}>Draft</option>
            <option value="published" {{ old('state') == 'published' ? 'selected' : '' }}>Published</option>
        </select>
        @error('state')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-success">Создать</button>
</form>
{{-- END --}}
