@extends('Back.layouts.app')
@section('content')
<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Forms</a></li>
            <li class="breadcrumb-item active" aria-current="page">Basic Elements</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Theme Settings</h6>
                    <form class="forms-sample" method="POST" action=" {{ url('theme') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="sidebar-body">
                            <h6 class="text-muted">Sidebar:</h6>
                            <div class="form-group border-bottom">
                              <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarLight" value="sidebar-light" checked="">
                                  Light

                                    <img src="{{ url('storage/img/screenshots/light.jpg') }}" width="150" height="150"  alt="light theme">
                              </div>
                              <div class="form-check form-check-inline">
                                <label class="form-check-label">

                                  <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarDark" value="sidebar-dark">
                                  Dark
                                  <img src="{{ url('storage/img/screenshots/dark.jpg') }}" width="150" height="150" alt="light theme">
                              </div>
                            </div>
                          </div>
                          <div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                          </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
