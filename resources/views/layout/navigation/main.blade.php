<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Transorder</a>
        </div>

        <div class="collapse navbar-collapse" id="navbar">
            @if(!Auth::check())
                @include('layout.navigation.type.guest')
            @else
                @include('layout.navigation.type.logged_in')
            @endif
        </div>
    </div>
</nav>
