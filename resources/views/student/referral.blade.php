@extends('admin_layouts.master')
@section('title', 'Wisdom Chest || Student Referral')

@section('content')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>


   <!-- End Dashboard Sidebar  -->
</div>

<div class="col-lg-9">
    <!-- Start Enrole Course  -->
    <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
        <div class="content">
            <div class="section-title">
                <h4 class="rbt-title-style-3">Referral
                </h4>
            </div>

            <!-- Start Call To Action  -->
            <div class="rbt-callto-action rbt-cta-default style-2">
                <div class="content-wrapper overflow-hidden pt--30 pb--30 bg-color-primary-opacity">
                    <div class="row gy-5 align-items-end">
                        <div class="col-lg-8">
                            <div class="inner">
                                <div class="content text-left">
                                    <h5 class="mb--5">Share Referral.</h5>
                                    <p class="b3">Share Referral code or send Referral via email.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="call-to-btn text-start text-lg-end position-relative">
                                <a class="rbt-btn btn-sm rbt-switch-btn rbt-switch-y" data-bs-toggle="modal" data-bs-target="#AddAnnouncement">
                                    <span data-text="Share New Referral">Share New Referral</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Call To Action  -->
            <br>
            <div class="rbt-callto-action rbt-cta-default style-2">
                <div class="content-wrapper overflow-hidden pt--30 pb--30 bg-color-primary-opacity">
                    <div class="row gy-5 align-items-end">
                        <div class="col-lg-8">
                            <div class="inner">
                                <div class="content text-left">
                                    <h5 class="mb--5">Share Referral Code.</h5>
                                    <p class="b3">Copy Referral Code & share it.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="call-to-btn text-start text-lg-end position-relative">
                                <input style="text-align: center; border: solid 2px green; cursor:pointer" type="text" id="copy-text" class="form-control" value="{{ $code }}" readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="mt--30">

            <div class="rbt-dashboard-table table-responsive mobile-table-750 mt--30">
                <table class="rbt-table table table-borderless">
                    <thead>
                        <tr>
                            <th>S.NO</th>
                            <th>Date</th>
                            <th>Referred User</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i=1;
                        @endphp
                        @foreach ($reffere_list as $item)
                        <tr>
                            <th>
                                <span class="h6">
                                    {{ $i++ }}
                                </span>
                            </th>
                            <th>
                                <span class="h6 mb--5">{{ $item->created_at->format('F d, Y') }}</span>
                                <p class="b3">{{ $item->created_at->format('h.ia') }}</p>
                            </th>
                            <td>
                                <span class="h6 mb--5">{{ $item->name.' '.$item->last_name }}</span>
                                <p class="b3">{{ $item->email }}</p>
                            </td>
                            <td>
                                <div class="rbt-button-group justify-content-end">
                                    {{-- <a class="rbt-btn-link left-icon" href="#"><i class="feather-monitor"></i> View</a> --}}
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
                            <h5 class="modal-title mb--20" id="exampleModalLabel">Send New Referral</h5>
                            <form action="" method="post">
                            <div class="course-field mb--20">
                                <label for="modal-field-1">Email</label>
                                <input id="modal-field-1" type="text" placeholder="Enter User Email to send Referral" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-circle-shape"></div>
            <div class="modal-footer pt--30">
                <button type="submit" class="rbt-btn btn-sm rbt-switch-btn rbt-switch-y">Send Referral</button>
                <button type="button" class="rbt-btn btn-border btn-md radius-round-10" data-bs-dismiss="modal">Cancel</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!-- End Modal Area  -->

{{-- Copy Field Data Script --}}
<script>
    document.getElementById("copy-text").onclick = function() {
        this.select();
        document.execCommand('copy');
        swal({
        title: "Referral Code",
        text: "Copied!",
        icon: "success",
        button: "OK",
    });
    }
</script>
@endsection

