<!DOCTYPE html>
<html>

<head>
    <title>Banking Website</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<header>
    <a class="nav-wrapper">
        <div class="logo-wrapper">
            <img src="https://www.pngarts.com/files/6/Blue-Bank-PNG-Image-Background.png" style="max-width:50px;" />
            <div class="logo">
                J&J&J Bank
            </div>
        </div>
        <button class="nav-button">
            Log
        </button>
    </a>

</header>       

<body>

    <div class="container" style="margin-left: 200px;">
        <div class="card-body">
            <p class="card-text"> </p>

            <div class="row">
                <div class="col">

                    Account No.
                    <input type="text" value="35653635625" name="otherNo" class="form-control " readonly="" required="">
                    Account Holder Name.
                    <input type="text" class="form-control" value="JC " readonly="" required="">
                    Bank Balance
                    <input type="text" class="form-control my-1" value="$4439504" readonly="" required="">

                </div>
                <div class="col">
                    Transaction Process.
                    <form method="POST">
                    <input type="text" class="form-control my-1" name="amount" min="1"
                            placeholder="Write Amount To Deposit" required="">
    
                    <input type="text" class="form-control my-1" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                            maxlength="3" placeholder="Write Check Number" required="">

                        <button type="submit" name="deposit" class="btn btn-success btn-bloc btn-sm my-1">  
                            Deposit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Add sidebar for deposit option -->
    <div class="sidebar">
        <ul class="list-group">
            <li class="list-group-item active">Menu</li>
            <li class="list-group-item"><a href="checking.php">Home</a></li>
            <li class="list-group-item"><a href="deposit.php">Deposit</a></li>
            <li class="list-group-item"><a href="home.html">Choose Accounts</a></li>
        </ul>
    </div>
</body>

</html>