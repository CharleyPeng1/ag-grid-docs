<!DOCTYPE html>
<html>
<head lang="en">
<? 
require "includes/siteBlocks.php"; 
echo documentHead('ag-Grid Support', 
    'ag-Grid Javascript Grid Support', 
    'ag-Grid comes either as free or as Enterprise with support. This page explains the different support models for the free and Enterprise versions of ag-Grid.');
?>
</head>

<body ng-app="index" class="big-text">

<?php $navKey = "support"; include 'includes/navbar.php'; ?>

<?php $headerTitle = "Support"; include 'includes/headerRow.php'; ?>


<div class="container info-page">

    <div class="row">

        <div class="col-md-12">

            <div class="pull-right">
                <a class="btn btn-primary btn-large bigLink" href="https://www.ag-grid.com/forum/"><span class="glyphicon glyphicon-comment"></span> Go to Forum</a>
            </div>

            <h2>Free Support</h2>

            <p>
                The free version of ag-Grid is given under MIT license and comes with no warranty or support.
                All feature request and bugs raised by the community will be taken as advice.
            </p>

            <p>
                If you are only interested in the free features of ag-Grid but require support, you can
                purchase a Enterprise license to access support. If you don't require support, you can
                'give back' to the ag-Grid project by purchasing a token license. The donation will help ag-Grid
                grow into the future.
            </p>

            <h2>Enterprise Support</h2>

            <p>
                ag-Grid Enterprise users have access to guaranteed support through the members only forum.
                The members forum is monitored by the ag-Grid team and the team will endeavour to progress all
                threads within one working day. A time slot is committed each day to making sure all items
                on the forum are progressing.
            </p>

            <p>
                Feature requests and bugs raised by Enterprise users will be given priority and serious
                consideration. Discussions had with Enterprise users will also help dictate the ag-Grid
                road-map.
            </p>

            <h2>Support Channels</h2>

            <table class="table">
                <tr>
                    <th>
                        Query
                    </th>
                    <th>
                        ag-Grid (free)
                    </th>
                    <th>
                        ag-Grid-Enterprise
                    </th>
                </tr>
                <tr>
                    <td>
                        I got this error, why?
                    </td>
                    <td>
                        <a href="http://stackoverflow.com/questions/tagged/ag-grid">Stack Overflow</a>
                    </td>
                    <td>
                        <a href="https://www.ag-grid.com/forum/">Members Forum</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        Please look at my code?
                    </td>
                    <td>
                        <a href="http://stackoverflow.com/questions/tagged/ag-grid">Stack Overflow</a>
                    </td>
                    <td>
                        <a href="https://www.ag-grid.com/forum/">Members Forum</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        I got an error and 99% sure it's a bug
                    </td>
                    <td>
                        Github issue
                    </td>
                    <td>
                        Github issue or <a href="https://www.ag-grid.com/forum/">Members Forum</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        I have an idea/request
                    </td>
                    <td>
                        Github issue
                    </td>
                    <td>
                        Github issue or <a href="https://www.ag-grid.com/forum/">Members Forum</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        Why do you?
                    </td>
                    <td>
                        Not covered
                    </td>
                    <td>
                        <a href="https://www.ag-grid.com/forum/">Members Forum</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        When will you?
                    </td>
                    <td>
                        Not covered
                    </td>
                    <td>
                        <a href="https://www.ag-grid.com/forum/">Members Forum</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        Billing issues
                    </td>
                    <td>
                        Not covered
                    </td>
                    <td>
                        Email
                        <a href="mailto:accounts@ag-grid.com?Subject=Query" target="_top">accounts@ag-grid.com</a>
                    </td>
                </tr>
            </table>

            <h2>Changelog and Pipeline of Work</h2>

            <!--
            <p>
                For the Changelog covering versions 8.x and above please go to <a href="/ag-grid-changelog">here</a>.
            </p>
            -->
            <p>
                For the Changelog covering versions 7.x and earlier please go to <a href="/change-log/changeLogIndex.php">here</a>.
            </p>
            <p>
                To see our Pipeline of up and coming Features and Bug Fixes, please go <a href="/ag-grid-pipeline">here</a>.
            </p>


            <h2>Github Issues</h2>

            <p>
                Github should not be used for requesting help. Issues in Github are for tracking bugs and potential
                features inside ag-Grid only.
            </p>

            <h2>Stack Overflow</h2>

            <p>
                Stack Overflow should be used for unofficial 'free' ag-Grid support. All ag-Grid related
                queries should be tagged with
                <a href="http://stackoverflow.com/questions/tagged/ag-grid">ag-Grid</a>
            </p>

            <h2>Members Forum</h2>

            <p>
                Only customers of ag-Grid Enterprise can post in the members forum. However anyone can
                view the forum, it's free to browse.
            </p>

            <h2>Raising Bugs</h2>

            <p>
                Use Github Issues to report bugs. When reporting a bug please:
                <ul>
                <li>Write steps to reproduce the error.</li>
                <li>If the bug cannot be reproduced via one of the documentation examples, provide a Plunker (or use a similar website)</li>
                <ul>
            </p>

        </div> <!-- end col -->

    </div> <!-- end row -->

</div>

<?php include("includes/footer.php"); ?>

</body>

<?php include_once("includes/analytics.php"); ?>

</html>