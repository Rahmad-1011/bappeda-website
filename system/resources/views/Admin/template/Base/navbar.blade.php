        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                  <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                      @if(!empty($user->foto))
                        <img style="border-radius: 50px;" src="{{url("public/$user->foto")}}" class="img-fluid">
                      @else
                        <img src="{{url('public')}}/assets/images/user.png">
                      @endif
                      {{$user->nama}}
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item"  data-toggle="modal" data-target="#profile"><i class="fa fa-gear pull-right"></i> Pengaturan Akun</a>
                      <a class="dropdown-item"  href="{{url('Admin/logout')}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </div>
                  </li>
                </ul>
              </nav>
            </div>
          </div>


<!-- Modal -->
@include('Admin.User.profile')