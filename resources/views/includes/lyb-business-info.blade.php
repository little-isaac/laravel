<div class="page_form">
    <form action="" class="child_form" data-item="2">
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
                <br/>
                <br/>
            </div>
        </div>
        <div class='buttons text-right clearfix'>
            <button class='btn btn-success  pull-left' type="button" data-type="prev" data-step="1" data-target="1">
                Prev
            </button>
            <button class='btn btn-success  pull-right' type="submit" data-type="next" data-step="2" data-target="3">
                Next
            </button>
        </div>
    </form> 
</div>