<!--begin::sidebar menu-->
<div class="app-sidebar-menu overflow-hidden flex-column-fluid">
	<!--begin::Menu wrapper-->
	<div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
		<!--begin::Menu-->
		<div class="menu menu-column menu-rounded menu-sub-indention px-3 fw-semibold fs-6" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
			<!--begin:Menu item-->
			<div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ request()->routeIs('dashboard') ? 'here show' : '' }}">
				<!--begin:Menu link-->
				<a class="menu-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
				<span class="menu-link">
					<span class="menu-icon">{!! getIcon('element-11', 'fs-2') !!}</span>
					<span class="menu-title">Dashboards</span>
					<!-- <span class="menu-arrow"></span> -->
				</span>
				</a>
				<!--end:Menu link-->
			
			</div>
			<!--end:Menu item-->
			<!--begin:Menu item-->
			<div class="menu-item pt-5">
				<!--begin:Menu content-->
				<div class="menu-content">
					<span class="menu-heading fw-bold text-uppercase fs-7">Apps</span>
				</div>
				<!--end:Menu content-->
			</div>
			<!--end:Menu item-->
			<!--begin:Menu item-->
			<div data-kt-menu-trigger="click" class="menu-item ">
				<!--begin:Menu link-->
				<a href="{{ route('user-management.index') }}" class="menu-link">
					<span class="menu-icon" >
					<i class="ki-duotone ki-user" style="font-size: 25px;">
					<span class="path1"></span>
					<span class="path2"></span>
					</i>
					</span>
					<span class="menu-title">User Management</span>
				</a>
				<!--end:Menu link-->
			</div>
			<!--end:Menu item-->

			<!--begin:Menu item-->
			<div data-kt-menu-trigger="click" class="menu-item">
				<!--begin:Menu link-->
				<a href="{{ route('group-management.index') }}" class="menu-link">
					<span class="menu-icon" >
					<i class="ki-duotone ki-people" style="font-size: 25px;">
						<span class="path1"></span>
						<span class="path2"></span>
						<span class="path3"></span>
						<span class="path4"></span>
						<span class="path5"></span>
					</i>
					</span>
					<span class="menu-title">Group Management</span>
				</a>
				<!--end:Menu link-->
			</div>
			<!--end:Menu item-->		
			<!--begin:Menu item-->
			<div data-kt-menu-trigger="click" class="menu-item">
				<!--begin:Menu link-->
				<a href="{{ route('box-setting.index') }}" class="menu-link">
					<span class="menu-icon">
						<i class="ki-duotone ki-setting-4" style="font-size: 25px;">
						</i></span>
					<span class="menu-title">Box Setting</span>
				</a>
				<!--end:Menu link-->
			</div>
			<!--end:Menu item-->	
			<!--begin:Menu item-->
			<div data-kt-menu-trigger="click" class="menu-item">
				<!--begin:Menu link-->
				<a href="{{ route('news-management.index') }}" class="menu-link">
					<span class="menu-icon">
					<i class="ki-duotone ki-document" style="font-size: 25px;">
					<span class="path1"></span>
					<span class="path2"></span>
					</i>
				</span>
					<span class="menu-title">News Management</span>
				</a>
				<!--end:Menu link-->
			</div>
			<!--end:Menu item-->
			<!--begin:Menu item-->
			<div data-kt-menu-trigger="click" class="menu-item">
				<!--begin:Menu link-->
				<a href="{{ route('currency-change.index') }}" class="menu-link">
					<span class="menu-icon">
					<i class="ki-duotone ki-bill" style="font-size: 25px;">
					<span class="path1"></span>
					<span class="path2"></span>
					<span class="path3"></span>
					<span class="path4"></span>
					<span class="path5"></span>
					<span class="path6"></span>
					</i>
				</span>
					<span class="menu-title">Currency Change</span>
				</a>
				<!--end:Menu link-->
			</div>
			<!--end:Menu item-->
		</div>
		<!--end::Menu-->
	</div>
	<!--end::Menu wrapper-->
</div>
<!--end::sidebar menu-->
