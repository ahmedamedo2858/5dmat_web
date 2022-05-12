<div class="col-md-12">
    <div class="card ">
        <div class="card-header card-header-rose card-header-text">
            <div class="card-text">
                <h4 class="card-title">اضافة صفحة</h4>
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
                    <label class="col-sm-2 col-form-label">رابط اليوتيوب</label>
                    <div class="col-sm-10">
                        <div class="form-group bmd-form-group">
                            <input type="url" class="form-control @error('youtube') is-invalid @enderror" placeholder="رابط يوتيوب" value="{{isset($row)?$row->youtube:''}}"name="youtube">
                            @error('url')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                </div> <div class="row">
                    <label class="col-sm-2 col-form-label">صورة </label>
                    <div class="col-sm-10">

                            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" >
                            @error('image')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

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
                            <textarea class="form-control @error('meta_des') is-invalid @enderror"  name="meta_des" placeholder="وصف الميتا" rows="3" >{{isset($row)?$row->meta_des:''}}</textarea>
                            @error('meta_des')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                </div>
            <div class="row">
                    <label class="col-sm-2 col-form-label">وصف</label>
                    <div class="col-sm-10">
                        <div class="form-group bmd-form-group">
                            <textarea class="form-control @error('des') is-invalid @enderror" id="article-ckeditor" name="des" placeholder="وصف " rows="3" >{{isset($row)?$row->des:''}}</textarea>
                            @error('des')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                </div>

            <div class="row">
                <label class="col-sm-2 col-form-label">حالة نشر</label>
                <div class="col-sm-10">
                    <div class="form-group bmd-form-group">
                        <select name="published" class="form-control @error('published') is-invalid @enderror" >
                            <option value="1" {{isset($row) && $row->published==1?'selected':''}}>نشر </option>
                            <option value="0" {{isset($row) && $row->published==0?'selected':''}}>اخفاء</option>

                        </select>
                        @error('published')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row" style="padding-bottom: 50px;">
                <label class="col-sm-2 col-form-label">مهارات</label>
                <div class="col-sm-10">
                    <div class="form-group bmd-form-group">
                        <select name="skills[]" class="form-control @error('skills[]') is-invalid @enderror" id="exampleFormControlSelect1" multiple style="height: 100px; margin-bottom: 100px;">
                            @foreach($skills as $skill)
                            <option value="{{$skill->id}}"{{in_array($skill->id,$skillselect)?'selected':'' }}>{{$skill->name}} </option>
                            @endforeach
                        </select>
                        @error('skills[]')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row" style="padding-bottom: 50px;">
                <label class="col-sm-2 col-form-label">تاجات</label>
                <div class="col-sm-10">
                    <div class="form-group bmd-form-group">
                        <select name="tags[]" class="form-control @error('tags[]') is-invalid @enderror" id="exampleFormControlSelect1" multiple style="height: 100px; margin-bottom: 100px;">
                            @foreach($tags as $tag)
                                <option value="{{$tag->id}}"{{in_array($tag->id,$tagselect)?'selected':'' }}>{{$tag->name}} </option>
                            @endforeach
                        </select>
                        @error('tags[]')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <label class="col-sm-2 col-form-label">قسم فديوهات</label>
                <div class="col-sm-10">
                    <div class="form-group bmd-form-group">
                        <select name="cat_id" class="form-control @error('cat_id') is-invalid @enderror" id="exampleFormControlSelect1">
                            @foreach($cats as $cat)
                        <option value="{{$cat->id}}" {{isset($row) && $row->cat_id==1?'selected':''}}>{{$cat->name}} </option>
                            @endforeach
                        </select>
                        @error('cat_id')
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
