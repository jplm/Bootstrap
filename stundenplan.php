<!DOCTYPE html>
<html lang="de">

<head>
<title>Christoph Sauer</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/bootstrap.min.js"></script>

</head>
<body>
<?php
	include('php/navbar.php');
?>
	<main class="row-fluid">
	<div class="col-md-12">
		<table border="2" class="table">
			<tr>
				<th>Stunde</th>
				<th>Montag</th>
				<th>Dienstag</th>
				<th>Mittwoch</th>
				<th>Donnerstag</th>
				<th>Freitag</th>
			</tr>
			<tr>
				<td>8:00-9:30</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>9:45-11:15</td>
				<td>Aud-V</td>
				<td>GDI-V</td>
				<td>&nbsp;</td>
				<td>AuD-V</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>11:30-13:00</td>
				<td>PIS-P</td>
				<td>IBS-V</td>
				<td>&nbsp;</td>
				<td>RfI</td>
				<td>PIS-V</td>
			</tr>
			<tr>
				<td>14:00-15:30</td>
				<td>NTG-V</td>
				<td>PIS-V</td>
				<td>&nbsp;</td>
				<td><script>
					if (Kalenderwoche() % 2 == 0) {
						document.write("AuD-&uuml;");
					} else {
						document.write("NtG-&uuml;");
					}
				</script></td>
				<td><script>
					if (Kalenderwoche() % 2 == 0) {
						document.write("IBS-P");
					} else {
						document.write("&nbsp;")
					}
				</script></td>
			</tr>
			<tr>
				<td>15:45-17:15</td>
				<td>&nbsp;</td>
				<td>LA-&uuml;</td>
				<td><script>
					if (Kalenderwoche() % 2 == 0) {
						document.write("BWL");
					} else {
						document.write("&nbsp;");
					}
				</script></td>
				<td><script>
					if (Kalenderwoche() % 2 == 1) {
						document.write("AuD-&uuml;");
					} else {
						document.write("&nbsp;");
					}
				</script></td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>17:30-19:00</td>
				<td><script>
					if (Kalenderwoche() % 2 == 1) {
						document.write("NTG-V");
					} else {
						document.write("&nbsp;");
					}
				</script></td>
				<td>LA-V</td>
				<td><script>
					if (Kalenderwoche() % 2 == 0) {
						document.write("BWL");
					} else {
						document.write("&nbsp;");
					}
				</script></td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
		</table>
	</div>



	<script type="text/javascript"
		src="http://code.jquery.com/jquery.min.js"></script>
</body>
</html>