@extends('layout.main')

@section('content')
<div id="admin_dash">
    <div class="container-fluid">
        <div class='admin_menu'>
            <div class='admin_menu'>
                <div class="user_info clearfix">
                    <div class="col-xs-4 text-center">
                        <span class="user_logo"><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
                    </div>
                    <div class="col-xs-8">
                        <div class="user_detail">
                            <p>John Doe</p>
                            <a href="">Logout</a>
                        </div>
                    </div>
                </div>
                <ul class="list">
                    <li>
                        <a href="{{URL::to("/admin")}}">
                            Business list
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <div class='content'>

            <h3 class="text-center">
                    <a class="admin_menu_btn xs-show pull-left">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </a>
                Welcome Admin</h3>
            <div class="tab-container" data-format="TAB">
                <ul class="tabs">
                    <li class="tab active" data-index="1">
                        Add category
                    </li>
                    <li class="tab" data-index="2">
                        View category
                    </li>
                </ul>
                <div class="tab-data">
                    <div class="data active" data-index="1">
                        <form action="" method="post" class="add_category">
                            <div class="col-sm-6">
                                <div class="input-field @if($errors->has('catergory_name')) has-error has-feedback  @endif">
                                    <label>Category Name:</label>
                                    <input required type="text" class="form-control"  name='catergory_name'/>
                                    @if($errors->has('catergory_name'))
                                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                                    <p class="form-control-static">
                                        {{ $errors->first('catergory_name') }}
                                    </p>
                                    @endif
                                </div>
                                <div class="input-field file-field @if($errors->has('catergory_image')) has-error has-feedback  @endif">
                                    <label>
                                        Category Image: 
                                        <span class="error hide">Please upload a valid image file.(jpeg,jpg,png).</span>
                                        <span class="size_error hide">Please upload file in between 100kb to 1mb.</span>
                                    </label>
                                    <input required type="file" class="form-control" accept="image/jpeg/jpg/png" name='category_image'/>
                                    @if($errors->has('category_image'))
                                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                                    <p class="form-control-static">
                                        {{ $errors->first('category_image') }}
                                    </p>
                                    @endif
                                    <div class="text-left submit_div">
                                        <button type="submit" class="btn btn-success">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="data" data-index="2">
                        <div class="table tab">
                            <table>
                                <thead>
                                <th>
                                    N0:
                                </th>
                                <th>
                                    Name:
                                </th>
                                <th>
                                    Image:
                                </th>
                                <th>
                                    Action:
                                </th>
                                </thead>
                                <tbody>
                                    
                                  
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@stop 
