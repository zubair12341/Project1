@extends('admin_layouts.master')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
   
@section('title', 'Wisdom Chest || Admin Announcement')

@section('content')
<script>
    $(document).ready(function() { 
    @if (session('error'))
        swal({
            title: "Error",
            text: "{{ session('error') }}",
            icon: "error",
            button: "OK",
        });
    @endif
    @if (session('success'))
        swal({
            title: "Success",
            text: "{{ session('success') }}",
            icon: "success",
            button: "OK",
        });
    @endif
});
</script>

   <!-- End Dashboard Sidebar  -->
</div>

<div class="col-lg-9">
    <!-- Start Enrole Course  -->
    <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
        <div class="content">
            <div class="section-title">
                <h4 class="rbt-title-style-3">Genres
                </h4>
            </div>

            <!-- Start Call To Action  -->
            <div class="rbt-callto-action rbt-cta-default style-2">
                <div class="content-wrapper overflow-hidden pt--30 pb--30 bg-color-primary-opacity">
                    <div class="row gy-5 align-items-end">
                        <div class="col-lg-8">
                            <div class="inner">
                                <div class="content text-left">
                                    <h5 class="mb--5">Create Genre.</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="call-to-btn text-start text-lg-end position-relative">
                                <a class="rbt-btn btn-sm rbt-switch-btn rbt-switch-y" data-bs-toggle="modal" data-bs-target="#AddAnnouncement">
                                    <span data-text="Add New Genre">Add New Genre</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Call To Action  -->

            <!-- Start Filter -->
            {{-- <div class="rbt-dashboard-filter-wrapper mt--60">
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
            </div> --}}
            <!-- End Filter -->

            <hr class="mt--30">

            <div class="rbt-dashboard-table table-responsive mobile-table-750 mt--30">
                <table class="rbt-table table table-borderless">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Date</th>
                            <th>Genre</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i=1;
                        @endphp
                        @foreach ($genre as $item)
                        <tr>
                            <td>
                                <span class="h6 mb--5">{{ $i++ }}</span>
                            </td>
                            <th>
                                <span class="h6 mb--5">{{ $item->created_at->format('F d, Y') }}</span>
                                <p class="b3">{{ $item->created_at->format('h.ia') }}</p>
                            </th>
                            <td>
                                <span class="h6 mb--5">{{ $item->genre }}</span>
                            </td>
                            <td>
                                <div class="rbt-button-group justify-content-end">
                                    <a class="rbt-btn-link left-icon editzone" href="" data-bs-toggle="modal" data-bs-target="#EditAnnouncement" data-announcement-id="{{ $item->id }}" data-announcement-title="{{ $item->genre }}" ><i class="feather-edit"></i> Edit</a>
                                    <a class="rbt-btn-link left-icon" href="{{ route('delet.genre', ['genre' => $item->id]) }}" onclick="return confirmDelete(event)"><i class="feather-trash-2"></i> Delete</a>
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
                            <h5 class="modal-title mb--20" id="exampleModalLabel">Add New Genre</h5>
                            <form action="{{ route('admin.store.genre') }}" method="post">
                                @csrf 
                            <div class="course-field mb--20">
                                <label for="modal-field-1">Genre Name</label>
                                <input id="modal-field-1" type="text" name="title" required>
                                <small><i class="feather-info"></i> Genre name required.</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-circle-shape"></div>
            <div class="modal-footer pt--30">
                <button type="submit" class="rbt-btn btn-sm rbt-switch-btn rbt-switch-y">Create Genre</button>
                <button type="button" class="rbt-btn btn-border btn-md radius-round-10" data-bs-dismiss="modal">Cancel</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!-- End Modal Area  -->

<!-- Start Edit Modal Area -->
<div class="rbt-default-modal modal fade" id="EditAnnouncement" tabindex="-1" aria-labelledby="editAnnouncementLabel" aria-hidden="true">
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
                            <h5 class="modal-title mb--20" id="editAnnouncementLabel">Edit Genre</h5>
                            <form action="{{ route('admin.update.genre') }}" method="post">
                                @csrf
                                <input type="hidden" name="announcement_id" id="edit_announcement_id" value="">
                                <div class="course-field mb--20">
                                    <label for="modal-field-3">Genre Name</label>
                                    <input id="edit_announcement_title" type="text" name="title" required>
                                    <small><i class="feather-info"></i> Genre name required.</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="top-circle-shape"></div>
                <div class="modal-footer pt--30">
                    <button type="submit" class="rbt-btn btn-sm rbt-switch-btn rbt-switch-y">Update Genre</button>
                    <button type="button" class="rbt-btn btn-border btn-md radius-round-10" data-bs-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Edit Modal Area -->



{{-- View Anno --}}
<script>
    function confirmDelete(event) {
        event.preventDefault(); // Prevent the default link behavior
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this genre!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                // If the user clicks "OK," proceed with the link action
                window.location.href = event.target.href;
            }
        });
    }
</script>
<script>
    // JavaScript to populate the edit modal fields
    document.querySelectorAll('.editzone').forEach(function(editLink) {
        editLink.addEventListener('click', function(event) {
            event.preventDefault();
            var announcementId = this.getAttribute('data-announcement-id');
            var announcementTitle = this.getAttribute('data-announcement-title');
            var announcementDescription = this.getAttribute('data-announcement-description');

            // Populate the edit modal fields
            document.getElementById('edit_announcement_id').value = announcementId;
            document.getElementById('edit_announcement_title').value = announcementTitle;
            document.getElementById('edit_announcement_description').value = announcementDescription;
        });
    });
</script>

@endsection