        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <img src="http://hk.next.nextmedia.com/images/next-photos/NextMag/1209/640pixfolder/E1209_122_13830875.jpg" alt="金城武" class="img-responsive img-circle" style="max-width:120px;margin:auto auto">
                <br>
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu" href="{!!URL::route('home')!!}"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="{!!URL::route('ui')!!}"><i class="fa fa-desktop"></i> UI Elements</a>
                    </li>
					<li>
                        <a href="{!!URL::route('chart')!!}"><i class="fa fa-bar-chart-o"></i> Charts</a>
                    </li>
                    <li>
                        <a href="{!!URL::route('tab')!!}"><i class="fa fa-qrcode"></i> Tabs & Panels</a>
                    </li>
                    <li>
                        <a href="{!!URL::route('table')!!}"><i class="fa fa-table"></i> Responsive Tables</a>
                    </li>
                    <li>
                        <a href="{!!URL::route('form')!!}"><i class="fa fa-edit"></i> Forms </a>
                    </li>


                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>

                                </ul>

                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{!!URL::route('emptys')!!}"><i class="fa fa-fw fa-file"></i> Empty Page</a>
                    </li>
                </ul>

            </div>

        </nav>
        