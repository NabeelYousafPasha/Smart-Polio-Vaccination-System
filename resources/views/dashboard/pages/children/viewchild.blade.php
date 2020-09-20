@extends('dashboard.layout.app')

@section('stylesheets')
@endsection

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Children</h2>
            @includeIf('dashboard.globals.breadcrumb.breadcrumbs')
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Children</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-md-12">
                                            <div class="form-group @error('name') has-error @enderror">
                                                <label class="control-label">Name *</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    name="name"
                                                    placeholder="Name"
                                                    value="{{ $children['name']}}"
                                                    readonly
                                                
                                                >
                                            </div>

                                            <div class="form-group @error('DOB') has-error @enderror">
                                                <label class="control-label">DOB *</label>
                                                <input
                                                    type="date"
                                                    class="form-control"
                                                    name="DOB"
                                                    value="{{ $children['DOB']}}"
                                                    readonly
                                                >
                                            </div>
                                            <div class="form-group @error('DOB') has-error @enderror">
                                                <label class="control-label">Parent Name *</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    name="DOB"
                                                    value="{{ $children->parentref->user['name']}}"
                                                    readonly
                                                >
                                            </div>
                                        </div>
                                     </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    @endsection

