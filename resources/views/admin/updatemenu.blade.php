<x-app-layout>

    {{-- <x-slot name="header">

     </x-slot> --}}

    </x-app-layout>

    <!DOCTYPE html>
<html lang="en">
    <base href="/public">
  <head>
    @include('admin.admincss')
  </head>
  <body>
   
    
    <div class="container-scroller">
   @include('admin.navbar')
   <div style="position: relative;top:60px;right:-150px">
    <form action="{{ route("update",$data->id) }}" method="POST" >
        @csrf
        <div>
            <label for="title">Title</label>
            <input style="color:blue" type="text" name="title" value="{{ $data->title }}" required>
            
        </div>
        <div>
            <label for="price">Price</label>
            <input style="color:blue" type="num" name="price" value="{{ $data->price }}" required>
            
        </div>
        <div>
            <label for="image">Image</label>
            <input type="file"style="color:blue" name="image" placeholder="enter image" >
            or <label for="image">Image link</label>
            <input type="text"style="color:blue" name="image" value="{{ $data->image  }}" required>
            
        </div>
        <div>
            <label for="image">Old Image </label>
            <img src="{{  $data->image }}" alt="" style="height: 110px; width:110px">
        </div>
        <div>
            <label for="description">Description</label>
            <input type="text"style="color:blue" name="description" value="{{ $data->description }}" required>
            
        </div>
        <div>
            <input type="submit" value="Submit" class="btn btn-info">
        </div>
    </form>
    <div>
</div>
   @include('admin.adminscript')
  </body>
</html>