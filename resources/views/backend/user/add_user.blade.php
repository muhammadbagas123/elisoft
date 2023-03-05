@extends('backend.layouts.app')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-lg-1">

            </div>
            <div class="col-lg-10">


                <div class="card">
                    <!-- card start -->
                    <div class="card-header">
                        <h5 class="card-title">Add User</h5>

                    </div>
                    <div class="card-body">
                        <!-- Card Body Start -->
                        <form role="form" action="{{URL::to('/insert-user')}}" method="post">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">User Name </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" placeholder="Enter Your Name" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Email </label>
                                <div class="col-sm-10">
                                <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Password </label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="password" placeholder="Enter Your Password" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Role </label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="exampleFormControlSelect1" name="role" required>
                                        <option value="Admin">Admin</option>
                                        <option value="Manager">Manager</option>
                                        <option value="Customer">Customer</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Card Body End -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">submit</button>

                            </div>
                        </form>
                    </div>
                    <!-- card end -->

                </div>
            </div>
            <div class="col-lg-1">

            </div>
        </div>
    </section>
</div>

@endsection