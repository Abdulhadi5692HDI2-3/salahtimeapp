<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
	<title>Salah Times</title>
	 <!-- Latest compiled and minified CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- Latest compiled JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> 
</head>
<body>
	<div class="container">
		<h1>Salah Times</h1>
		<p>Islamic Date: <?php
			    $salahapi = file_get_contents('http://api.aladhan.com/v1/timingsByCity/DD-MM-YYYY?city=Luton&country=United+Kingdom&method=1&adjustment=1');
				$decodedtimes = json_decode($salahapi, true);
				echo $decodedtimes['data']['date']['hijri']['date'] . " or " . $decodedtimes['data']['date']['hijri']['weekday']['en'] .  " " . $decodedtimes['data']['date']['hijri']['month']['en'] . " " . $decodedtimes['data']['date']['hijri']['year'];
			?>
		</p>
		 <table class="table table-striped">
		    <thead>
		      <tr>
		        <th>Name</th>
		        <th>Time</th>
		      </tr>
		    </thead>
		    <tbody>
		      <tr>
		        <td>Fajr: </td>
		        <td><?php
		        		$salahapi = file_get_contents('http://api.aladhan.com/v1/timingsByCity/DD-MM-YYYY?city=Luton&country=United+Kingdom&method=1&adjustment=1');
						$decodedtimes = json_decode($salahapi, true);
						echo $decodedtimes['data']['timings']['Fajr'];
		        	?></td>
		      </tr>
		      <tr>
		        <td><i>Sunrise:</i> </td>
		        <td><?php
		        		$salahapi = file_get_contents('http://api.aladhan.com/v1/timingsByCity/DD-MM-YYYY?city=Luton&country=United+Kingdom&method=1&adjustment=1');
						$decodedtimes = json_decode($salahapi, true);
						echo $decodedtimes['data']['timings']['Sunrise'];
		        	?></td>
		      </tr>
		      <tr>
		        <td>Zuhr: </td>
		        <td>
		        	<?php
		        		$salahapi = file_get_contents('http://api.aladhan.com/v1/timingsByCity/DD-MM-YYYY?city=Luton&country=United+Kingdom&method=1&adjustment=1');
						$decodedtimes = json_decode($salahapi, true);
						echo $decodedtimes['data']['timings']['Dhuhr'];
		        	?>
		        </td>
		      </tr>
		      <tr>
		        <td>Asr: </td>
		        <td>
		        	<?php
		        		$salahapi = file_get_contents('http://api.aladhan.com/v1/timingsByCity/DD-MM-YYYY?city=Luton&country=United+Kingdom&method=1&adjustment=1');
						$decodedtimes = json_decode($salahapi, true);
						echo $decodedtimes['data']['timings']['Asr'];
		        	?>
		        </td>
		      </tr>
		      <tr>
		        <td>Maghrib: </td>
		        <td>
		        	<?php
		        		$salahapi = file_get_contents('http://api.aladhan.com/v1/timingsByCity/DD-MM-YYYY?city=Luton&country=United+Kingdom&method=1&adjustment=1');
						$decodedtimes = json_decode($salahapi, true);
						echo $decodedtimes['data']['timings']['Maghrib'];
		        	?>
		        </td>
		      </tr>
		      <tr>
		        <td><i>Sunset:</i> </td>
		        <td><?php
		        		$salahapi = file_get_contents('http://api.aladhan.com/v1/timingsByCity/DD-MM-YYYY?city=Luton&country=United+Kingdom&method=1&adjustment=1');
						$decodedtimes = json_decode($salahapi, true);
						echo $decodedtimes['data']['timings']['Sunset'];
		        	?></td>
		      </tr>
		      <tr>
		        <td>Isha: </td>
		        <td>
		        	<?php
		        		$salahapi = file_get_contents('http://api.aladhan.com/v1/timingsByCity/DD-MM-YYYY?city=Luton&country=United+Kingdom&method=1&adjustment=1');
						$decodedtimes = json_decode($salahapi, true);
						echo $decodedtimes['data']['timings']["Isha"];
		        	?>
		        </td>
		      </tr>
		    </tbody>
		  </table>
	</div>
</body>
</html>