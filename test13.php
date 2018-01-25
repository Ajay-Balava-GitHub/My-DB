<html>
<head><title>Table </title>
</head>
<body>
<?PHP
//$ch=3;
$ch=date('D');
//echo "Date: $ch"."<br>";

echo "Day: ";
switch($ch)
{
	case "Mon":
	echo "Monday"."<br>";
	break;
	
	case "Tue":
	echo "Thuesday"."<br>";
	break;
	
	case "Wed":
	echo "Wednesday"."<br>";
	break;
	
	case "Thu":
	echo "Thursday"."<br>";
	break;
	
	case "Fri":
	echo "Friday"."<br>";
	break;
	
	case "Sat":
	echo "Saturday"."<br>";
	break;
	
	case "Sun":
	echo "Sunday"."<br>";
	break;
	
	default:
	echo "Holiday"."<br>";
}
?>
</body>
</html>