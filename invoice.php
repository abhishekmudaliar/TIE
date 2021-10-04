<?php
$Name = $_POST["txtname"];
$Pname = $_POST["txtpname"];
$Phone = $_POST["txtnum"];
$Amount = $_POST["txtamt"];
$Address = $_POST["txtadd"];


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="iform.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
    <script src="/form/invoice.js"></script>
        
        
    <title>Invoice</title>
</head>

<body>
    <div class="body">
        <div class="container"  >
            <div class="contain" id="invoice">
                <div class="invoi">
                    <div class="lside">
                        <div class="com">
                            LEAF NOW
                        </div>
                        <div class="details">
                            <div class="box">
                                <div class="lb">
                                    <h5>Name</h5>
                                </div>
                                <div class="text">
                                    <h5> <?php  echo $Name ?> </h5>

                                </div>
                            </div>
                            <div class="box">
                                <div class="lb">
                                    <h5>Contact</h5>
                                </div>
                                <div class="text">
                                    <h5> <?php  echo $Phone ?> </h5>

                                </div>
                            </div>
                            <div class="box">
                                <div class="lb">
                                    <h5>Address</h5>
                                </div>
                                <div class="text">
                                    <h5> <?php  echo $Address ?> </h5>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rside">
                        <div class="details">
                            <div class="box">
                                <div class="rb">
                                    <h5>Plant Name</h5>
                                </div>
                                <div class="text">
                                    <h5> <?php  echo $Pname ?> </h5>

                                </div>
                            </div>
                            <div class="box">
                                <div class="rb">
                                    <h5>Amount</h5>
                                </div>
                                <div class="text">
                                    <h5> <?php  echo $Amount?> Rs </h5>

                                </div>
                            </div>
                            <div class="box">
                                <div class="rb">
                                    <h5>Total Amount</h5>
                                </div>
                                <div class="text">
                                    <h5> <?php  echo $Amount ?> Rs </h5>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="line">
                    
                </div>
                <div class="thanks">
                    <h5>Thanks For Your Contribution</h5>
                    <h5>Visit Again</h5>
                </div>
                
            </div>
            <div class="button">

<button class="btn btn-primary" id="download"> Download Pdf</button>
<a href="/leafnow/index.php">HOME</a>
</div>
<form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_I3IG8W1ugVvZSv" async> </script> </form>  </div>
    </div>
    </div>
    
</body>

</html>