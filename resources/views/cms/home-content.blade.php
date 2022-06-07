@extends('layouts.admin')

@section('content')

    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
            <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-1">
                    <!--begin::Page Heading-->
                    <div class="d-flex align-items-baseline flex-wrap mr-5">
                        <!--begin::Page Title-->
                        <h5 class="text-dark font-weight-bold my-1 mr-5">Content</h5>
                        <!--end::Page Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item text-muted">
                                <a href="javascript:;" class="text-muted">Layout</a>
                            </li>
                            <li class="breadcrumb-item text-muted">
                                <a href="javascript:;" class="text-muted">Home</a>
                            </li>
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page Heading-->
                </div>
                <!--end::Info-->
            </div>
        </div>
        <!--end::Subheader-->
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b example example-compact">
                            <div class="card-header">
                                <h3 class="card-title">Content</h3>
                            </div>
                            <!--begin::Form-->
                            <form class="form" action="{{ route('admin.layout.home-content.save') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    @if ($errors->any())
                                        <div class="form-group mb-8">
                                            <div class="alert alert-custom alert-default">
                                                <div class="alert-icon">
                                                    <span class="svg-icon svg-icon-danger svg-icon-xl">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"/>
                                                                <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
                                                                <rect fill="#000000" x="11" y="7" width="2" height="8" rx="1"/>
                                                                <rect fill="#000000" x="11" y="16" width="2" height="2" rx="1"/>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div class="alert-text">
                                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    @if ($message = Session::get('success'))
                                        <div class="form-group mb-8">
                                            <div class="alert alert-custom alert-default">
                                                <div class="alert-icon">
                                                    <span class="svg-icon svg-icon-success svg-icon-xl">
                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Tools/Compass.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24" />
                                                                <path d="M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z" fill="#000000" opacity="0.3" />
                                                                <path d="M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z" fill="#000000" fill-rule="nonzero" />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </div>
                                                <div class="alert-text">
                                                    {{ $message }}
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <label for="main_text">Main Text
                                                <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Main Text"
                                                   id="main_text" name="main_text" value="{{ $data->main_text }}"/>
                                            <div class="d-md-none mb-2"></div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <label for="main_text_hl">Main Highlight Text
                                                <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Main Highlight Text"
                                                   id="main_text_hl" name="main_text_hl" value="{{ $data->main_text_hl }}"/>
                                            <div class="d-md-none mb-2"></div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <label for="main_desc">Main Description
                                                <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Main Description"
                                                   id="main_desc" name="main_desc" value="{{ $data->main_desc }}"/>
                                            <div class="d-md-none mb-2"></div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <label for="main_desc_hl">Main Description Highlight Text
                                                <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Main Description Highlight Text"
                                                   id="main_desc_hl" name="main_desc_hl" value="{{ $data->main_desc_hl }}"/>
                                            <div class="d-md-none mb-2"></div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <label for="anim_1">First Animation Text
                                                <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" placeholder="First Animation Text"
                                                   id="anim_1" name="anim_1" value="{{ $data->anim_1 }}"/>
                                            <div class="d-md-none mb-2"></div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <label for="anim_2">Second Animation Text
                                                <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" placeholder="Second Animation Text"
                                                   id="anim_2" name="anim_2" value="{{ $data->anim_2 }}"/>
                                            <div class="d-md-none mb-2"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="logo">Main Image</label>
                                        <div class="symbol symbol-80 d-block">
                                            <img alt="Project" src="{{ asset('images/me/' . $data->main_image) }}" />
                                        </div>
                                        <input type="file" name="main_image" id="logo" class="d-block" />
                                        <div class="d-md-none mb-2"></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <label for="key_product">Main Product Text
                                                <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" placeholder="Main Product Text"
                                                   id="key_product" name="key_product" value="{{ $data->key_product }}"/>
                                            <div class="d-md-none mb-2"></div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <label for="key_product_badge">Main Product Badge
                                                <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Main Product Badge"
                                                   id="key_product_badge" name="key_product_badge" value="{{ $data->key_product_badge }}"/>
                                            <div class="d-md-none mb-2"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="logo">Main Product Image</label>
                                        <div class="symbol symbol-80 d-block">
                                            <img alt="Project" src="{{ asset('images/me/' . $data->key_product_image) }}" />
                                        </div>
                                        <input type="file" name="key_product_image" id="logo" class="d-block" />
                                        <div class="d-md-none mb-2"></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <label for="product_intro_text">Product Introduction Text
                                                <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" placeholder="Product Introduction Text"
                                                   id="product_intro_text" name="product_intro_text" value="{{ $data->product_intro_text }}"/>
                                            <div class="d-md-none mb-2"></div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <label for="product_intro_text_hl">Product Introduction Highlight Text
                                                <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" placeholder="Product Introduction Highlight Text"
                                                   id="product_intro_text_hl" name="product_intro_text_hl" value="{{ $data->product_intro_text_hl }}"/>
                                            <div class="d-md-none mb-2"></div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <label for="product_intro_desc">Product Introduction Description
                                                <span class="text-danger">*</span></label>
                                                <textarea class="form-control" id="product_intro_desc" name="product_intro_desc"
                                                      placeholder="Product Introduction Description"
                                                      rows="2">{{ $data->product_intro_desc }}</textarea>
                                            <div class="d-md-none mb-2"></div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <label for="product_ad_text">Product Advantage Text
                                                <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" placeholder="Product Advantage Text"
                                                   id="product_ad_text" name="product_ad_text" value="{{ $data->product_ad_text }}"/>
                                            <div class="d-md-none mb-2"></div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <label for="product_ad_text_hl">Product Advantage Highlight Text
                                                <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" placeholder="Product Advantage Highlight Text"
                                                   id="product_ad_text_hl" name="product_ad_text_hl" value="{{ $data->product_ad_text_hl }}"/>
                                            <div class="d-md-none mb-2"></div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <label for="product_ad_desc">Product Advantage Description
                                                <span class="text-danger">*</span></label>
                                                <textarea class="form-control" id="product_ad_desc" name="product_ad_desc"
                                                      placeholder="Product Advantage Description"
                                                      rows="2">{{ $data->product_ad_desc }}</textarea>
                                            <div class="d-md-none mb-2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                    <button type="reset" class="btn btn-secondary">Cancel</button>
                                </div>
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Card-->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
