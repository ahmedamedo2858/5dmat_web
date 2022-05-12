<div class="card " style="margin-top: 50px;display: none;"id="profile">
    <div class="card-header card-header-rose card-header-text">
        <div class="card-text">
            <h4 class="card-title">تعديل بروفايل </h4>
        </div>

    </div>
    <div class="card-body ">

        <div class="row">
            <label class="col-sm-2 col-form-label">الاسم</label>
            <div class="col-sm-10">
                <div class="form-group bmd-form-group">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="الاسم" value="{{isset($user)?$user->name:''}}"name="name">
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
                    <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="ايميل" value="{{isset($user)?$user->email:''}}"name="email">
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
