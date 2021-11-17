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



<div style="position: relative;top:60px;right:-150px">
    <div class="container">
    <form action="{{ url('/uploadfood') }}" method="POST" enctype="multipart/form-data" >
        @csrf
        <div>
            <label for="title">Title</label>
            <input style="color:rgb(238, 235, 61)" type="text"id="title" name="title" placeholder="enter title" required>
            
        </div>
        <div>
            <label for="price">Price</label>
            <input style="color:rgb(167, 207, 20)" type="number"id="price" name="price" placeholder="enter price" required>
            
        </div>
        <div>
            <label for="image">Image</label>
            <input type="file"style="color:rgb(167, 207, 20)" id="image" name="image" placeholder="enter image" >
            {{-- or <label for="image">Image link</label>
            <input type="text"style="color:blue" name="image" placeholder=" Image link" > --}}
            
        </div>
        <div>
            <label for="description">Description</label>
            <input type="text"style="color:blue"id="description" name="description" placeholder="enter description" required>
            
        </div>
        <div>
            <input type="submit" value="Submit" class="btn btn-info">
        </div>
    
    </form>
</div>
    <div>
        <table >
            <tr align="center" style="background-color: blue;">
           
            
            <th style="padding: 10px">Food Name</th>
            <th style="padding: 10px">Price</th>
            <th style="padding: 10px">Description</th>
            <th style="padding: 10px">Image</th>
            <th style="padding: 10px">Action</th>
            <th style="padding: 10px">Action</th>

        </tr>
            @foreach ($data as  $data)
                
            
            <tr align="center" style="background-color: rgb(113, 223, 41); color:black">
                <td>{{ $data->title }}</td>
                <td>{{ $data->price }}</td>
                <td>{{ $data->description }}</td>
                <td ><img src="/foodimage/{{ $data->image }}" style="height:50px;weidth:50px" alt=""></td>
                <td><a href="{{ url('deletemenu',$data->id) }}" class="btn btn-danger">Delete</a></td>
                <td><a href="{{ url('updatemenu',$data->id) }}" class="btn btn-success">Update</a></td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

        </div>
   @include('admin.adminscript')
  </body>
</html>