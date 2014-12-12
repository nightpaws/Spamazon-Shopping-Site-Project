<img src="./img/logo.png" alt="Spamazon logo">
		<form action="search.php" method="GET">
			<input type="text" name="term" placeholder="Search"/>
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
							<li><a href="category.php?cat=mens-tops">Tops</a></li>
							<li><a href="category.php?cat=mens-bottoms">Bottoms</a></li>
							<li><a href="category.php?cat=mens-shoes">Shoes</a></li>
							<li><a href="category.php?cat=mens-other">Other Stuff</a></li>
						</ul>
					</li>
					<li>
						<a href="womens.php" aria-haspopup="true">Womens</a>
						<ul>
							<li><a href="category.php?cat=womans-tops">Tops</a></li>
							<li><a href="category.php?cat=womans-bottoms">Bottoms</a></li>
							<li><a href="category.php?cat=womans-shoes">Shoes</a></li>
							<li><a href="category.php?cat=womans-stuff">Other Stuff</a></li>
						</ul>
					</li>
					<li>
						<a href="kids.php" aria-haspopup="true">Kids</a>
						<ul>
							<li><a href="category.php?cat=kids-tops">Top</a></li>
							<li><a href="category.php?cat=kids-bottoms">Bottom</a></li>
							<li><a href="category.php?cat=kids-shoes">Shoe</a></li>
							<li><a href="category.php?cat=kids-other">Stuffs</a></li>
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
				<?php if (!isset($_COOKIE['spamaznauth'])) {
					 include('page-elements/header-logged-out.php');
					} else {
					 include('page-elements/header-logged-in.php');
					}
				?>
			</nav>
		</div>