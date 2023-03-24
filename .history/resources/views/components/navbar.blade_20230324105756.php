    <!-- navbar -->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">Creative Coder</a>
            <div class="d-flex">
                <a href="/" class="nav-link">{{ auth()->user()?->name }}</a>
                <a href="/" class="nav-link">Home</a>
                @if(@auth
                    
                @endauth)

                @endif
                <a href="{{ route("admin#blogs") }}" class="nav-link">Dashboard</a>

                <a href="/#blogs" class="nav-link">Blogs</a>
                <a href="#subscribe" class="nav-link">Subscribe</a>

                @if (auth()->check())
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="nav-link bg-dark border-0">Logout</button>
                    </form>
                @else
                    <a href="/register" class="nav-link">Register</a>
                    <a href="/login" class="nav-link">Login</a>
                @endif
            </div>
        </div>
    </nav>
