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
  
    <div style="position: relative; top:60px; right:-60px ">
      <table border="3px">
        <tr bgcolor="green" >
          <th  style="padding: 30px">Name</th>
          <th style="padding: 30px">Email</th>
          <th style="padding: 30px">Action</th>
        </tr>

        @foreach ($data as $data )
        <tr align="center" style="color: rgb(220, 223, 43); background-color:blueviolet;">
            <td>{{ $data->name }} </td>
            <td>{{ $data->email }}</td>
            @if ($data->usertype=='0')
            <td><a href="{{ url('/deleteuser',$data->id) }}">Delete</a></td>   
            @else
            <td><a >Not Allow</a></td>
         @endif
        </tr>
        @endforeach
        
      </table>
    </div>
</div>
   @include('admin.adminscript')
   
  </body>
</html>