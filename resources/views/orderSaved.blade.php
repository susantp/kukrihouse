<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12 ">

            <div class="card" style="width: 30rem;">
                <img src="https://picsum.photos/500/200" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">New Order</h5>
                    <strong>Name:</strong>
                    <p class="card-text">{{$order->name}}</p>
                    <strong>Street:</strong>
                    <p class="card-text">{{$order->street}}</p>
                    <strong>City:</strong>
                    <p class="card-text">{{$order->city}}</p>
                    <strong>State:</strong>
                    <p class="card-text">{{$order->state}}</p>
                    <strong>Country:</strong>
                    <p class="card-text">{{$order->country}}</p>
                    <strong>Phone:</strong>
                    <p class="card-text">{{$order->phone}}</p>
                    <strong>Ordered Item:</strong>
                    <p class="card-text">{{$order->hidden_item_name}}</p>
                    <strong>Ordered Quantity:</strong>
                    <p class="card-text">{{$order->hidden_item_quantity}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
-->
</body>
</html>
