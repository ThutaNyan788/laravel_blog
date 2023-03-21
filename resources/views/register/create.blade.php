<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-4 m-auto my-4">
                <div class="card p-4 shadow-sm">
                    <form action="/register" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputName1" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputName1"
                                aria-describedby="emailHelp">

                            @error('name')
                                <p class="text text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputUsername1" class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" id="exampleInputUsername1">

                            @error('username')
                                <p class="text text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="text" name="email" class="form-control" id="exampleInputEmail1">

                            @error('email')
                                <p class="text text-danger">{{ $message }}</p>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleIPassword1">

                            @error('password')
                                <p class="text text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</x-layout>
