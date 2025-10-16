<div class="row border-bottom white-bg">
    <nav class="navbar navbar-expand-lg navbar-static-top" role="navigation">
        <!-- <img src="img/logo.jpg" alt="logo" width="100"> -->
        <a href="#" class="navbar-brand">HRM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
                aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-reorder"></i>
        </button>
        <div class="navbar-collapse collapse" id="navbar">
            <ul class="nav navbar-nav mr-auto">
                <li class="active">
                    <a aria-expanded="false" role="button" href="hierarchy.html"><i class="fa fa-save"></i></a>
                </li>
                <li class="dropdown">
                    <a href="index.html"> Human Resources</a>
                </li>
                <li class="dropdown">
                    <a aria-expanded="false" role="button" href="#" class="dropdown-toggle"
                       data-toggle="dropdown"> Fnance</a>
                    <ul role="menu" class="dropdown-menu">
                        <li><a href="#">Menu item</a></li>
                        <li><a href="#">Menu item</a></li>
                        <li><a href="#">Menu item</a></li>
                        <li><a href="#">Menu item</a></li>
                    </ul>
                </li>
                <li>
                    <a aria-expanded="false" role="button" href="#">VTA Modules</a>
                </li>
                <li>
                    <a aria-expanded="false" role="button" href="#">Equipment Rentails</a>
                </li>
                <li>
                    <a aria-expanded="false" role="button" href="#">Camp Managment</a>
                </li>
                <li>
                    <a aria-expanded="false" role="button" href="#">Inventory Managment</a>
                </li>
                <li>
                    <a aria-expanded="false" role="button" href="#">Project Control</a>
                </li>
            </ul>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <form method="POST" action="{{ route('logout') }}" role="button">
                        @csrf
                        <a onclick="event.preventDefault(); this.closest('form').submit();">
                            {{Auth::user()->name}} <i class="fa fa-sign-out"></i>
                        </a>
                    </form>
                </li>
            </ul>
        </div>
    </nav>
</div>
