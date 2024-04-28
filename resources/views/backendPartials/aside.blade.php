<aside class="sidebar-wrapper" data-simplebar="true">
      <div class="sidebar-header">
        <!-- <div>
          <img src="{{asset('public/logo/logo1.png')}}" class="logo-icon" alt="logo icon">
        </div> -->
        <div>
          <h4 class="logo-text">Mr 4 Services</h4>
        </div>
        <div class="toggle-icon ms-auto">
          <ion-icon name="menu-sharp"></ion-icon>
        </div>
      </div>
      <!--navigation-->
      <ul class="metismenu" id="menu">
       
        <li>
          <a href="{{route('home')}}">
            <div class="parent-icon">
              <i class="bi bi-house-door"></i>
            </div>
            <div class="menu-title">Dashboard</div>
          </a>
        </li>

        <li>
          <a href="{{route('admin.products')}}">
            <div class="parent-icon">
              <i class="bi bi-box-seam"></i>
            </div>
            <div class="menu-title">Products</div>
          </a>
        </li>

        <li>
          <a href="{{route('admin.courses')}}">
            <div class="parent-icon">
              <i class="bi bi-list-columns"></i>
            </div>
            <div class="menu-title">Services</div>
          </a>
        </li>

        <li>
          <a href="{{route('admin.get_a_quote')}}">
            <div class="parent-icon">
              <i class="bi bi-receipt"></i>
            </div>
            <div class="menu-title">Get Quotes</div>
          </a>
        </li>

        <li>
          <a href="{{route('admin.contact_us')}}">
            <div class="parent-icon">
              <i class="bi bi-chat-left-dots-fill"></i>
            </div>
            <div class="menu-title">Contact Us</div>
          </a>
        </li>
        <li>
            <a href="{{route('admin.orders')}}">
                <div class="parent-icon">
                    <i class="bi bi-question-circle-fill"></i>
                </div>
                <div class="menu-title">Orders</div>
            </a>
        </li>
       <!--  <li>
          <a href="{{route('admin.careers')}}">
            <div class="parent-icon">
              <i class="bi bi-ui-radios-grid"></i>
            </div>
            <div class="menu-title">Career</div>
          </a>
        </li>

         <li>
          <a href="{{route('admin.team')}}">
            <div class="parent-icon">
              <i class="bi bi-ui-radios-grid"></i>
            </div>
            <div class="menu-title">Team</div>
          </a>
        </li> -->


        <!-- <li>
          <a href="{{route('admin.careers_list')}}">
            <div class="parent-icon">
              <i class="bi bi-ui-radios-grid"></i>
            </div>
            <div class="menu-title">Career List</div>
          </a>
        </li>
 -->
      <li>
          <a href="{{route('admin.review')}}">
            <div class="parent-icon">
              <i class="bi bi-person-hearts"></i>
            </div>
            <div class="menu-title">Reviews</div>
          </a>
        </li>        

        <!-- <li>
            <a href="{{route('admin.faqs')}}">
                <div class="parent-icon">
                    <i class="bi bi-question-circle-fill"></i>
                </div>
                <div class="menu-title">FAQS</div>
            </a>
        </li> -->
        <!-- <li>
            <a href="{{route('admin.newsletter')}}">
                <div class="parent-icon">
                    <i class="bi bi-envelope"></i>
                </div>
                <div class="menu-title">Newsletter Subscription</div>
            </a>
        </li> -->


        <li>
          <a href="{{route('admin.frontend_settings')}}">
            <div class="parent-icon">
              <i class="bi bi-images"></i>
            </div>
            <div class="menu-title">Frontend Settings</div>
          </a>
        </li>

        <!-- <li>
          <a href="{{route('admin.visitors_ip')}}">
            <div class="parent-icon">
              <i class="bi bi-globe"></i>
            </div>
            <div class="menu-title">Visitors IP</div>
          </a>
        </li> -->

        <li>
          <a href="#" onclick="$('#logout-form').submit();">
            <div class="parent-icon">
              <i class="bi bi-box-arrow-left"></i>
            </div>
            <div class="menu-title">Logout</div>
          </a>
        </li>

         <li>
          <a href="{{route('welcome')}}" target="_blank">
            <div class="parent-icon">
              <i class="bi bi-house"></i>
            </div>
            <div class="menu-title">Main Website</div>
          </a>
        </li>

      </ul>
      <!--end navigation-->
    </aside>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  @csrf
                              </form>