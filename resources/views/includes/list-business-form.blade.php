<div class="page_form">
    <form action='{{ URL::to('/list-your-business') }}' method='post'>
        <div class="row">
            <div class="col-sm-6 ">
                <input type='hidden' value='{{ csrf_token() }}' name='_token'/>
                <div class="input-field @if($errors->has('business_name')) has-error has-feedback  @endif">
                    <label for="first_name"> Business Name:</label>
                    <input id="first_name" type="text" class="validate" required  name='business_name'/>
                    @if($errors->has('business_name'))<span class="glyphicon glyphicon-remove form-control-feedback"></span><p class="form-control-static">{{ $errors->first('business_name') }}</p>@endif
                </div>
            </div>
            <div class="col-sm-6">
                <div class="input-field @if($errors->has('business_phone')) has-error has-feedback  @endif">
                    <label>Business Phone:  <span class="error hide">Please enter a valid number</span></label>
                    <input  required type="number" class="form-control number"   name='business_phone'>
                    @if($errors->has('business_phone'))<span class="glyphicon glyphicon-remove form-control-feedback"></span><p class="form-control-static">{{ $errors->first('business_phone') }}</p>@endif

                </div>
            </div>
            <div class="col-sm-6">
                <div class="input-field @if($errors->has('business_email')) has-error has-feedback  @endif">
                    <label for="pwd">Business Email:</label>
                    <input required type="email" class="form-control"  name='business_email' >
                    @if($errors->has('business_email'))<span class="glyphicon glyphicon-remove form-control-feedback"></span><p class="form-control-static">{{ $errors->first('business_email') }}</p>@endif
                </div>
            </div>
            <div class="col-sm-6">
                <div class="input-field @if($errors->has('zipcode')) has-error has-feedback  @endif">
                    <label>Business Zipcode:</label>
                    <input required type="number" class="form-control" id="conf_pwd" name='zipcode'>
                    @if($errors->has('zipcode'))<span class="glyphicon glyphicon-remove form-control-feedback"></span><p class="form-control-static">{{ $errors->first('zipcode') }}</p>@endif
                </div>
            </div>
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
                    <label>Contact Number:</label>
                    <input required type="text" class="form-control"  name='contact_no'/>
                    @if($errors->has('contact_no'))<span class="glyphicon glyphicon-remove form-control-feedback"></span><p class="form-control-static">{{ $errors->first('contact_no') }}</p>@endif
                </div>
            </div>
        </div>
        <div class="row">
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
            <!--            <div class="col-sm-6">
                            <div class="input-field @if($errors->has('category')) has-error has-feedback  @endif">
                                <label class="select_label">Choose Business Category
                                    <span class="error hide">Please select valid option</span>
                                </label>
                                <select required class="input-field select" name="category">
                                    <option value="" disabled selected>Choose your option</option>
            <?php
            foreach ($category as $cate) {
                if ($cate['isEnabled']) {
                    ?>
                                                    <option value="<?php echo $cate['id'] ?>"><?php echo $cate['name'] ?></option>
                    <?php
                }
            }
            ?>
                                                                    <option value="Food and beverage">Food and beverage</option>
                                                                    <option value="Health & Beauty">Health & Beauty</option>
                                                                    <option value="Hotels & Travels">Hotels & Travels</option>
                                                                    <option value="Spa & Salon">Spa & Salon</option>
                                                                    <option value="Movie & Events">Movie & Events</option>
                                                                    <option value="Gym & Clinic">Gym & Clinic</option>
                                </select>
                                @if($errors->has('category'))<span class="glyphicon glyphicon-remove form-control-feedback"></span><p class="form-control-static">{{ $errors->first('category') }}</p>@endif
                            </div>
                        </div>-->
            <div class="col-sm-6">
                <div class="input-field @if($errors->has('no_of_physical_locations')) has-error has-feedback  @endif">
                    <span>Number of physical location:</span>
                    <div class="radio">
                        <p>
                            <input id="radio_1" required type="radio"  value="1-5" name='no_of_physical_locations'/>
                            <label for="radio_1">
                                1 to 5
                            </label>
                        </p>
                        <p>
                            <input id="radio_2" required type="radio"  value="More than 5" name='no_of_physical_locations'/>
                            <label for="radio_2">
                                More than 5
                            </label>
                        </p>
                        @if($errors->has('no_of_physical_locations'))<span class="glyphicon glyphicon-remove form-control-feedback"></span>
                        <p class="form-control-static">{{ $errors->first('no_of_physical_locations') }}</p>@endif
                    </div>
                </div>
            </div>
        </div>
        <!--        <div class="col-sm-12 text-right">
                    <button type="submit" class="btn btn-default btn-success">Submit</button>
                </div>-->
        <br/>
        <br/>
    </form> 
</div>