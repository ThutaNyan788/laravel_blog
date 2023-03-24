@props(['name','title',"type",'value' => null])

<div class="mb-3">
    <label for="{{ $name }}" class="form-label">{{ $title }}</label>
    <input type="{{ $type }}" name="{{ $name }}" value="{{ $ }}" class="form-control" id="{{ $name }}" placeholder="Enter {{ $title }}">

    <x-error :name="$name"/>
</div>
