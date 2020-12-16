




    <?php
  header("Pragma: no-cache");
  header("Cache-Control: no-cache");
  header("Expires: 0");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" type="text/css" href="index_design.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<title>pay</title>
<meta name="GENERATOR" content="Evrsoft First Page">
</head>
<body>
	<div class="container-fluid payment">
  <h1>PAYMENT PORTAL</h1>
  <pre>
  </pre>
  <form method="post" action="pgRedirect.php">
    <table  class="table table-hover">
      <thead>
        <tr>
          <th>S.No</th>
          <th>Label</th>
          <th>Value</th>
        </tr>
    </thead>
        <tbody>
        <tr>
          <td>1</td>
          <td><label>ORDER_ID</label></td>
          <td><input id="ORDER_ID" tabindex="1" maxlength="20" size="20"
            name="ORDER_ID" autocomplete="off"
            value="<?php echo  "ORDS" . rand(10000,99999999)?>" readonly>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td><label>CUSTID </label></td>
          <td><input id="CUST_ID" tabindex="2" maxlength="20" size="20" name="CUST_ID" autocomplete="off" value="CUST001" readonly></td>
        </tr>
    	<tr>
       <!--   <td>3</td>
          <td><label>INDUSTRY_TYPE_ID</label></td>
          <td><input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail" readonly hidden=""></td>
        </tr>
    -->
    	<input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail" readonly hidden="">
        <tr>
          <td>3</td>
          <td><label>Channel</label></td>
          <td><input id="CHANNEL_ID" tabindex="4" maxlength="20"
            size="20" name="CHANNEL_ID" autocomplete="off" value="WEB" readonly>
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td><label>Amount*</label></td>
          <td><input title="TXN_AMOUNT" tabindex="10"
            type="text" name="TXN_AMOUNT"
            value="1">
          </td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td><input value="CheckOut" type="submit" onclick=""></td>
        </tr>
      </tbody>
    </table>
    * - Mandatory Fields
  </form>
</div>
</body>
</html>