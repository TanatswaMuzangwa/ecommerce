<!DOCTYPE html>
<html>
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
         <!-- slider section -->

         <!-- end slider section -->
      </div>
   <div class="col-sm-6 col-md-4 col-lg-4" style="margin:auto; width: 50%; padding:30px;">
           <div class="img-box" style="padding:20px">
              <img src="/product/{{$product->image}}" alt="" style="padding=30px; display:block; margin-left:auto;margin-right:auto; width:50%;">
           </div>
           <div class="detail-box">
              <h5>
                {{$product->title}}
              </h5>
                 
                 @if($product->discount_price!=null)
                <h6 style="color:red;">
                Discount price
                <br>
                  {{$product->discount_price}}
               </h6>
                   <h6 style="text-decoration: line-through; color:blue">
                   Price
                <br>
                    {{$product->price}}
                 </h6>
                 @else
                  
                <h6 style="color:blue">
                price
                <br>
                {{$product->price}}
             </h6>
                
               @endif

               <h6>Product Category::{{$product->category}}</h6>
               <h6> Product description::{{$product->description}}</h6>
               <h6>Available: {{$product->quantity}}</h6>



      <form action="{{url('add_cart',$product->id)}}" method="post">
                  @csrf
                  <div class="row">
                  <div class="col-md-4">
                      <input type="number" name="quantity" value="1" min="1" style="width:100px">
                       </div>
                  <div class="col-md-4">
                       <input type="submit" value="Add to cart">
                  </div>
      
      
      </div>
      </form>
             
             
             
           </div>
        </div>
     </div>
     </div>
     



      <!-- footer start -->
       @include('home.footer')  
      <!-- footer end -->
    
    
    
    
      
      
      
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