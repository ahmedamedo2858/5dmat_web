<div class="row">

    <div class="col-sm-12">
        <div class="form-group bmd-form-group">
            <textarea class="form-control @error('comment') is-invalid @enderror" id="article-ckeditor" name="comment" placeholder=" تعليق" rows="3" >{{isset($row)?$row->comment:''}}</textarea>
            @error('comment')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>
</div>
