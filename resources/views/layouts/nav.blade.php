<div class="blog-masthead">
      <div class="container">
        <nav class="nav">
          <a class="nav-link active" href="/">Home</a>
          <a class="nav-link" href="/posts/create">Write a post</a>




          @if (Auth::check())
            <a class="nav-link" href="/posts/create">Write a post</a>
            <a class="nav-link ml-auto"  href="#" >{{ Auth::user()->name}}</a>
            <a class="nav-link " href="/logout">Logout</a>
          @endif




          @if (!Auth::check())

            <a class="nav-link ml-auto"  href="/register" >Register</a>
            <a class="nav-link "  href="/login" >Sign In</a>

          @endif






        </nav>
      </div>
    </div>
