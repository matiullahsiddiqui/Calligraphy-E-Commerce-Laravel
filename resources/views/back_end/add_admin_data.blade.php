@extends('back_end/admin_dashboard')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">

    <!-- Basic Layout -->
    <div class="row">
        <div class="col-xl md-col-4">
            <div class="card mb-4 md-col-4">
                <div class="card-header d-flex justify-content-between align-items-center md-col-4">
                    <h5 class="mb-0">Add Admin Data</h5>
                    <!-- <button type="submit" class="btn btn-primary">Add</button> -->
                </div>
                <div class="card-body md-col-4">
                    <form action="{{URL('/master')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Logo -->
                        <div class="mb-3 md-col-4">
                            <label class="form-label" for="basic-default-fullname">Logo</label>
                            <input type="file" name="logo" class="form-control" id="basic-default-fullname" placeholder="Logo" />
                        </div>

                        <!-- Email -->
                        <div class="mb-3 md-col-4">
                            <label class="form-label" for="basic-default-fullname">Email ID</label>
                            <input type="email" name="admin_email" class="form-control" id="basic-default-fullname" placeholder="Email" />
                        </div>

                        <!-- Carousel Pic 1 -->
                        <div class="mb-3 md-col-4">
                            <label class="form-label" for="basic-default-fullname">Carousel Pic 1</label>
                            <input type="file" name="carousel_1" class="form-control" id="basic-default-fullname" placeholder="Carousel 1" />
                        </div>

                        <!-- Carousel Pic 2 -->
                        <div class="mb-3 md-col-4">
                            <label class="form-label" for="basic-default-fullname">Carousel Pic 2</label>
                            <input type="file" name="carousel_2" class="form-control" id="basic-default-fullname" placeholder="Carousel 2" />
                        </div>

                        <!-- Carousel Pic 3 -->
                        <div class="mb-3 md-col-4">
                            <label class="form-label" for="basic-default-fullname">Carousel Pic 3</label>
                            <input type="file" name="carousel_3" class="form-control" id="basic-default-fullname" placeholder="Carousel 3" />
                        </div>

                        <!-- Carousel Pic 4 -->
                        <div class="mb-3 md-col-4">
                            <label class="form-label" for="basic-default-fullname">Carousel Pic 4</label>
                            <input type="file" name="carousel_4" class="form-control" id="basic-default-fullname" placeholder="Carousel 4" />
                        </div>

                        <!-- Carousel Pic 5 -->
                        <div class="mb-3 md-col-4">
                            <label class="form-label" for="basic-default-fullname">Carousel Pic 5</label>
                            <input type="file" name="carousel_5" class="form-control" id="basic-default-fullname" placeholder="Carousel 5" />
                        </div>

                        <!-- Category 1 Name -->
                        <div class="mb-3">
                            <label class="form-label">Category 1 Name</label>
                            <input type="text" id="basic-default-phone" name="category_1_name" class="form-control phone-mask" placeholder="Category 1 Name" />
                        </div>

                        <!-- Category 1 Pic -->
                        <div class="mb-3 md-col-4">
                            <label class="form-label" for="basic-default-fullname">Category 1 Pic</label>
                            <input type="file" name="category_1_picture" class="form-control" id="basic-default-fullname" placeholder="Category 1 Name" />
                        </div>

                        <!-- Category 2 Name -->
                        <div class="mb-3">
                            <label class="form-label">Category 2 Name</label>
                            <input type="text" id="basic-default-phone" name="category_2_name" class="form-control phone-mask" placeholder="Category 2 Name" />
                        </div>

                        <!-- Category 2 Pic -->
                        <div class="mb-3 md-col-4">
                            <label class="form-label" for="basic-default-fullname">Category 2 Pic</label>
                            <input type="file" name="category_2_picture" class="form-control" id="basic-default-fullname" placeholder="Category 2 Name" />
                        </div>


                        <!-- Category 3 Name -->
                        <div class="mb-3">
                            <label class="form-label">Category 3 Name</label>
                            <input type="text" id="basic-default-phone" name="category_3_name" class="form-control phone-mask" placeholder="Category 3 Name" />
                        </div>

                        <!-- Category 3 Pic -->
                        <div class="mb-3 md-col-4">
                            <label class="form-label" for="basic-default-fullname">Category 3 Pic</label>
                            <input type="file" name="category_3_picture" class="form-control" id="basic-default-fullname" placeholder="Category 3 Name" />
                        </div>

                        <!-- Address -->
                        <div class="mb-3">
                            <label class="form-label">Address</label>
                            <input type="text" id="basic-default-phone" name="admin_address" class="form-control phone-mask" placeholder="Admin Address" />
                        </div>

                        <!-- Phone -->
                        <div class="mb-3">
                            <label class="form-label">Phone</label>
                            <input type="number" id="basic-default-phone" name="admin_phone" class="form-control phone-mask" placeholder="Admin Phone" />
                        </div>

                        <!-- Facebook Link -->
                        <div class="mb-3">
                            <label class="form-label">Admin Facebook Link</label>
                            <input type="text" id="basic-default-phone" name="admin_facebook" class="form-control phone-mask" placeholder="Admin facebook" />
                        </div>

                        <!-- Admin Twitter -->
                        <div class="mb-3">
                            <label class="form-label">Admin Twitter</label>
                            <input type="text" id="basic-default-phone" name="admin_twitter" class="form-control phone-mask" placeholder="Admin Twitter" />
                        </div>

                        <!-- Admin Instagram -->
                        <div class="mb-3">
                            <label class="form-label">Admin Instagram</label>
                            <input type="text" id="basic-default-phone" name="admin_instagram" class="form-control phone-mask" placeholder="Admin Instagram" />
                        </div>

                        <!-- Admin Linkedin -->
                        <div class="mb-3">
                            <label class="form-label">Admin Linkedin</label>
                            <input type="text" id="basic-default-phone" name="admin_linkedin" class="form-control phone-mask" placeholder="Admin Linkedin" />
                        </div>

                        <button type="submit" class="btn btn-primary" disabled>Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection