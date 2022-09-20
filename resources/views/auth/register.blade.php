@extends("layout")


@section("content")

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="auth-form">
            <form action="/register" method="POST">
                @csrf
                <h2 class="text-center">Sign Up</h2>
                <br>
                @error("name")
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
                <div class="form-group">
                    <input type="text" name='name' class="form-control" placeholder="Username" required="required">
                </div>
                @error("email")
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
                <div class="form-group">
                    <input type="email" name='email' class="form-control" placeholder="Email" required="required">
                </div>
                @error("password")
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
                <div class="form-group">
                    <input type="password" name='password' class="form-control" placeholder="Password" required="required">
                </div>
                <div class="form-group">
                    <input type="password" name='password_confirmation' class="form-control" placeholder="Confirm Password" required="required">
                </div>
                <div class="form-group">
                    <input type="submit" name="regform" class="btn btn-primary btn-block" value="Create Account">
                </div>
            </form>
        </div>
    </div>
</div>

@endsection