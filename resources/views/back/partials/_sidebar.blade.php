<!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4">{{ (!empty($user['name']) ? $user['name'] : 'Guest') }}</h1>
              <p>{{ (!empty($user['email']) ? $user['email'] : 'Guest') }}</p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
          <ul class="list-unstyled">
                    <li class="active"><a href="/back/dashboard"> <i class="icon-home"></i>Home </a></li>
                    <li><a href="tables.html"> <i class="fa fa-file-pdf-o"></i>Shared Documents </a></li>
                    <li><a href="charts.html"> <i class="fa fa-book"></i>Course Management </a></li>
                     <li><a href="charts.html"> <i class="fa fa-drivers-license-o"></i>Certificate Verification </a></li>
                     <li><a href="charts.html"> <i class="fa fa-calendar-o"></i>Training/Event  </a></li>
                    <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-gears"></i>Settings </a>
                      <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                        <li><a href="#">Page</a></li>
                        <li><a href="#">Page</a></li>
                        <li><a href="#">Page</a></li>
                      </ul>
                    </li>
                    
          </ul><span class="heading">Extras</span>
          <ul class="list-unstyled">
            <li> <a href="#"> <i class="icon-flask"></i>Demo </a></li>
            <li> <a href="#"> <i class="icon-screen"></i>Demo </a></li>
            <li> <a href="#"> <i class="icon-mail"></i>Demo </a></li>
            <li> <a href="#"> <i class="icon-picture"></i>Demo </a></li>
          </ul>
        </nav>
<!-- end side bar-->