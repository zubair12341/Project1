@extends('admin_layouts.master')

@section('title', 'Wisdom Chest || Student Announcement')

@section('content')


   <!-- End Dashboard Sidebar  -->
</div>

<div class="col-lg-9">
    <!-- Start Enrole Course  -->
    <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
        <div class="content">
            <div class="section-title">
                <h4 class="rbt-title-style-3">Announcements
                </h4>
            </div>

            <!-- Start Call To Action  -->
            {{-- <div class="rbt-callto-action rbt-cta-default style-2">
                <div class="content-wrapper overflow-hidden pt--30 pb--30 bg-color-primary-opacity">
                    <div class="row gy-5 align-items-end">
                        <div class="col-lg-8">
                            <div class="inner">
                                <div class="content text-left">
                                    <h5 class="mb--5">Notify your all users.</h5>
                                    <p class="b3">Create Announcement</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="call-to-btn text-start text-lg-end position-relative">
                                <a class="rbt-btn btn-sm rbt-switch-btn rbt-switch-y" data-bs-toggle="modal" data-bs-target="#AddAnnouncement">
                                    <span data-text="Add New Announcement">Add New Announcement</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- End Call To Action  -->

            <!-- Start Filter -->
            <div class="rbt-dashboard-filter-wrapper mt--60">
                <div class="row g-5">
                    <div class="col-lg-6">
                        <div class="filter-select rbt-modern-select">
                            <span class="select-label d-block">Books</span>
                            <select class="w-100" data-live-search="true" title="All" multiple data-size="7" data-actions-box="true" data-selected-text-format="count > 2">
                                <option data-subtext="HTML">Web Design</option>
                                <option data-subtext="Photoshop">Graphic</option>
                                <option data-subtext="Career">English</option>
                                <option data-subtext="Career">Spoken English</option>
                                <option data-subtext="Experts">Art Painting</option>
                                <option data-subtext="Experts">App Development</option>
                                <option data-subtext="Experts">Web Application</option>
                                <option data-subtext="Experts">Php Development</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="filter-select rbt-modern-select">
                            <span class="select-label d-block">Short By</span>
                            <select class="w-100">
                                <option>Default</option>
                                <option>Latest</option>
                                <option>Popularity</option>
                                <option>Trending</option>
                                <option>Price: low to high</option>
                                <option>Price: high to low</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="filter-select rbt-modern-select">
                            <span class="select-label d-block">Short By Offer</span>
                            <select class="w-100">
                                <option>Free</option>
                                <option>Paid</option>
                                <option>Premium</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Filter -->

            <hr class="mt--30">

            <div class="rbt-dashboard-table table-responsive mobile-table-750 mt--30">
                <table class="rbt-table table table-borderless">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Announcements</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ann as $item)
                        <tr>
                            <th>
                                <span class="h6 mb--5">{{ $item->created_at->format('F d, Y') }}</span>
                                <p class="b3">{{ $item->created_at->format('h.ia') }}</p>
                            </th>
                            <td>
                                <span class="h6 mb--5">{{ $item->title }}</span>
                                <p class="b3">{{ $item->description }}</p>
                            </td>
                            <td>
                                <div class="rbt-button-group justify-content-end">
                                    <a class="rbt-btn-link left-icon" href="#"><i class="feather-monitor"></i> View</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>

                </table>
            </div>
        </div>
    </div>
    <!-- End Enrole Course  -->
</div>
</div>

</div>
</div>
</div>
</div>
<!-- End Card Style -->




<div class="rbt-separator-mid">
<div class="container">
<hr class="rbt-separator m-0">
</div>
</div>


<!-- Start Modal Area  -->
<div class="rbt-default-modal modal fade" id="AddAnnouncement" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="rbt-round-btn" data-bs-dismiss="modal" aria-label="Close">
                    <i class="feather-x"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="inner rbt-default-form">
                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="modal-title mb--20" id="exampleModalLabel">Add New Announcement</h5>
                            <form action="" method="post">
                            <div class="course-field mb--20">
                                <label for="modal-field-1">Announcement Title</label>
                                <input id="modal-field-1" type="text" required>
                                <small><i class="feather-info"></i> Announcement titles are displayed publicly wherever required.</small>
                            </div>
                            <div class="course-field mb--20">
                                <label for="modal-field-2">Announcement Descritption</label>
                                <textarea id="modal-field-2"></textarea>
                                <small><i class="feather-info"></i> Add a descriptiom of short text for Announcement.</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-circle-shape"></div>
            <div class="modal-footer pt--30">
                <button type="submit" class="rbt-btn btn-sm rbt-switch-btn rbt-switch-y">Add Announcement</button>
                <button type="button" class="rbt-btn btn-border btn-md radius-round-10" data-bs-dismiss="modal">Cancel</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!-- End Modal Area  -->


{{-- View Anno --}}

@endsection