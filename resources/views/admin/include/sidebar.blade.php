<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.dashboard') }}" class="brand-link"> 
      <span class="brand-text font-weight-light" style="margin-left: 47px"><b>Dashboard</b></span>
    </a> 
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) --> 
      @php
            // $accountSubMenuUrls = App\Helper\MyFuncs::mainMenu(1);
            // $configrations = App\Helper\MyFuncs::mainMenu(2);
            // $students = App\Helper\MyFuncs::mainMenu(3);
            // $Finances = App\Helper\MyFuncs::mainMenu(4);
            // $Homeworks = App\Helper\MyFuncs::mainMenu(8);
            // $Attendances = App\Helper\MyFuncs::mainMenu(9);
            // $Certificates = App\Helper\MyFuncs::mainMenu(10);
            // $FeeCertificates = App\Helper\MyFuncs::mainMenu(11);
            // $UserActivitys = App\Helper\MyFuncs::mainMenu(12);
            // $RegistrationForms = App\Helper\MyFuncs::mainMenu(13);
            // $Transports = App\Helper\MyFuncs::mainMenu(14);
            // $Exams = App\Helper\MyFuncs::mainMenu(15);
            // $SMSs = App\Helper\MyFuncs::mainMenu(16);
            // $menus=App\Helper\MyFuncs::showMenu();
            // $userHasMenus=App\Helper\MyFuncs::userHasMinu();
            // $menuTypes = App\Model\MinuType::whereIn('id',$userHasMenus)->orderBy('sorting_id','asc')->get();
           
         @endphp

        {{--  @foreach ($menuTypes as $menuType)
         @php
           $subMenus = App\Helper\MyFuncs::mainMenu($menuType->id);
         @endphp --}} 
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">  
          <li class="nav-item">
            <a href="{{ route('admin.Master.Settings') }}" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Settings</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.Master.VisitorDetails') }}" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p class="text">Visitor Details</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.Master.Batches') }}" class="nav-link">
              <i class="nav-icon far fa-circle text-primary"></i>
              <p class="text">Batches</p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>