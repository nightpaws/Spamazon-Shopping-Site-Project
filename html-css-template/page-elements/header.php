<img src="./img/logo.png" alt="Spamazon logo">
		<form action="search.php" method="GET">
			<input type="text" name="term"/>
			<button type="submit">Search</button>
		</form>
		<div id="nav">
			<nav id="nav-menu" role="navigation">
				<a href="#nav-menu" title="Show navigation">Show navigation<span class="nav-icon menu-icon"></span></a>
	    		<a href="#" title="Hide navigation">Hide navigation<span class="nav-icon menu-icon"></a>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li>
						<a href="mens.php" aria-haspopup="true">Mens</a>
						<ul>
							<li class="mobile"><a href="mens.php">Mens home</a></li>
							<li><a href="#">Top</a></li>
							<li><a href="#">Bottom</a></li>
							<li><a href="#">Shoe</a></li>
							<li><a href="#">Stuffs</a></li>
						</ul>
					</li>
					<li>
						<a href="womans.php" aria-haspopup="true">Womans</a>
						<ul>
							<li><a href="#">Top</a></li>
							<li><a href="#">Bottom</a></li>
							<li><a href="#">Shoe</a></li>
							<li><a href="#">Stuffs</a></li>
						</ul>
					</li>
					<li>
						<a href="kids.php" aria-haspopup="true">Kids</a>
						<ul>
							<li><a href="#">Top</a></li>
							<li><a href="#">Bottom</a></li>
							<li><a href="#">Shoe</a></li>
							<li><a href="#">Stuffs</a></li>
						</ul>
					</li>
				</ul>
			</nav>
			<nav id="cart-menu" role="navigation">
				<a href="#cart-menu" title="Show navigation">Show navigation<span class="nav-icon cart-icon"></span></a>
	    		<a href="#" title="Hide navigation">Hide navigation<span class="nav-icon cart-icon"></a>
				<ul>
					<li>
						<a href="cart-page.php">Cart</a>
						<ul>
							<li><a href="cart-page.php">View Cart</a></li>
							<li><a href="#">Checkout</a></li>
						</ul>
					</li>
				</ul>
			</nav>
			<nav id="user-menu" role="navigation">
				<a href="#user-menu" title="Show navigation">Show navigation<span id="nav-icon user-icon"></a>
	    		<a href="#" title="Hide navigation">Hide navigation<span class="nav-icon user-icon"></a>
				<ul>
					<li>
						<a href="login.php">Log in</a>
					</li>
				</ul>
			</nav>
		</div>