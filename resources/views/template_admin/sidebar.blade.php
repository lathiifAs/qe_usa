<nav class="sidebar-nav">
    <ul id="side-menu">
        <li>
            <a {{ Request::path() == 'quality_express' || Request::path() == '/'  ? 'active' : '' }}" href="{{ route('quality_express') }}" aria-expanded="false"><i class="fa fa-file-code-o fa-fw"></i> <span class="hide-menu"> Bill of Lading </span></a>
        </li>
        <li>
            <a {{ Request::path() == 'air_way' ? 'active' : '' }}" href="{{ route('air_way') }}" aria-expanded="false"><i class="fa fa-file-pdf-o fa-fw"></i> <span class="hide-menu"> Air Way Bill </span></a>
        </li>
        <li>
            <a class="waves-effect  {{ Request::segment(1)  == 'master' ? 'active' : ''}}" href="javascript:void(0);" aria-expanded="false"><i class="fa fa-database fa-fw"></i> <span class="hide-menu"> Master Data </span> <span class="label label-rounded label-info pull-right">6</span></a>
            <ul aria-expanded="false" class="collapse {{ Request::segment(1)  == 'master' ? 'in' : ''}}">
                <li> <a href="{{ route('master/shipper') }}" class=" {{ Request::segment(1) . '/' . Request::segment(2)  == 'master/shipper'  ? 'active' : ''}}">Shipper (All)</a> </li>
                <li> <a class="{{ Request::segment(1) . '/' . Request::segment(2) == 'master/consignee' ? 'active' : '' }}" href="{{ route('master/consignee') }}" href="products.html">Consignee (All)</a> </li>
                <li> <a class="{{ Request::segment(1) . '/' . Request::segment(2)  == 'master/notify_party'  ? 'active' : ''}} == 'master/notify_party' ? 'active' : '' }}" href="{{ route('master/notify_party') }}">Notify Party (All)</a> </li>
                <li> <a  class="{{ Request::segment(1) . '/' . Request::segment(2)  == 'master/for_delivery'  ? 'active' : ''}} == 'master/for_delivery' ? 'active' : '' }}" href="{{ route('master/for_delivery') }}">For Delivery (BL)</a> </li>
                <li> <a class="{{ Request::segment(1) . '/' . Request::segment(2)  == 'master/also_notify'  ? 'active' : ''}} == 'master/also_notify' ? 'active' : '' }}" href="{{ route('master/also_notify') }}">Also Notify (BL)</a> </li>
                <li> <a class=" {{ Request::segment(1) . '/' . Request::segment(2) == 'master/issued_by' ? 'active' : '' }}" href="{{ route('master/issued_by') }}">Issued By (AWB)</a> </li>
            </ul>
        </li>
    </ul>
</nav>
