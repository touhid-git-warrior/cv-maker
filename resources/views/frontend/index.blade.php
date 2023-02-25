@extends('frontend.master') @section('content')
<!-- Begin Page Content -->
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Welcome {{ Auth::guard('web')->user()->name }} Create Your Cv</h1>
  <form method="POST" action="{{ route('logout') }}"> @csrf <a class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm" href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
      {{ __('Log Out') }}
    </a>
  </form>
</div>
<!-- Content Row -->
<div class="row">
  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"> Earnings (Monthly)</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
          </div>
          <div class="col-auto">
            <i class="fas fa-calendar fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-success text-uppercase mb-1"> Earnings (Annual)</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
          </div>
          <div class="col-auto">
            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks </div>
            <div class="row no-gutters align-items-center">
              <div class="col-auto">
                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
              </div>
              <div class="col">
                <div class="progress progress-sm mr-2">
                  <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-auto">
            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Pending Requests Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1"> Pending Requests</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
          </div>
          <div class="col-auto">
            <i class="fas fa-comments fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Content Row -->
<div class="row">
  <!-- Area Chart -->
  <div class="col-xl-4 col-lg-4"> @php $id = Auth::guard('web')->user()->id; $checkUserId = DB::table('cv_infos')->where('user_id',$id)->count(); @endphp @if($checkUserId > 0) <h3 class="mb-3"> My Cv </h3>
    <a title="my-cv" href="{{route('firstcv')}}" target="_blank">
      <img style="width: 450px" src="{{asset('mainpannel/cv-img/Capture2.PNG')}}">
    </a> @else <a href="{{route('cvadd')}}" class="btn btn-primary px-5"> Create My Cv </a> @endif
  </div>
</div>
<!-- Content Row -->
<script type="text/javascript">
  @if(Session::get('key') == 600)
  Swal.fire({
    icon: 'error',
    title: 'Oops...',
    text: 'Your CV Info Already Added',
    footer: ' <a href = "" >  </a>'
  })
  @endif
</script>
<script type="text/javascript">
  @if(Session::get('key') == 200)
  Swal.fire({
    icon: 'success',
    title: 'Optimized...',
    text: 'Optimized Sussfully',
    footer: ' <a href = "" >  </a>'
  })
  @endif
  @if(Session::get('key') == 410)
  Swal.fire({
    icon: 'success',
    title: 'Remove...',
    text: 'Your Cv Sussfully Remove',
    footer: ' <a href = "" >  </a>'
  })
  @endif
</script> @endsection