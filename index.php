<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hosting Checker</title>
    <meta name="description" content=" ip checker get unveil the true information behind any address.who is behind that IP address you've been searching for. Find answers now!">
    <link rel="icon" type="image/x-icon" href="assest/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0-alpha3/css/bootstrap.min.css">
    <link rel="stylesheet" href="assest/styles.css">
    
</head>
<body>

<div class="result-container">
    <div class="container">
        <h1 class="text-center">Hosting Checker</h1>
        <h2 class="text-center">Who is search for domain and Any IP</h2>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-8 col-xl-6">
                <form>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Type IP Address or Domain" id="ip_address">
                            <button type="button" class="btn btn-primary" onclick="checkIP()">Check</button>
                            <button type="button" class="btn btn-secondary" onclick="clearInput()">Clear</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card bg-light mb-3 mt-4">
            <div class="card-body">
                <div id="result" class="text-center"></div>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0-alpha3/js/bootstrap.min.js"></script>
<script src="assest/script.js"></script>
</body>
<footer class=" text-center" >
    <div class="text-center p-3" ">© xzunk | Github </div>
</footer>
</html>

