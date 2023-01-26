

<nav class="navbar navbar-expand-lg fancy navbar-light navbar-bg-light caret-none">
  <div class="container">
    <div class="navbar-collapse-wrapper bg-white d-flex flex-row flex-nowrap w-100 justify-content-between align-items-center">
      <div class="navbar-brand w-100">
        <a href="">
          <!-- <img src="./assets/img/logo.png" srcset="./assets/img/logo@2x.png 2x" alt="" /> -->
          <img src="{{$settings['get_website_wide_logo']}}" style="width: 70px;" alt="{{$settings['website_name']}}" >
        </a>
      </div>
      <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
        <div class="offcanvas-header d-lg-none">
          <a href="./index.html"><img src="./assets/img/logo-light.png" srcset="./assets/img/logo-light@2x.png 2x" alt="" /></a>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
          <ul class="navbar-nav"> 

                    @php
                    $menu = \App\Models\Menu::where('location',"NAVBAR")->with(['links'=>function($q){$q->orderBy('order','ASC');}])->first();
                    @endphp
                    @if($menu !=null)
                    @foreach($menu->links as $link)
                     

                    <li class="nav-item"><a class="nav-link" href="{{$link->url}}"> <span class="{{$link->icon}} mx-1"></span>  {{$link->title}}</a></li>
                    @endforeach
                    @endif
          </ul>
          <!-- /.navbar-nav -->
           
          <!-- /offcanvas-nav-other -->
        </div>
        <!-- /.offcanvas-body -->
      </div>
      <!-- /.navbar-collapse -->
      <div class="navbar-other w-100 d-flex ms-auto">
        <ul class="navbar-nav flex-row align-items-center ms-auto">
           
          <li class="nav-item  d-none d-md-block">
            <a href="./contact.html" class="btn btn-sm btn-primary rounded-pill">Contact</a>
          </li>
          <li class="nav-item d-lg-none">
            <button class="hamburger offcanvas-nav-btn"><span></span></button>
          </li>
        </ul>
        <!-- /.navbar-nav -->
      </div>
      <!-- /.navbar-other -->
    </div>
    <!-- /.navbar-collapse-wrapper -->
  </div>
  <!-- /.container -->
</nav>
<!-- /.navbar -->

