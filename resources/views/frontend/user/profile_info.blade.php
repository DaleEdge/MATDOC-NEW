<div class="course-learn-list">
    <form id="profile_form" enctype="multipart/form-data">
        @csrf()
        <div class="row">
            <div class="col-md-6">
                <!-- Single Form Start -->
                <div class="single-form">
                    <label>Name</label>
                    <input type="text" class="form-control" placeholder="Your Name*" name="name"
                        value="{{Auth::user()->name}}">
                </div>
                <!-- Single Form End -->
            </div>
            <div class="col-md-6">
                <!-- Single Form Start -->
                <div class="single-form">
                    <label>Phone</label>
                    <input type="text" class="form-control" placeholder="Your Phone*" value="{{Auth::user()->phone}}"
                        readonly>
                </div>
                <!-- Single Form End -->
            </div>
            <div class="col-md-6">
                <!-- Single Form Start -->
                <div class="single-form">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="Your Email*" name="email"
                        value="{{Auth::user()->email}}">
                </div>
                <!-- Single Form End -->
            </div>


            <div class="col-md-6">
                <!-- Single Form Start -->
                <div class="single-form">
                    <label>Profile Image</label>
                    <input type="file" class="form-control" name="profile_image">
                </div>
                <!-- Single Form End -->
            </div>
            <div class="col-md-12">
                <!-- Single Form Start -->
                <div class="single-form text-center">
                    <a class="btn btn-primary btn-hover-heading-color" onclick="profile_update()">Update Profile</a>
                </div>
                <!-- Single Form End -->
            </div>
        </div>
    </form>
</div>