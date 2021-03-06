<!-- Modal-->
<div class="modal fade" id="newsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">@lang('admin.create-news')</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('admin.news.store')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-xs-12">
                            <div class="form-group">
                                <label for="title_en">@lang('admin.title-en')<label class="text-danger">*</label></label>
                                <input type="text"  name="title[]"  value="{{old('title.0')}}" class="form-control " id="title_en"  placeholder="@lang('admin.enter-en-title')" >
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-xs-12">
                            <div class="form-group">
                                <label for="title_ar">@lang('admin.title-ar')<label class="text-danger">*</label></label>
                                <input type="text"  name="title[]"  value="{{old('title.0')}}" class="form-control " id="title_ar"  placeholder="@lang('admin.enter-ar-title')" >
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-xs-12">
                            <div class="form-group">
                                <label for="text_en">@lang('admin.text-en')<label class="text-danger">*</label></label>
                                <input type="text"  name="text[]"  value="{{old('text.0')}}" class="form-control " id="text_en"  placeholder="@lang('admin.enter-english-text')" >
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-xs-12">
                            <div class="form-group">
                                <label for="text_ar">@lang('admin.text-ar')<label class="text-danger">*</label></label>
                                <input type="text"  name="text[]"  value="{{old('text.0')}}" class="form-control " id="text_ar"  placeholder="@lang('admin.enter-arabic-text')" >
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">@lang('admin.close')</button>
                        <input type="submit" class="btn btn-primary font-weight-bold" value="@lang('admin.submit')">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
