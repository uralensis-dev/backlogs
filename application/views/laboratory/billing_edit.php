<style type="text/css">
    .error_list {
        margin: 15px 0px;
        background-color: red;
        color: white;
        padding: 10px;
        border-radius: 5px;
    }
    .success_list {
        margin: 15px 0px;
        background-color: lightgreen;
        color: white;
        padding: 10px;
        border-radius: 5px;
    }
</style>

<div class="page-header">
    <div class="row">
        <div class="col-sm-12">
            <h3 class="page-title">Update Billing</h3>
            <ul class="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url('laboratory/billing'); ?>">Billing</a></li>
                    <li class="breadcrumb-item active">Edit Billing</li>
                </ul>
            </ul>
        </div>
    </div>
</div>

<div class="notification">
    <?php if ($this->session->flashdata('error') != '') { ?>
        <div class="error_list">
            <?= $this->session->flashdata('error'); ?>
        </div>
    <?php } ?>
    <?php if ($this->session->flashdata('success') != '') { ?>
        <div class="success_list">
            <?= $this->session->flashdata('success'); ?>
        </div>
    <?php } ?>
</div>

<div class="row">
    <div class="col-sm-12">
        <?php echo form_open_multipart("laboratory/edit_billing/$id", array('class' => 'tg-formtheme tg-editform')); ?>
        <div class="row">
            <div class="col-sm-8 col-md-8">
                <div class="form-group">
                    <label>Clinic<span class="text-danger">*</span></label>
                    <select class="select2" name="clinic_id" id="clinic_id">
                        <?php foreach ($clinicArr as $clinic){ ?>
                            <option value="<?= $clinic['group_id']; ?>" <?= ($resultArr->clinic_id == $clinic['group_id']) ? 'selected' : ''; ?>><?= $clinic['description']; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="col-sm-4 col-md-4">
                <div class="form-group">
                    <label>Category<span class="text-danger">*</span></label>
                    <select class="select2" name="category" id="category">
                        <option value="all" <?= ($resultArr->category == 'all') ? 'selected' : ''; ?>>All</option>
                        <option value="lab processing" <?= ($resultArr->category == 'lab processing') ? 'selected' : ''; ?>>Lab Processing</option>
                        <option value="reporting" <?= ($resultArr->category == 'reporting') ? 'selected' : ''; ?>>Reporting</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-12 col-md-12">
                <div class="form-group">
                    <div class="radio">
                        <label for="by_request"><input type="radio" name="type" class="radio_type" value="by_request" id="by_request" <?= ($resultArr->type == 'by_request') ? 'checked' : ''; ?>> By Request</label>
                        &nbsp;&nbsp;
                        <label for="by_specimen"><input type="radio" name="type" class="radio_type" value="by_specimen" id="by_specimen" <?= ($resultArr->type == 'by_specimen') ? 'checked' : ''; ?>> By Specimen</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-8 col-md-8">
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label>Bill Code<span class="text-danger">*</span></label>
                            <div class="field_wrapper">
                                <input name="bill_code" class="form-control" placeholder="Enter Bill Code" type="text" value="<?= $resultArr->bill_code; ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label>Price<span class="text-danger">*</span></label>
                            <input type="text" name="price" class="form-control" placeholder="Enter Price Here" value="<?= $resultArr->price; ?>" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label>Specimen Type<span class="text-danger">*</span></label>
                            <select class="form-control specimen_type_id" name="specimen_type_id" id="">
                                <?php foreach ($specimenTypeArr as $spType){ ?>
                                    <option value="<?= $spType['spec_type_id']; ?>" <?= ($resultArr->specimen_type_id == $spType['spec_type_id']) ? 'selected' : ''; ?>><?= $spType['type']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label>Tissue Type </label>
                            <input type="text" name="tissue_type" class="form-control" placeholder="Enter Tissue Type Here" value="<?= $resultArr->tissue_type; ?>" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="form-group">
                            <label>Bill Description </label>
                            <div class="field_wrapper">
                                <textarea type="text" rows="5" name="bill_description" class="form-control" placeholder="Enter Bill Description"><?= $resultArr->bill_description; ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="submit-section">
            <button class="btn btn-primary submit-btn">Update</button>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        setTimeout(function (){
            $('.notification').hide(9000);
        }, 5000);

        $('#clinic_id').select2({width: '100%'});
        $('#category').select2({width: '100%'});
        $('body').on('keypress', '.numberonly', function (e){
            var charCode = (e.which) ? e.which : event.keyCode
            if (String.fromCharCode(charCode).match(/[^0-9]/g)){ return false; }
        });
    });
</script>