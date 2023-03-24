<x-layout>


    <div class="container my-4">
        <div class="row">

            <div class="col-md-5">
                <div class="container">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="/admin">All Blogs</a>
                        </li>
                        <li class="list-group-item">
                            <a href="/admin/createPage">Create Blogs</a>
                        </li>
                      </ul>
                </div>
            </div>

            <div class="col-md-7">
                <div class="container">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Intro</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>

                            @foreach ($blogs as $blog)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $blog->title }}</td>
                                <td>{{ $blog->intro }}</td>
                                <td>
                                    <div class="d-flex ">
                                        <form>
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </form>
                                        
                                        <a href="" class="btn btn-primary btn-sm ">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                    </div>
                                </td>
                              </tr>
                            @endforeach


                        </tbody>
                      </table>
                </div>
            </div>

        </div>
    </div>

</x-layout>
