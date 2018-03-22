<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li>
                <a href="{{ route('index') }}"><i class="fa fa-dashboard fa-fw"></i>Home Page</a>
            </li>
            <li>
                <a href="{{ route('lists') }}"><i class="fa fa-list fa-fw"></i> Lists<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('lists') }}">Show all Lists</a>
                    </li>
                    <li>
                        <a href="{{ route('createList') }}">Create List</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>

            <li>
                <a href="{{ route('items') }}"><i class="fa fa-book fa-fw"></i> Items<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('items') }}">Show all Items</a>
                    </li>
                    <li>
                        <a href="{{ route('createItem') }}">Create Item</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>


        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>