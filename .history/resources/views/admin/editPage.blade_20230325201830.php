
<x-layout>
    <div class="container my-3">
        <div class="text-center">
            <h2  class="text-ceneter">Blog Edit Page</h2>

        </div>


            <div class="row">
                <div class="col-md-6 mx-auto">
                    <form class='form' action="{{ route("admin#blogs#update",$blog->slug)}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <x-input name='title' title="Title" type="text" value="{{ $blog->title }}" :old=" old('title') "/>

                        <x-input name='slug' title="Slug" type="text" value="{{ $blog->slug }}" :old=" old('slug') "/>

                        <x-input name="photo" title="Photo" type="file" value="{{ $blog->photo }}" :old=" old('photo') "/>

                        <div class="container">
                            <img src="{{ $blog->photo }}" class="img-thumbnail" alt="{{ $blog->name }}">
                        </div>

                        <x-input name="intro" title="Intro" type="text" value="{{ $blog->intro }}" :old=" old('photo') "/>

                        <x-textarea id="summernote" name="body" title="Body" cols="10" rows="15" value="{{ $blog->body }}"/>

                        <x-category-input id="{{ $blog->category->id }}"/>

                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>

    </div>
</x-layout>
