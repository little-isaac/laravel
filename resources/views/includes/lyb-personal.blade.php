<div class="personal_info">
    <form class="child_form" data-item="4">
        <div class="row">

            <div class="col-sm-6">
                <div class="input-field @if($errors->has('first_name')) has-error has-feedback  @endif">
                    <label>First Name:</label>
                    <input required  type="text" class="form-control"  name='first_name'/>
                    @if($errors->has('first_name'))<span class="glyphicon glyphicon-remove form-control-feedback"></span><p class="form-control-static">{{ $errors->first('first_name') }}</p>@endif
                </div>
            </div>
            <div class="col-sm-6">
                <div class="input-field @if($errors->has('last_name')) has-error has-feedback  @endif">
                    <label>Last Name:</label>
                    <input required type="text" class="form-control"  name='last_name'/>
                    @if($errors->has('last_name'))<span class="glyphicon glyphicon-remove form-control-feedback"></span><p class="form-control-static">{{ $errors->first('last_name') }}</p>@endif
                </div>
            </div>
            <div class="col-sm-6">
                <div class="input-field @if($errors->has('email')) has-error has-feedback  @endif">
                    <label>Customer Email:</label>
                    <input required type="email" class="form-control"  name='email'/>
                    @if($errors->has('email'))<span class="glyphicon glyphicon-remove form-control-feedback"></span><p class="form-control-static">{{ $errors->first('email') }}</p>@endif
                </div>
            </div>
            <div class="col-sm-6">
                <div class="input-field @if($errors->has('contact_no')) has-error has-feedback  @endif">
                    <label>Contact Number:  <span class="error hide">Please enter a valid number</span></label>
                    <input required type="number" class="form-control number"  name='contact_no'/>
                    @if($errors->has('contact_no'))<span class="glyphicon glyphicon-remove form-control-feedback"></span><p class="form-control-static">{{ $errors->first('contact_no') }}</p>@endif
                </div>
            </div>
            <div class="col-sm-6">
                <div class="input-field @if($errors->has('password')) has-error has-feedback  @endif">
                    <label class="password_label">Password <span class="error hide">Password does not match.</span></label>
                    <input required type="password" class="form-control password"  name='password'/>
                    @if($errors->has('password'))<span class="glyphicon glyphicon-remove form-control-feedback"></span><p class="form-control-static">{{ $errors->first('password') }}</p>@endif
                </div>
            </div>
            <div class="col-sm-6">
                <div class="input-field @if($errors->has('confirm_password')) has-error has-feedback  @endif">
                    <label>Confirm Password</label>
                    <input  required type="password" class="confirm_password form-control"  name='confirm_password'/>
                    @if($errors->has('confirm_password'))<span class="glyphicon glyphicon-remove form-control-feedback"></span><p class="form-control-static">{{ $errors->first('confirm_password') }}</p>@endif
                </div>
            </div>
        </div>
        <div class="text-right">
            <a class="terms_condtions">TERMS AND CONDITIONS
                <div class="hide">
                    <h3>TERMS AND CONDITIONS</h3>
                    <p>
                        Your terms and condtions text goes here..
                    </p>

                </div>
            </a>
            <br/>
            <br/>
            <div class='buttons text-right clearfix'>

                <button class='btn btn-success  pull-left' type="button" data-type="prev" data-step="3" data-target="3">
                    Prev
                </button>

                <button class='btn btn-success pull-right' type="submit" data-type="next" data-step="3" data-target="4">
                    Next
                </button>
            </div>
    </form>
</div>