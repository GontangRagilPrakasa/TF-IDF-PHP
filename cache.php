<table class="table table-striped table-hover ">
				<thead>
				    <tr>
				      <th>Id </th>
				      <th>Query</th>
				      <th>Id Documen</th>
				    </tr>
				  </thead>
	<?php
	$result = mysqli_query($konek,"SELECT * FROM tbcache ORDER BY Query ASC");
	while($row = mysqli_fetch_array($result)) {

		print("<tr>");
		print("<td>" . $row['Id'] . "</td><td>" . $row['Query'] . "</td><td>" . $row['DocId'] .
			    "</td><td>" . $row['Value'] . "</td>");
		print("</tr>");

	}
	print("</table><hr />");
?>