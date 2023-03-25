@props(['id','name','cols','rows','title','old','value'=>null])

<div class="mb-3">
    <label for="{{ $name }}" class="form-label">{{ $title }}</label>
    <textarea
id="{{ $id }}"
 type="text"
 name="{{ $name }}"
 cols="{{ $cols }}"
 rows="{{ $rows }}"
 class="form-control"
 id="{{ $id }}"
 placeholder="Enter {{ $name }}">
 {!! $old ? $old !!}
</textarea>
<x-error name='{{ $name }}'/>
</div>
