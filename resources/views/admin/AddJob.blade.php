@extends('admin.layouts.Master')
@section('pageTitle', 'Add Product')
@section('addProduct', 'active')
@section('mainContainer')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card card-box">
                <div class="card-head">

                    <button id="panel-button3" class="mdl-button mdl-js-button mdl-button--icon pull-right"
                        data-upgraded=",MaterialButton">
                        <i class="material-icons">more_vert</i>
                    </button>
                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" data-mdl-for="panel-button3">
                        <li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
                        </li>
                        <li class="mdl-menu__item"><i class="material-icons">print</i>Another action
                        </li>
                        <li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else
                            here</li>
                    </ul>
                </div>

                <div class="card-body p-4">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box shadow-lg border-0 rounded-3">
                                <div class="card-head bg-primary text-white p-3 rounded-top">
                                    <header class="h5 mb-0">Add New Job Posting</header>
                                </div>
                                <div class="card-body p-4">
                                    <form method="POST" action="/submit-job">
                                        <div class="row g-3">
                                            <!-- Recruiter Name -->
                                            <div class="col-md-6">
                                                <label class="form-label">Your Name *</label>
                                                <input type="text" class="form-control" name="recruiter_name"
                                                    placeholder="Enter your full name" required>
                                            </div>
                                            <!-- Company Name -->
                                            <div class="col-md-6">
                                                <label class="form-label">Company Name *</label>
                                                <input type="text" class="form-control" name="company_name"
                                                    placeholder="Enter company name" required>
                                            </div>
                                            <!-- Job Title -->
                                            <div class="col-md-6">
                                                <label class="form-label">Job Title *</label>
                                                <input type="text" class="form-control" name="job_title"
                                                    placeholder="Enter job title" required>
                                            </div>
                                            <!-- Job Location -->
                                            <div class="col-md-6">
                                                <label class="form-label">Job Location *</label>
                                                <input type="text" class="form-control" name="job_location"
                                                    placeholder="e.g. Delhi, Remote" required>
                                            </div>
                                            <!-- Job Type -->
                                            <div class="col-md-6">
                                                <label class="form-label">Job Type *</label>
                                                <select class="form-control" name="job_type" required>
                                                    <option value="">Select Job Type</option>
                                                    <option value="full-time">Full-time</option>
                                                    <option value="part-time">Part-time</option>
                                                    <option value="internship">Internship</option>
                                                    <option value="contract">Contract</option>
                                                </select>
                                            </div>
                                            <!-- Experience -->
                                            <div class="col-md-6">
                                                <label class="form-label">Experience Required *</label>
                                                <input type="text" class="form-control" name="experience"
                                                    placeholder="e.g. 2-4 years" required>
                                            </div>
                                            <!-- Qualification -->
                                            <div class="col-md-6">
                                                <label class="form-label">Qualification *</label>
                                                <input type="text" class="form-control" name="qualification"
                                                    placeholder="e.g. B.Tech, MBA" required>
                                            </div>
                                            <!-- Salary -->
                                            <div class="col-md-6">
                                                <label class="form-label">Salary Range</label>
                                                <input type="text" class="form-control" name="salary_range"
                                                    placeholder="e.g. 4-6 LPA">
                                            </div>
                                            <!-- Skills -->
                                            <div class="col-md-6">
                                                <label class="form-label">Skills Required *</label>
                                                <input type="text" class="form-control" name="skills"
                                                    placeholder="e.g. PHP, Laravel, ReactJS" required>
                                            </div>
                                            <!-- Job Description -->
                                            <div class="col-12">
                                                <label class="form-label">Job Description *</label>
                                                <textarea class="form-control" rows="4" name="job_description" placeholder="Enter detailed job description"
                                                    required></textarea>
                                            </div>
                                            <!-- Company Email -->
                                            <div class="col-md-6">
                                                <label class="form-label">Contact Email *</label>
                                                <input type="email" class="form-control" name="contact_email"
                                                    placeholder="hr@company.com" required>
                                            </div>
                                            <!-- Company Website -->
                                            <div class="col-md-6">
                                                <label class="form-label">Company Website</label>
                                                <input type="url" class="form-control" name="company_website"
                                                    placeholder="https://company.com">
                                            </div>
                                            <!-- Submit -->
                                            <div class="col-12 text-center mt-3">
                                                <button type="submit" class="btn btn-success px-4 py-2">
                                                    <i class="material-icons align-middle">send</i> Submit Job
                                                </button>
                                                <button type="reset" class="btn btn-secondary px-4 py-2 ms-2">
                                                    <i class="material-icons align-middle">refresh</i> Reset
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



@endsection
