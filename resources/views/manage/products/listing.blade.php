@extends('app')

@section('content')
 <div class="content-wrapper">
   

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           
            <!-- /.card -->

        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Vendor Listing</h3>
             <div class=" ml-auto w-75 text-right ">
                <a href="{{url('admin/new-user/import-user')}}" class="btn btn-primary btn-sm px-4">Import User</a>
                <!--<a href="{{url('admin/new-user/add')}}" class="btn btn-primary btn-sm px-4"> Add</a>-->
             </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>S.No.</th>
                <!-- <th>Name</th> -->
                <th>Name</th>
                <th>Description</th>
                <th>Image</th>
                <!-- <th>Vendor Verified</th> -->
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
              <?php if($listing){ $i=1; foreach($listing as $val){?>  
                
                
              <tr>
                <td>{{  $i }}</td>
                <td>{{$val->product_title }}</td>
                <!-- <td>{{ $val->product_title  }}</td> -->
                <td>{{ $val->product_Description }}</td>
                
                
                
                <td> <?php if($val->product_image){?>
                <?php   $burl = URL::to('/'); 
                   
                            $burl = str_replace($burl,'Vensemart','vensemart_produvcts');
                            $burl1 ='https://vensemart.com/'.$burl;
                            $burl2 ='https://api.vensemart.com/';
                         //   echo $burl1;
                   ?>
                   <img src="<?php echo $burl2.'storage/product_images/'.$val->product_image; ?>"  width="30" height="30">
                    
                    <?php } ?>
                </td>

                
                <td>

                    <a href="{{url('admin/edit-product').'/'.$val->id }}"><i class="fas fa-edit"></i></a> |

                   
                    <a href="{{url('admin/existingproduct/delete').'/'.$val->id }}" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fas fa-trash"></i></a>
                </td>
              </tr>
             
              <?php $i++; }}?>
              </tbody>
             
            </table>
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
    <!-- /.content -->
  </div>
@stop

@section('customJS')
<script>
  $(function () {
    // $("#example1").DataTable({
    //   "responsive": true, "lengthChange": false, "autoWidth": true,
    //   "buttons": ["csv", "excel", "pdf", "print"]
    // }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>
@stop