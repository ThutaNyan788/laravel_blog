        <div class="dropdown">
            <a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                {{ isset($currentCategory) ? $currentCategory->name : 'Filter By Category' }}
            </a>
            {{-- /?category={{ $category->slug }} --}}
            <ul class="dropdown-menu">
                @foreach ($categories as $category)
                    <li><a class="dropdown-item"
                            href="/?category={{ $category->slug }}{{ request('search') ? '&search=' . request('search') : ' ' }}">{{ $category->name }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
