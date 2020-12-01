
			<!-- header start-->
			<header class="header header--front_2">
				<div class="container-fluid">
					<div class="row no-gutters justify-content-between">
						<div class="col-auto d-flex align-items-center">
							<div class="dropdown-trigger d-none d-sm-block">
								<div class="dropdown-trigger__item"></div>
							</div>
							<div class="header-logo">
								<a class="header-logo__link" href="index.html">
								{{-- <img class="header-logo__img logo--light" src="img/logo_white.png" alt="logo"/> --}}
								<img class="header-logo__img logo--dark" src="img/logo_dark.png" alt="logo"/>
							</a></div>
						</div>
						<div class="col-auto">
							<!-- main menu start-->
							<nav>
								<ul class="main-menu">
									
								<li class="main-menu__item"><a class="main-menu__link" href="{{ url('/') }}"><span>Home</span></a></li>
									
									<li class="main-menu__item"><a class="main-menu__link" href="{{ url('/about-us') }}"><span>About</span></a></li>
									
									<li class="main-menu__item"><a class="main-menu__link" href="{{ url('/commercial') }}"><span>Commercial</span></a></li>
									
									<li class="main-menu__item"><a class="main-menu__link" href="{{ url('/production') }}"><span>Production</span></a></li>
									
									<li class="main-menu__item main-menu__item--has-child"><a class="main-menu__link" href="javascript:void(0);"><span>Media</span></a>
										<!-- sub menu start-->
										<ul class="main-menu__sub-list">
											<li><a href="{{ url('/media/shoulders') }}"><span>Right Shoulders</span></a></li>
											<li><a href="{{ url('/media/broadcasters') }}"><span>Broadcasters</span></a></li>
											<li><a href="{{ url('/media/afrosport') }}"><span>Afrosport</span></a></li>
										</ul>
										<!-- sub menu end-->
									</li>

									<li class="main-menu__item"><a class="main-menu__link" href="{{ url('/news') }}"><span>News</span></a></li>
									
									<li class="main-menu__item"><a class="main-menu__link" href="contacts.html"><span>Contacts</span></a></li>
									
								</ul>
							</nav>
							<!-- main menu end-->
						</div>
						<div class="col-auto d-flex align-items-center">
							
							<div class="dropdown-trigger d-block d-sm-none">
								<div class="dropdown-trigger__item"></div>
							</div><a class="button button--squared" href="#"><span>Members</span></a>
						</div>
					</div>
				</div>
			</header>
            <!-- header end-->