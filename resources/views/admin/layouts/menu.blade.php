<div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
					<ul>
							<li class="menu-title"> 
								<span>Main</span>
							</li>
							<li class="active"> 
								<a href="{{ url('/')}}"><i class="fe fe-home"></i> <span>Dashboard</span></a>
							</li>
							
						
							<li class="submenu">
								<a href="#"><i class="fe fe-layout"></i> <span>Portfolio</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="{{ route('portfolio.index')}}">Portfolio </a></li>
									<li><a href="{{ route('portfolio-category.index')}}">Category </a></li>
								</ul>
							</li>
						</ul>
					</div>
                </div>
            </div>