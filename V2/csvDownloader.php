<?php
   // output headers so that the file is downloaded rather than displayed
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=data.csv');

// create a file pointer connected to the output stream
$output = fopen('php://output', 'w');

// output the column headings
fputcsv($output, array('LastName', 'FirstName', 'MAT251CalcI', 'MAT251CalcII', 'MAT320DiscreteMath', 'CPS210CompSciI', 'CPS310CompSciII', 'CPS315CompSciIII', 'CPS352OOP', 'CPS330AssemblyArch', 'CPS353SoftEng', 'CPS415DiscContAlgorithms', 'CPS340OPSys', 'CPS425LangProcessing', 'CPS493Elect1', 'CPS493Projects', 'ECG230DigLogic', 'EGC208DigLogicLab', 'SCIENCEI', 'SCIENCEII', 'Comments'));

// fetch the data
mysql_connect('localhost', 'seniorgato', '');
mysql_select_db('c9');
$rows = mysql_query('SELECT * FROM `TABLE 2`');

// loop over the rows, outputting them
while ($row = mysql_fetch_assoc($rows)) fputcsv($output, $row);
?>
