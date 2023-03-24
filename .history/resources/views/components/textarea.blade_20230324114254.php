@props(['id','name','cols','rows'])

<textarea
id="{{ $id }}"
 type="text"
 name="{{ $name }}"
 cols="{{ $cols }}"
 rows="{{ $rows }}"
 class="form-control"
 id="{{ $id }}"
 placeholder="Enter {{ $name }}">
</textarea>
