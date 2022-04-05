<!DOCTYPE html>
<html>

    <head>
        <title>PHP Calculator</title>
        <link rel="stylesheet" href="style.css" />
    <head>

    <body>
         
<?php
ini_set('display_errors',0);
 
if( isset( $_REQUEST['calculate'] ))
{
$operator=$_REQUEST['operator'];
$n1 = $_REQUEST['first_value'];
$n2 = $_REQUEST['second_value'];
 
if($operator=="+")
{
$res= $n1+$n2;
}
if($operator=="-")
{
$res= $n1-$n2;
}
if($operator=="*")
{
$res =$n1*$n2;
}
if($operator=="/")
{
$res= $n1/$n2;
}
 
if($_REQUEST['first_value']==NULL || $_REQUEST['second_value']==NULL)
{
echo "<script language=javascript> alert(\"Please Enter Correct values.\");</script>";
}
}
?>
        <h1 class="p1">PHP Calculator</h1>
        <div class="a">
            <div class="b">
                <form class="form">
                    <table>
                        <tr>
                            <td>Enter Number :</td>
                            <td><input name="first_value" type="text" /></td>
                        </tr><br>
                        <tr>
                            <td>Select Operator :</td>
                            <td>
                                <select name="operator">
                                    <option>+</option>
                                    <option>-</option>
                                    <option>*</option>
                                    <option>/</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Enter Number :</td>
                            <td>
                                <input name="second_value" type="text" />
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><button type="submit" name="calculate" value="Calculate">Calculate</button></td>
                        </tr>
                        <tr>
                            <td>Output : </td>
                            <td><?php echo $res;?></td>
                        </tr>

                    </table>
                    <button class="btn" type="submit" name="refresh" value="refresh" src="clculator.php">Refresh</button>
                </form>

            </div>
            <h3 class="h">by Sandipan Das .</h3>
        </div>

    </body>

</html>