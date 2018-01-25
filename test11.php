<html>
<head><title>Table </title>
</head>
<body>
<?PHP
//$ch=3;
$ch=date('d');
echo "Date: $ch"."<br>";
$ch=intval($ch/5);
echo "Day: ";
switch($ch)
{
	case 1:
	echo "Monday"."<br>";
	break;
	
	case 2:
	echo "Thuesday"."<br>";
	break;
	
	case 3:
	echo "Wednesday"."<br>";
	break;
	
	case 4:
	echo "Thursday"."<br>";
	break;
	
	case 5:
	echo "Friday"."<br>";
	break;
	
	case 7:
	echo "Saturday"."<br>";
	break;
	
	case 8:
	echo "Sunday"."<br>";
	break;
	
	default:
	echo "Holiday"."<br>";
}
?>
</body>
</html>