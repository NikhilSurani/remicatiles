<?php
session_start();

include "config.php";
if (isset($_SESSION['uname']))
{

	echo $id = $_REQUEST['id'];
	echo $type = $_REQUEST['type'];
	if ($type == "h")
	{
	echo $que = mysql_query("SELECT * FROM h_img WHERE id='$id'");
	echo $res = mysql_fetch_array($que);
	echo $name = $res['h_name'];
	$type = "h_img";
	echo $img = $res['h_img'];	
	}
	else if ($type == "c")
	{
	echo $que = mysql_query("SELECT * FROM home WHERE id='$id'");
	echo $res = mysql_fetch_array($que);
	echo $type = $res['name'];
	echo $img = $res['img'];	
	$name = $res['name'];
	}
?>

<!DOCTYPE html>
	<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SiddharthManufacturing</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
<style>
.BroweForFile > input
{
    display: none;
}
</style>
</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>Siddharth</span>Manufacturing</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="change_password.php"><svg class="glyph stroked lock"><use xlink:href="#stroked-lock"/></svg> Change Password</a></li>
							<li><a href="logout.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li><a href="list.php"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"></use></svg> List Item</a></li>
			<li ><a href="add.php"><svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"></use></svg> Add Item</a></li>
			<li class="active"><a href="update.php"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Update Item</a></li>
			<li><a href="delete.php"><svg class="glyph stroked trash"><use xlink:href="#stroked-trash"></use></svg> Delete Item</a></li>
				</ul>

	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit Item</h1>
			</div>
		</div><!--/.row-->
		
		
			
			<!--Tab panel start-->		
	<div class="row">
		<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body tabs">
							
						<div class="tab-content">
							<div class="tab-pane fade in active" id="pilltab1">
								<div class="col-md-4">
								<form role="form" action="edit3.php?id=<?php echo $id;?>&type=<?php echo $type; ?>" method="post" enctype="multipart/form-data">
								<div class="form-group">
									<label>Name</label>
									<input type="text" class="form-control" name="name" value="<?php echo $name; ?>" >
								</div>	
							
							<!-- display image from database-->
								<div class="form-group">
										<label>Image</label><br/>
										<div class="row">
  											<div class="col-md-3">
												<div class="BroweForFile">
    											<label for="PickFileButton">
       										 		<img src="images/<?php echo $type."/".$img;?>" width="100%"/>
    											</label>
												<input id="PickFileButton" type="file" name="ima"/>
												</div>
											</div>
											</div>
								<!-- end-->			 
								<input type="submit" class="btn btn-primary" value="Update" name="e_btn">
								</form>	
								</div>
							</div>
							
			</div><!-- /.col-->
			
		</div><!--tab panel end -->	
			
		
		
								
		
	</div>	<!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>





<?php


}
else 
echo "You are not allowed";
?>