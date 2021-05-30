<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/dashboard')}}">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Portfolio</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      @php
        $route = Route::currentRouteName();
      @endphp
      <!-- Nav Item - Dashboard -->
      <li class="nav-item {{ $route == 'dashboard' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('/dashboard')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>


      <!-- Nav Item - Profile Collapse Menu -->
      <li class="nav-item">
        <a class="{{ $route == 'profiles.view' ||  $route == 'profiles.edit' ||  $route == 'profiles.password.view' ? '' : 'collapsed' }}
           nav-link" href="#" data-toggle="collapse" data-target="#profileInfo" aria-expanded="true" aria-controls="profileInfo">
          <i class="fas fa-user"></i>
          <span>Manage Profile</span>
        </a>
        <div id="profileInfo" class="collapse {{( $route == 'profiles.view' ||  $route == 'profiles.edit' ||  $route == 'profiles.password.view') ? 'show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">

          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Profile Information:</h6>

            <a class="{{ $route == 'profiles.view' ||  $route == 'profiles.edit' ? 'active' : '' }} collapse-item" href=" {{ route('profiles.view')}} ">Your Profile</a>

            <a class="{{( $route == 'profiles.password.view')? 'active' : '' }} collapse-item" href=" {{ route('profiles.password.view')}} ">Change Password</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Business Type Collapse Menu -->
      <li class="nav-item">
        <a class="{{ $route == 'business.type.add' || $route == 'business.type.view' || $route == 'business.type.edit' ? '' : 'collapsed' }}
           nav-link" href="#" data-toggle="collapse" data-target="#businessInfo" aria-expanded="true" aria-controls="businessInfo">
          <i class="fa fa-diamond"></i>
          <span>Manage Business Type</span>
        </a>
        <div id="businessInfo" class="collapse {{ Request::is('business-type/*') || Request::is('business-type/edit/*') ? 'show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">

          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Business Type Information:</h6>

            <a class="{{ $route == 'business.type.add' ? 'active' : '' }} collapse-item" href=" {{ route('business.type.add')}} ">Add Business Type</a>

            <a class="{{ $route == 'business.type.view' || $route == 'business.type.edit' ? 'active' : '' }} collapse-item" href=" {{ route('business.type.view')}} ">Manage Business Type</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Section Collapse Menu -->
      <li class="nav-item">
        <a class="{{ $route == 'section.add' || $route == 'section.view' || $route == 'section.edit' ? '' : 'collapsed' }}
           nav-link" href="#" data-toggle="collapse" data-target="#section" aria-expanded="true" aria-controls="section">
          <i class="fa fa-diamond"></i>
          <span>Manage Section</span>
        </a>
        <div id="section" class="collapse {{ Request::is('section/*') || Request::is('section/edit/*') ? 'show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">

          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Section Information:</h6>

            <a class="{{ $route == 'section.add' ? 'active' : '' }} collapse-item" href=" {{ route('section.add')}} ">Add Section</a>

            <a class="{{ $route == 'section.view' || $route == 'section.edit' ? 'active' : '' }} collapse-item" href=" {{ route('section.view')}} ">Manage Section</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Question Collapse Menu -->
      <li class="nav-item">
        <a class="{{ $route == 'question.add' || $route == 'question.view' || $route == 'question.edit' ? '' : 'collapsed' }}
           nav-link" href="#" data-toggle="collapse" data-target="#question" aria-expanded="true" aria-controls="question">
          <i class="fa fa-diamond"></i>
          <span>Manage Question</span>
        </a>
        <div id="question" class="collapse {{ Request::is('question/*') || Request::is('question/edit/*') ? 'show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">

          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Question Information:</h6>

            <a class="{{ $route == 'question.add' ? 'active' : '' }} collapse-item" href=" {{ route('question.add')}} ">Add Question</a>

            <a class="{{ $route == 'question.view' || $route == 'question.edit' ? 'active' : '' }} collapse-item" href=" {{ route('question.view')}} ">Manage Question</a>
          </div>
        </div>
      </li>

      

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>