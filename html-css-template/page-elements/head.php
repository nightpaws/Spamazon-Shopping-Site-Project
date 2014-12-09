<title>Spamazon | <?php echo $page_title; ?></title>
<meta name="description" content=" <?php echo $page_description; ?>">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1">

<link rel="stylesheet" href="css/reset.css">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,600,700' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<!-- <script type="text/javascript" src="./js/menu.js"></script> -->
<!--[if IE]> <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

<?php /* Loading in the stuff for the slider if its needed on the page */ ?>
<?php if($page_type == "home"): ?>
		<link rel="stylesheet" href="css/flexslider.css" type="text/css">
		<script src="js/jquery.flexslider-min.js"></script>
		<script src="js/home.js"></script>
<?php endif ?>
<link rel="stylesheet" type="text/css" href="css/style.css">