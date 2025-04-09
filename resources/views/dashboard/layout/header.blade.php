<!--start top header-->
<header class="top-header">        
  <nav class="navbar navbar-expand gap-3">
    <div class="mobile-toggle-icon fs-3">
        <i class="bi bi-list"></i>
      </div>
      
      <div class="top-navbar-right ms-auto">
        <ul class="navbar-nav align-items-center">
          
        <div>
          <form action="{{ route('logout.view') }}" method="POST" >
            @csrf
        <input type="submit" class="btn btn-outline-danger" value="Log Out">
        </form>
        </div>
        
       
        
        
        </ul>
        </div>
  </nav>
</header>
 <!--end top header-->