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
    <table bgcolor="grey" border="2px">
       
            
        
            
        
        <tr style="background-color: rgb(94, 187, 151)">
            <th style="padding: 10px" >Name</th>
            <th style="padding: 10px" >Email</th>
            <th style="padding: 10px" >Phone</th>
            <th style="padding: 10px" >Date</th>
            <th style="padding: 10px" >Time</th>
            <th style="padding: 10px" >Guest</th>
            <th style="padding: 10px" >Message</th>
        </tr>

        @foreach ( $data as  $data)
        <tr align="center" style="background-color: rgb(109, 95, 158)">
            <td>{{ $data->name }}</td>
            <td>{{ $data->email }}</td>
            <td>{{ $data->phone }}</td>
            <td>{{ $data->date }}</td>
            <td>{{ $data->time }}</td>
            <td>{{ $data->guest }}</td>
            <td>{{ $data->message }}</td>
        </tr>

        @endforeach
        
    </table>

    </div>
</div>
   @include('admin.adminscript')
  </body>
</html>