<div class="bank_info">
    <form class="child_form" data-item="3">
        <div class="row">
            <div class="col-sm-6">
                <div class="input-field @if($errors->has('bank_name')) has-error has-feedback  @endif">
                    <label>Bank name:</label>
                    <input    type="text" class="form-control number"   name='bank_name'>
                    @if($errors->has('bank_name'))
                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                    <p class="form-control-static">{{ $errors->first('bank_name') }}</p>@endif
                </div>
            </div>
            <div class="col-sm-6">
                <div class="input-field @if($errors->has('branch_name')) has-error has-feedback  @endif">
                    <label>Branch name:</label>
                    <input    type="text" class="form-control number"   name='branch_name'>
                    @if($errors->has('branch_name'))
                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                    <p class="form-control-static">{{ $errors->first('branch_name') }}</p>@endif
                </div>
            </div>
             <div class="col-sm-6">
                <div class="input-field @if($errors->has('account_no')) has-error has-feedback  @endif">
                    <label>Account no:</label>
                    <input    type="number" class="form-control number"   name='account_no'>
                    @if($errors->has('account_no'))
                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                    <p class="form-control-static">{{ $errors->first('account_no') }}</p>@endif
                </div>
            </div>
             <div class="col-sm-6">
                <div class="input-field @if($errors->has('account_holder_no')) has-error has-feedback  @endif">
                    <label>Account holder name:</label>
                    <input    type="text" class="form-control number"   name='account_holder_no'>
                    @if($errors->has('account_no'))
                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                    <p class="form-control-static">{{ $errors->first('account_holder_no') }}</p>@endif
                </div>
            </div>
             <div class="col-sm-6">
                <div class="input-field @if($errors->has('ifsc_code')) has-error has-feedback  @endif">
                    <label>Ifsc code:</label>
                    <input    type="text" class="form-control number"   name='ifsc_code'>
                    @if($errors->has('ifsc_code'))
                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                    <p class="form-control-static">{{ $errors->first('ifsc_code') }}</p>@endif
                </div>
            </div>
            <div class="col-sm-6">
                <div class="input-field @if($errors->has('bank_location')) has-error has-feedback  @endif">
                    <label>Bank location:</label>
                    <input    type="text" class="form-control number"   name='bank_location'>
                    @if($errors->has('bank_location'))
                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                    <p class="form-control-static">{{ $errors->first('bank_location') }}</p>@endif
                </div>
            </div>
        </div> 
        <div class='buttons text-right clearfix'>
            <button class='btn btn-success  pull-left' type="button" data-type="prev" data-step="2" data-target="2">
                Prev
            </button>
            <button class='btn btn-success pull-right' type="submit" data-type="next" data-step="3" data-target="4">
                Next
            </button>
        </div>
    </form>
</div>