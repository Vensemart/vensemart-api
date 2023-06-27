<div>
     <div>
    
     <form wire:submit.prevent="register">

         {{-- STEP 1 --}}

         @if ($currentStep == 1)
             
<!-- 
    public $first_name;
    public $last_name;
    public $address;
    public $city;
    public $state;
    public $country;
    public $telephone;
    public $email;
    public $username;
    public $ref_id;
    public $lendmark;
    public $zipcode;
    public $admin_status;
    public $user_status;
    public $registration_date;
    public $image;
    public $acc_name;
    public $ac_no;
    public $bank_nm;
    public $branch_nm;
    public $swift_code;
    public $last_login_date;
    public $current_login_date;
    public $id_card;
    public $id_no;
    public $kyc_status;
    public $activation_date;
    public $franchise_category;
    public $franchise_satus;
    public $is_verified;
    public $gst;
    public $lati;
    public $longi;
    public $merried_status;
    public $gender; -->
      
         <div class="step-one">
             <div class="card">
                 <div class="card-header bg-secondary text-white">STEP 1/3 - Personal Details</div>
                 <div class="card-body">
                    
                     <div class="row">
                         <div class="col-md-12">

                         <div class="form-group">
  <label for="first_name">First Name</label>
      <input type="text" class="form-control" placeholder="firstname" wire:model.lazy="first_name">
      @error('first_name') <span class="text-danger">{{ $message }}</span> @enderror
  </div>
  
  <div class="form-group">
  <label for="last_name">Last Name</label>
      <input type="text" class="form-control" placeholder="last_name" wire:model.lazy="last_name">
      @error('last_name') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <div class="form-group">
  <label for="email">Email</label>
      <input type="text" class="form-control" placeholder="email" wire:model.lazy="email" >
      @error('email') <span class="text-danger">{{ $message }}</span> @enderror
  </div>


  <div class="form-group">
  <label for="telephone">Telephone</label>
      <input type="text" class="form-control" placeholder="telephone" wire:model.lazy="telephone" >
      @error('roiu') <span class="text-danger">{{ $message }}</span> @enderror
  </div>


  <div class="form-group">
  <label for="fileName">Image</label>
      <input type="file" accept="image/*" class="form-control" placeholder="profile picture" wire:model.lazy="fileName" >
      @error('roiu') <span class="text-danger">{{ $message }}</span> @enderror
  </div>



  
  <div class="form-group">
  <label for="gender">Gender</label>
      <input type="text" class="form-control" placeholder="gender" wire:model.lazy="gender" >
      @error('roiu') <span class="text-danger">{{ $message }}</span> @enderror
  </div>


                         </div>
                        
                     </div>
                    
             </div>
         </div>
         @endif

         {{-- STEP 2 --}}

         @if ($currentStep == 2)
             
        
         <div class="step-two">
             <div class="card">
                 <div class="card-header bg-secondary text-white">STEP 2/3 - User Details</div>
                 <div class="card-body">
                     <div class="row">
                    

 </div>


  <div class="form-group">
  <label for="city">City</label>
      <input type="text" class="form-control" placeholder="city" wire:model.lazy="city" >
      @error('city') <span class="text-danger">{{ $message }}</span> @enderror
  </div>
  
  <div class="form-group">
  <label for="Net">State</label>
      <input type="text" class="form-control" placeholder="state" wire:model.lazy="state" >
      @error('net') <span class="text-danger">{{ $message }}</span> @enderror
  </div>


  <div class="form-group">
  <label for="Net">Country</label>
      <input type="country" class="form-control" placeholder="country" wire:model.lazy="country" >
      @error('roiu') <span class="text-danger">{{ $message }}</span> @enderror
  </div>






  
  
  
                 </div>
             </div>
         </div>

         @endif
       

         {{-- STEP 3 --}}
         @if ($currentStep == 3)
             
     
         <div class="step-four">
         @if(session()->has('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
          @endif
         
             <div class="card">
                 <div class="card-header bg-secondary text-white">STEP 3/3 - Overview</div>

                 <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">

                            <div class="nk-block nk-block-lg">
                                
            
                                        <div class="card card-preview">
                                            
                                            <div class="card-inner">
                                                
                                                 
                                                <div class="row g-gs">

                                                  
                                                    <div class="col-md-8">
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="tabItem13">
                                                            
                                                <!-- .nk-block-head -->
                                                            <div class="nk-block">
                                                    <div class="nk-data data-list">
                                                        <div class="data-head">
                                                            <h6 class="overline-title">Basics</h6>
                                                        </div>

                                                        <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                                            <div class="data-col">
                                                                <span class="data-label">Display Name</span>
                                                                <span class="data-value">{{$first_name}}</span>
                                                            </div>
                                                            <div class="data-col data-col-end"></div>
                                                        </div><!-- data-item -->

                                                       

                                                        <div class="data-item">
                                                            <div class="data-col">
                                                                <span class="data-label">Email</span>
                                                                <span class="data-value">{{ $email }}</span>
                                                            </div>
                                                            <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span></div>
                                                        </div><!-- data-item -->


                                                        <!-- <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                                            <div class="data-col">
                                                                <span class="data-label">Display Picture</span>
                                                                
                                                                <span class="data-value"><img width="50" height="50" src="{{ asset('/storage/vendor_images/'.$image) }}" /></span>
                                                            </div>
                                                            <div class="data-col data-col-end"></div>
                                                        </div> -->
                                                        <!-- data-item -->

                                                        <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                                            <div class="data-col">
                                                                <span class="data-label">Address</span>
                                                                <span class="data-value">{{ $address }}</span>
                                                            </div>
                                                            <div class="data-col data-col-end"></div>
                                                        </div><!-- data-item -->

                                                        <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                                            <div class="data-col">
                                                                <span class="data-label">Bank</span>
                                                                <span class="data-value">{{ $bank_nm }}</span>
                                                            </div>
                                                            <div class="data-col data-col-end"></div>
                                                        </div><!-- data-item -->
                                                        



                                                        <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                                            <div class="data-col">
                                                                <span class="data-label">Phone Number</span>
                                                                <span class="data-value text-soft">{{ $telephone }}</span>
                                                            </div>
                                                            <div class="data-col data-col-end"></div>
                                                        </div><!-- data-item -->
                                                        <!-- <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                                            <div class="data-col">
                                                                <span class="data-label">Date of Birth</span>
                                                                <span class="data-value">29 Feb, 1986</span>
                                                            </div>
                                                            <div class="data-col data-col-end"></div>
                                                        </div>data-item -->
                                                        <!-- <div class="data-item" data-toggle="modal" data-target="#profile-edit" data-tab-target="#address">
                                                            <div class="data-col">
                                                                <span class="data-label">Address</span>
                                                                <span class="data-value">2337 Kildeer Drive,<br>Kentucky, Canada</span>
                                                            </div>
                                                            <div class="data-col data-col-end"></div>
                                                        </div>data-item -->
                                                    </div><!-- data-list -->
                                                    <div class="nk-data data-list">
                                                        <div class="data-head">
                                                            <h6 class="overline-title">Preferences</h6>
                                                        </div>
                                                        <div class="data-item">
                                                            <div class="data-col">
                                                                <span class="data-label">Language</span>
                                                                <span class="data-value">English (United State)</span>
                                                            </div>
                                                            <div class="data-col data-col-end"><a href="#" data-toggle="modal" data-target="#profile-language" class="link link-primary">Change Language</a></div>
                                                        </div><!-- data-item -->
                                                        <!-- <div class="data-item">
                                                            <div class="data-col">
                                                                <span class="data-label">Date Format</span>
                                                                <span class="data-value">M d, YYYY</span>
                                                            </div>
                                                            <div class="data-col data-col-end"><a href="#" data-toggle="modal" data-target="#profile-language" class="link link-primary">Change</a></div>
                                                        </div>data-item -->
                                                        <!-- <div class="data-item">
                                                            <div class="data-col">
                                                                <span class="data-label">Timezone</span>
                                                                <span class="data-value">Bangladesh (GMT +6)</span>
                                                            </div>
                                                            <div class="data-col data-col-end"><a href="#" data-toggle="modal" data-target="#profile-language" class="link link-primary">Change</a></div>
                                                        </div>data-item -->
                                                    </div><!-- data-list -->
                                                </div><!-- .nk-block -->
                                                            </div>
                                                            <div class="tab-pane" id="tabItem14">
                                                                <p>Culpa dolor voluptate do laboris laboris irure reprehenderit id incididunt duis pariatur mollit aute magna pariatur consectetur. Eu veniam duis non ut dolor deserunt commodo et minim in quis laboris ipsum velit id veniam. Quis ut consectetur adipisicing officia excepteur non sit. Ut et elit aliquip labore Lorem enim eu. Ullamco mollit occaecat dolore ipsum id officia mollit qui esse anim eiusmod do sint minim consectetur qui.</p>
                                                                <p>Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint. Veniam sint duis incididunt do esse magna mollit excepteur laborum qui. Id id reprehenderit sit est eu aliqua occaecat quis et velit excepteur laborum mollit dolore eiusmod. Ipsum dolor in occaecat commodo et voluptate minim reprehenderit mollit pariatur.</p>
                                                            </div>
                                                            <div class="tab-pane" id="tabItem15">
                                                                <p>Fugiat id quis dolor culpa eiusmod anim velit excepteur proident dolor aute qui magna. Ad proident laboris ullamco esse anim Lorem Lorem veniam quis Lorem irure occaecat velit nostrud magna nulla. Velit et et proident Lorem do ea tempor officia dolor. Reprehenderit Lorem aliquip labore est magna commodo est ea veniam consectetur.</p>
                                                                <p>Eu dolore ea ullamco dolore Lorem id cupidatat excepteur reprehenderit consectetur elit id dolor proident in cupidatat officia. Voluptate excepteur commodo labore nisi cillum duis aliqua do. Aliqua amet qui mollit consectetur nulla mollit velit aliqua veniam nisi id do Lorem deserunt amet. Culpa ullamco sit adipisicing labore officia magna elit nisi in aute tempor commodo eiusmod.</p>
                                                            </div>
                                                            <div class="tab-pane" id="tabItem16">
                                                                <p>Eu dolore ea ullamco dolore Lorem id cupidatat excepteur reprehenderit consectetur elit id dolor proident in cupidatat officia. Voluptate excepteur commodo labore nisi cillum duis aliqua do. Aliqua amet qui mollit consectetur nulla mollit velit aliqua veniam nisi id do Lorem deserunt amet. Culpa ullamco sit adipisicing labore officia magna elit nisi in aute tempor commodo eiusmod.</p>
                                                                <p>Fugiat id quis dolor culpa eiusmod anim velit excepteur proident dolor aute qui magna. Ad proident laboris ullamco esse anim Lorem Lorem veniam quis Lorem irure occaecat velit nostrud magna nulla. Velit et et proident Lorem do ea tempor officia dolor. Reprehenderit Lorem aliquip labore est magna commodo est ea veniam consectetur.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .card-preview -->
                                
                            </div>
                        </div>
                    </div>
             </div>
             </div>
         </div>
         @endif

         <div class="action-buttons d-flex justify-content-between bg-white pt-2 pb-2">

            @if ($currentStep == 1)
                <div></div>
            @endif

            @if ($currentStep == 2 || $currentStep == 3)
            <button type="button" class="btn btn-md btn-secondary" wire:click="decreaseStep()">Back</button>
            @endif
            
            @if ($currentStep == 1 || $currentStep == 2)
                <button type="button" wire:loading.attr="disabled" wire:loading.class="invisible" class="btn btn-md btn-success" wire:click="increaseStep()">Next</button>

                <div wire:loading>
                    <p>loading....please wait</p>
        <!-- <img src="/path/to/spinner.gif" alt="Processing Payment..."> -->
    </div>
            @endif
            
            @if ($currentStep == 3)
           
                 <button type="submit" wire:loading.class="invisible" class="btn btn-md btn-primary">Save Information</button>
                 
                <!-- Creat Countdown Timer -->
  

                 
<script>
         var h3 = document.getElementsByTagName("h3");
h3[0].innerHTML = "";

var sec         = 1800,
    countDiv    = document.getElementById("timer"),
    secpass,
    countDown   = setInterval(function () {
        'use strict';
        
        secpass();
    }, 1000);

function secpass() {
    'use strict';
    
    var min     = Math.floor(sec / 60),
        remSec  = sec % 60;
    
    if (remSec < 10) {
        
        remSec = '0' + remSec;
    
    }
    if (min < 10) {
        
        min = '0' + min;
    
    }
    countDiv.innerHTML = min + ":" + remSec;
    
    if (sec > 0) {
        
        sec = sec - 1;
        
    } else {
        
        clearInterval(countDown);
        
        countDiv.innerHTML = 'countdown done';
        
    }
}

                 </script>
            @endif
                
               
         </div>

     </form>


</div>
</div>