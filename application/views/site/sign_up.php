<div style="margin-top: 5%; width: 80%; background-color: #eee; padding: 10px 10px 10px 10px;">


    <form method="POST" action="<?= base_url() ?>home/sign_up" class="form-horizontal" style="border: 1px solid #fff; padding: 15px 15px 15px 15px;">
        <span style="margin-bottom: 10px; font-size: 15px;">
            Please make sure to fill up all details. 
            <br>After the registration process a confirmation message 
            <br>will be sent to your email address</span><br><br>
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
        <div class="form-group" style="">
            <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" name="submit" id="submit" class="btn btn-warning btn-lg btn-block" style="width:170px;" value="Sign Up">
            </div>
        </div>
    </form>
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