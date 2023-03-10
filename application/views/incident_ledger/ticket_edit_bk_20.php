<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php
$attributes = array('method' => 'POST', 'enctype' => "multipart/form-data");
echo form_open("Incident_Ledger/", $attributes);

?>
<input type="hidden" name='save_type' value='edit' />
<input type='hidden' name='ticket_id' id='ticket_id' value='<?php echo $ticketData['ticket_data'][0]['ticket_id']; ?>'>
<input type="hidden" name='is_lab' value='<?php echo (($isUserLab) ? 1 : 0); ?>>' />
<div class="row">
    <div class="col-sm-12 text-center">
        <h3>#<?php echo $ticketData['ticket_data'][0]['ticket_number']; ?></h3>
    </div>
</div>
<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label>Incident Title <em class='text-danger'>*</em></label>
            <input class="form-control" type="text" name='ticket_subject' id='ticket_subject' required value='<?php echo $ticketData['ticket_data'][0]['ticket_subject']; ?>'>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label>Location</label>
            <input class="form-control" type="text" name='ticket_subject' id='ticket_subject' required value='<?php echo $ticketData['ticket_data'][0]['location']; ?>'>
        </div>
    </div>

    <!-- <div class="col-sm-3">
        <div class="form-group">
            <label>Category</label>
            <select id='category_id' name='category_id' class="select">
                <?php foreach ($category_list as $cat) { ?>
                    <option value='<?= $cat['id']; ?>' <?= ($ticketData['ticket_data'][0]['category_id'] == $cat['id']) ? "selected" : ""; ?>> <?= $cat['title']; ?></option>
                <?php } ?>
            </select>
        </div>
    </div> -->
    <!-- <div class="col-sm-3">
        <div class="form-group">
            <label>Category</label>
            <select id='product' name='product' class="select">
                <?php
                foreach ($products as $prod_id => $prod_name) {
                ?>
                    <option value='<?php echo $prod_id; ?>' <?php echo ($ticketData['ticket_data'][0]['ticket_type'] == $prod_id) ? "selected" : ""; ?>> <?php echo $prod_name; ?></option>
                <?php
                } ?>
            </select>
        </div>
    </div> -->
</div>
<?php if ($isUserLab) { ?>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label>Laboratories</label>
                <select id='user_lab_id' name='user_lab_id' class="select">
                    <option value="103">Poulton</option>
                    <?php foreach ($userLabs as $labData) { ?>
                        <option value="<?php echo $labData->id; ?>" <?php echo ($labData->id == $ticketData['ticket_data'][0]['lab_id'] ? "selected" : ""); ?>><?php echo $labData->name; ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
    </div>
<?php } ?>
<!-- <div class="row">
    <div class="col-sm-12">
        <div class="form-group">

            <div class="row">
                <div class="col-sm-12">
                    <label>Priority</label>
                </div>
                <div class="col-sm-4 radio text-primary">
                    <label>
                        <input type="radio" name="ticket_priority" value='normal' <?php echo ($ticketData['ticket_data'][0]['ticket_priority'] == 'normal') ? "checked" : ""; ?>>
                        <strong>Normal</strong>
                        <p>Non-Critical Queries, advice & support.</p>
                    </label>
                </div>
                <div class="col-sm-4 radio text-warning">
                    <label>
                        <input type="radio" name="ticket_priority" value='high' <?php echo ($ticketData['ticket_data'][0]['ticket_priority'] == 'high') ? "checked" : ""; ?>>
                        <strong>High</strong>
                        <p>Important requests that are not Business Critical.</p>
                    </label>
                </div>
                <div class="col-sm-4 radio text-danger">
                    <label>
                        <input type="radio" name="ticket_priority" value='critical' <?php echo ($ticketData['ticket_data'][0]['ticket_priority'] == 'critical') ? "checked" : ""; ?>>
                        <strong>Critical</strong>
                        <p>Requests with Business Critical impact.</p>
                    </label>
                </div>
            </div>
        </div>
    </div>
</div> -->
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <label>Incident Details <em class='text-danger'>*</em></label>
            <textarea class="form-control" id='ticket_message' name='ticket_message'><?php echo ($ticketData['ticket_data'][0]['ticket_message']); ?></textarea>
        </div>
    </div>
</div>
<?php if ($this->lab_enquiries->isLabAdmin()) : ?>
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <label>Assign To</label>
                <!-- <select name="assignee" id="edit-assignee" class="form-control">
                    <option value="">--Select User--</option>
                    <?php foreach ($userList as $value) { ?>
                        <option value="<?php echo $value['id'] ?>"><?php echo $value['first_name'] . ' ' . $value['last_name'] ?></option>
                    <?php } ?>
                </select> -->
                <?php
                $ticketAssignee = $this->lab_enquiries->getTicketAssignee($ticketData['ticket_data'][0]['ticket_id']);
                echo "<p class='form-control'>";
                foreach($ticketAssignee as $value){
                    echo $value['enc_first_name'].'  '.$value['enc_last_name'].',  ';
                }
                echo "</p>";
                ?>
            </div>
        </div>
    </div>
<?php endif; ?>
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <label>Reason for Raising Incident</label>
            <input class="form-control" type="text" id='ticket_reference' name='ticket_reference' value='<?php echo $ticketData['ticket_data'][0]['ticket_reference']; ?>' />
        </div>
    </div>
</div>


<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <label>Action taken</label>
            <input class="form-control" type="text" name='ticket_action' value='<?php echo $ticketData['ticket_data'][0]['ticket_action']; ?>' />
            <!-- <select name="ticket_action" class="form-control">
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select> -->
            <input type="hidden" name="ticket_reply_thru" value="pathhub">
            <input type="hidden" name="ticket_priority" value="normal">
            <input type="hidden" name="ticket_sms_alert" value="no">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <label>Comment</label>
            <input class="form-control" type="text" name='comment' value='<?php echo $ticketData['ticket_data'][0]['comment']; ?>' />
        </div>
    </div>
</div>




<!-- <div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <button class="btn btn-primary tck-swtchrs" type="button" data-toggle="collapse" data-target="#attachments" aria-expanded="false">
                <i class='la la-paperclip'></i> Show Attachments
            </button>
            <button class="btn btn-primary tck-swtchrs" type="button" data-toggle="collapse" data-target="#notifications" aria-expanded="false">
                <i class='la la-bell'></i> Notification Settings
            </button>
        </div>
    </div>
</div> -->
<div class="row collapse" id='attachments' aria-expanded="false">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="card-title">Attachments</h4>
                </div>
            </div>
            <?php if (!empty($ticketData['ticket_attach_data'])) : ?>
                <div class="row">
                    <?php foreach ($ticketData['ticket_attach_data'] as $attachment) : ?>
                        <div class="col-sm-6">
                            <div class="uploaded-box">
                                <div class="btn-group d-block">
                                    <button type="button" class="btn btn-light"> <?php echo $attachment['attachment_name']; ?></button>
                                    <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="<?php echo site_url('Incident_Ledger/deleteAttachment/' . $attachment['attachment_id']); ?>" onclick='javascript:if(!confirm("Are You Sure ?")){return false}'>DELETE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <div class="row justify-content-end">
                <div class="col-sm-4">
                    <p class="mb-0">You Can Attach any file here which you think may help our engineers,
                        for instance error message, screen shots or server log files.</p>
                </div>
                <div class="col-sm-8">
                    <input class="form-control" type="file" id='ticket_files' name='ticket_files[]' multiple='true'>
                    <p><small>Allowed File Types: <span class='text-monospace'>pdf, doc, docx, jpg,
                                jpeg, png, gif</span></small><br><small>Max Size: <strong class='text-monospace'>2
                                MB</strong></small></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row collapse" id='notifications' aria-expanded="false">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="card-title">Notifications</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <p class="mb-0">Set weather you want text alerts, how replies can be made to the
                        request and weather to CC responses to any other contacts on your Path Hub
                        Account.</p>
                </div>
                <div class="col-sm-8">
                    <div class="col-sm-12">

                        <div class="form-group row">
                            <label class="col-form-label col-md-12">CC Response To</label>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input class="form-control" type="email" name='ticket_cc_to' id='ticket_cc_to' value='<?php echo $ticketData['ticket_data'][0]['ticket_cc_to']; ?>' />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-12">Reply Security</label>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="ticket_reply_thru" value='pathhub' <?php echo ($ticketData['ticket_data'][0]['ticket_reply_thru'] == 'pathhub') ? "checked" : ""; ?>>
                                        Reply must be made through PathHub
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="ticket_reply_thru" value='any' <?php echo ($ticketData['ticket_data'][0]['ticket_reply_thru'] == 'any') ? "checked" : ""; ?>>
                                        Reply can be
                                        made through PathHub or Email
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-form-label col-md-12">Receive Text Alerts</label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="ticket_sms_alert" value='no' <?php echo ($ticketData['ticket_data'][0]['ticket_sms_alert'] == 'no') ? "checked" : ""; ?>>
                                        No
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="ticket_sms_alert" value='yes' <?php echo ($ticketData['ticket_data'][0]['ticket_sms_alert'] == 'yes') ? "checked" : ""; ?>>
                                        Yes
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="submit-section">
    <!-- <button class="btn btn-primary submit-btn tck-smbt-btn" type='submit'>Update Request</button> -->
</div>
</form>