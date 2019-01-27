<div class="sidebar" data-color="purple" data-background-color="white" data-image="{{ asset('backend/img/sidebar-1.jpg') }}">
  <div class="logo">
    <img src="{{ asset('uploads/profile_pic/'.Auth::user()->avatar) }}" class="img-circle" style="height: 50px; width: 50px;">
    <div class="text-center">
      <p>{{ Auth::user()->name }}</p>
    </div>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item {{Request::is('admin/dashboard*') ? 'active':''}}">
        <a class="nav-link" href="{{route('admin.dashboard')}}">
          <i class="material-icons">dashboard</i>
          <p>Dashboard</p>
        </a>
      </li>
      <li class="nav-item {{Request::is('admin/slider*') ? 'active':''}}">
        <a class="nav-link" href="{{route('slider.index')}}">
          <i class="material-icons">slideshow</i>
          <p>Sliders</p>
        </a>
      </li>
      <li class="nav-item {{Request::is('admin/service*') ? 'active':''}}">
        <a class="nav-link" href="{{route('service.index')}}">
          <i class="material-icons">content_copy</i>
          <p>Services</p>
        </a>
      </li>
      <li class="nav-item {{Request::is('admin/contact*') ? 'active':''}}">
        <a class="nav-link" href="{{route('contact.index')}}">
          <i class="material-icons">contacts</i>
          <p>Contacts</p>
        </a>
      </li>
      <li class="nav-item {{Request::is('admin/setting*') ? 'active':''}}">
        <a class="nav-link" href="{{route('setting.index')}}">
          <i class="material-icons">settings</i>
          <p>Settings</p>
        </a>
      </li>
    </ul>
  </div>
</div>