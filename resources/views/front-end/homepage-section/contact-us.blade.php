<div class="section landing-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
                <h2 class="text-center">ارسل لنا رسالة</h2>
                <form class="contact-form" action="{{route('front.contact')}}" method="get">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label>الاسم</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="nc-icon nc-single-02"></i>
                      </span>
                                </div>
                                <input type="text" class="form-control  @error('name') is-invalid @enderror" placeholder="الاسم" name="name" required>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>البريد الكتروني</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="nc-icon nc-email-85"></i>
                      </span>
                                </div>
                                <input type="email" class="form-control  @error('email') is-invalid @enderror" placeholder="البريد لكتروني" required name="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <label>رسالة</label>
                    <textarea class="form-control  @error('massage') is-invalid @enderror" rows="4" name="massage" placeholder="اترك لنا رسالة "></textarea>
                    @error('massage')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    <div class="row">
                        <div class="col-md-4 ml-auto mr-auto">
                            <button class="btn btn-danger btn-lg btn-fill">ارسال</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
