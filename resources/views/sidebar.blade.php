<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <ul class="page-sidebar-menu   " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            @if(Request::url() == URL('/home'))
            <li class="nav-item active open">
            @else
            <li class="nav-item">
            @endif
                <a href="{{URL('/home')}}">
                    <i class="icon-home"></i>
                    <span class="title">Utama</span>
                </a>
            </li>
            <li class="heading">
                <h3 class="uppercase">Chief Operation Office</h3>
            </li>
            <li class="nav-item" id="office">
                <a href="" class="nav-link nav-toggle">
                    <i class="icon-layers"></i>
                    <span class="title">Penilaian</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    @if(Request::url() == URL::route('pengskoran'))
                    <li class="nav-item active open">
                        <script>
                            $("#office").attr("class", "nav-item active open")    
                        </script>
                    @else
                    <li class="nav-item">
                    @endif
                        <a href="{{URL::route('pengskoran')}}">
                            <span class="title">Pengskoran</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>