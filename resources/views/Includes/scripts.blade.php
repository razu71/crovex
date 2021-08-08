<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/metismenu.min.js') }}"></script>
<script src="{{ asset('assets/js/waves.js') }}"></script>
<script src="{{ asset('assets/js/feather.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}"></script>
<!-- App js -->
<script src="{{ asset('assets/js/app.js') }}"></script>

<script src="{{ asset('../../plugins/moment/moment.js') }}"></script>
<script src="{{ asset('plugins/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
<script src="{{ asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ asset('plugins/flot-chart/jquery.canvaswrapper.js') }}"></script>
<script src="{{ asset('plugins/flot-chart/jquery.colorhelpers.js') }}"></script>
<script src="{{ asset('plugins/flot-chart/jquery.flot.js') }}"></script>
<script src="{{ asset('plugins/flot-chart/jquery.flot.saturated.js') }}"></script>
<script src="{{ asset('plugins/flot-chart/jquery.flot.browser.js') }}"></script>
<script src="{{ asset('plugins/flot-chart/jquery.flot.drawSeries.js') }}"></script>
<script src="{{ asset('plugins/flot-chart/jquery.flot.uiConstants.js') }}"></script>
<script src="{{ asset('plugins/flot-chart/jquery.flot-dataType.js') }}"></script>
<script src="{{ asset('assets/pages/jquery.crm_dashboard.init.js') }}"></script>
<!-- select2 JS-->
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
<!-- ckeditor JS-->
<script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
<!-- sptoast JS-->
<script src="{{ asset('assets/js/sptoast.js') }}"></script>
<!-- confirm JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

<script>
    $(document).ready(function() {

        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if (Session::has('alert-' . $msg))
                var msg = '@php echo Session("alert-".$msg); @endphp';
                @if ($msg == 'success')
                    setTimeout(() => {
                    alertSuccess(msg);
                    }, 500);
                @endif
                @if ($msg == 'danger')
                    setTimeout(() => {
                    alertDanger(msg);
                    }, 500);
                @endif
                @if ($msg == 'info')
                    setTimeout(() => {
                    alertInfo(msg);
                    }, 500);
                @endif
                @if ($msg == 'warning')
                    setTimeout(() => {
                    alertWarning(msg);
                    }, 500);
                @endif
            @endif
        @endforeach

        if (sessionStorage.getItem("SessionSuccess")) {
            alertSuccess(sessionStorage.getItem("SessionSuccess"));
            sessionStorage.removeItem('SessionSuccess');
        }
        if (sessionStorage.getItem("SessionDanger")) {
            alertDanger(sessionStorage.getItem("SessionDanger"));
            sessionStorage.removeItem('SessionDanger');
        }

        $('[data-toggle="tooltip"]').tooltip()
    });

    function alertDanger(msg) {
        $.toast({
            heading: 'Oops',
            text: msg,
            icon: 'error',
            loader: true,
            loaderBg: '#fff',
            showHideTransition: 'slide',
            hideAfter: 6000,
            position: 'bottom-right',
        })
    }

    function alertSuccess(msg) {
        $.toast({
            heading: 'Success',
            text: msg,
            icon: 'success',
            loader: true,
            loaderBg: '#fff',
            showHideTransition: 'slide',
            hideAfter: 6000,
            allowToastClose: false,
            position: 'bottom-center',
        })
    }

    function alertWarning(msg) {
        $.toast({
            heading: 'Warning',
            text: msg,
            icon: 'warning',
            loader: true,
            loaderBg: '#fff',
            showHideTransition: 'slide',
            hideAfter: 6000,
            allowToastClose: false,
            position: 'bottom-right',
        })
    }

    function alertInfo(msg) {
        $.toast({
            heading: 'Attention',
            text: msg,
            icon: 'info',
            loader: true,
            loaderBg: '#fff',
            showHideTransition: 'slide',
            hideAfter: 6000,
            allowToastClose: false,
            position: 'bottom-right',
        })
    }

    function delconf(url, title = "Do You Want To Remove This!", btnText = "Yes, Delete It ", msg =
        "Deleted Successfully", location = null, json = null) {
        $.confirm({
            title: 'Are You Sure,',
            content: title,
            autoClose: 'cancel|8000',
            type: 'red',
            confirmButton: "Yes",
            cancelButton: "Cancel",
            theme: 'material',
            backgroundDismiss: false,
            backgroundDismissAnimation: 'glow',
            buttons: {
                tryAgain: {
                    text: btnText,
                    action: function() {
                        $.ajax({
                            url: url,
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            type: 'GET',
                            dataType: json != null ?? 'JSON',
                            success: function(data) {
                                if (data != null && data.success === false){
                                    sessionStorage.setItem("SessionDanger",
                                        data.message
                                    );
                                }else{
                                    msg = msg !== '' ? msg : data.message;
                                    sessionStorage.setItem("SessionSuccess",
                                        msg
                                    );
                                }

                                if (location == null) {
                                    document.location.reload(true);
                                } else {
                                    window.location.href = location;
                                }
                            }
                        });
                    }
                },
                cancel: function() {}
            }
        });
    }

    function approve(url, title = "Do You Want To Approve It", btnText = "Yes, Publish IT ", msg =
        "Approve Successfully", location = null) {
        $.confirm({
            title: 'Are you sure,',
            content: title,
            autoClose: 'cancel|8000',
            type: 'green',
            theme: 'material',
            backgroundDismiss: false,
            backgroundDismissAnimation: 'glow',
            buttons: {
                tryAgain: {
                    text: btnText,
                    action: function() {
                        $.ajax({
                            url: url,
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            type: 'GET',
                            async: false,
                            success: function(response) {
                                if (response.reject) {
                                    sessionStorage.setItem("SessionDanger",
                                        response.reject
                                    );
                                    document.location.reload(true);
                                } else {
                                    sessionStorage.setItem("SessionSuccess",
                                        msg
                                    );
                                    if (location == null) {
                                        document.location.reload(true);
                                    } else {
                                        window.location.href = location;
                                    }
                                }
                            }
                        });
                    }
                },
                cancel: function() {}
            }
        });
    }

    function decline(url, title = "Do You Want To Decline It") {
        $.confirm({
            title: 'Are you sure,',
            content: title,
            autoClose: 'cancel|8000',
            type: 'red',
            theme: 'material',
            backgroundDismiss: false,
            backgroundDismissAnimation: 'glow',
            buttons: {
                'Yes, Unpublish IT': function() {
                    window.location.href = url;
                },
                cancel: function() {

                },

            }
        });
    }
</script>

@stack('scripts')
