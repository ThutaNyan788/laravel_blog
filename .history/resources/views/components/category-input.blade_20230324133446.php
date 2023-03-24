@props(['id'=>null])


<div class="mb-3">
    <label for="category_id" class="form-label">Category</label>
    <select name="category_id" id="category_id" class="form-select">
        <option value="" selected disabled>Select Your Category</option>
        @foreach ($categories as $category)
        <option value="{{ $category->id }}" {{ $id == $category->id ? "selected" : " " }}>{{ $category->name }}</option>
         @endforeach
    </select>


  <x-error name='category_id'/>
</div>
