<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body class="vertical-layout vertical-menu 1-column   menu-expanded blank-page blank-page"
      data-open="click" data-menu="vertical-menu" data-col="1-column">
<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="col-12 d-flex align-items-center justify-content-center" style="margin-top: 150px">
    <div class="col-md-4 col-10 box-shadow-2 p-0">
        <div class="card border-grey border-lighten-3 m-0">
            <div class="card-header border-0">
                <div class="card-title text-center">
                </div>
                <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                    <span>Admin Login </span>
                </h6>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form class="form-horizontal form-simple" action="{{route('loginAdmin')}}" method="post">
                        @csrf
                        <fieldset class="form-group position-relative has-icon-left mb-0">
                            <input type="text" name="email" class="form-control form-control-lg input-lg"
                                   id="email" placeholder="EnterYour Email">
                                   @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <div class="form-control-position">
                                <i class="ft-user"></i>
                            </div>

                        </fieldset>
                        <fieldset class="form-group position-relative has-icon-left">
                            <input type="password" name="password" class="form-control form-control-lg input-lg"
                                   id="user-password"
                                   placeholder="Enter Your Password">
                                   @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <div class="form-control-position">
                                <i class="la la-key"></i>
                            </div>
                        </fieldset>
                        <button type="submit" class="btn btn-info btn-lg btn-block"><i class="ft-unlock"></i>
                            Login
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>