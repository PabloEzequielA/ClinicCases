<!-- Jquery Calls Specific to this page -->
	<script  src="html/js/Board.js" type="text/javascript"></script>
</head>
<body>

	<div id="notifications"></div>

	<?php include 'html/templates/interior/timer.php' ?>

	<?php include 'html/templates/interior/idletimeout.php' ?>

	<div id = "nav_container">

		<?php $t = tabs($dbh,$_GET['i']); echo $t; ?>

		<div id="menus">

			<?php include 'html/templates/Menus.php'; ?>

		</div>

	</div>

	<div id="content">

		<p>The Board is undergoing a renovation for ClinicCases 7!  Check back soon to see the changes.</p>

	</div>





