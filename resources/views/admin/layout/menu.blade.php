<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="" target="_blank" class="brand-link">
        <img src="{{ asset('asset/image/logo-text.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Visit Store</span>
    </a>
    <div class="sidebar">
        <div class="form-inline">
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item menu-open">
                    <a href="{{ route('dashboard') }}"
                        class="nav-link  {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
				<li class="nav-item">
                    <a href="{{ route('inventory.index') }}"
                        class="nav-link {{ request()->routeIs('inventory.index') || request()->routeIs('product.create') || request()->routeIs('product.edit') ? 'active' : '' }}">
                        <img src="{{ asset('asset/image/icon/inventory.png') }}" alt="" width="30"
                            class="nav-icon">
                        <p>Inventory</p>
                    </a>
                </li>
				<li class="nav-item">
                    <a href="{{ route('affilatemarketing.index') }}"
                        class="nav-link {{ request()->routeIs('admin.affilatemarketing.index') ? 'active' : '' }}">
                        <img src="{{ asset('asset/image/icon/mlm-logo.jpg')}}" alt="" width="30" class="nav-icon">
                        <p>Affilate Marketing</p>
                    </a>
                </li>
           <li class="nav-item">
           <a href="{{route('Users')}}" class="nav-link {{ request()->routeIs('users') ? 'active' : '' }}"> 
           <img src="{{ asset('admin/icon/man.png') }}" alt="" width="30" class="nav-icon">
             <p>
               Users
             </p>
           </a>
         </li>
		 
         <li class="nav-item">
                   <a href="{{ URL::signedRoute('orders.index') }}"
                        class="nav-link {{ request()->routeIs('orders.index') || request()->routeIs('admin.show_order_details') ? 'active' : '' }}">
                        <img src="{{ asset('asset/image/icon/shopping-bag.png') }}" alt="" width="30"
                            class="nav-icon">
                        <p>Orders</p>
                    </a>
                </li>

        
         
         <li class="nav-item">
           <a href="{{route('Shippng-Charge')}}" class="nav-link {{ request()->routeIs('Shippng-Charge') ? 'active' : '' }}">
           <img src="{{ asset('admin/icon/charge.png') }}" alt="" width="30"
                            class="nav-icon">
             <p>
               Shipping Charge
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="{{ route('View-Coupon') }}" class="nav-link {{ request()->routeIs('View-Coupon') ? 'active' : '' }}">
           <img src="{{ asset('admin/icon/coupon.png') }}" alt="" width="30"
                            class="nav-icon">
             <p>Coupon</p>
           </a>
         </li>
         <li class="nav-item">
           <a href="{{ route('View-Promotion') }}" class="nav-link {{ request()->routeIs('View-Promotion') ? 'active' : '' }}"> 
           <img src="{{ asset('admin/icon/promotion.png') }}" alt="" width="30"
                            class="nav-icon">
             <p>Promotion</p>
           </a>
         </li>
         <li class="nav-item">
           <a href="{{ route('View-Banner') }}" class="nav-link {{ request()->routeIs('banner') ? 'active' : '' }}">
           <img src="{{ asset('admin/icon/flag.png') }}" alt="" width="30" class="nav-icon">
             <p>Banner</p>
           </a>
         </li>

            </ul>
        </nav>
    </div>
</aside>
