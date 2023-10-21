<div class="modal fade" tabindex="-1" id="new-transaction-modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3>New Transaction</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="switch-panel">
                    <div class="form">
                        <div class="form-group mb-2">
                            <label for="transaction-type" class="mb-2"><b>Select Transaction Type:</b></label>
                            <?php include ('Select.TransactionTypes.php') ?>
                        </div>
                        <div class="form-group mb-2">
                            <label for="requesting-office" class="mb-2"><b>Requesting Office:</b></label>
                            <?php include ('Select.Offices.php') ?>
                        </div>
                        <div class="form-group mb-2">
                            <label for="transaction-title" class="mb-2"><b>Title/Subject:</b></label>
                            <input type="text" name="transaction-title" id="transaction-title" class="form-control" placeholder="Enter the memo subject or title..." />
                        </div>
                        <div class="form-group mb-2">
                            <label for="transaction-amount" class="mb-2"><b>Amount Requested In Pesos:</b></label>
                            <input type="number" name="transaction-amount" id="transaction-amount" class="form-control" value="0" autocomplete="false" />
                        </div>     
                    </div>
                </div>
                <div class="switch-panel">
                    <div class="form">
                        <div class="form-group mb-2">
                            <label for="transaction-status" class="mb-2"><b>Initial Status:</b></label>
                            <?php include ('Select.Statuses.php'); ?>
                        </div>
                        <div class="form-group mb-2">
                            <label for="transaction-hwi" class="mb-2"><b>HWI, If Any:</b></label>
                            <textarea name="transaction-hwi" id="transaction-hwi" cols="30" rows="3" class="form-control" placeholder="Enter any handwritten instructions from the memorandum or routing slip..."></textarea>
                        </div>
                    </div>
                </div>
                <div class="switch-panel">
                    <h2>Transaction Summary</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi iure perferendis dolorem ex quasi minima in quisquam nam vero delectus. Labore corrupti aut deserunt voluptate dolor provident consequatur a vitae?</p>
                </div>
            </div>
            <div class="modal-footer">
                <button id="back-btn" class="btn btn-default">Previous</button>
                <button class="btn btn-primary" id="continue-btn">Continue</button>
            </div>
        </div>
    </div>
</div>