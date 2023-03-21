@props(['blog'])
<div class="col-md-4 mb-4">
    <div class="card">
        <img src="https://creativecoder.s3.ap-southeast-1.amazonaws.com/blogs/GOLwpsybfhxH0DW8O6tRvpm4jCR6MZvDtGOFgjq0.jpg"
            class="card-img-top" alt="..." />
        <div class="card-body">
            <h3 class="card-title">{{ $blog->title }}</h3>
            <p class="fs-6 text-secondary">
                <a href="/?author={{ $blog->author->username }}">{{ $blog->author->name }}</a>
                <span> - {{ $blog->created_at->diffForHumans() }}</span>
            </p>
            <div class="tags my-3">
                {{-- <span class="badge bg-primary">Html</span>
                        <span class="badge bg-secondary">Css</span>
                        <span class="badge bg-success">Php</span>
                        <span class="badge bg-danger">Javascript</span> --}}
                <a href="/categories/{{ $blog->category->slug }}"
                    class="badge bg-warning text-dark">{{ $blog->category->name }}</a>
            </div>
            <p class="card-text">
                {{ $blog->body }}
            </p>
            <a href="/blogs/{{ $blog->slug }}" class="btn btn-primary">Read More</a>
        </div>
    </div>
</div>
