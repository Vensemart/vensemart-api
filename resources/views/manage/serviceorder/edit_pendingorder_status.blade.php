@extends('app')

@section('content')
 <div class="content-wrapper">
   

    <!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
       
        <!-- /.card -->

  <div class="card ">
        <div class="card-header bg-dark mt-0">
            <h3 class="card-title">Update Order Status </h3>
        </div>
          <!-- /.card-header -->
        <div class="card-body">
         <div class="row">
  <div class="col-md-12" style="padding: 15px 0px; width:95%; margin:0px 10px;background: #fff; padding:0px 0px 20px 0px;">
    <div class="portlet box blue">
         
        <div class="portlet-body">
            <div class="form-body">
            <form  action="{{ url('admin/order/in_process/edit') }}/{{$order_id}} " method="post" id="menu_add" >
                @csrf
                <div class="row">
                    <div class="form-group col-md-6">
                      <label for="order">Order Number:</label>
                      <div>
                          <input type="hidden" name="order_id" value="{{ $order_id }}">{{ $order_id }}
                      </div>
                    </div>
                    <div class="form-group col-md-6">
                       <label>Order Status <span class="required" aria-required="true"> * </span></label>
                        <div class="select-style1">
                          <select  class="form-control" name="order_status" placeholder="" id="delivery_type_id">
                             
                            
                              <option  value="1">Order Placed</option>
                              <option  value="2">Accept</option>
                              <option  value="3">Order On the Way</option>
                              <option  value="4">Delivered</option>
                              <option value="5">Cancel</option>
                            
                            </select>
                      </div>
                      <span class="help-block"></span>
                    </div>

                      </div>

                <div class="text-center margin_top_btm_20 col-md-12" style="margin-top: 10px;">
                  <button type="submit" class="btn btn-success">Update</button>
                  <a class="btn btn-default" href="{{ url('admin/order/in-process/listing') }}">Cancel</a>
               </div>
           </form>

            </div>

        </div>
    </div>

  </div>

</div>
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

@stop