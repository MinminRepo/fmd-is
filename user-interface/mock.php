<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mock</title>
    <!-- import bootstrap -->
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.css" />
</head>
<body>
    <div class="container-fluid mt-4">
        <button id="new-transaction" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#new-transaction-modal">New Transaction</button>
    </div>

    <!-- include modals -->
    <?php include ('./components/Modal.NewTransaction.php'); ?>
</body>

<script src="../vendor/components/jquery/jquery.min.js"></script>
<script src="../vendor/twbs/bootstrap/dist/js/bootstrap.js"></script>
<script defer>
    $(document).ready (() => {
        console.log ('controller.loaded');
        const switchPanels = $('.switch-panel');
        switchPanels.hide ();
        console.log ();
    });
</script>
</html>