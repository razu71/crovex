<div class="modal fade" id="disallow_add_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="exampleModalLabel">{{__('Create Disallow Item')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('disallow.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row justify-content-center">

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="type"><b>{{__('Disallow Item Type')}}<sup class="text-danger">*</sup></b></label>
                                <select name="type" class="form-control" id="type">
                                    <option value="">{{__('Select')}}</option>
                                    @foreach(disallow_items() as $key => $value)
                                        <option value="{{$key}}">{{$value}}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger type_error">{{$errors->first('type')}}</span>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="name"><b>{{__('Disallow Item Name')}}<sup class="text-danger">*</sup></b></label>
                                <input id="name" class="form-control get-title" type="text" name="name" placeholder="Enter Item">
                                <span class="text-danger name_error">{{$errors->first('name')}}</span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="edit_id" id="edit_id" value="">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('Close')}}</button>
                    <button type="submit" class="btn btn-primary disallow_item_create">{{__('Create Disallow Item')}}</button>
                </div>
            </form>
        </div>
    </div>
</div>
