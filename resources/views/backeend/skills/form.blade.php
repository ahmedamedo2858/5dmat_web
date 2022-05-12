<div class="col-md-12">
    <div class="card ">
        <div class="card-header card-header-rose card-header-text">
            <div class="card-text">
                <h4 class="card-title">اضافة مهارات</h4>
            </div>

        </div>
        <div class="card-body ">

                <div class="row">
                    <label class="col-sm-2 col-form-label">الاسم</label>
                    <div class="col-sm-10">
                        <div class="form-group bmd-form-group">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="الاسم" value="{{isset($row)?$row->name:''}}"name="name">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                </div>


        </div>
    </div>
</div>