<x-layout>
    <div class="container my-3">
        <div class="text-center">
            <h2  class="text-ceneter">Blog Create Page</h2>

        </div>


            <div class="row">
                <div class="col-md-6 mx-auto">
                    <form class='form' action="{{ route("admin#store") }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <x-input name='text' title="Title" type="text"/>

                        <x-input name='slug' title="Slug" type="text"/>

                        <x-input name="photo" title="Photo" type="file"/>

                        <x-input name="intro" title="Intro" type="text"/>

                        <div class="mb-3">
                            <label for="body" class="form-label">Body</label>
                            <x-textarea id="summernote" name="body" cols="10" rows="20"/>
                            <x-error name='body'/>
                        </div>

                        <x-category-input/>


                        {{-- <div class="mb-3">
                            <label for="category_id" class="form-label">Category</label>
                            <select name="category_id" id="category_id" class="form-select">
                                <option value="" selected disabled>Select Your Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
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
