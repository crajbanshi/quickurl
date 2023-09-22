<?php
function headSection()
{
    ?>

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<?php
}
function navSection()
{?>
    <nav class="navbar navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="/">
                <!-- <img src="image/logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top"> -->
                QuickLink
            </a>
        </div>
    </nav>
<?php }
function footerSection()
{
    ?>
<footer class="footer text-center" style="margin-top: 2rem;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 write-block">
                    <div class="title">Write us</div>
                    <ul class="list-unstyled">
                        <li>
                            <span>Tech. support:</span>
                            <a href="mailto:pworksci@pworks.c1.is">pworksci@pworks.c1.is</a>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="row">

                <div class="col-sm-12">
                    <div class="copy">Copyright © <a target="__blank" class="sht-link" href="http://pworks.c1.is"
                           >PWorks</a>. All rights reserved 2023</div>
                </div>
            </div>
        </div>

    </footer>

    <?php
}
?>