<?php $this->load->view('common/header'); ?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <!-- Navigation-->
    <?php $this->load->view('common/navigation'); ?>
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active"><?php echo $this->lang->line('Subject'); ?></li>
            </ol>
            <!-- Example DataTables Card-->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i><?php echo $this->lang->line('Newsubject'); ?></div>
                <div class="card-body">
                    <div class="table-responsive">

                        <style>

                            .table-hover>tbody>tr>td:hover, .table-hover>tbody>tr>td:hover{
                                background-color: yellow!important;
                                cursor:pointer;
                            }

                            .table-hover>tbody>tr:hover>td, .table-hover>tbody>tr:hover>th{
                                background-color: inherit;
                            }

                            .table-hover>tr{
                                padding:10px;
                            }

                        </style>

                        <form>
                            <div class="form-group">

                                <div class="col-12">




                                    <div class="row">
                                        <div class="col-3">

                                            <input type="text" class="form-control" id="txtTeacherName" placeholder="teacherName" maxlength="20">
                                        </div>



                                    </div>

                                    <br>


                                    <div class="row">
                                        <div class="col-sm-2" style=" padding-right:0;"> <select id="txtDays" class="form-control">
                                                <option>Sunday</option>
                                                <option>Monday</option>
                                                <option>Tuesday</option>
                                                <option>Wednesday</option>
                                                <option>Thursday</option>
                                                <option>Friday</option>
                                                <option>Saturday</option>

                                            </select></div>
                                        <div class="col-sm-1" style=" padding-right:0;padding-left:0;"><input type="text" class="form-control" id="txtDate" placeholder="Time" maxlength="20">
                                        </div>

                                    </div> 


                                    <br>
                                    <div class="row">


                                        <div class="col-3">

                                            <input type="text" class="form-control" id="txtName" placeholder="<?php echo $this->lang->line('Subjectname'); ?>" maxlength="20">
                                        </div>

                                    </div>

                                    <br>
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">$</span>
                                                </div>
                                                <input type="text" id="txtFees" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="Fees for Subject">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="row">


                                        <div class="col-3">

                                            <input type="text" class="form-control" id="txtType" placeholder="Type" maxlength="20">
                                        </div>

                                    </div>
                                    <br>
                                    <div class="row">

                                        <div class="col-3 ">

                                            <button  class="btn btn-success" id="btn" type="button"><span class="fa fa-save"></span><?php echo $this->lang->line('Add'); ?></button>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </form>

                        <table class="table-hover" id="cupboard" style="padding:10px">

                            <tbody>
                                <tr>

                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>




            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-caret-square-o-left"></i><?php echo $this->lang->line('Update'); ?></div>
                <div class="card-body">
                    <div class="table-responsive">

                        <style>

                            .table-hover>tbody>tr>td:hover, .table-hover>tbody>tr>td:hover{
                                background-color: yellow!important;
                                cursor:pointer;
                            }

                            .table-hover>tbody>tr:hover>td, .table-hover>tbody>tr:hover>th{
                                background-color: inherit;
                            }

                            .table-hover>tr{
                                padding:10px;
                            }

                        </style>

                        <form>
                            <div class="form-group">

                                <div class="col-12">





                                    <div class="row">
                                        <div class="col-12">
                                            <div id="tbl">

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>



                        </form>


                    </div>
                </div>

            </div>
        </div>
        <!-- /.container-fluid-->
        <!-- /.content-wrapper-->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!-- Logout Modal-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <style type="text/css">


            header{
                font-weight: bold;
                font-size: 30px;
            }

            header span{
                vertical-align: middle;
                font-size: .5em;
                color: #999;
            }

            header span a{
                font-size: .9em;
            }

            section:first-of-type header{
                font-size: 50px;
            }

            section{
                margin-bottom:30px;
            }

            ul>li{
                margin-bottom:2px;
            }

            button, select{
                margin-right:20px;
            }

            input{
                font-family: 'Montserrat', sans-serif !important;

            }

            .tabulator{
                height:90%;
            }

            #example-table-demo{
                margin-bottom:20px;
            }
        </style>
        <?php $this->load->view('common/footer'); ?>

        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">


        <script type="text/javascript">


            $(document).ready(function () {
                $("#tbl").load("<?= base_url('index.php/Subject/load') ?>");

                txtID = "";
                horsey(document.querySelector('#txtTeacherName'), {
                    source:<?php
        echo $teacher;
        ?>,
                    getText: 'text',
                    getValue: 'value',
                    predictNextSearch(info) {
                        //get the suggestion selected by the user
                        //console.log(info.selection.value);

                        // txtModel = info.selection.value;
                        txtID = info.selection.value;

                    }
                });



                $('input[id$="txtDate"]').inputmask(
                        "hh:mm:ss", {
                            placeholder: "HH:MM:SS",
                            insertMode: false,
                            showMaskOnHover: false,
                            hourFormat: 24
                        }
                );

            });


            $(document).ready(function () {




                $("#btn").click(function () {

                    if ($("#txtName").val().length <= 0) {
                        bootbox.alert("Please fill the  fields");
                    } else {


                        $.ajax({
                            url: "<?= base_url('index.php/Subject/add') ?>",
                            type: "post",
                            data: {teacherId: txtID, Days: $("#txtDays").val(),  Time: $("#txtDate").val(), Subject: $("#txtName").val(), Fees: $("#txtFees").val(), Type: $("#txtType").val()},
                            success: function (response) {
                                // you will get response from your php page (what you echo or print)                 
                                $("#tbl").load("<?= base_url('index.php/Subject/load') ?>");
                            },
                            error: function (jqXHR, textStatus, errorThrown) {
                                console.log(textStatus, errorThrown);
                            }


                        });

                    }
                });







            });

        </script>
    </div>
</body>

</html>
