<div class="page-header md-shadow-z-1-i navbar navbar-fixed-top" id="header1">
    <div class="page-header-inner ">
        <div class="col-md-2">
            <span class="help-block">
            <img src="{{URL::asset('public/header_gates.png')}}" alt="logo" class="logo-default">
        </div>
        <div class="page-top">
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    <li class="separator hide"> </li>
                    <li class="dropdown dropdown-user dropdown-dark">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <span class="username username-hide-on-mobile text-uppercase align-middle text-right">Wan Amra
                                <div class="" style="margin:0px"></div> 
                                <small>Technical Manager</small>
                            </span>
                        </a> 
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                <a href="">
                                    <i class="icon-user"></i> Profil </a>
                            </li>
                            <li>
                                <a href="" data-toggle="modal" data-target="#draggable">
                                    <i class="icon-key"></i> Tukar Kata Laluan </a>
                            </li>
                            <li>
                                <a href="{{ url('/logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    <i class="icon-lock"></i> Log Keluar </a>
                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                    </form>
                            </li>
                        </ul>
                    </li>   
                </ul>
            </div>
        </div>
    </div>
</div>