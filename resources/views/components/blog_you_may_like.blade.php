  <section class="blogs_you_may_like">
        <div class="container">
            <h3 class="text-center my-4 fw-bold">Blogs You May Like</h3>
            <div class="row text-center">
                @foreach ($randomBlogs as $blog)
                    <x-blog-card :blog="$blog"></x-blog-card>
                @endforeach
            </div>
        </div>
    </section>
