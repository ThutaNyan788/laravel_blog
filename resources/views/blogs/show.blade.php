<x-layout>
    <!-- singloe blog section -->
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto text-center">
                <img src="https://creativecoder.s3.ap-southeast-1.amazonaws.com/blogs/GOLwpsybfhxH0DW8O6tRvpm4jCR6MZvDtGOFgjq0.jpg"
                    class="card-img-top" alt="..." />
                <h3 class="my-3">{{ $blog->title }}</h3>
                <div>
                    <div>Author - <a href="/?author={{ $blog->author->username }}">{{ $blog->author->name }}</a></div>
                    <a href="/categories/{{ $blog->category->slug }}"
                        class="badge bg-primary">{{ $blog->category->name }}</a>
                    <div class="text-secondary">{{ $blog->created_at->diffForHumans() }}</div>

                    @auth
                        <div class="text-secondary">
                            <form action="/blogs/{{$blog->slug}}/subscription" method="POST">
                                @csrf
                                @if(auth()->user()->isSubscribed($blog))
                                <button type="submit" class="btn btn-danger">unsubscribe</button>
                                @else
                                <button  type="submit"class="btn btn-warning">subscribe</button>
                                @endif
                            </form>
                        </div>
                    @endauth
                </div>
                <p class="lh-md mt-3">
                    {{ $blog->body }}
                </p>
            </div>
        </div>
    </div>


    <x-comments :comments="$blog->comments()->paginate(5)" :blog="$blog" />



    <x-blog_you_may_like :randomBlogs="$randomBlogs"></x-blog_you_may_like>
</x-layout>
