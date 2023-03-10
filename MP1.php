<!DOCTYPE html>
<html>

<head>
    <title> TAXXY: A TAX CALCULATOR WEB APP </title>
    <style type="text/css">
        h1 {
            text-align: center;
            font-size: 35px;
        }

        body {
            font-family: cursive;
            color: #F6EEE0;
            background-color: #A45C40;
            font-size: 23px;
            text-align: center;
        }

        
    </style>
</head>

<body>

    <?php

    if (isset($_POST['submit'])) {
        $salary = $_POST['salary'];
        $type = $_POST['type'];
        $AnnualSalary = $salary * 12;

                if ($_POST['type'] == "bi-Monthly") {
               $AnnualSalary = ($salary * 12) * 2;

                if ($AnnualSalary <= 250000) {
                    $finalsalary = 0;
                    $Excesstwo = $finalsalary;
                    $MonthlyTax = $finalsalary * 12;
                }
                else if ($AnnualSalary <= 400000 && $AnnualSalary > 250000) {
                    $Excess = $AnnualSalary - 250000;
                    $finalsalary = $Excess * 0.2 ;
                    $Excesstwo = $finalsalary;
                    $MonthlyTax = $finalsalary / 12 ;
                }
                else if ($AnnualSalary <= 800000 && $AnnualSalary > 400000) {
                    $Excess = $AnnualSalary - 400000;
                    $finalsalary = $Excess * 0.25;
                    $Excesstwo = $finalsalary + 30000;
                    $MonthlyTax = $Excesstwo / 12;
                }
                else if ($AnnualSalary <= 2000000 && $AnnualSalary > 800000) {
                    $Excess = $AnnualSalary - 800000;
                    $finalsalary = $Excess * 0.3;
                    $Excesstwo = $finalsalary + 130000;
                    $MonthlyTax = $Excesstwo / 12;
                }
                else if ($AnnualSalary <= 8000000 && $AnnualSalary > 2000000) {
                    $Excess = $AnnualSalary - 2000000;
                    $finalsalary = $Excess * 0.32;
                    $Excesstwo = $finalsalary + 490000;
                    $MonthlyTax = $Excesstwo / 12;
                }
                else if ($AnnualSalary > 8000000) {
                    $Excess = $AnnualSalary - 8000000;
                    $finalsalary = $Excess * 0.35;
                    $Excesstwo = $finalsalary + 2410000;
                    $MonthlyTax = $Excesstwo / 12;
                }  

                echo "Monthly Salary: " . $salary . "<br>"; 
                echo "Annual Salary: " . $AnnualSalary  . "<br>";
                echo "Annual Tax: ". $Excesstwo  . "<br>";
                echo "Monthly Tax: " . $MonthlyTax  . "<BR>";
                

            } else if ($_POST['type'] == "monthly") {
            
                if ($AnnualSalary <= 250000) {
                    $finalsalary = 0;
                    $Excesstwo = $finalsalary;
                    $MonthlyTax = $finalsalary / 12;
                }
                else if ($AnnualSalary <= 400000 && $AnnualSalary > 250000) {
                    $Excess = $AnnualSalary - 250000;
                    $finalsalary = $Excess * 0.2 ;
                    $Excesstwo = $finalsalary;
                    $MonthlyTax = $finalsalary / 12 ;
                }
                else if ($AnnualSalary <= 800000 && $AnnualSalary > 400000) {
                    $Excess = $AnnualSalary - 400000;
                    $finalsalary = $Excess * 0.25;
                    $Excesstwo = $finalsalary + 30000;
                    $MonthlyTax = $Excesstwo / 12;
                }
                else if ($AnnualSalary <= 2000000 && $AnnualSalary > 800000) {
                    $Excess = $AnnualSalary - 800000;
                    $finalsalary = $Excess * 0.3;
                    $Excesstwo = $finalsalary + 130000;
                    $MonthlyTax = $Excesstwo / 12;
                }
                else if ($AnnualSalary <= 8000000 && $AnnualSalary > 2000000) {
                    $Excess = $AnnualSalary - 2000000;
                    $finalsalary = $Excess * 0.32;
                    $Excesstwo = $finalsalary + 490000;
                    $MonthlyTax = $Excesstwo / 12;
                }
                else if ($AnnualSalary > 8000000) {
                    $Excess = $AnnualSalary - 8000000;
                    $finalsalary = $Excess * 0.35;
                    $Excesstwo = $finalsalary + 2410000;
                    $MonthlyTax = $Excesstwo / 12;
                }  

                echo "Monthly Salary: " . $salary . "<br>"; 
                echo "Annual Salary: " . $AnnualSalary . "<br>";
                echo "Annual Tax: ". $Excesstwo . "<br>";
                echo "Monthly Tax: " . $MonthlyTax . "<BR>";
            }
        }
    ?>

    <center>
        <h1>TAXXY: A TAX CALCULATOR WEB APP</h1>
        <form method="post">

            <center> <img src="https://i2.wp.com/governmentph.com/wp-content/uploads/2018/12/2020-Revised-Withholding-Tax-Table.jpg?fit=1200%2C628&ssl=1" ; width="450" height="250" ; border="5" id="img"> </center>

            <p>Salary:
                <input type="text" id="salary" name="salary" size="30">
            </p>

            <p>Type:
                <input type="Radio" id="bi-monthly" name="type" value="bi-Monthly">
                <label for="bi-monthly">Bi-Monthly</label>
                <input type="Radio" id="monthly" name="type" value="monthly">
                <label for="monthly">Monthly</label>
            </p>

            <input type="submit" value="submit" name="submit">

        </form>
        </table>
</body>

</html>