<div class="navbar-holder">
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url('/')}}" style="margin-top: 4px;">
                    <span class="icon-logo-glyph" style="margin-top: -38px; font-size: 54px;"></span>UCCILITY
                </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <!-- <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">Contact Us</a></li> -->
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{url('/login')}}">Sign In</a></li>
                <li><a href="{{url('/activate ')}}">Activate</a></li>
            </ul>
            </div>
        </div>
    </nav>
</div>