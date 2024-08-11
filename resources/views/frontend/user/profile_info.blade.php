<div class="course-learn-list">
    <form id="profile_form" enctype="multipart/form-data" >
        @csrf()
        <div class="row">
            <div class="col-md-6">
                <!-- Single Form Start -->
                <div class="single-form">
                    <label>Name</label>
                    <input type="text" class="form-control" placeholder="Your Name*" name="name" value="{{Auth::user()->name}}">
                </div>
                <!-- Single Form End -->
            </div>
            <div class="col-md-6">
                <!-- Single Form Start -->
                <div class="single-form">
                    <label>Phone</label>
                    <input type="text" class="form-control" placeholder="Your Phone*"  value="{{Auth::user()->phone}}" readonly>
                </div>
                <!-- Single Form End -->
            </div>
            <div class="col-md-6">
                <!-- Single Form Start -->
                <div class="single-form">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="Your Email*" name="email" value="{{Auth::user()->email}}">
                </div>
                <!-- Single Form End -->
            </div>
            <div class="col-md-6">
                <!-- Single Form Start -->
                <div class="single-form">
                    <label>Date of Birth</label>
                    <input type="date" class="form-control" placeholder="DOB*" name="dob" value="{{Auth::user()->customer->dob}}">
                </div>
                <!-- Single Form End -->
            </div>
            <div class="col-md-6">
                <!-- Single Form Start -->
                <div class="single-form">
                    <label>State</label>
                    <input type="text" class="form-control" placeholder="State*" name="state" value="{{Auth::user()->customer->state}}">
                </div>
                <!-- Single Form End -->
            </div>
            <div class="col-md-6">
                <!-- Single Form Start -->
                <div class="single-form">
                    <label>Neet Score</label>
                    <input type="text" class="form-control" placeholder="Neet Score*" name="score" value="{{Auth::user()->customer->score}}">
                </div>
                <!-- Single Form End -->
            </div>
             <div class="col-md-6">
                <!-- Single Form Start -->
                <div class="single-form">
                    <label>Rank ( Can Be Updated Only two times* ){{2-Auth::user()->customer->rank_count}} left</label>
                    <input type="text" class="form-control" placeholder="Rank*" name="rank" value="{{Auth::user()->customer->rank}}">
                </div>
                <!-- Single Form End -->
            </div>
            <div class="col-md-6">
                <!-- Single Form Start -->
                <div class="single-form">
                    <label>Profile Image</label>
                    <input type="file" class="form-control" name="profile_image" >
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