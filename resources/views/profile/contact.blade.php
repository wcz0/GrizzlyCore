@extends('profile.layout')

@section('title')
个人资料
@endsection

@section('profile-content')
<div class="container py-3">
    <nav class="nav nav-pills nav-fill row">
        <a class="nav-item nav-link col-sm-6" href="{{url('profile/index')}}">基本资料</a>
        <a class="nav-item nav-link active col-sm-6" href="{{url('profile/contact')}}">联系方式</a>
    </nav>
</div>


<div class="container">
    <form class="px-3">
        <div class="form-group row">
          <label for="staticUsername" class="col-sm-2 col-form-label">用户名</label>
          <div class="col-sm-4">
            <input type="text" readonly class="form-control-plaintext" id="staticUsername" value="{{$user->username}}">
          </div>
        </div>

        <div class="form-group row">
            <label for="staticPhone" class="col-sm-2 col-form-label">手机</label>
            <div class="col-sm-4">
              <input type="text" readonly class="form-control-plaintext" id="staticPhone" value="{{$user->phone}}">
            </div>
        </div>

        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">邮箱</label>
            <div class="col-sm-4">
              <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$user->email}}">
            </div>
        </div>

        <div class="form-group row">
          <label for="qq" class="col-sm-2 col-form-label">QQ</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="qq" value="{{$user->qq}}">
            <div class="invalid-feedback"></div>
          </div>
        </div>
        <div class="form-group row py-4">
            <div class="col text-center">
              <button id="profile-c-save" type="submit" class="btn btn-primary col-md-2 col-sm-8 " data-purl="{{url('profile/contact')}}">保存</button>
            </div>
          </div>
    </form>
</div>
@endsection