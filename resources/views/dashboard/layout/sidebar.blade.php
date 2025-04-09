<!--start sidebar -->
<aside class="sidebar-wrapper"data-simplebar="true" >
  <div class="sidebar-header">
    <div>
      <img src="{{ asset('dashboard-assets/images/mobile.jpg') }}" class="logo-icon" alt="logo icon">
    </div>
    <div>
      <h4 class="logo-text">MY MAIL TRAP</h4>
    </div>
    <div class="toggle-icon ms-auto" > <i class="bi bi-list" ></i>
    </div>
  </div>
  <!--navigation-->
  <ul class="metismenu" id="menu" >
    <li>
      <a href="{{route('plans.list.view')}}">
       
        <div class="menu-title" >Dashboard</div>
        <div><i class="bi bi-house-fill"></i></div>
      </a>
      
    </li>
    <li>
      <a href="#" class="has-arrow">
       
        <div class=""><i class="bi bi-grid-fill"></i></div>
      </a>
      <ul>
       
        <li> <a href="{{ route('plans.create.view') }}">Enter Email Manually</a>
        </li>
        <li> <a href="{{ route('plans.list.view') }}">Emails List</a>
        </li>
        <li> <a href="{{ route('plans.em') }}">Send to All</a>
        </li>
        <li> <a href="{{ route('plans.view') }}">Import Email With Excel File</a>
        </li>
        <li> <a href="{{ route('plans.email.form') }}">Send An Email</a>
        </li>
        </li>
        
      </ul>
    </li>
  </ul>
  <!--end navigation-->
</aside>
<!--end sidebar -->