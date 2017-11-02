<!DOCTYPE html>
<html>
<head lang="en">
<? 
require "includes/siteBlocks.php"; 
echo documentHead('ag-Grid Ordering and Payment', 'ag-Grid Javascript Grid Order and Payments', 'Ordering and payments page for ag-Grid.');
?>
</head>

<body ng-app="index" class="big-text">

<?php $navKey = ""; include 'includes/navbar.php'; ?>

<?php $headerTitle = "Order ag-Grid Enterprise"; include 'includes/headerRow.php'; ?>

<div class="container info-page">

    <div class="row">
        <div class="col-md-12">

            <h2>
                How to Order
            </h2>

            <p>
                To order ag-Grid-Enterprise, please email <a href="mailto:accounts@ag-grid.com?Subject=Query" target="_top">accounts@ag-grid.com</a>
                with the following information:
                <ul>
                    <li>Company name</li>
                    <li>Company address</li>
                    <li>Company VAT number (EU only)</li>
                    <li>Number of licenses required (ie number of developers)</li>
                    <li>License type: A) Application Developer or B) Site Developer</li>
                        <li style="list-style-type: none;">
                            <ul>If Application Developer, provide your Application Name</ul>
                        </li>
                    </li>
                    <li>Will you be selling ag-Grid as part of a SAAS (Software as a Service) offering?</li>
                    <li>Will you be selling ag-Grid as part of an application (OEM)?</li>
                </ul>
                We will then get back to you with an invoice.
            </p>

            <h2>
                How to Pay
            </h2>

            <p>
                Once you receive an invoice, you will be registered with us to allow you to
                make payments. Payments can be done via our online payments system or via direct debit.
            </p>

            <p>
                <a href="payments/payments.php" class="btn btn-primary btn-large">
                    Go to Online Payments
                </a>
            </p>

        </div>
    </div>

    <?php include("includes/commonQuestions.php"); ?>

</div>

<?php include("includes/footer.php"); ?>

</body>

<?php include_once("includes/analytics.php"); ?>

</html>