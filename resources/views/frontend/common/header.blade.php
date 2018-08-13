<nav  class="navbar navbar-default bg-white mg-bottom-0" ng-controller="Sper.Header">
		<div  class="container">
			<div  class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#toggle-menu" aria-expanded="false">         <span class="sr-only">Toggle navigation</span>         <span class="icon-bar"></span>         <span class="icon-bar"></span>         <span class="icon-bar"></span>       </button>
				<a  class="navbar-brand" href="#">Sper</a>  
		</div>  
			<div id="toggle-menu" class="collapse navbar-collapse">
				<ul  class="nav navbar-nav">
					<li  class="active">
						<div  class="navbar-input-wrapper">
							<div  class="btn-group" role="group">
								<a  class="dropdown-toggle btn btn-default" style="width: 120px !important;" href="#" role="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">   <span  class="pull-left"><% selectedCategory.categoryname %></span>      <span  class="pull-right">   <span  class="caret"></span>  </span>  </a>  
								<ul  class="dropdown-menu" style="width: 120px !important;">
									<li style="width: 120px !important;" ng-repeat="category in categories">
										<a onclick="return false;" ng-click="setSelectedCategory(category)"><% category.categoryname %></a>  
									</li>  
								</ul>  
							</div>  
						</div>  
					</li>  
					<li >
					<div  class="navbar-input-wrapper">
						
							<div  class="input-group relative wsearch" role="group">
								<a  class="absolute on-top" style="right: 50px; top: 7px;" href="#">    <i  class="fa fa-filter fa-1x"></i>   Bộ lọc</a>  
								<input  type="text" class="form-control">  
								<div  class="input-group-btn">
								<button  type="button" class="btn btn-default">   <span  class="glyphicon glyphicon-search"></span>  </button>  
							</div>  
						</div>  
						
				</div>  </li>  
					<li >
						<div  class="navbar-input-wrapper">
							<div  class="btn-group" role="group">
								<a  class="dropdown-toggle btn btn-default" style="width: 160px;" href="#" role="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">   <span  class="pull-left">TP Hồ Chí Minh</span>      <span  class="pull-right">   <span  class="caret"></span>  </span>  </a>  
								<ul  class="dropdown-menu" style="width: 160px;">
									<li >
										<a  href="#">TP Hồ Chí Minh</a>  
								</li>  
									<li >
										<a  href="#">Hà Nội</a>  
								</li>  
							</ul>  
						</div>  
					</div>  
				</li>  
					<li >
						<div  class="navbar-input-wrapper">
							<a  type="button" class="btn btn-default" href="#">    <span  class="glyphicon glyphicon-phone"></span>   App</a>  
					</div>  
				</li>  
					<li >
						<a  href="#">
						Đăng nhập
					</a>  
				</li>  
					<li  class="dropdown">
						<a  class="dropdown-toggle" href="#" role="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">   <span  class="glyphicon glyphicon-bell" style="font-size: 18px;"></span>  </a>  
						<ul  class="dropdown-menu">
							<li >   <a  href="#">Item 1</a>  </li>  
							<li >   <a  href="#">Item 2</a>  </li>  
					</ul>  
				</li>  
					<li >
						<a  class="relative" href="#">
							<span  class="glyphicon glyphicon-shopping-cart" style="font-size: 18px;"></span>  
							<span  class="badge circle bg-red absolute" style="top: 7px;right:7px; font-size: 10px;">1</span>  
					</a>  
				</li>  
					<li >
						<a  href="#">
							<span  class="glyphicon glyphicon-plus-sign" style="font-size: 18px;"></span>  
					</a>  
				</li>  
					<li  class="dropdown">
						<a  class="dropdown-toggle" href="#" role="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">   <span  class="glyphicon glyphicon-minus-sign" style="font-size: 18px;"></span>     <span  class="caret"></span>  </a>  
						<ul  class="dropdown-menu">
							<li >   <a  href="#">Item 3</a>  </li>  
							<li >   <a  href="#">Item 4</a>  </li>  
					</ul>  
				</li>  
			</ul>  
		</div>  
	</div>  
</nav>