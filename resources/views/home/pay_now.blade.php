<!DOCTYPE html>
<html>

<base href="/public">
<head>


    <meta charset="utf-8" />
 <meta http-equiv="X-UA-Compatible" content="IE=edge" />
 <!-- Mobile Metas -->
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
 <!-- Site Metas -->
 <meta name="keywords" content="" />
 <meta name="description" content="" />
 <meta name="author" content="" />
 <link rel="shortcut icon" href="images/logo4.png" type="">
 <title>E-COMMERCE</title>
 <!-- bootstrap core css -->
 <link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.css')}}" />
 <!-- font awesome style -->
 <link href="{{asset('home/css/font-awesome.min.css')}}" rel="stylesheet" />
 <!-- Custom styles for this template -->
 <link href="{{asset('home/css/style.css')}}" rel="stylesheet" />
 <!-- responsive style -->
 <link href="{{asset('home/css/responsive.css')}}" rel="stylesheet" />




</head>

<body>
 @include('home.header')


<form  method ="get" method="{{url('create_visa_payments')}}">



<input type="hidden" name="price" value="{{$totalprice}}">

<button  type="submit">Checkout using paynow</button>

</form>



{{$totalprice}}

 @include('home.footer')  

     
    
    <!-- jQery -->
    <script src="home/js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script src="home/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="home/js/bootstrap.js"></script>
    <!-- custom js -->
    <script src="home/js/custom.js"></script>

</body>


</html>