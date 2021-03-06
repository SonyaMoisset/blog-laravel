<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">Laravel Blog</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li class="{{ Request::is('/') ? "active" : "" }}"><a href="/">Home <span class="sr-only">(current)</span></a></li>
            <li class="{{ Request::is('blog') ? "active" : "" }}"><a href="/blog">Blog <span class="sr-only">(current)</span></a></li>
            <li class="{{ Request::is('about') ? "active" : "" }}"><a href="/about">About</a></li>
            <li class="{{ Request::is('contact') ? "active" : "" }}"><a href="/contact">Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="{{ route('posts.index') }}">Posts</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Log out</a></li>
            </ul>
            </li>
        </ul>
        </div>
    </div>
</nav>