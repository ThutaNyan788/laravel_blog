<x-layout>

    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <!-- hero section -->
    <x-hero />

    <!-- blogs section -->
    <x-blog-section :blogs="$blogs" />


</x-layout>
