

<div class="col-md-12">
    <div class="card ">
        <div class="card-header card-header-rose card-header-text">
            <div class="card-text">
                <h4 class="card-title">رسايل</h4>
            </div>

        </div>
        <div class="card-body " style="margin-right: 12px">

                <div class="row">
                    <label class="col-sm-2 col-form-label">الاسم</label>
                    <div class="col-sm-10">
                        <div class="form-group bmd-form-group">
                            <input disabled type="text" class="form-control @error('name') is-invalid @enderror" placeholder="الاسم" value="{{isset($row)?$row->name:''}}"name="name">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                </div>
            <div class="row">
                    <label class="col-sm-2 col-form-label">البريد الكتروني</label>
                    <div class="col-sm-10">
                        <div class="form-group bmd-form-group">
                            <input disabled type="email" class="form-control @error('email') is-invalid @enderror" placeholder="البريد الكترون" value="{{isset($row)?$row->email:''}}"name="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                </div>
            <div class="row">
                <label class="col-sm-2 col-form-label">رسالة</label>
                <div class="col-sm-10">
                    <div class="form-group bmd-form-group">
                        <input disabled type="text" class="form-control @error('massage') is-invalid @enderror" placeholder="كلمات الدلالية" value="{{isset($row)?$row->massage:''}}"name="massage">
                        @error('massage')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
            </div>





<br>
<br>
<br>

                <hr class="btn-danger" style="height: 3px">
            <br>

            <div >
                <h3 class="pull-right">رد علي رسالة</h3>
                <br>
                <br>
                <br>
                <form  action="{{route('replay.message',['id'=>$row->id])}}" method="post" >
                    @csrf



                    <div class="form-group">
                        <label class="col-sm-2 col-form-label">رد علي رسالة</label>
                        <div class="col-sm-10">
                            <div class="form-group bmd-form-group">
                                <div class="form-group bmd-form-group">
                                    <textarea class="form-control @error('message') is-invalid @enderror" id="article-ckeditor" name="message" placeholder="رد علي رساله" rows="3" >{{isset($row)?$row->comment:''}}</textarea>
                                    @error('message')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                              {{--  <input type="text" class="form-control @error('message') is-invalid @enderror" placeholder="" name="message">
                                @error('message')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror--}}
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">رد علي رسالة </button>
                </form>
            </div>ذ
        </div>
        </div>
    </div>

