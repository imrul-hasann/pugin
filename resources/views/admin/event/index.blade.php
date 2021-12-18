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
                            <h5>Events</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="text-right">
                        <a href="#" class="btn btn-info" id="btn-create">Create Event</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    <div class="page-body">
                        <div class="row event-wrap">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-create" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{ $formAction ?? '' }}" method="POST" id="form-create"
                      class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="head_text"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-danger print-error-msg" style="display:none">
                            <ul></ul>
                        </div>
                        <div class="form-wrapper">
                            <div class="form-group">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" value="{{ old('title') }}" />
                            </div>
                            <div class="form-group">
                                <label for="title">Event Time</label>
                                <input type="text" class="form-control date_time" id="date_time" name="date_time" />
                            </div>
                            <div class="form-group">
                                <label class="form-label">Description</label>
                                <textarea class="form-control" name="description" cols="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-label d-block">Image</label>
                                <input type="file" class="dropify" name="cover">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success btn-save">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="/admin/assets/vendor/bootstrap-datetimepicker.min.js"></script>
<script>

    $(document).ready(function(){
        $('.dropify').dropify();
    });

    get_event();

    function get_event(){
        $.get('{{ route('get_event.ajax') }}', {_token:'{{ csrf_token() }}'}, function(data){
            $('.event-wrap').html(data);
        });
    }

    $(function () {
        // open create modal
        $("#btn-create").on("click", function (e) {
            e.preventDefault();
            $(".print-error-msg").css('display','none');
            $("#head_text").html('Add Events');

            $(".dropify-preview").removeAttr('style');
            var form = $("#form-create");
            form.attr("action", route('events.store'));
            form.attr("method", "POST");
            $("input[name=title]").val("");
            $("input[name=cover]").val("");
            $("input[name=date_time]").val("");
            $("textarea[name=description]").val("");
            $("#modal-create").modal();
        });

        //insert data
        $("#form-create").on("click", ".btn-save", function (e) {
            e.preventDefault();
            $(".print-error-msg").css('display','none');
            var form = $("#form-create");
            var action = form.attr("action");
            var data = new FormData(form[0]);
            data.append("_method", form.attr("method"));

            $.ajax({
                url: action,
                method: "POST",
                data: data,
                cache: false,
                contentType: false,
                processData: false
            })
                .done(function(data) {
                    if(data.success){
                        get_event();
                        form.trigger("reset");
                        $("#modal-create").modal('hide');
                        toastr.success(data.message, '');
                    } else {
                        toastr.error("Something went wrong!", 'Error');
                    }
                })
                .fail(function(xhr) {
                    //button.html("Save").attr("disabled", false);
                    if(xhr.status == 422){
                        printErrorMsg(xhr.responseJSON.errors);
                    } else {
                        toastr.error("Something went wrong!", 'Error');
                    }
                });
        });

        // error masage
        function printErrorMsg (msg) {
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display','block');
            $.each( msg, function( key, value ) {
                $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
            });
        }
    });

    function deleteEvent(e,id){
        console.log(id);
        if (confirm("Delete this item?")) {
            $.ajax({
                url: route('events.destroy', id) ,
                method: "DELETE",
                data:{"_token":"{{csrf_token()}}"}
            })
                .done(function(data) {
                    if(data.success){
                        get_event();
                        toastr.success(data.message, '');
                    } else {
                        toastr.error("Something went wrong!", 'Error');
                    }
                })
                .fail(function(xhr) {
                    if(xhr.status == 422){
                        alert("Validation error");
                    } else {
                        toastr.error("Something went wrong!", 'Error');
                    }
                });
        }
    }

    $(function () {
        $('.date_time').datetimepicker({
            format: 'MMM D,yyyy - HH:mm',
        });
    });

</script>

@endpush