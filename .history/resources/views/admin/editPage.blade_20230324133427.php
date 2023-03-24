
<x-layout>
    <div class="container my-3">
        <div class="text-center">
            <h2  class="text-ceneter">Blog Edit Page</h2>

        </div>


            <div class="row">
                <div class="col-md-6 mx-auto">
                    <form class='form' action="{{ route("admin#blogs#update",$blog->slug)}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <x-input name='title' title="Title" type="text" value="{{ $blog->title }}"/>

                        <x-input name='slug' title="Slug" type="text" value="{{ $blog->slug }}"/>

                        <x-input name="photo" title="Photo" type="file" value="{{ $blog->photo }}"/>



                        <div class="container">
                            <img src="{{ $blog->photo }}" class="img-thumbnail" alt="{{ $blog->name }}">
                        </div>



                        <x-input name="intro" title="Intro" type="text" value="{{ $blog->intro }}"/>

                        <div class="mb-3">
                            <label for="body" class="form-label">Body</label>
                            <x-textarea id="summernote" name="body" cols="10" rows="15" value="{{ $blog->body }}"/>
                            <x-error name='body'/>
                        </div>

                        <x-category-input id="{{ $blog->category->id }}"/>

                        {{-- <div class="mb-3">
                          <label for="title" class="form-label">Title</label>
                          <input type="text" value="{{ $blog->title }}" name="title" class="form-control" id="title" placeholder="Enter Title">

                          <x-error name='title'/>
                        </div>



                        <div class="mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" value="{{ $blog->slug }}" name="slug" class="form-control" id="slug" placeholder="Enter Slug">

                            <x-error name='slug'/>

                        </div>


                        <div class="mb-3">
                            <label for="intro" class="form-label">Intro</label>
                            <input type="text" value="{{ $blog->intro }}" name="intro" class="form-control" id="slug" placeholder="Enter Slug">

                            <x-error name='slug'/>

                        </div>

                        <div class="mb-3">
                            <label for="photo" class="form-label">Photo</label>
                            <input type="file" name="photo" class="form-control" id="photo" value="{{ $blog->photo }}">

                            <x-error name='photo'/>

                        </div>


                        <div class="container">
                            <img src="{{ $blog->photo }}" class="img-thumbnail" alt="{{ $blog->name }}">
                        </div>



                        <div class="mb-3">
                            <label for="body" class="form-label">Body</label>
                            <textarea id="summernote" type="text"  name="body" cols="10" rows="10" class="form-control" id="body" placeholder="Enter Body">
                                {{ $blog->body }}
                            </textarea>

                            <x-error name='body'/>

                        </div>


                        <div class="mb-3">
                            <label for="category_id" class="form-label">Category</label>
                            <select name="category_id" id="category_id" class="form-select">
                                <option value="" selected disabled>Select Your Category</option>
                                @foreach ($categories as $category)

                                    <option value="{{ $category->id }}" {{ $blog->category->id == $category->id ? "selected" : " " }}>{{ $category->name }}</option>

                                @endforeach
                            </select>


                          <x-error name='category_id'/>

                        </div> --}}


                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>

    </div>
</x-layout>
