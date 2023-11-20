<div class="left-side-bar">
		<div class="brand-logo">
			<a href="index.html">
				<img src="vendors/images/deskapp-logo.svg" alt="" class="dark-logo">
				<img src="vendors/images/deskapp-logo-white.svg" alt="" class="light-logo">
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li class="">
						<a href="/dashboard" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-house-1"></span><span class="mtext">Home</span>
						</a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle">
							<span class="micon dw dw-edit2"></span><span class="mtext active">Master Data</span>
						</a>
						<ul class="submenu" {{Request::segment(2)=="jabatan" || Request::segment(2)=="kategori" || Request::segment(2)=="divisi" || Request::segment(2)=="sektor" ? " style=display:block ":''}}>
							<li><a href="/dashboard/jabatan" class="{{Request::segment(2)=="jabatan" ? 'active' :''}}">Jabatan</a></li>
							<li><a href="/dashboard/kategori" class="{{Request::segment(2)=="kategori" ? 'active' :''}}">Kategori</a></li>
							<li><a href="/dashboard/divisi" class="{{Request::segment(2)=="divisi" ? 'active' :''}}">Divisi</a></li>
							<li><a href="/dashboard/sektor" class="{{Request::segment(2)=="sektor" ? 'active' :''}}">Sektor</a></li>
						</ul>
					</li>
					<li class="">
						<a href="/dashboard/user" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-library"></span><span class="mtext">User</span>
						</a>
					</li>
					<li class="">
						<a href="#" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-library"></span><span class="mtext">Transaksi Penjualan</span>
						</a>
					</li>
					<li>
						<div class="dropdown-divider"></div>
					</li>
					<li>
						<div class="sidebar-small-cap">Extra</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
