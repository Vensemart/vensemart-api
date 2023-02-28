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
            <h3 class="card-title">Existing Service Provider Listing</h3>
             <div class=" ml-auto w-75 text-right ">
               
             </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>S.No.</th>
                <th>Name</th>
                <th>Email</th>
                <th>mobile</th>
                <th>Service Type</th>
                <th>Image</th>
                <th>Is Verify</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
              <?php if($listing){ $i=1; foreach($listing as $val){?>      
              <tr>
                <td>{{  $i }}</td>
                <td>{{ $val->name }}</td>
                <td>{{ $val->email }}</td>
                <td>{{ $val->mobile }}</td> 
                <td><?php if($val->service_type == 1)
                       {?> <span class="">Saloon</span> <?php } 
                      elseif($val->service_type == 2)
                       {?> <span class="">Hair and Nails</span> <?php } 
                       elseif($val->service_type ==3)
                       {?> <span class="">Men's Therapy</span> <?php } 
                       elseif($val->service_type == 4)
                       {?> <span class="">CCTV Installer</span> <?php } 
                       elseif($val->service_type == 5)
                       {?> <span class="">Solar Installer</span> <?php } 
                       elseif($val->service_type == 6)
                       {?> <span class="">Inverter Installer</span> <?php } 
                       elseif($val->service_type == 7)
                       {?> <span class="">AC Repairer</span> <?php } 
                       elseif($val->service_type == 8)
                       {?> <span class="">Barber</span> <?php } 
                       elseif($val->service_type == 9)
                       {?> <span class="">Generator Repairer</span> <?php } 
                       elseif($val->service_type == 10)
                       {?> <span class="">Car Mechanic</span> <?php } 
                       elseif($val->service_type == 11)
                       {?> <span class="">Janitors/Cleaners</span> <?php } 
                       elseif($val->service_type == 12)
                       {?> <span class="">Masseuse/SPA</span> <?php } 
                       elseif($val->service_type == 13)
                       {?> <span class="">Electronic Repairer</span> <?php } 
                       elseif($val->service_type == 14)
                       {?> <span class="">Painter</span> <?php } 
                       elseif($val->service_type == 15)
                       {?> <span class="">POP Installer</span> <?php } 
                       elseif($val->service_type == 16)
                       {?> <span class="">Tiler</span> <?php } 
                       elseif($val->service_type == 17)
                       {?> <span class="">Welder</span> <?php } 
                       elseif($val->service_type == 18)
                       {?> <span class="">Plumber</span> <?php } 
                       
                       elseif($val->service_type == 19)
                       {?> <span class="">Carpenter</span> <?php } 
                       
                       elseif($val->service_type == 20)
                       {?> <span class="">Laundry</span> <?php } 
                       
                       elseif($val->service_type == 21)
                       {?> <span class="">Panel Beater</span> <?php } 
                       
                       elseif($val->service_type == 22)
                       {?> <span class="">AC Installer</span> <?php } 
                       
                       elseif($val->service_type == 23)
                       {?> <span class="">Pedicure and Manicure (Pedicurist)</span> <?php } 
                       
                       elseif($val->service_type == 24)
                       {?> <span class="">Electrician</span> <?php } 
                       
                       elseif($val->service_type == 25)
                       {?> <span class="">Fridge Repairer</span> <?php } 
                       
          
                       else{?> <span class="">No Service Chosen</span> <?php }
                    ?></td>

                <td> <?php if(!empty($val->id_prof)){?>
                    <img src="{{  url('uploads/id_prof').'/'. $val->id_prof }}"  width="30" height="30">
                    <?php }else
                    {
                        ?>
                        <img src="{{url('uploads/profile')}}/noimageavailable.jpg" width="50" height="50">
                        <?php
                    }
                    ?>
                </td>
            
               
               <<td><?php if($val->is_phone_verified == 1){ ?>
                      <span class="badge badge-success"><i class="fa fa-check" aria-hidden="true"> Verified</i></span>
                <?php }else { ?>
                      <span class="badge badge-danger"><i class="fa fa-close">Unverified</i></span>
               <?php  } ?></td>
         
                <td>
                   
                    <select onchange="change_status_exist(<?php echo $val->id;?>,this)">
                       <option value="1" <?php if($val->is_phone_verified == 1){ echo "Selected";}?> > Active </option>
                       <option value="0" <?php if($val->is_phone_verified == 0){ echo "Selected";}?> >  InActive</option>
                      
                   </select>
               </td>
                <td>
                    <a href="{{url('admin/exist_serviceprovider/viewserviceprovider').'/'.$val->id }}"><i class="fa fa-eye" aria-hidden="true"></i></a> |
                    <!--<a href="{{url('admin/new-driver/edit').'/'.$val->id }}"><i class="fas fa-edit"></i></a> |-->
                    <a href="{{url('admin/exist_serviceprovider/existingserviceprovider_delete').'/'.$val->id }}"><i class="fas fa-trash"></i></a>
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
  
  

    function change_status_exist(d_id,a){
        var status_val  =a.value;
     
          $.ajax({

            type: "GET",

            dataType: "json",

            url: '{{ url('admin/rejectedservice_provider/change_status_of_rejectedserviceprovider') }}',

            data: {'is_phone_verified': status_val, 'd_id': d_id},

            success: function(data){
              //  console.log(data);
            location.reload();
            }

        });
    }

</script>
@stop