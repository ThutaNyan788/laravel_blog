<x-layout>
    <div class="container my-3">
        <div class="text-center">
            <h2  class="text-ceneter">Blog Edit Page</h2>

        </div>


            <div class="row">
                <div class="col-md-6 mx-auto">
                    <form class='form' action="/admin/blogs" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
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
                            <input type="file" name="photo" class="form-control" id="photo" >

                            <x-error name='photo'/>

                        </div>



                        <div class="mb-3">
                            <label for="body" class="form-label">Body</label>
                            <textarea type="text" value="{{ $blog->body }}" name="body" cols="10" rows="10" class="form-control" id="body" placeholder="Enter Body"></textarea>

                            <x-error name='body'/>

                        </div>


                        <div class="mb-3">
                            <label for="category_id" class="form-label">Category</label>
                            <select name="category_id" id="category_id" class="form-select">
                                <option value="" selected disabled>Select Your Category</option>
                                @foreach ($categories as $category)
                                    @if($condition)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endif
                                @endforeach
                            </select>


                          <x-error name='category_id'/>

                        </div>


                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>

    </div>
</x-layout>
