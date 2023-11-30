<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ auth()->user()->getFirstMediaUrl('profile') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ auth()->user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i
                            class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>

            <li class="{{request()->is('home')?'active':null}}">
                <a href="{{url('home')}}">
                    <i class="fa fa-th"></i> <span>Home</span>
                </a>
            </li>
            <li class="{{ request()->is('news/add') ? 'active' : null }}">
                <a href="{{ url('news/add') }}">
                    <i class="fa fa-th"></i> <span>Add News</span>
                </a>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
