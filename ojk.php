<?php
$data 	= file_get_contents('https://ojk-invest-api.vercel.app/api/illegals');
$illegals= json_decode($data);
echo "<pre>"; print_r($illegals);
$illegals= var_dump($illegals);
$table = "<h3>Data Perusahaan OJK</h3>";
$table .= "<table border=1>
			<tr><td>No</td>
			    <td>Name</td>
				<td>Alamat</td>
				<td>Telephone</td>
				<td>Tipe</td>
				<td>Web</td></tr>";

for($i=0;$i<count($illegals);$i++){
	$no=$i+1;
	$table .= "<tr><td>{$no}</td>
			    <td>{$illegals[$i]->name}</td>
				<td>{$illegals[$i]->address}</td>
				<td>{$illegals[$i]->number}</td>
				<td>{$illegals[$i]->type}</td>
				<td>{$illegals[$i]->urls}</td>
				</tr>";
}
$table .= "</table>";
echo $table;				
?>