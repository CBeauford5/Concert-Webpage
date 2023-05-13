<!DOCTYPE html>
<html lang="en">
<head>
  <!--Name: Thomas Reaves
      Blackboard Username: treaves1
      Filename: reaves-project-code.php
	  Class Section: 0005
	  Purpose: to learn how to create backend php code
  -->	
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width,initial scale=1.0">
<link href="reaves-l10-project-style.css" type="text/css" rel="stylesheet" />
<title>L14 Concert Event Form</title>
</head>

<body>

<?php
$name = $_POST['name'];
$number = $_POST['number'];
$adultTickets = $_POST['adult-tickets'];
$childTickets = $_POST['child-tickets'];
$date = $_POST['date'];
$totalAttend = $adultTickets + $childTickets;
define ("TAX", 0.07);
define ("ADULTcost", 35);
define ("CHILDcost", 30);
define ("MINfee", 0.50);
define ("MAXfee", 1.00);
define ("ATTENDcompare", 5);

if ($totalAttend <= ATTENDcompare){
	$fee = $totalAttend * MAXfee;
}
else {
	$fee = $totalAttend * MINfee;
}

$subTotal = ($adultTickets * ADULTcost) + ($childTickets * CHILDcost);
$salesTax = $subTotal * TAX;
$totalCost = $subTotal + $salesTax + $fee;

print ("<h1>Summary of Ticket Cost for the Radiohead Concert</h1>");
print ("<br>");
print ("<p>Thank you <b>".$name. "</b> at <b>".$number. "</b>.  Details of your cost <b>$" .number_format($totalCost, 2). "</b> are shown below:</p>");
print ("<br>");
print ("<ul><li>Adult Tickets: ".$adultTickets);
print ("<li>Child Tickets: ".$childTickets);
print ("<li>Concert Date: ".$date);
echo  ("<li>Sub-Total: $" .number_format($subTotal, 2). "</li>");
echo ("<li>Sales Tax: $" .number_format($salesTax, 2). "</li>");
echo ("<li>Fee: $" .number_format($fee, 2). "</li></ul>");
print ("<ul><li><b>TOTAL: $" .number_format($totalCost, 2). "</b></li></ul>");
print ("<br>");
print ("<a href=reaves-l10-project-lp.html>Return to Main Page If You Would Like to Continue</a>");
?>

</body>
</html>
	