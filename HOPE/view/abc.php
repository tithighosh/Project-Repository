<?php
	//sleep(3);
		
	$name = $_REQUEST['name'];

	$con = mysqli_connect('localhost', 'root', '', 'hope');
	$sql = "select * from register_list where username like '%{$name}%'";
	$result = mysqli_query($con, $sql);

	$response = "<table border=1>
					<tr>
						<td>ID</td>
						<td>Username</td>
						<td>Email</td>
						<td>type</td>
						<td>Address</td>
						<td>Telephoneno</td>
					</tr>";

	while ($row = mysqli_fetch_assoc($result)) {
		$response .= 	"<tr>
							<td>{$row['id']}</td>
							<td>{$row['username']}</td>
							<td>{$row['email']}</td>
							<td>{$row['type']}</td>
							<td>{$row['address']}</td>
							<td>{$row['telephoneno']}</td>
						</tr>";
	}

	$response .= "</table>";

	echo $response;

?>