<?php
        //The land of variables
        $page_type = "info";
        $page_title = "Policies";       //What is displayed As the page title in the browser
        $page_description = "All the legal stuff that you never read." //The page description
?>

<!DOCTYPE html>
<html>
<head>
        <?php   include ('page-elements/head.php'); ?>
</head>
<body>
        <header>
                <?php include('page-elements/header.php'); ?>
        </header>
        <article id="about-us" class="content">
                <h1 class="page-header">Policies</h1>
                <div id="terms">
                        <h2 class="page-subheader">Terms & Conditions</h2>
                        <p>By using Spamazon you agree to all of the requirements as listed below. Please be aware that Spamazon hold the right to alter the deal. Pray we do not alter it further.</p>
                        <p>By continuing to use Spamazon, you acknowledge that Spamazon hold no legal obligations whatsoever in relation to the sending of goods. Spamazon is also not obligated in regards to the content shown on this website.</p>
                        <p>Spamazon hold no responsibility over the actions of its users. The views and opinions of its users, if displayed on the website, do not reflect those of Spamazon.</p>
                        </ol>
                </div>
                <div id="privacy">
                        <h2 class="page-subheader">Privacy</h2>
                        <p>Privacy, schmivacy. If you're using this website why would you put in your actual info? It's a uni project. While we will not actively provide our data to third parties, please be aware that sometimes accidents happen.</p>
                </div>
                <div id="cookies">
                        <h2 class="page-subheader">Cookies</h2>
                        <p>We will use cookies at some point. Take note when we alter the deal.</p>
                </div>
                <div id="shipping">
                        <h2 class="page-subheader">Shipping</h2>
                        <p>Things may get shipped... eventually... maybe... it's been known to happen. Again, this isn't an actual store, it's a uni project on web development, so shipping isn't really an option here.</p>
                </div>
        </article>
        <footer>
                <?php include('page-elements/footer.php'); ?>
        </footer>
</body>
</html>