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

   <form action="{{ url('/uploadchef') }}" method="POST" enctype="multipart/form-data" style="background-color: rgb(30, 136, 185);" class="text-black">
    @csrf
    <div>
        <label for="name">Name:</label><br>
        <input type="text" name="name" id="name" style="color:blue;"  placeholder="enter name" required>
    </div>

    <div>
        <label for="speciality">Speciality:</label><br>
        <input type="text" name="speciality"id="speciality" style="color:blue;"  placeholder="enter Speciality" required>
    </div>

      <div>
          <input type="file" name="image">
      </div>
       <div>
           <input type="submit" class="btn btn-behance" value="Save">
       </div>
    </form>
    <table>
      <tr style="background-color: yellow;" class="text-black">
        <th style="padding: 30px">Chef Name</th>
        <th style="padding: 30px">Speciality</th>
        <th style="padding: 30px">Image</th>
        <th style="padding: 30px">Action</th>
        <th style="padding: 30px">Action</th>
      </tr>
      @foreach ($data as $data )
        
     
      <tr style="background-color: rgb(21, 175, 54);" class="text-black">
        <td>{{ $data->name }}</td>
        <td>{{ $data->speciality }}</td>
        <td><img src="/chefimage/{{ $data->image }}" height="100" width=" 100" alt="">{{ $data->speciality }}</td>
        <td><a href="{{ url('/updatechef',$data->id) }}" class="btn btn-info">Update</a></td>
        <td><a href="{{ url('/deletechef',$data->id) }}" class="btn btn-danger">Delete</a></td>
      </tr>
      @endforeach
    </table>

    </div>


   @include('admin.adminscript')
  </body>
</html>