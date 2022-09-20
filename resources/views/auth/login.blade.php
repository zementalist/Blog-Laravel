@extends("layout")


@section("content")
<br><br><br>
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="auth-form">

            <form action="/login" method="POST">
                @csrf
                <h2 class="text-center">Login</h2>
                @error("email")
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
                <div class="form-group">
                    <input type="text" name='email' class="form-control" placeholder="Email" required="required">
                </div>
                <div class="form-group">
                    <input type="password" name='password' class="form-control" placeholder="Password"
                        required="required">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-block" name="loginform" value="Login">
                </div>
                <div class="clearfix">
                    <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
                    <a href="#" class="float-right">Forgot Password?</a>
                </div>
            </form>
        </div>

    </div>
</div>
@endsection