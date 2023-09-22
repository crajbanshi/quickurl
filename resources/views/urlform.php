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
        <div class="alert alert-danger print-error-msg" style="display:none">
            <ul></ul>
        </div>
    </div>
    <div class="container-fluid bg-info" style="height:250px; background-color: darkcyan ;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12" >
                    <h1>QuickLink — link shortener tool</h1>
                    <p class="sub-title">URL shortener tool provided by <a class="sht-link" href="http://pworks.c1.is"
                            style="color: gold ;">PWorks</a> </p>
                    <form>
                        <div class="form-group">
                            <label>URL</label>
                            <input type="url" name="url1" class="form-control" placeholder="https://example.com">
                        </div>
                        <div class="form-group pull-right">
                            <button class="btn btn-success btn-submit">Submit</button>
                        </div>
                    </form>
                    <div class="terms">
                        By clicking Submit, you accept <a class="terms_link"
                            href="<?php echo url('staticpages/terms') ?>" style="color: mintcream ;">Terms of Using</a>
                    </div>
                </div>
            </div>
            <div class="alert alert-success print-success-msg" role="alert" style="display:none">
                <p><label id="originalurllbl" style="overflow-wrap: anywhere;"></label></p>
                <span>Generated micro url is</span>

                <p><input type="text" name="microurl" readonly />&nbsp;&nbsp;&nbsp;<button onclick="copyToClipboard()">Copy
                        URL</button>
                </p>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $(".btn-submit").click(function (e) {
                e.preventDefault();
                $(".print-error-msg").find("ul").find("li").remove().css('display', 'none')
                $(".print-error-msg").css('display', 'none');
                var url1 = $("input[name='url1']").val();
                $.ajax({
                    url: "<?php echo url('staticpages/save') ?>",
                    type: 'POST',
                    data: { url: url1 },
                    success: function (data) {
                        if (data.success) {
                            $(".print-success-msg").css('display', 'block');
                            $("input[name='url1']").val("");
                            $('#originalurllbl').html(url1);
                            $("input[name='microurl']").val(data.url);
                            // $("#microurllbl").html(data.url);
                        } else {
                            printErrorMsg(data);
                        }
                    },
                    error: function (error) {
                        console.log(error.responseJSON);
                        printErrorMsg(error.responseJSON);
                    }
                });
            });
            function printErrorMsg(msg) {
                $(".print-error-msg").find("ul").html('');
                $(".print-error-msg").css('display', 'block');
                $.each(msg, function (key, value) {
                    console.log(value)
                    $(".print-error-msg").find("ul").append('<li>' + value[0] + '</li>');
                });
            }
        });

        function copyToClipboard() {
            var textToCopy = $("input[name='microurl']").val();
            // 1) Add the text to the DOM (usually achieved with a hidden input field)
            var input = document.createElement('input');
            // document.body.appendChild(input);
            input.value = textToCopy;

            // 2) Select the text
            input.focus();
            input.select();

            // 3) Copy text to clipboard
            const isSuccessful = document.execCommand('copy');
            try {
                navigator.clipboard.writeText(textToCopy).then(() => {

                },
                    () => {
                        alert(textToCopy + "is not copied")
                    });
            } catch (error) {
                console.error(error)
            }

            // 4) Catch errors
            if (!isSuccessful) {
                console.error('Failed to copy text.');
            }
        }
    </script>

<?php footerSection();?>
</body>
</html>