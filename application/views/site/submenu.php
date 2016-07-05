<style>
    .navbar-nav > .dis > a:hover{
        background: none;
    }
</style>

<center>
    <div class="bs-component">
        <nav class="navbar-fixed-top" style="background-color: #282838;">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                    <ul class="nav navbar-nav" style="margin-left: 8.3%; margin-top: 0.5%; float: left;">
                        <li class="active dis"><a href="<?= base_url() ?>" style="letter-spacing: 2px; color: #F79331; font-weight: bolder; font-size: 30px; font-family: 'Merriweather', serif;">WYS/WYG <span class="sr-only">(current)</span></a></li>
                        <li><a href="" style="letter-spacing: 2px; color: #F79331; font-family: 'Martel', serif;">Programming</a></li>
                        <li><a href="#" style="letter-spacing: 2px; color: #F79331; font-family: 'Martel', serif;">Help</a></li>
                        <li><a href="#" style="letter-spacing: 2px; color: #F79331; font-family: 'Martel', serif;">Questions</a></li>
                        <li><a href="#" style="letter-spacing: 2px; color: #F79331; font-family: 'Martel', serif;" data-toggle="modal" data-target="#myModal">Sign up</a></li>
                    </ul>
                    <div style="float: right; margin-right: 8.3%; margin-top: 8px;">
                        
                        <?php if($this->session->userdata('email') == ""){ ?>
                        
                            <form class="form-inline" method="POST" action="<?= base_url() ?>">
                                <div class="form-group">
                                    <label class="sr-only" for="exampleInputEmail3">Email address</label>
                                    <input type="email" required name="login_email" class="form-control small" id="exampleInputEmail3" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="exampleInputPassword3">Password</label>
                                    <input type="password" required name="login_password" class="form-control" id="exampleInputPassword3" placeholder="Password">
                                </div>
                                <input type="submit" name="login" class="btn btn-warning" value="Go">
                            </form>
                        
                        <?php }else{
                                    echo '<span style="color: #282838; font-size: 12px; background-color: #F79331; border: 1px solid #F79331; padding: 14px; border-radius: 5px;">You are Logged on as: ';
                                    
                                    foreach($name AS $_name){
                                        echo '<b style="letter-spacing: 1px; color: #282838;">'.ucfirst($_name->name).'</b>';
                                    }
                                    echo '&nbsp; | &nbsp;';
                                    echo '<a href="'.  base_url().'home/logout" style="color: #282838; text-decoration: underline;">Logout</a>';
                                    echo '</span>';
                              }
                        
                        ?>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="width: 410px;">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-right: 10px; margin-top: 10px;"><span aria-hidden="true">&times;</span></button>
                <ul class="nav nav-tabs" style="margin-top: 20px;">
                    <li class="active"><a href="#pane1" data-toggle="tab">Sign up</a></li>
                    <li><a href="#pane2" data-toggle="tab">Facebook</a></li>
                    <li><a href="#pane3" data-toggle="tab">Gmail</a></li>
                </ul>
                <div class="modal-body">
                    <div class="tabbable">
                        <div class="tab-content" >
                            <div id="pane1" class="tab-pane active">
                                <h5 style="color: #282838; float: left; margin-bottom: 10px;">Please make sure to fill up all details: </h5>
                                <form method="POST" action="<?= base_url() ?>home/sign_up" class="form-horizontal">
                                    <div class="form-group">
                                        <div class="col-sm-10">
                                            <input type="email" id="email" name="email" class="form-control" value="<?= $this->input->post('email'); ?>" placeholder="Email" required style="width: 370px;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-10">
                                            <input type="password" name="password" pattern=".{8,20}" class="form-control" id="inputPassword3" placeholder="Password" style="width: 370px;">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="inputPassword4" placeholder="Confirm Password" style="width: 370px;">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-10">
                                            <input type="text" name="name" class="form-control" value="<?= $this->input->post('name'); ?>" placeholder="Public Name" required style="width: 370px;">
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <input type="submit" name="submit" class="btn btn-primary" value="Proceed Registration">
                    </form>
                </div>
            </div>
        </div>
    </div>

<script type="text/javascript">
    $(document).ready(function () {
        $("#email").click(function () {
            if ($("#email").val().length >= 4)
            {
                $.ajax({
                    type: "POST",
                    url: "<?= base_url(); ?>home/check_email_exist",
                    data: "email=" + $("#email").val(),
                    success: function (msg) {
                        if (msg === "true")
                        {
                            $('#email').css('border', '1px #ccc solid');
                            $('#email').css('box-shadow', 'none');
                            $('#email').css('background-color', '#fff');
                        }
                        else
                        {
                            $('#email').css('border', '1px #a94442 solid');
                            $('#email').css('box-shadow', '0 0 8px #a94442');
                            $('#email').css('background-color', '#fff');
                        }
                    }
                });
            }
            else
            {
                $('#email').css('border', '1px #ccc solid');
                $('#email').css('box-shadow', 'none');
                $('#email').css('background-color', '#fff');
            }
        });

        $("#inputPassword3").keyup(function () {
            var pass1 = $("#inputPassword3").val();
            var pass2 = $("#inputPassword4").val();

            if (pass1.length() >= 8) {
                if (pass1 === pass2) {
                    $('#inputPassword4').css('border', '1px #ccc solid');
                    $('#inputPassword4').css('box-shadow', 'none');
                    $('#inputPassword3').css('border', '1px #ccc solid');
                    $('#inputPassword3').css('box-shadow', 'none');
                    $('#inputPassword3').css('color', '#000');
                    $('#inputPassword4').css('color', '#000');
                } else {
                    $('#inputPassword4').css('border', '1px #a94442 solid');
                    $('#inputPassword4').css('box-shadow', '0 0 8px #a94442');
                    $('#inputPassword3').css('border', '1px #a94442 solid');
                    $('#inputPassword3').css('box-shadow', '0 0 8px #a94442');
                    $('#inputPassword3').css('color', '#a94442');
                    $('#inputPassword4').css('color', '#a94442');
                }
            }
        });

        $("#inputPassword4").keyup(function () {
            var pass1 = $("#inputPassword3").val();
            var pass2 = $("#inputPassword4").val();

            if (pass1 === pass2) {
                $('#inputPassword4').css('border', '1px #ccc solid');
                $('#inputPassword4').css('box-shadow', 'none');
                $('#inputPassword3').css('border', '1px #ccc solid');
                $('#inputPassword3').css('box-shadow', 'none');
            } else {
                $('#inputPassword4').css('border', '1px #a94442 solid');
                $('#inputPassword4').css('box-shadow', '0 0 8px #a94442');
                $('#inputPassword3').css('border', '1px #a94442 solid');
                $('#inputPassword3').css('box-shadow', '0 0 8px #a94442');
            }
        });
    });
</script>