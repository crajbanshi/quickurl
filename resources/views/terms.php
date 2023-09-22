<!DOCTYPE html>
<?php include_once "page-layout.php";?>
<html>
<head>
    <title>QuickLink</title>
    <?php headSection()?>
    </head>
<body>
<?php navSection()?>
    <div class="container">

        <div class="row">
            <div class="col">
                <h4>Tearms and Condition</h4>
                <pre>
                    The rules of usage of QuickLink's additional services
                    1. General Provisions
                    1.1 These conditions applied to all services and tools placed on the page QuickLink tools
                    and related pages.
                    1.2 By using additional services and tools, you approve your acceptance of these conditions.
                    1.3 Do not use these tools improperly. Do not try to interfere in their work or use it in a
                    non-standard way, or break them. Use the services only for legitimate purposes.
                    1.4 The user is not granted intellectual property rights during the work with services. The
                    terms of use do not entitle the user to use the QuickLink brand for their purposes.
                    1.5 The information can be downloaded, published or submitted by third parties to the
                    service. Only third parties are responsible for this information. The administration of the
                    service is not responsible for the context of information and the actions of third parties.
                    2. Responsibilities
                    2.1 The site administration doesn't take responsibility and gives no guarantees of the
                    efficiency of particular services and tools.
                    2.2 The administration doesn't take responsibility for material losses of the user himself and
                    third parties that are related to the usage of additional services.
                    2.3 The user takes full responsibility for the actions and the result obtained in the process of
                    using additional services.
                    2.4 The site administration is not responsible for the consequences arising as a result of
                    service usage such as lost profits, data loss, financial losses, etc.
                    3. Forbidden features
                    3.1 To use QuickLink's additional services for spam sending, spreading of the forbidden
                    information, and other illegal activities.
                    3.2 To use additional services in the automatic regime particularly using scripts and software
                    without beforehand agreement.
                    3.3 To use QuickLink services if it could lead to any illegal actions or harm no companies,
                    sites or any other users of the Internet, etc.
                    4. Rights
                    4.1 The site administration has the right to save and use all the data that got during the using
                    of additional services.
                    4.2 The administration has the right to use information that got while using the additional
                    services, including in public space.
                    4.3 The administration has the right to suspend, block or delete any results of using service.
                    4.4 The administration has the right to make changes in these rules without any notifications.
                    New rules come into force since the moment it was published on the site.
                    4.5 The administration has the right to set up new services and suspend old ones without
                    notifications and the users' agreement.
                    4.6 The user has the right to stop using the Services at any moment. Also, the administration
                    of the site has the right to block the service at any moment if it considered as harmful for the
                    company, site, or third parties, etc.
                    4.7 The administration has the right to send letters if you are a user of the additional
                    Services. The user can refuse from such mailing.
                </pre>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button class="btn btn-success btn-submit">Accept</button>
            </div>
        </div>

    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $(".btn-submit").click(function (e) {
                e.preventDefault();
                window.location.href = "<?php echo url('/') ?>";
            });
        });
    </script>
   <?php footerSection();?>
</body>
</html>