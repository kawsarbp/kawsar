<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{route('admin.dashboard')}}">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link {{request()->is('admin/dashboard') ? 'active':''}}" href="{{route('admin.dashboard')}}">Dashboard</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{request()->is('admin/category') ? 'active':''}}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item {{request()->is('admin/category/create') ? 'active':''}}" href="{{route('admin.category.create')}}">Add Category</a></li>
                        <li><a class="dropdown-item {{request()->is('admin/category') ? 'active':''}}" href="{{route('admin.category.index')}}">Manage Categories</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{request()->is('admin/post') ? 'active':''}}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Post
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item {{request()->is('admin/post/create') ? 'active':''}}" href="{{route('admin.post.create')}}">Add Post</a></li>
                        <li><a class="dropdown-item {{request()->is('admin/post') ? 'active':''}}" href="{{route('admin.post.index')}}">Manage Post</a></li>
                    </ul>
                </li>
                <form action="{{route('user.logout')}}" method="POST">
                    @csrf
                    <a href="{{route('user.logout')}}" onclick="event.preventDefault(); this.closest('form').submit()" class="nav-link">LogOut</a>
{{--                    <button type="submit" class="btn btn-danger btn-sm mt-1">Logout</button>--}}
                </form>
            </ul>
        </div>
    </div>
</nav>
