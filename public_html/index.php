<html>
<head>
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	
	<!-- Optional theme -->
	<link rel="stylesheet" href="/css/bootstrap-theme.min.css">
	
	<link rel="stylesheet" href="/css/theme.bootstrap.css">
	<link rel="stylesheet" href="/css/app.css">
	
	<script src="/js/jquery.min.js"></script>
	<script src="/js/jquery.sheetrock.js"></script>
	<script src="/js/handlebars.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	
	<script src="/js/jquery.tablesorter.js"></script>
	<script src="/js/jquery.tablesorter.widgets.js"></script>
	
	<title>Sheetrock + TableSorter Template</title>
</head>
<body>
	<div class="jumbotron">
		<div class="text-right">
			<h1>
				Sheetrock &amp; TableSorter Template
			</h1>
			<h3>
				A <a href="http://www.getbootstrap.com/" target="_blank">Bootstrap</a> template based on <a href="http://chriszarate.github.io/sheetrock/" target="_blank">Sheetrock.js</a> &amp; <a href="http://tablesorter.com/docs/" target="_blank">TableSorter.js</a>
			</h3>
			<h3>
				Publicly licensed by <a href="http://cris.lc" target="_blank">Cristos L-C</a>
			</h3>
			<h4>
				photo credit: <a href="http://www.flickr.com/photos/jeffkrause/8987192651/">SpreadTheMagic</a> via <a href="http://photopin.com">photopin</a> <a href="http://creativecommons.org/licenses/by-nc-nd/2.0/">cc</a>
			</h4>
		</div>
	</div>

				
	<div class="container white col-md-10 col-md-offset-1">
		<div class="well">
			<p>Look at the <a href="http://chriszarate.github.io/sheetrock/" target="_blank">Sheetrock documentation</a> for info on publishing your own Google Spreadsheet to use with this template.</p>
			<p>Look at the <a href="http://tablesorter.com/docs/" target="_blank">TableSorter documentation</a> to learn more about all the super-nifty things you can do with it.</p>
			<p>
				Here are some things you can do in this template:
				<ul>
					<li>Click on any header to sort the list by that column.
					<li>Search for multiple options by using 'or' (e.g., "Left OR Both" to find batters who bat left-handed or who can bat with either hand).
					<li>Search using &gt; or &lt; (e.g., find all batting averages above 0.300 by filtering on "&gt;0.300")
				</ul>
			</p>
			<p>
				<a href="#" id="resetSort" class="btn btn-default disabled">Reset to Default Sort</a>
				<a href="#" id="clearFilters" class="btn btn-success disabled">Clear Filters</a>
			</p>
		</div>
		<div class="table-responsive">
			<div id="ajax-loader">
				<img src="/images/ajax-loader.gif" />
			</div>
			<table id="dataTable" class="table">
			</table>
		</div>
	</div>
				
				
	<script>
			// Set startup variables and load the spreadsheet
			var mySpreadsheet = 'https://docs.google.com/spreadsheet/ccc?key=0AlRp2ieP7izLdGFNOERTZW0xLVpROFc3X3FJQ2tSb2c#gid=0'; // see Sheetrock documentation for details on how to get the appropriate URL for your spreadsheet
			var sqlQuery = "select * order by A asc"; // use Google Query Language to specify columns and set your initial sort order
			var sqlQuery = "select * order by %Team% asc"; // you can also use EXACT column names in GQL
			
			$(function(){
					getData(mySpreadsheet, sqlQuery); //load the spreadsheet on documentReady
				}
			);
			
			//Functions are in app.js
	</script>
	<script src="/js/app.js"></script>
</body>
</html>