<div class="modal fade" id="staff_add_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="staff_add_modal_title">{{__('Create Staff')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('staff.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row justify-content-center">

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="name"><b>{{__('Name')}}<sup class="text-danger">*</sup></b></label>
                                <input id="name" class="form-control get-title" type="text" name="name" placeholder="Enter Staff Name">
                                <span class="text-danger name_error">{{$errors->first('name')}}</span>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="contact"><b>{{__('Contact')}}<sup class="text-danger">*</sup></b></label>
                                <input id="contact" class="form-control get-title" type="number" name="contact" placeholder="Enter Staff Contact">
                                <span class="text-danger contact_error">{{$errors->first('contact')}}</span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="edit_id" id="edit_id" value="">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('Close')}}</button>
                    <button type="submit" class="btn btn-primary staff_create">{{__('Create Staff')}}</button>
                </div>
            </form>
        </div>
    </div>
</div>
