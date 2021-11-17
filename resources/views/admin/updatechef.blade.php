<x-app-layout>

    {{-- <x-slot name="header">

     </x-slot> --}}

    </x-app-layout>

    <!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
    @include('admin.admincss')
  </head>
  <body>
   
    
    <div class="container-scroller">
   @include('admin.navbar')

    <form action="{{ url('/updatefoodchef',$data->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="">Chef Name</label>
            <input style="color: blue;" type="text" name="name" value="{{ $data->name }}">
        </div>
        <div>
            <label for="">Speciality</label>
            <input style="color: blue;" type="text" name="speciality" value="{{ $data->speciality }}">
        </div>
        <div>
            <label for="">Old Image</label>
            <img src="/chefimage/{{ $data->image }}" alt="image" height="300" width="300">
        </div>
        <div>
            <label for="">New Image</label>
             <input style="color: blue;" name="image" type="file" required >
        </div>
        <div>
          <input style="color: blue;" type="submit" value="Update Chef" class="btn btn-success">
        </div>
    </form>

    </div>


   @include('admin.adminscript')
  </body>
</html>