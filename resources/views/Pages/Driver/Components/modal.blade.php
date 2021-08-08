<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="exampleModalLabel">
                    Create Driver</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('drivers.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row justify-content-center">

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for=""><b>Driver Name<sup class="text-danger">*</sup></b> </label>
                                <input id="inp_name" class="form-control get-title" type="text" name="name"
                                    placeholder="Enter Customer Name">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for=""><b>Driver Number<sup class="text-danger">*</sup></b> </label>
                                <input id="inp_name" class="form-control get-title" type="text" name="contact"
                                    placeholder="Enter Contact Number">
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Create
                    Driver</button>
                </form>
            </div>
        </div>
    </div>
</div>
