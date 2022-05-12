<div class="col-md-12">
    <div class="card ">
        <div class="card-header card-header-rose card-header-text">
            <div class="card-text">
                <h4 class="card-title">اضافة الاقسام</h4>
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
            <div class="row">
                <label class="col-sm-2 col-form-label">كلمات ميتا</label>
                <div class="col-sm-10">
                    <div class="form-group bmd-form-group">
                        <input type="text" class="form-control @error('meta_keywords') is-invalid @enderror" placeholder="كلمات الدلالية" value="{{isset($row)?$row->meta_keywords:''}}"name="meta_keywords">
                        @error('meta_keywords')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
            </div>
                <div class="row">
                    <label class="col-sm-2 col-form-label">وصف ميتا</label>
                    <div class="col-sm-10">
                        <div class="form-group bmd-form-group">
                            <textarea class="form-control @error('meta_des') is-invalid @enderror" id="article-ckeditor" name="meta_des" placeholder="وصف الميتا" rows="3" >{{isset($row)?$row->meta_des:''}}</textarea>
                            @error('meta_des')
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
