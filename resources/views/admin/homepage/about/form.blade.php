<div class="row align-items-center">
    <div class="row">
        <div class="col-lg-6 col-sm-12">
            <div class="form-group">
                <label for="title_en">@lang('admin.title-en')<label class="text-danger">*</label></label>
                <input type="text"  name="title[]"  value="{{old('title.0')??$about->getTranslation('title','en')}}" class="form-control " id="title_en"  placeholder="@lang('admin.enter-en-title')" >
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="form-group">
                <label for="title_ar">@lang('admin.title-ar')<label class="text-danger">*</label></label>
                <input type="text"  name="title[]"  value="{{old('title.1')??$about->getTranslation('title','ar')}}" class="form-control " id="title_ar"  placeholder="@lang('admin.enter-ar-title')" >
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="form-group">
                <label for="text_en">@lang('admin.text-en')<label class="text-danger">*</label></label>
                <textarea type="text" name="text[]" class="form-control summernote" id="text_en" placeholder="@lang('dashboard.enter-english-text')" >
                    {{old('text.0')??$about->getTranslation('text','en')}}
                </textarea>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="form-group">
                <label for="text_ar">@lang('admin.text-ar')<label class="text-danger">*</label></label>
                <textarea type="text" name="text[]" class="form-control summernote" id="text_ar" placeholder="@lang('dashboard.enter-arabic-text')" >
                    {{old('text.1')??$about->getTranslation('text','ar')}}
                </textarea>
            </div>
        </div>
        <div class="col-lg-12 col-sm-12" id="url">
            <div class="form-group">
                <label for="url">@lang('admin.video-url')<label class="text-danger">*</label></label>
                <input type="url"  name="url"  value="{{old('url')??$about->url}}" class="form-control " id="url"  placeholder="@lang('admin.enter-video-url')" >
            </div>
        </div>
    </div>
</div>
@section('scripts')
    /*editor*/
    <script src="{{ asset_public('admin/plugins/custom/ckeditor/ckeditor-classic.bundle.js') }}"></script>
    <script src="{{ asset_public('admin/plugins/js/pages/crud/forms/editors/ckeditor-classic.js') }}"></script>
    <script>
        "use strict";
        // Class definition
        var KTContactsEdit = function () {
            // Base elements
            var avatar;
            var initAvatar1 = function() {
                avatar = new KTImageInput('kt_contacts_edit_avatar1');
            }
            var initAvatar2 = function() {
                avatar = new KTImageInput('kt_contacts_edit_avatar2');
            }
            return {
                // public functions
                init: function() {
                    initAvatar1();
                    initAvatar2();
                }
            };
        }();
        jQuery(document).ready(function() {
            KTContactsEdit.init();
        });
    </script>

    <script>
        // Class definition
        var KTSummernoteDemo = function () {
            // Private functions
            var demos = function () {
                $('.summernote').summernote({
                    height: 150
                });
            }
            return {
                // public functions
                init: function() {
                    demos();
                }
            };
        }();
        // Initialization
        jQuery(document).ready(function() {
            KTSummernoteDemo.init();
        });
    </script>
    @if(session()->has('success'))
        <script>Swal.fire("Good Job", "{{session()->get('success')}}", "success");</script>
    @endif
@endsection
