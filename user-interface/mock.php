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
        switchToPanel (0);
        var currentIndex = 0;

        function disableBack () {
            $('#new-transaction-modal #back-btn').hide ();
        }

        function enableBack () {
            $('#new-transaction-modal #back-btn').show ();
        }
       
        function switchToPanel (index) {

            if (index < 0) {
                // console.log ('Index is less than 0, setting to 0...');
                index = 0;
            }
            if (index > switchPanels.length - 1) {
                // console.log (`Index is more than ${switchPanels.length-1}, setting to ${switchPanels.length-1}...`);
                index = switchPanels.length - 1;
            }

            currentIndex = index;
            console.log (index);
            if (index === 0)
                disableBack ();
            else 
                enableBack ();

            switchPanels.removeClass("current").eq(index).addClass("current");
            switchPanels.not("current").hide();
            switchPanels.eq(index).show();
            
        }

        $('#new-transaction-modal #continue-btn').on ('click', (e) => {
            currentIndex += 1;
            switchToPanel (currentIndex); 

            if (currentIndex === switchPanels.length - 1) {
                $('#new-transaction-modal #continue-btn').html ("Add Transaction");

                let transactionData = {

                    type: {
                        id: $('#new-transaction-modal #transaction-type > option:selected').val(),
                        text: $('#new-transaction-modal #transaction-type > option:selected').text(),
                    },
                    office: {
                        id: $('#new-transaction-modal #requesting-office > option:selected').val(),
                        text: $('#new-transaction-modal #requesting-office > option:selected').text(),
                    },
                    titleSubject: $('#new-transaction-modal #transaction-title').val(),
                    amount: parseFloat ($('#new-transaction-modal #transaction-amount').val()),
                    initialStatus: {
                        id: $('#new-transaction-modal #transaction-status > option:selected').val(),
                        text: $('#new-transaction-modal #transaction-status > option:selected').text(),
                    },
                    hwi: $('#new-transaction-modal #transaction-hwi').val(),
                };

                console.log (transactionData);

                // display to table:
                let transactionDataTable = `<table class="table table-sm">
                        <tr>
                            <td>Type:</td><td>${transactionData.type.text}</td>
                        </tr>
                        <tr>
                            <td>Requesting Office:</td><td>${transactionData.office.text}</td>
                        </tr>
                        <tr>
                            <td>Title:</td><td>${transactionData.titleSubject}</td>
                        </tr>
                        <tr>
                            <td>Amount Requested:</td><td>PHP ${transactionData.amount.toLocaleString()}</td>
                        </tr>
                        <tr>
                            <td>Initial Status:</td><td>${transactionData.initialStatus.text}</td>
                        </tr>
                        <tr>
                            <td>HWI, if any:</td><td>${transactionData.hwi}</td>
                        </tr>
                    </table>`;

                    $('#new-transaction-modal #transaction-summary').html (transactionDataTable);
            }

        });

        $('#new-transaction-modal #back-btn').on ('click', (e) => {
            currentIndex -= 1;
            switchToPanel (currentIndex); 
            $('#new-transaction-modal #continue-btn').html ("Continue");
        });

    });
</script>
</html>