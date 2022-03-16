<div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link {{ Request::path() == 'dashboard' ? 'active' : '' }}" href="../pages/dashboard.html">
                <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link  {{ Request::path() == 'quality_express' ? 'active' : '' }}" href="{{ route('quality_express') }}">
                <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-app text-info text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Quality Express</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::path() == 'air_way' ? 'active' : '' }}" href="{{ route('air_way') }}">
                <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-credit-card text-warning text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Air Way Bill</span>
            </a>
        </li>
        <li class="nav-item">
            <a data-bs-toggle="collapse" href="#ecommerceExamples" class="nav-link {{ Request::segment(1)  == 'master' ? 'active' : ''}}" aria-controls="ecommerceExamples" role="button" aria-expanded="false">
              <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                <i class="ni ni-archive-2 text-success text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Master Data</span>
            </a>
            <div class="collapse  {{ Request::segment(1)  == 'master' ? 'show' : ''}}" id="ecommerceExamples">
              <ul class="nav ms-4">
                <li class="nav-item {{ Request::path() == 'master/shipper' ? 'active' : '' }}">
                  <a class="nav-link {{ Request::path() == 'master/shipper' ? 'active' : '' }}" href="{{ route('master/shipper') }}">
                    <span class="sidenav-mini-icon"> O </span>
                    <span class="sidenav-normal"> Shipper </span>
                  </a>
                </li>
                <li class="nav-item {{ Request::path() == 'master/consignee' ? 'active' : '' }}">
                    <a class="nav-link {{ Request::path() == 'master/consignee' ? 'active' : '' }}" href="{{ route('master/consignee') }}">
                      <span class="sidenav-mini-icon"> O </span>
                      <span class="sidenav-normal"> Consignee </span>
                    </a>
                </li>
                <li class="nav-item  {{ Request::path() == 'master/notify_party' ? 'active' : '' }}">
                    <a class="nav-link  {{ Request::path() == 'master/notify_party' ? 'active' : '' }}" href="{{ route('master/notify_party') }}">
                      <span class="sidenav-mini-icon"> O </span>
                      <span class="sidenav-normal"> Notify Party </span>
                    </a>
                </li>
                <li class="nav-item  {{ Request::path() == 'master/issued_by' ? 'active' : '' }}">
                    <a class="nav-link  {{ Request::path() == 'master/issued_by' ? 'active' : '' }}" href="{{ route('master/issued_by') }}">
                      <span class="sidenav-mini-icon"> O </span>
                      <span class="sidenav-normal"> Issued by </span>
                    </a>
                </li>
              </ul>
            </div>
          </li>
    </ul>
  </div>
