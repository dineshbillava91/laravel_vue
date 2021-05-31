@extends ('layout')

<style>
.invalid-feedback
{
	display: block !important;
}
</style>

@section ('content')
        
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Create Event</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <form class="login100-form" method="POST" action="{{ route('store_event') }}">
                    @csrf
                    <div class="offset-3 col-md-6">
                        <div class="row form-group">
                            <label class="col-md-5 text-center">Name</label>
                            <div class="col-md-6">
                                <input class="form-control" type="text" name="name" value="{{ old('name') }}">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-group">
                            <label class="col-md-5 text-center">Location</label>
                            <div class="col-md-6">
                                <input class="form-control" type="text" name="location" value="{{ old('location') }}">
                                @error('location')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-group">
                            <label class="col-md-5 text-center">Date</label>
                            <div class="col-md-6">
                                <input class="form-control" type="date" name="date" value="{{ old('date') }}">
                                @error('date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-group">
                            <label class="col-md-5 text-center">Time</label>
                            <div class="col-md-6">
                                <input class="form-control" type="time" name="time" value="{{ old('time') }}">
                                @error('time')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-12 text-center">
                            <input type="submit" class="btn btn-success col-md-2" value="Save">
                            <a class="btn btn-dark col-md-2" href="{{ route('event') }}">Back</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
@endsection