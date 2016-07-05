<style>
    .table-toggle td{
        padding: 5px 5px 5px 5px;
    }
</style>

<div style="background-color: #282838; width: 100%; padding: 5% 10% 3% 10%; min-height: 100px;">
    <div class="alert alert-link alert-dismissable" style="width: 65%; border: 1px solid #fff; color: #fff;">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <i class="fa fa-info-circle"></i> WYSIWYG is a website intended to help beginners who are interested to learn how to code using 
        programming languages like PHP, SQL, C# and frameworks such as Codeigniter. All guests and members can ask questions
        and contribute answers to topics, however the website is still limited with the languages stated above.<br>
    </div>
    <center>
        <table style="width: 35%;">
            <tr>
                <td style="padding: 6px;"><a href="#" class="btn btn-danger btn-lg btn-block" >Ask a New Question</a></td>
                <td style="padding: 6px;"><a href="#" id="one" class="btn btn-success btn-lg btn-block">Recent Questions</a> </td>
            </tr>
        </table>
    </center>

    <div class="two" style="display: none; width: 100%; padding: 5px 15px 15px 15px; margin-top: 1%;">
        <table class="table-toggle">
            <tr>
                <td>1. </td>
                <td><a href="">How to make footer stick on bottom of browser with flexible height? </a>
                    <span style="margin-left: 15px;"> Asked By: Anonymous</span>
                </td>
            </tr>
            <tr>
                <td>2. </td>
                <td><a href="">How to create login authentication using PHP and MySQL? </a>
                    <span style="margin-left: 15px;"> Asked By: <a href="">Zack Dee</a></span>
                </td>
            </tr>
            <tr>
                <td>3. </td>
                <td><a href="">How to make a box with rounder corners? </a>
                    <span style="margin-left: 15px;"> Asked By: <a href="">Itachi</a></span>
                </td>
            </tr>
        </table>
    </div>
</div>

<div style="text-align: center; padding: 20px 20px 20px 20px; background-color: #F79331; width: 100%; min-height: 585px;">

    <div class="row" style="width:100%; margin-top: 1%;">
        <div style="margin-left: 8.3%; margin-right: 8.3%;">
            <div class="col-lg-4" style="width: 25%;">
                <img class="img-circle" src="<?= base_url() ?>assets/images//1432043272_window-php-coding-128.png" alt="Generic placeholder image" width="110" height="110">
                <h2><a href="" style="color: #fff;">PHP</a></h2>
                <p style="color: #282838;">The PHP script is embedded within a Web page along with its HTML. 
                    Before the page is sent to a user that has requested it, 
                    the Web server calls PHP to interpret and perform the operations called for in the PHP script.
                </p>
            </div>
            <div class="col-lg-4" style="width: 25%;">
                <img class="img-circle" src="<?= base_url() ?>assets/images//1432043294_database-gear-128.png" alt="Generic placeholder image" width="110" height="110">
                <h2><a href="" style="color: #fff;">MySQL</a></h2>
                <p style="color: #282838;">MySQL is a popular choice of database for use in web applications, 
                    and is a central component of the widely used LAMP open source 
                    web application software stack (and other 'AMP' stacks).</p>
            </div>

            <div class="col-lg-4" style="width: 25%;">
                <img class="img-circle" src="<?= base_url() ?>assets/images//1432043342_fire-wall-128.png" alt="Generic placeholder image" width="110" height="110">
                <h2><a href="" style="color: #fff;">Codeigniter</a></h2>
                <p style="color: #282838;">CodeIgniter is an open source rapid development web application framework, for use in building dynamic web sites with PHP.</p>
            </div>

            <div class="col-lg-4" style="width: 25%;">
                <img class="img-circle" src="<?= base_url() ?>assets/images//1432129893_editor-node-tool-window-128.png" alt="Generic placeholder image" width="110" height="110">
                <h2><a href="" style="color: #fff;">C#</a></h2>
                <p style="color: #282838;">C# is an object-oriented programming language from 
                    Microsoft that aims to combine the computing power of C++ with the programming ease of Visual Basic.</p>
            </div>
        </div><center>
        <div style="margin-top: 350px;">
            <div style="color: #282838; font-style: italic; font-weight: bolder; font-size: 16px; margin-bottom: 20px;">Before creating a new question, you can actually search for existing topics that is related to your question. </div>
            <div class="input-group" style="width:50%;">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                    <button class="btn btn-info" type="button">Search Topics</button>
                </span>
            </div></div></center>

    </div>
</div>

<center>
    <div style="width: 100%; padding: 5px; text-align: center; background-color: #282838;">
        <p>&copy; 2015 wysiwyg.com &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </div>
</center>

<script src="../../dist/js/bootstrap.min.js"></script>
<script src="../../assets/js/vendor/holder.js"></script>
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>


<script type="text/javascript">
    $('#one').click(function () {
        $('.two').slideToggle();
    });
</script>

<script type="text/javascript">
    tinymce.init({
        selector: "textarea"
    });
</script>

<script type="text/javascript">
    $('#myTab a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });
</script>
</body>
</html>