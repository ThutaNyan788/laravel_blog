@props(['blogs'])
<section class="container text-center" id="blogs">
    <h1 class="display-5 fw-bold mb-4">Blogs</h1>
    <div class="">

        <x-category-dropdown />

    </div>
    <form action="/" method="GET" class="my-3">

        @if (request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}" />
        @endif

        <div class="input-group mb-3">
            <input type="text" autocomplete="false" value="{{ request('search') }}" name="search"
                class="form-control" placeholder="Search Blogs..." />
            <button class="input-group-text bg-primary text-light" id="basic-addon2" type="submit">
                Search
            </button>
        </div>
    </form>
    <div class="row">

        @forelse ($blogs as $blog)
            <x-blog-card :blog="$blog" />
        @empty
            <p>There is no blog for that search</p>
        @endforelse


        <div>
            {{$blogs->links()}}
        </div>

    </div>
</section>
