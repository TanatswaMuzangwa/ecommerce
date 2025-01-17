

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title></title>
    
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <style type="text/css">

    .div_center{
        text-align:center;
        padding-top:40px
    }
    .font_size{
        font-size:40px;
        padding-bottom:40px;
    }
    .text_color{
        color:black;
        padding-bottom:20px;
    }

    label{
        display:inline-block;
        width:200px;
    }

    .div_design{
        padding-bottom:15px;
    }

    
   
    
    
    
    </style>
    </head>

    <body>
     @include('admin.scripts')
    
    @include('admin.navbar')

    @include('admin.sidebar')

    @include('sweetalert::alert')
    
   
    
     <div class="main-panel">
     <div class="content-wrapper">
     <div class=div_center>


     
        @if(session()->has('message'))

        <div class= "alert alert-success">

        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x
              </button>

        {{session()->get('message')}}
        </div>

        @endif


    <h1 class="font_size">Add product</h1>

    <form action="{{url('/add_product')}}" method="post" enctype="multipart/form-data">


    @csrf

    <div class="div_design">

    <label>Product title</label>
    <input class="text_color" type="text" name="title" placeholder="Write a product tittle" required="">

    </div>


         <div class="div_design">

     <label>Product description</label>
     <input class="text_color" type="text" name="description" placeholder="Write a product description">
     </div>
    
    
      <div  class="div_design">
     <label>Product price</label>
     <input class="text_color" type="number" name="price" placeholder="Write a product price">
     </div>
    
      <div  class="div_design">
     <label>Product quantity</label>
     <input class="text_color" type="number" min="0" name="quantity" placeholder="Write a product quantity">
     </div>
    
      <div  class="div_design">
     <label>Product category</label>
     <select  class="text_color" name="category" required="">

      <option value="" selected="">Add category here</option>

      @foreach($category as $category)
     <option value= {{$category->category_name}}>{{$category->category_name}}</option>

     @endforeach

     
     </select>
     </div>
    
      <div  class="div_design">
    <label>Discount Price</label>
    <input class="text_color" type="number" name="disc_price" placeholder="Write discount">
    </div>

        <div  class="div_design">
         <label>Product image</label>
        <input type="file" name="image" id="image">
         </div>

        
  <div  class="div_design">
       
        <input type="submit" value="Add product" class="btn btn-primary">
        </div>

        </form>

 


    </div>
    </div>
    </div>

    </body>
    </html>


