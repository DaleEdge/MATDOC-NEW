<div class="course-learn-list card">
    <table class="mx-auto table">
        <tbody>
            <tr>
                <td>Name</td>
                <td>:</td>
                <td><b>{{ Auth::user()->name }}</b></td>
            </tr>
            <tr>
                <td>Date Of Birth</td>
                <td>:</td>
                <td><b>{{ Auth::user()->customer->dob }}</b></td>
            </tr>
            <tr>
                <td>Email Address</td>
                <td>:</td>
                <td><b>{{ Auth::user()->email }}</b></td>
            </tr>
            <tr>
                <td>Phone No</td>
                <td>:</td>
                <td><b>{{ Auth::user()->phone }}</b></td>
            </tr>
            <tr>
                <td>State</td>
                <td>:</td>
                <td><b>{{ Auth::user()->customer->state }}</b></td>
            </tr>
            <tr>
                <td>Date Joined</td>
                <td>:</td>
                <td><b>{{ Auth::user()->created_at }}</b></td>
            </tr>
        </tbody>
    </table>
</div>