<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="<?php echo base_url() . './assets/node_modules/jquery/jquery-3.2.1.min.js' ?>"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="<?php echo base_url() . './assets/node_modules/popper/popper.min.js' ?>"></script>
<script src="<?php echo base_url() . './assets/node_modules/bootstrap/dist/js/bootstrap.min.js' ?>"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="<?php echo base_url() . './assets/dist/js/perfect-scrollbar.jquery.min.js' ?>"></script>
<!--Wave Effects -->
<script src="<?php echo base_url() . './assets/dist/js/waves.js' ?>"></script>
<!--Menu sidebar -->
<script src="<?php echo base_url() . './assets/dist/js/sidebarmenu.js' ?>"></script>
<!--stickey kit -->
<script src="<?php echo base_url() . './assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js' ?>">
</script>
<script src="<?php echo base_url() . './assets/node_modules/sparkline/jquery.sparkline.min.js' ?>"></script>
<!--Custom JavaScript -->
<script src="<?php echo base_url() . './assets/dist/js/custom.min.js' ?>"></script>
<!-- This is data table -->
<script src="<?php echo base_url() . './assets/node_modules/datatables/jquery.dataTables.min.js' ?>"></script>

<script src="<?php echo base_url() . 'assets/alert/bootstrap/dist/js/bootstrap.min.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/alert/js/pages/notification.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/alert/js/pages/toastr.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/alert/jquery-toast-plugin-master/src/jquery.toast.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/node_modules/select2/dist/js/select2.full.min.js' ?>" type="text/javascript"></script>

<!-- Sweet-Alert  -->
<script src="<?php echo base_url() . './assets/node_modules/sweetalert/sweetalert.min.js' ?>"></script>
<script src=".<?php echo base_url() . './assets/node_modules/sweetalert/jquery.sweet-alert.custom.js' ?>"></script>



<!-- start - This is for export functionality only -->
<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>



<!-- Plugin JavaScript -->
<script src="<?php echo base_url() . './assets/node_modules/moment/moment.js' ?>"></script>
<script src="<?php echo base_url() . './assets/node_modules/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js' ?>"></script>
<!-- Clock Plugin JavaScript -->
<script src="<?php echo base_url() . './assets/node_modules/clockpicker/dist/jquery-clockpicker.min.js' ?>"></script>
<!-- Color Picker Plugin JavaScript -->
<script src="<?php echo base_url() . './assets/node_modules/jquery-asColorPicker-master/libs/jquery-asColor.js' ?>"></script>
<script src="<?php echo base_url() . './assets/node_modules/jquery-asColorPicker-master/libs/jquery-asGradient.js' ?>"></script>
<script src="<?php echo base_url() . './assets/node_modules/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js' ?>"></script>
<!-- Date Picker Plugin JavaScript -->
<script src="<?php echo base_url() . './assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.js' ?>"></script>
<!-- Date range Plugin JavaScript -->
<script src="<?php echo base_url() . './assets/node_modules/timepicker/bootstrap-timepicker.min.js' ?>"></script>
<script src="<?php echo base_url() . './assets/node_modules/bootstrap-daterangepicker/daterangepicker.js' ?>"></script>



<!-- ============================================================== -->
<script src="<?php echo base_url() . 'assets/node_modules/switchery/dist/switchery.min.js' ?>"></script>
<script src=".<?php echo base_url() . 'assets/node_modules/select2/dist/js/select2.full.min.js' ?>" type="text/javascript"></script>
<script src="<?php echo base_url() . 'assets/node_modules/bootstrap-select/bootstrap-select.min.js' ?>" type="text/javascript"></script>
<script src="<?php echo base_url() . 'assets/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/node_modules/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js' ?>" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url() . 'assets/node_modules/multiselect/js/jquery.multi-select.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/node_modules/tinymce/tinymce.min.js' ?>"></script>

<script src="<?php echo base_url() . 'assets/node_modules/timepicker/bootstrap-timepicker.min.js' ?>"></script>

<!-- jQuery file upload -->
<script src="<?php echo base_url() . '/assets/node_modules/dropify/dist/js/dropify.min.js' ?>"></script>



<?php if ($this->session->flashdata('msg') == 'gagal') : ?>
    <script type="text/javascript">
        $.toast({
            heading: 'Verifikasi Gagal',
            text: 'Password Anda Salah, Silahkan dicek Kembali !!!',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'error',
            hideAfter: 3000,
            stack: 6
        });
    </script>

<?php elseif ($this->session->flashdata('msg') == 'succes') : ?>
    <script type="text/javascript">
        $.toast({
            heading: 'Data Sukses Disimpan ',
            text: ' Data Berhasil di Disimpan',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'success',
            hideAfter: 3500,
            stack: 6
        });
    </script>

<?php elseif ($this->session->flashdata('msg') == 'update') : ?>
    <script type="text/javascript">
        $.toast({
            heading: 'Data Sukses Di Update ',
            text: ' Data Berhasil di Diupdate',
            position: 'top-right',
            loaderBg: '#3CB371',
            icon: 'success',
            hideAfter: 3500,
            stack: 6
        });
    </script>
<?php elseif ($this->session->flashdata('msg') == 'delete') : ?>
    <script type="text/javascript">
        $.toast({
            heading: 'Data Sukses Dihapus ',
            text: ' Data Berhasil di Delete',
            position: 'top-right',
            loaderBg: '#DC143C',
            icon: 'success',
            hideAfter: 3500,
            stack: 6
        });
    </script>


<?php endif; ?>
<!-- end - This is for export functionality only -->

<script>
    // MAterial Date picker    
    $('#mdate').bootstrapMaterialDatePicker({
        weekStart: 0,
        time: false
    });
    $('#timepicker').bootstrapMaterialDatePicker({
        format: 'HH:mm',
        time: true,
        date: false
    });
    $('#date-format').bootstrapMaterialDatePicker({
        format: 'dddd DD MMMM YYYY - HH:mm'
    });

    $('#min-date').bootstrapMaterialDatePicker({
        format: 'DD/MM/YYYY HH:mm',
        minDate: new Date()
    });
    // Clock pickers
    $('#single-input').clockpicker({
        placement: 'bottom',
        align: 'left',
        autoclose: true,
        'default': 'now'
    });
    $('.clockpicker').clockpicker({
        donetext: 'Done',
    }).find('input').change(function() {
        console.log(this.value);
    });
    $('#check-minutes').click(function(e) {
        // Have to stop propagation here
        e.stopPropagation();
        input.clockpicker('show').clockpicker('toggleView', 'minutes');
    });
    if (/mobile/i.test(navigator.userAgent)) {
        $('input').prop('readOnly', true);
    }
    // Colorpicker
    $(".colorpicker").asColorPicker();
    $(".complex-colorpicker").asColorPicker({
        mode: 'complex'
    });
    $(".gradient-colorpicker").asColorPicker({
        mode: 'gradient'
    });
    // Date Picker
    jQuery('.mydatepicker, #datepicker').datepicker();
    jQuery('#datepicker-autoclose').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    jQuery('#date-range').datepicker({
        toggleActive: true
    });
    jQuery('#datepicker-inline').datepicker({
        todayHighlight: true
    });
    // Daterange picker
    $('.input-daterange-datepicker').daterangepicker({
        buttonClasses: ['btn', 'btn-sm'],
        applyClass: 'btn-danger',
        cancelClass: 'btn-inverse'
    });
    $('.input-daterange-timepicker').daterangepicker({
        timePicker: true,
        format: 'MM/DD/YYYY h:mm A',
        timePickerIncrement: 30,
        timePicker12Hour: true,
        timePickerSeconds: false,
        buttonClasses: ['btn', 'btn-sm'],
        applyClass: 'btn-danger',
        cancelClass: 'btn-inverse'
    });
    $('.input-limit-datepicker').daterangepicker({
        format: 'MM/DD/YYYY',
        minDate: '06/01/2015',
        maxDate: '06/30/2015',
        buttonClasses: ['btn', 'btn-sm'],
        applyClass: 'btn-danger',
        cancelClass: 'btn-inverse',
        dateLimit: {
            days: 6
        }
    });
</script>


<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before(
                                '<tr class="group"><td colspan="5">' + group +
                                '</td></tr>');
                            last = group;
                        }
                    });
                }
            });

            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
</script>

<script>
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify();

        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'Désolé, le fichier trop volumineux'
            }
        });

        // Used events
        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });

        drEvent.on('dropify.errors', function(event, element) {
            console.log('Has Errors');
        });

        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });
</script>

<script>
    jQuery(document).ready(function() {
        $('#timepicker').bootstrapMaterialDatePicker({
            format: 'HH:mm',
            time: true,
            date: false
        });
        if ($("#mymce").length > 0) {
            tinymce.init({
                selector: "textarea#mymce",
                theme: "modern",
                height: 300,
                plugins: [
                    "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                    "save table contextmenu directionality emoticons template paste textcolor"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",

            });
        }
        // Switchery
        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
        $('.js-switch').each(function() {
            new Switchery($(this)[0], $(this).data());
        });
        // For select 2
        $(".select2").select2();
        $('.selectpicker').selectpicker();
        //Bootstrap-TouchSpin
        $(".vertical-spin").TouchSpin({
            verticalbuttons: true,
            verticalupclass: 'ti-plus',
            verticaldownclass: 'ti-minus'
        });
        var vspinTrue = $(".vertical-spin").TouchSpin({
            verticalbuttons: true
        });
        if (vspinTrue) {
            $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
        }
        $("input[name='tch1']").TouchSpin({
            min: 0,
            max: 100,
            step: 0.1,
            decimals: 2,
            boostat: 5,
            maxboostedstep: 10,
            postfix: '%'
        });
        $("input[name='tch2']").TouchSpin({
            min: -1000000000,
            max: 1000000000,
            stepinterval: 50,
            maxboostedstep: 10000000,
            prefix: '$'
        });
        $("input[name='tch3']").TouchSpin();
        $("input[name='tch3_22']").TouchSpin({
            initval: 40
        });
        $("input[name='tch5']").TouchSpin({
            prefix: "pre",
            postfix: "post"
        });
        // For multiselect
        $('#pre-selected-options').multiSelect();
        $('#optgroup').multiSelect({
            selectableOptgroup: true
        });
        $('#public-methods').multiSelect();
        $('#select-all').click(function() {
            $('#public-methods').multiSelect('select_all');
            return false;
        });
        $('#deselect-all').click(function() {
            $('#public-methods').multiSelect('deselect_all');
            return false;
        });
        $('#refresh').on('click', function() {
            $('#public-methods').multiSelect('refresh');
            return false;
        });
        $('#add-option').on('click', function() {
            $('#public-methods').multiSelect('addOption', {
                value: 42,
                text: 'test 42',
                index: 0
            });
            return false;
        });

        $(".ajax").select2({
            ajax: {
                url: "https://api.github.com/search/repositories",
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        q: params.term, // search term
                        page: params.page
                    };
                },
                processResults: function(data, params) {
                    // parse the results into the format expected by Select2
                    // since we are using custom formatting functions we do not need to
                    // alter the remote JSON data, except to indicate that infinite
                    // scrolling can be used
                    params.page = params.page || 1;
                    return {
                        results: data.items,
                        pagination: {
                            more: (params.page * 30) < data.total_count
                        }
                    };
                },
                cache: true
            },
            escapeMarkup: function(markup) {
                return markup;
            }, // let our custom formatter work
            minimumInputLength: 1,
            templateResult: formatRepo, // omitted for brevity, see the source of this page
            templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
        });
    });
</script>