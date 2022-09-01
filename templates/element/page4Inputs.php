<div class="row g-0 inputsRow">
    <div class="col-12 col-lg-6 pe-lg-2">
        <div class="label">
            <label><?= empty($field1Label) ?'Full name':$field1Label ?></label>
        </div>
        <input type="text" name="<?= $field1Name ?>" class="form-control">
    </div>


    <div class="col-12 col-lg-6 row g-0">
        <div class="col-12 col-lg-10">
            <div class="label">
                <label><?= empty($field2Label)?'Relationship To You':$field2Label ?></label>
            </div>
            <input type="text" name="<?= $field2Name ?>" class="form-control">
        </div>
        <div class="col-12 col-lg-2">
            <div class="row g-0">
                <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                    <a class="btn add">
                        <span class="fas fa-plus-circle"></span>
                    </a>
                </div>
                <div class="col-1 col-lg-12 mt-2 mt-lg-0 collapse">
                    <a class="btn delete">
                        <span class="fas fa-minus-circle"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>
