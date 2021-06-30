
<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
      <ul>
          @if(auth()->user()->role== 'doctor')

          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.appointment')}}">
                <i class="fe fe-home"></i>
            Appointment
            </a>
         </li>


            @elseif(auth()->user()->role== 'admin')


            <li class="nav-item">
                <a class="nav-link" href="{{route('all.appointment')}}">
                    <i class="fe fe-home"></i>
               All Appointment
                </a>
             </li>

          <li>
            <a href=" {{route('admin.patient')}}  ">
                <i class="fe fe-user"></i>
            <span>Patients</span>
            </a>
          </li>
          <li>
            <a href=" {{route('doctor')}} ">
                <i class="fe fe-user-plus"></i>
                <span>Doctors</span>
            </a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="{{route('specialist')}} ">
             <i class="fe fe-users"></i>
             <span>Specialist</span>
            </a>
          </li>



           <li class="nav-item">
             <a class="nav-link" href=" {{route('admin.report')}}">
                 <i class="fe fe-document"></i>
                 <span>Report</span>
             </a>
         </li>

       </li>
       <li class="nav-item">
           <a class="nav-link" href="{{route('transaction')}} ">
               <i class="fe fe-activity"></i>
               <span>Transaction</span>
           </a>
       </li>
       <li class="nav-item">
        <a class="nav-link" href="{{route('review')}} ">
            <i class="fe fe-eye"></i>
            <span>Review</span>
        </a>
    </li>




@endif

      </ul>


    </div>
    </div>
    </div>

