<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Git Branching, Merging, Cloning Test</title>
</head>

<body>

	<?php
		class DBConnect
		{
		}
		class Restaurant extends DBConnect
		{
			protected $noOfTables;
			
			public function __construct($noOfTables)
			{
				$this->noOfTables = $noOfTables;
			}
			public function openRestaurant()
			{
				return TRUE;
			}
		}
		class Table
		{
			
		}
		
		class ShiftCalculator
		{
		}
	?>


</body>
</html>