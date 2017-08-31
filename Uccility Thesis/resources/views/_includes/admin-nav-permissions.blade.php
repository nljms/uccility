<div class="menu_section">
    <h5>Menu</h5>
    <ul class="nav side-menu">
        <li>
            <div class="row">
                <a href="#">
                    <div class="side-menu-item col-md-12">
                        <div class="col-md-2">
                            <i class="fa fa-tachometer"></i>
                        </div>
                        <div class="col-md-8">
                            Dashboard
                        </div>
                    </div>
                </a>
            </div>
        </li>

    @role('super admin')
        <li>
            <div class="row">
                <a href="/admin/users">
                    <div class="side-menu-item col-md-12">
                        <div class="col-md-2">
                            <i class="fa fa-users"></i>
                        </div>
                        <div class="col-md-8">
                            Users
                        </div>
                    </div>
                </a>
            </div>
        </li>

        <li>
            <div class="row">
                <a href="#">
                    <div class="side-menu-item col-md-12">
                        <div class="col-md-2">
                            <i class="fa fa-tachometer"></i>
                        </div>
                        <div class="col-md-8">
                            Analytics
                        </div>
                    </div>
                </a>
            </div>
        </li>
        @endrole

        @role('hr')
        <li>
            <div class="row">
                <a href="/admin/users">
                    <div class="side-menu-item col-md-12">
                        <div class="col-md-2">
                            <i class="fa fa-users"></i>
                        </div>
                        <div class="col-md-8">
                            Professors
                        </div>
                    </div>
                </a>
            </div>
        </li>

        <li>
            <div class="row">
                <a href="#">
                    <div class="side-menu-item col-md-12">
                        <div class="col-md-2">
                            <i class="fa fa-pencil"></i>
                        </div>
                        <div class="col-md-8">
                            Evaluations
                        </div>
                    </div>
                </a>
            </div>
        </li>
        @endrole

        @role('registrar')
        <li>
            <div class="row">
                <a href="#">
                    <div class="side-menu-item col-md-12">
                        <div class="col-md-2">
                            <i class="fa fa-users"></i>
                        </div>
                        <div class="col-md-8">
                            Professors
                        </div>
                    </div>
                </a>
            </div>
        </li>
        <li>
            <div class="row">
                <a href="#">
                    <div class="side-menu-item col-md-12">
                        <div class="col-md-2">
                            <i class="fa fa-graduation-cap"></i>
                        </div>
                        <div class="col-md-8">
                            Students
                        </div>
                    </div>
                </a>
            </div>
        </li>
        <li>
            <div class="row">
                <a href="#">
                    <div class="side-menu-item col-md-12">
                        <div class="col-md-2">
                            <i class="fa fa-users"></i>
                        </div>
                        <div class="col-md-8">
                            Grades
                        </div>
                    </div>
                </a>
            </div>
        </li>

        @endrole()

    </ul>
</div>



<div class="menu_section">
    <h5>Utilities</h5>
    <ul class="nav side-menu">
        <!-- <li><i class="fa fa-home"></i> <a href="#">Home</a> <span class="badge bg-orange pull-right">8</span></li> -->
        @role('super admin|hr|registrar|department head|coordinator|student assistant')
        <li>
            <div class="row">
                <a href="#">
                    <div class="side-menu-item col-md-12">
                        <div class="col-md-2">
                            <i class="fa fa-commenting-o"></i>
                        </div>
                        <div class="col-md-8">
                            Chats
                        </div>
                        <div class="col-md-2">
                            <span class="badge bg-orange pull-right">8</span>
                        </div>
                    </div>
                </a>
            </div>
        </li>

        <li>
            <div class="row">
                <a href="#">
                    <div class="side-menu-item col-md-12">
                        <div class="col-md-2">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <div class="col-md-8">
                            News and Announcements
                        </div>
                        <div class="col-md-2">
                            <span class="badge bg-orange pull-right">2</span>
                        </div>
                    </div>
                </a>
            </div>
        </li>
        @endrole()
        <li>
            <div class="row">
                <a href="#">
                    <div class="side-menu-item col-md-12">
                        <div class="col-md-2">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <div class="col-md-8">
                            Calendar
                        </div>
                    </div>
                </a>
            </div>
        </li>
        <li>
            <div class="row">
                <a href="#">
                    <div class="side-menu-item col-md-12">
                        <div class="col-md-2">
                            <i class="fa fa-building"></i>
                        </div>
                        <div class="col-md-8">
                            Rooms
                        </div>
                    </div>
                </a>
            </div>
        </li>
        <li>
            <div class="row">
                <div class="side-menu-item col-md-12">
                    <div class="col-md-2">
                        <i class="fa fa-eye"></i>
                    </div>
                    <div class="col-md-8">
                        <a href="#">Augmented Reality</a>
                    </div>
                </div>
            </div>
        </li>

        <li>
            <div class="row">
                <div class="side-menu-item col-md-12">
                    <div class="col-md-2">
                        <i class="fa fa-map"></i>
                    </div>
                    <div class="col-md-8">
                        <a href="#">Maps</a>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>
@role('hr')

@endrole