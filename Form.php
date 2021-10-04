<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> personal info</title>
    <link rel="stylesheet" href="form.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Donation Info</div>
    <div class="content">
      <form action="invoice.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text"name="txtname" placeholder="Enter your Full name" required>
          </div>
          <div class="input-box">
            <span class="details">Plant Name</span>
            <input type="text" name="txtpname"  placeholder="Enter the Plant name" required>
          </div>
          <div class="input-box">
            <span class="details">Amount</span>
            <input type="text" name="txtamt" placeholder="Enter Donation Amount" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text"  name="txtnum" placeholder="Enter your number" required>
          </div>
          
          <div class="input-box">
            <span class="details">Address</span>
            <input type="text" name="txtadd" placeholder="city,State,India" required>
          </div>
        </div>
        <div class="button">
          <input type="submit"  value="SUBMIT">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
