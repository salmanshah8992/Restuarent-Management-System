<x-app-layout>

    {{-- <x-slot name="header">

     </x-slot> --}}

    </x-app-layout>

    <!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.admincss')
  </head>
  <body>
   
    
    <div class="container-scroller">
   @include('admin.navbar')

  <div class="container">

  
   <h2 class="bg-success text-black" >Customer Orders</h2>
  
  <form action="{{ url('/search') }}" method="get">
      @csrf

      <input type="text" name="search" style="color:blue;">
      <input type="submit" value="Search" class="btn btn-success">
  </form>

  
   <table class="">
    
      <tr align="center" style="background-color: blue;">
      
          <td style="padding: 30px;">Name</td>
          <td style="padding: 30px;">Phone</td>
          <td style="padding: 30px;">Address</td>
          <td style="padding: 30px;">FoodName</td>
          <td style="padding: 30px;">Price</td>
          <td style="padding: 30px;">Quantity</td>
          <td style="padding: 30px;">Total Price</td>
      </tr>
          @foreach ( $data as $data)
              
        
        <tr align="center" style="background-color: yellow;" class="text-black">
            <td>{{ $data->name }}</td>
            <td>{{ $data->phone }}</td>
            <td>{{ $data->address }}</td>
            <td>{{ $data->foodname }}</td>
            <td>{{ $data->price }}</td>
            <td>{{ $data->quantity }}</td>
            <td>{{ $data->price * $data->quantity }}</td>
        </tr>
        @endforeach
  </table>
</div>
    </div>


   @include('admin.adminscript')
  </body>
</html>