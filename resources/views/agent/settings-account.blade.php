@extends('layouts.agent')

@section('content')
    <section class="container block-center m-tb-1">
    <div class="row g-4">
        <!-- Edit profile START -->
        <div class="col-12">
            <div class="card border">
                <div class="card-header border-bottom">
                    <h5 class="card-header-title">Редактировать профиль</h5>
                </div>
                <div class="card-body">
                    <!-- Full name -->
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" value="Jacqueline Miller" placeholder="Name">
                    </div>
                    <!-- Email id -->
                    <div class="mb-3">
                        <label class="form-label">Email id</label>
                        <input type="email" class="form-control" value="hello@gmail.com" placeholder="Enter your email id">
                    </div>
                    <!-- Mobile number -->
                    <div class="mb-3">
                        <label class="form-label">Mobile number</label>
                        <input type="text" class="form-control" value="222 555 666" placeholder="Enter your mobile number">
                    </div>
                    <!-- Location -->
                    <div class="mb-3">
                        <label class="form-label">Location</label>
                        <input class="form-control" type="text" value="New Hampshire">
                    </div>
                    <!-- Birthday -->
                    <div>
                        <label class="form-label">Birthday</label>
                        <input type="text" class="form-control flatpickr flatpickr-input" value="29 Aug 1994" placeholder="Enter your birth-date" data-date-format="d M Y" readonly="readonly">
                    </div>
                    <!-- Save button -->
                    <div class="d-flex justify-content-end mt-4">
                        <a href="#" class="btn text-secondary border-0 me-2">Discard</a>
                        <a href="#" class="btn btn-primary">Save change</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Edit profile END -->

        <!-- Update Email START -->
        <div class="col-md-6">
            <div class="card border">
                <div class="card-header border-bottom">
                    <h5 class="card-header-title">Update Email</h5>
                    <p class="mb-0 small">Your current email address is <span class="text-primary">example@gmail.com</span></p>
                </div>
                <form class="card-body">
                    <!-- Email -->
                    <label class="form-label">Enter your new email id</label>
                    <input type="email" class="form-control" placeholder="Enter your email id">

                    <div class="text-end mt-3">
                        <a href="#" class="btn btn-primary mb-0">Save Email</a>
                    </div>
                </form>
            </div>
        </div>
        <!-- Update Email END -->

        <!-- Update Password START -->
        <div class="col-md-6">
            <div class="card border">
                <div class="card-header border-bottom">
                    <h5 class="card-header-title">Update Password</h5>
                    <p class="mb-0 small">Your current email address is <span class="text-primary">example@gmail.com</span></p>
                </div>
                <!-- Card body START -->
                <form class="card-body">
                    <!-- Current password -->
                    <div class="mb-3">
                        <label class="form-label">Current password</label>
                        <input class="form-control" type="password" placeholder="Enter current password">
                    </div>
                    <!-- New password -->
                    <div class="mb-3">
                        <label class="form-label"> Enter new password</label>
                        <div class="input-group">
                            <input class="form-control fakepassword" type="password" id="psw-input" placeholder="Enter new password">
                            <span class="input-group-text p-0 bg-transparent">
													<i class="fakepasswordicon fas fa-eye-slash cursor-pointer p-2"></i>
												</span>
                        </div>
                    </div>
                    <!-- Confirm -->
                    <div>
                        <label class="form-label">Confirm new password</label>
                        <input class="form-control" type="password" placeholder="Confirm new password">
                    </div>

                    <div class="text-end mt-3">
                        <a href="#" class="btn btn-primary mb-0">Change Password</a>
                    </div>
                </form>
                <!-- Card body END -->
            </div>
        </div>
        <!-- Update Password END -->
    </div>
    </section>
@endsection
