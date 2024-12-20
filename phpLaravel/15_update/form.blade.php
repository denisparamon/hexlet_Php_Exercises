{{-- BEGIN --}}
<div>
    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="{{ old('name', $category->name ?? '') }}">
</div>

<div>
    <label for="description">Description</label>
    <textarea name="description" id="description">{{ old('description', $category->description ?? '') }}</textarea>
</div>

<div>
    <label for="state">State</label>
    <select name="state" id="state">
        <option value="draft" {{ old('state', $category->state ?? '') === 'draft' ? 'selected' : '' }}>Draft</option>
        <option value="published" {{ old('state', $category->state ?? '') === 'published' ? 'selected' : '' }}>Published</option>
    </select>
</div>
{{-- END --}}
