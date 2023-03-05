 @extends('backend.layouts.app')
 @section('content')
 <div class="content-wrapper">

   <section class="content">
     <div class="container-fluid">
       <div class="row">
         <div class="col-12">


           <div class="card">
             <div class="card-header">
               <h3 class="card-title">All User</h3>
             </div>
             <!-- /.card-header -->
             <div class="card-body">
               &ensp;
               <table id="example1" class="table table-bordered table-striped">
                 <thead>
                   <tr>
                     <th>No</th>
                     <th class="text-center">Name</th>
                     <th class="text-center">Email</th>
                     <th class="text-center">Role</th>
                     <th class="text-center">Action</th>
                   </tr>
                 </thead>
                 <tbody>
                   @foreach($all as $key=>$row)
                   <tr>
                     <td>{{ $key+1 }}</td>
                     <td>{{ $row->name }}</td>
                     <td>{{ $row->email }}</td>
                     <td>{{ $row->role }}</td>
                     <td>
                      <a href="{{ URL::to('/edit-user'.$row->id) }}" class="btn btn-sm btn-info" >Edit</a>
                      <a href="{{ URL::to('/delete-user/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');">Delete</a>
                     </td>
                   </tr>
                   @endforeach
                 </tbody>
                 
                 <tfoot>
               </table>
               <br>
               
               <a href="{{URL::to('/add-user-index')}}">
                 <button class="btn btn-primary">Add User</button>
               </a>
             </div>
             <!-- /.card-body -->
           </div>
           <!-- /.card -->
         </div>
         <!-- /.col -->
       </div>
       <!-- /.row -->
     </div>
     <!-- /.container-fluid -->
   </section>
 </div>
 @endsection