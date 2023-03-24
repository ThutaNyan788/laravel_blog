@props(['name','title',"type"])

<div class="mb-3">
    <label for="{{ $name }}" class="form-label">{{ $title }}</label>
    <input type="{{ $type }}" name="title" class="form-control" id="title" placeholder="Enter Title">

    <x-error name='title'/>
  </div>
