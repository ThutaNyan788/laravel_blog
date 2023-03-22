<x-layout>
    <div class="container my-3">
        <div class="text-center">
            <h2  class="text-ceneter">Blog Create Page</h2>

        </div>


            <div class="row">
                <div class="col-md-6 mx-auto">
                    <form>

                        <div class="mb-3">
                          <label for="title" class="form-label">Title</label>
                          <input type="text" class="form-control" id="title" placeholder="Enter Title">
                        </div>

                        <div class="mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" class="form-control" id="slug" placeholder="Enter Slug">
                        </div>


                        <div class="mb-3">
                            <label for="body" class="form-label">Body</label>
                            <textarea type="text" class="form-control" id="body" placeholder="Enter Body"></textarea>
                        </div>


                        <div class="mb-3">
                            <label for="body" class="form-label">Category</label>
                            <textarea type="text" class="form-control" id="body" placeholder="Enter Body"></textarea>
                        </div>


                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>

    </div>
</x-layout>
