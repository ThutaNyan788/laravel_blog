<x-layout>
    <div class="container my-3">
        <div class="text-center">
            <h2  class="text-ceneter">Blog Create Page</h2>

        </div>


            <div class="row">
                <div class="col-md-6 mx-auto">
                    <form class='form' action="/admin/blogs" method="POST" enctype="multipart/form-data">
                        @csrf

                        <x-input name='title' title="Title" type="text"/>

                        <x-input name='slug' title="Slug" type="text"/>

                        <x-input name="photo" title="Photo" type="file"/>

                        <x-input name="intro" title="Intro" type="text"/>

                        <div class="mb-3">
                            <label for="body" class="form-label">Body</label>
                            <x-textarea id="summernote" name="body" cols="10" rows="15"/>
                            <x-error name='body'/>
                        </div>

                        <x-category-input/>


                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>

    </div>
</x-layout>
