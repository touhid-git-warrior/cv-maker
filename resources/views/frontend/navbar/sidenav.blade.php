 <!-- Sidebar -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
   <!-- Sidebar - Brand -->
   <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard')}}">
     <div class="sidebar-brand-icon rotate-n-15">
       <i class="fas fa-laugh-wink"></i>
     </div>
     <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup>
     </div>
   </a>
   <!-- Divider -->
   <hr class="sidebar-divider my-0">
   <!-- Nav Item - Dashboard -->
   <li class="nav-item active">
     <a class="nav-link" href="{{route('dashboard')}}">
       <i class="fas fa-fw fa-tachometer-alt"></i>
       <span>Dashboard</span>
     </a>
   </li>
   <!-- Divider -->
   <hr class="sidebar-divider"> @php $id = Auth::guard('web')->user()->id; $checkUserId = DB::table('cv_infos')->where('user_id',$id)->count(); @endphp @if($checkUserId == 0) <li class="nav-item">
     <a class="nav-link" href="{{route('cvadd')}}">
       <i class="fas fa-fw fa-table"></i>
       <span>Create My Cv</span>
     </a>
   </li> @endif @if($checkUserId > 0) <li class="nav-item">
     <a class="nav-link" href="{{route('firstcv')}}" target="_blank">
       <i class="fas fa-fw fa-table"></i>
       <span>View My Cv</span>
     </a>
   </li> @endif @if($checkUserId > 0) <li class="nav-item">
     <a class="nav-link" href="{{route('cvedate')}}">
       <i class="fas fa-fw fa-cog"></i>
       <span>Edate My Cv</span>
     </a>
   </li> @endif @if($checkUserId > 0) <li class="nav-item">
     <a class="nav-link" href="#" onclick="DoClicker()">
       <i class="fas fa-trash"></i>
       <span>Remove My Cv</span>
     </a>
   </li> @endif
   <!-- Divider -->
   <hr class="sidebar-divider d-none d-md-block">
   <!-- Sidebar Toggler (Sidebar) -->
   <div class="text-center d-none d-md-inline">
     <button class="rounded-circle border-0" id="sidebarToggle"></button>
   </div>
   <!-- Sidebar Message -->
   <div class="sidebar-card d-none d-lg-flex">
     <img class="sidebar-card-illustration mb-2" src="{{asset('mainpannel/img/undraw_rocket.svg')}}" alt="...">
     <!-- <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p> -->
     <a class="btn btn-success btn-sm" href="{{route('clear')}}">Boost</a>
   </div>
   <form method="POST" action="{{route('cvremove')}}"> @csrf <li style="visibility: hidden;" class="nav-item">
       <a id="clkk" href="{route('cvremove')}}" onclick="event.preventDefault();
                                                this.closest('form').submit();"> clk </a>
     </li>
   </form>
 </ul>
 <!-- End of Sidebar -->
 <!-- Modal -->
 <script type="text/javascript">
   function DoClicker() {
     Swal.fire({
       title: 'Are you sure?',
       text: "You won't be able to revert this!",
       icon: 'warning',
       showCancelButton: true,
       confirmButtonColor: '#3085d6',
       cancelButtonColor: '#d33',
       confirmButtonText: 'Yes, delete it!'
     }).then((result) => {
       if (result.isConfirmed) {
         document.querySelector('#clkk').click();
         Swal.fire('Deleted!', 'Your file has been deleted.', 'success')
       }
     })
   }
 </script>