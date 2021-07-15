<?php

    require './php_scripts/conn.php';

    $sql="SELECT * FROM CUSTOMER";
    $result1 = mysqli_query( $conn, $sql );
    $result2 = mysqli_query( $conn, $sql );
    
    echo mysqli_error($conn);
    
?>
<html lang="en">

<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>Table V05</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="./table_files/images/icons/favicon.ico" />

<link rel="stylesheet" type="text/css" href="./table_files/vendor/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="./table_files/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="./table_files/vendor/animate/animate.css">

<link rel="stylesheet" type="text/css" href="./table_files/vendor/select2/select2.min.css">

<link rel="stylesheet" type="text/css" href="./table_files/vendor/perfect-scrollbar/perfect-scrollbar.css">

<link rel="stylesheet" type="text/css" href="./table_files/css/util.css">
<link rel="stylesheet" type="text/css" href="./table_files/css/main.css">
<link rel="stylesheet" type="text/css" href="assets/mobirise/css/mbr-additional.css">



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
</head>
<body >
<div class="limiter" >
<div class="container-table100">
<div class="wrap-table100">
<div class="table100 ver1">
<div class="table100-firstcol">
<table>
<thead>
<tr class="row100 head">
<th class="cell100 column1">Name</th>
</tr>
</thead>
<tbody>
<?php while( $nt1=mysqli_fetch_array($result1)){ ?>
<tr class="row100 body">
<td class="cell100 column1"><?php echo $nt1['full_name']; ?></td>
</tr>
<?php } ?>

</tbody>
</table>
</div>
<div class="wrap-table100-nextcols js-pscroll">
<div class="table100-nextcols">
<table>
<thead>
<tr class="row100 head">
<th class="cell100 column2">Email</th>
<th class="cell100 column3">Phone no</th>
<th class="cell100 column4">Message</th>
</tr>
</thead>
<tbody>
	<?php while( $nt2=mysqli_fetch_array($result2)){ ?>

<tr class="row100 body">
<td class="cell100 column2"><?php echo $nt2['email']; ?></td>
<td class="cell100 column3"><?php echo $nt2['phone_no']; ?></td>
<td class="cell100 column4"><?php echo $nt2['message']; ?></td>

</tr>

<?php } ?>

</tbody>
</table>

</div>
</div>

</div>
</div>
<button type="button" class="btn btn-primary" style="" onclick="del()">DELETE RECORDS</button>

</div>
</div>
<script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="vendor/jquery/jquery-3.2.1.min.js"></script>

<script src="./table_files/vendor/bootstrap/js/popper.js"></script>
<script src="./table_files/vendor/bootstrap/js/bootstrap.min.js"></script>

<script src="./table_files/vendor/select2/select2.min.js"></script>

<script src="./table_files/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})

			$(this).on('ps-x-reach-start', function(){
				$(this).parent().find('.table100-firstcol').removeClass('shadow-table100-firstcol');
			});

			$(this).on('ps-scroll-x', function(){
				$(this).parent().find('.table100-firstcol').addClass('shadow-table100-firstcol');
			});

		});




	</script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<script src="./table_files/js/main.js"></script>
<script src="./table_files/js/del.js"></script>
</body>

<!-- Mirrored from colorlib.com/etc/tb/Table_Fixed_Column/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Jan 2021 10:44:11 GMT -->
</html>
