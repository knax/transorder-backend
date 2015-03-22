<ul class="nav navbar-nav">
    @if(Auth::user()->type === 'admin')
        @include('layout.navigation.roles.admin')
    @elseif(Auth::user()->type === 'user')
        @include('layout.navigation.roles.user')
    @endif
</ul>
<ul class="nav navbar-nav navbar-right">
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
            {{Auth::user()->detail->name}} <span class="caret"></span>
        </a>
        <ul class="dropdown-menu" role="menu">
            <li><a href="#">{{Lang::get('navigation.user.change_detail')}}</a></li>
            <li class="divider"></li>
            <li><a href="#">{{Lang::get('navigation.user.logout')}}</a></li>
        </ul>
    </li>
</ul>