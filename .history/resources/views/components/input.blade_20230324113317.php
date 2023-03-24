@props(['name','title',"type"])

<div class="mb-3">
    <label for="{{ $name }}" class="form-label">{{ $title }}</label>
    <input type="{{ $type }}" name="{{ $name }}" class="form-control" id="{{ $name }}" placeholder="Enter {{ $ }}">

    <x-error name='title'/>
  </div>
