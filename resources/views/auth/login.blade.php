
<!DOCTYPE html>
<html lang="en">
<head><script nonce="93e2d0c0-063a-488b-b3fb-bf94ca76d431">(function(w,d){!function(a,e,t,r){a.zarazData=a.zarazData||{},a.zarazData.executed=[],a.zarazData.tracks=[],a.zaraz={deferred:[]},a.zaraz.track=(e,t)=>{for(key in a.zarazData.tracks.push(e),t)a.zarazData["z_"+key]=t[key]},a.zaraz._preSet=[],a.zaraz.set=(e,t,r)=>{a.zarazData["z_"+e]=t,a.zaraz._preSet.push([e,t,r])},a.addEventListener("DOMContentLoaded",(()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r),n=e.getElementsByTagName("title")[0];n&&(a.zarazData.t=e.getElementsByTagName("title")[0].text),a.zarazData.w=a.screen.width,a.zarazData.h=a.screen.height,a.zarazData.j=a.innerHeight,a.zarazData.e=a.innerWidth,a.zarazData.l=a.location.href,a.zarazData.r=e.referrer,a.zarazData.k=a.screen.colorDepth,a.zarazData.n=e.characterSet,a.zarazData.o=(new Date).getTimezoneOffset(),z.defer=!0,z.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData))),t.parentNode.insertBefore(z,t)}))}(w,d,0,"script");})(window,document);</script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>NEET PG Counselling Services | Log in</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<link rel="stylesheet" href="{{asset('public/dashboard_css/plugins/fontawesome-free/css/all.min.css')}}">

<link rel="stylesheet" href="{{asset('public/dashboard_css/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">

<link rel="stylesheet" href="{{asset('public/dashboard_css/dist/css/adminlte.min.css?v=3.2.0')}}">
</head>
<body class="hold-transition login-page" style="background: url('{{asset('public/dashboard_css/dist/img/bg.jpg')}}');background-repeat: no-repeat; background-size: cover;">
<div class="login-box">
<div class="card card-outline card-danger">
    <div class="card-header text-center">
        <img src="{{asset('public/front_css/assets/images/logo.png')}}" class="img-fluid" style="height: 100px;">
    </div>
<div class="card-body login-card-body">
<p class="login-box-msg">Sign in to start your session</p>
<form method="POST" action="{{ route('login') }}">
@csrf
<div class="input-group mb-3">
    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

    @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-envelope"></span>
</div>
</div>
</div>
<div class="input-group mb-3">
    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
    @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-lock"></span>
</div>
</div>
</div>
<div class="row">
<div class="col-8">
<div class="icheck-primary">
    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
<label for="remember">
Remember Me
</label>
</div>
</div>

<div class="col-4">
<button type="submit" class="btn btn-danger btn-block">Sign In</button>
</div>

</div>
</form>
</div>

</div>
</div>


<script src="{{asset('public/dashboard_css/plugins/jquery/jquery.min.js')}}"></script>

<script src="{{asset('public/dashboard_css/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('public/dashboard_css/dist/js/adminlte.min.js?v=3.2.0')}}"></script>
</body>
</html>
