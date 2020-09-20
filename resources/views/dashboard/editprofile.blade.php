@extends('dashboard.layout.app')

@section('stylesheets')
@endsection

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Edit Profile</h2>
            @includeIf('dashboard.globals.breadcrumb.breadcrumbs')
        </div>
    </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Edit Profile</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <form
                                        method="POST"
                                        action="{{ route('profile.update', auth()->user()->id) }}"
                                        autocomplete="off"
                                        >
                                        @csrf
                                        <div class="form-group @error('name') has-error @enderror">
                                            <label class="control-label">Name *</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                name="name"
                                                placeholder="Name"
                                                value="{{ auth()->user()->name}}"
                                                required
                                            >
                                            @error('name')
                                                <span class="help-block has-error">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group @error('username') has-error @enderror">
                                            <label class="control-label">{{ auth()->user()->role == 2 ? 'CNIC' : 'User Name' }}*</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                name="username"
                                                placeholder="username"
                                                value="{{ auth()->user()->username}}"
                                                required
                                            >
                                            @error('username')
                                                <span class="help-block has-error">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        @if(auth()->user()->role == 2)
                                        <div class="form-group @error('Address') has-error @enderror">
                                            <label class="control-label">Address*</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                name="address"
                                                placeholder="address"
                                                value="{{ $parentref->parentref[0]->address}}"
                                                required
                                            >
                                            @error('address')
                                                <span class="help-block has-error">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        @endif

                                        <div class="form-group">
                                            <button
                                                type="submit"
                                                class="btn btn-primary"
                                            >
                                            Update
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection