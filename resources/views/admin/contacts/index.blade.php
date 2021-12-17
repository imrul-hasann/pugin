@extends('admin.layouts.master')

@section('css')
    <link rel="stylesheet" href="/admin/assets/vendor/bootstrap-datetimepicker.min.css"/>
@stop

@section('content')
    <div class="pcoded-content">
        <div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <div class="d-inline">
                            <h5>{{$title ?? ''}}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="text-right">
                        <a href="#" class="btn btn-info" id="btn-create">Add Photo</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    <div class="page-body">
                        <div class="row">
                           <div class="col-lg-6">
                               <div class="card">
                                   <div class="card-body">
                                        <div class="contact-list">
                                            <div class="contact-item mb-3">
                                                <span class="mr-2 text-warning"><i class="fas fa-home"></i></span>
                                                <span>884 West Green Milton Extension</span>
                                            </div>
                                            <div class="contact-item mb-3">
                                                <span class="mr-2 text-warning"><i class="fas fa-phone"></i></span>
                                                <span>01827375</span>
                                            </div>
                                        </div>
                                   </div>
                               </div>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@push('scripts')

@endpush