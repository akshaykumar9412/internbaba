@extends('admin.layouts.Master')
@section('pageTitle', 'Project Settings')
@section('addProduct', 'active')

@section('mainContainer')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>Project Settings</header>
                </div>
                <div class="card-body" id="bar-parent2">
                    <form action="{{ route('admin.project.settings.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        {{-- 🔹 Basic Information --}}
                        <h5 class="mb-3 font-bold">Basic Information</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Project Name -->
                                <div class="form-group mb-3">
                                    <label><i class="fa fa-briefcase"></i> Project Name</label>
                                    <input type="text" name="project_name" class="form-control"
                                        placeholder="Enter Project Name" value="{{ $settings->project_name }}">
                                </div>

                                <!-- Logo Upload -->
                                <div class="form-group mb-3">
                                    <label><i class="fa fa-image"></i> Logo Upload</label>
                                    <input type="file" name="logo" class="form-control"
                                        onchange="previewImage(event, 'logoPreview')">
                                    <div class="mt-2">
                                        <img id="logoPreview" src="{{ asset($settings->logo ?? 'default-logo.png') }}"
                                            alt="Logo Preview" style="max-height: 60px;">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <!-- Favicon Upload -->
                                <div class="form-group mb-3">
                                    <label><i class="fa fa-star"></i> Favicon Upload</label>
                                    <input type="file" name="favicon" class="form-control"
                                        onchange="previewImage(event, 'faviconPreview')">
                                    <div class="mt-2">
                                        <img id="faviconPreview"
                                            src="{{ asset($settings->favicon ?? 'default-favicon.png') }}"
                                            alt="Favicon Preview" style="max-height: 32px;">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr>

                        {{-- 🔹 SEO & Meta Settings --}}
                        <h5 class="mb-3 font-bold">SEO & Meta Settings</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Meta Title -->
                                <div class="form-group mb-3">
                                    <label>Meta Title</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fa fa-header"></i></span>
                                        <input type="text" name="meta_title" class="form-control"
                                            placeholder="Enter Meta Title" value="{{ $settings->meta_title }}">
                                    </div>
                                </div>
                                <!-- Meta Description -->
                                <div class="form-group mb-3">
                                    <label>Meta Description</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fa fa-file-text-o"></i></span>
                                        <textarea name="meta_description" class="form-control" rows="2" placeholder="Enter Meta Description">{{ $settings->meta_description }}</textarea>
                                    </div>
                                </div>

                                
                            </div>

                            <div class="col-md-6">
                                
                                <!-- Meta Keywords -->
                                <div class="form-group mb-3">
                                    <label>Meta Keywords</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fa fa-tags"></i></span>
                                        <input type="text" name="meta_keywords" class="form-control"
                                            placeholder="e.g. ecommerce, shop, online"
                                            value="{{ $settings->meta_keywords }}">
                                    </div>
                                </div>

                                <!-- Meta Image -->
                                <div class="form-group mb-3">
                                    <label>Meta Image</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fa fa-image"></i></span>
                                        <input type="file" name="meta_image" class="form-control">
                                    </div>
                                    <div class="mt-2">
                                    <img id="meta_image" src="{{ asset($settings->meta_image ?? 'default-logo.png') }}"
                                        alt="Logo Preview" style="max-height: 60px;">
                                </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <!-- Google Analytics ID -->
                                <div class="form-group mb-3">
                                    <label>Google Analytics ID</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fa fa-bar-chart"></i></span>
                                        <input type="text" name="google_analytics_id" class="form-control"
                                            placeholder="e.g. G-ABCDEFG123SDF" value="{{ $settings->google_analytics_id }}">
                                    </div>
                                </div>

                                <!-- Google Ads Conversion ID -->
                                <div class="form-group mb-3">
                                    <label>Google Ads Conversion ID</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fa fa-google"></i></span>
                                        <input type="text" name="google_ads_conversion_id" class="form-control"
                                            placeholder="e.g. ID-345345KJSKJ"
                                            value="{{ $settings->google_ads_conversion_id }}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <!-- Google Ads Remarketing Tag -->
                                <div class="form-group mb-3">
                                    <label>Google Ads Remarketing Tag</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fa fa-code"></i></span>
                                        <input type="text" name="google_ads_remarketing_tag" class="form-control"
                                            placeholder='e.g. <script>
                                                …
                                            </script>'
                                            value="{{ $settings->google_ads_remarketing_tag }}">
                                    </div>
                                </div>

                                <!-- Facebook Pixel ID -->
                                <div class="form-group mb-3">
                                    <label>Facebook Pixel ID</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fa fa-facebook"></i></span>
                                        <input type="text" name="facebook_pixel_id" class="form-control"
                                            placeholder="e.g. 1234567890" value="{{ $settings->facebook_pixel_id }}">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <hr>

                        {{-- 🔹 Contact Information --}}
                        <h5 class="mb-3 font-bold">Contact Information</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Email -->
                                <div class="form-group mb-3">
                                    <label>Email</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                        <input type="email" name="contact_email" class="form-control"
                                            placeholder="Enter Contact Email" value="{{ $settings->contact_email }}">
                                    </div>
                                </div>

                                <!-- Phone -->
                                <div class="form-group mb-3">
                                    <label>Phone</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                        <input type="text" name="contact_phone" class="form-control"
                                            placeholder="Enter Contact Number" value="{{ $settings->contact_phone }}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <!-- Address -->
                                <div class="form-group mb-3">
                                    <label>Address</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fa fa-map-marker"></i></span>
                                        <textarea name="contact_address" class="form-control" rows="2" placeholder="Enter Address">{{ $settings->contact_address }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label>Google map</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fa fa-map-marker"></i></span>
                                        <textarea name="google_map_frame" class="form-control" rows="2" placeholder="Google map IFrame link">{{ $settings->google_map_frame }}</textarea>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <hr>

                        {{-- 🔹 Social Media Links --}}
                        <h5 class="mb-3 font-bold">Social Media Links</h5>
                        <div class="row">
                            <div class="col-md-6">

                                <!-- Facebook -->
                                <div class="input-group mb-2">
                                    <span class="input-group-text"><i class="fa fa-facebook"></i></span>
                                    <input type="text" name="facebook" class="form-control"
                                        placeholder="Facebook URL" value="{{ $settings->facebook }}">
                                </div>

                                <!-- Twitter -->
                                <div class="input-group mb-2">
                                    <span class="input-group-text"><i class="fa fa-twitter"></i></span>
                                    <input type="text" name="twitter" class="form-control" placeholder="Twitter URL"
                                        value="{{ $settings->twitter }}">
                                </div>

                                <!-- Instagram -->
                                <div class="input-group mb-2">
                                    <span class="input-group-text"><i class="fa fa-instagram"></i></span>
                                    <input type="text" name="instagram" class="form-control"
                                        placeholder="Instagram URL" value="{{ $settings->instagram }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <!-- LinkedIn -->
                                <div class="input-group mb-2">
                                    <span class="input-group-text"><i class="fa fa-linkedin"></i></span>
                                    <input type="text" name="linkedin" class="form-control"
                                        placeholder="LinkedIn URL" value="{{ $settings->linkedin }}">
                                </div>

                                <!-- YouTube -->
                                <div class="input-group mb-2">
                                    <span class="input-group-text"><i class="fa fa-youtube"></i></span>
                                    <input type="text" name="youtube" class="form-control" placeholder="YouTube URL"
                                        value="{{ $settings->youtube }}">
                                </div>
                            </div>

                        </div>

                        <hr>

                        {{-- 🔹 Action Buttons --}}
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Save Settings</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
