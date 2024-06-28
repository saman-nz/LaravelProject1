
<nav class="navbar">
 <div class="navbar-header container">
   <a href="#" class="menu-toggle"><i class="zmdi zmdi-menu"></i></a>
   <a href="dashboard.php" class="logo"><img src="{{asset('img/logo.png')}}" alt="Logo"></a>
   <a href="dashboard.php" class="icon-logo"></a>
 </div>
  <div class="navbar-container clearfix">
    <div class="pull-left">
      <a href="#" class="page-title text-uppercase"></a>
    </div>

    <div class="pull-right">
      <div class="pull-left search-container">
        <form class="searchbox">
          <input type="search" placeholder="Search" name="search" class="searchbox-input">
          <input type="submit" class="searchbox-submit" value="">
          <span class="searchbox-icon"><span class="zmdi zmdi-search search-icon"></span></span>
        </form>
      </div>

      <ul class="nav pull-right right-menu">
        <li class="more-options dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown">
            <i class="zmdi zmdi-account-circle"></i>
          </a>

          <div class="more-opt-container dropdown-menu">
            <a href="#"><i class="zmdi zmdi-account-o"></i>Account<span class="badge badge-warning">3</span></a>
            <a href="#"><i class="zmdi zmdi-storage"></i>Storage <span class="badge badge-danger">2</span></a>
            <a href="#"><i class="zmdi zmdi-calendar-note"></i>Calendar <span class="badge badge-success">2</span></a>
            <a href="#"><i class="zmdi zmdi-chart-donut"></i>Analytics <span class="badge badge-success">7</span></a>
            <a href="#"><i class="zmdi zmdi-balance"></i>Balance <span class="badge badge-info">5</span></a>
            <a href="#"><i class="zmdi zmdi-run"></i>Exit</a>
          </div>
        </li>
        <li class="notification dropdown">
          <a class="dropdown-toggle">
            <i class="zmdi zmdi-notifications"></i>
            <span class="badge badge-primary">8</span>
          </a>

          <div class="dropdown-menu">
            <h4 class="text-center info-color m-0">You have 19 new notifications</h4>
            <div class="notification-container">
              <a href="#"><i class="zmdi zmdi-email warning-color m-r-5"></i> You have 16 messages <span class="pull-right">4 minutes ago</span></a>
              <a href="#"><i class="zmdi zmdi-twitter info-color m-r-5"></i> 3 new followers <span class="pull-right">12 minutes ago</span></a>
              <a href="#"><i class="zmdi zmdi-dropbox info-color m-r-5"></i> 7 changed files <span class="pull-right">18 minutes ago</span></a>
              <a href="#"><i class="zmdi zmdi-instagram warning-color m-r-5"></i> 26 new followers <span class="pull-right">22 minutes ago</span></a>
              <a href="#"><i class="zmdi zmdi-twitter info-color m-r-5"></i> 8 new followers <span class="pull-right">23 minutes ago</span></a>
            </div>
            <a href="#" class="text-uppercase clear-all">Clear all notifications</a>
            <div class="check-ok">
              <i class="zmdi zmdi-check"></i>
            </div>
          </div>
        </li>
        <li>
          <a class="sidepanel-toggle" href="#">
            <i class="zmdi zmdi-more-vert"></i>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>