<div class="col-md-12">
    <div class="card ">
        <div class="card-header card-header-rose card-header-text">
            <div class="card-text">
                <h4 class="card-title">اضافة مستخدمين</h4>
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
                <label class="col-sm-2 col-form-label">ايميل</label>
                <div class="col-sm-10">
                    <div class="form-group bmd-form-group">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="ايميل" value="{{isset($row)?$row->email:''}}"name="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
            </div>
                <div class="row">
                    <label class="col-sm-2 col-form-label">كلمة مرور</label>
                    <div class="col-sm-10">
                        <div class="form-group bmd-form-group">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                </div>


            <div class="row">
                <label class="col-sm-2 col-form-label">حالة مستخدم</label>
                <div class="col-sm-10">
                    <div class="form-group bmd-form-group">
                        <select name="group" class="form-control @error('group') is-invalid @enderror" >
                            <option value="user" {{isset($row) && $row->group=='user'?'selected':''}}>user </option>
                            <option value="admin" {{isset($row) && $row->group=='admin'?'selected':''}}>admin</option>

                        </select>
                        @error('group')
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
