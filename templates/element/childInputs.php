<div class="row g-0 mb-3 childInputs">
    <div class="col-12 col-lg-2 pe-md-2">
        <div class="label">
            <label>Name</label>
        </div>
        <input type="text" name="child_fullName[]" class="form-control">
    </div>

    <div class="col-12 col-lg-2 pe-md-2">
        <div class="label">
            <label>Age</label>
        </div>
        <input type="text" name="child_age[]" class="form-control">
    </div>

    <div class="col-12 col-lg-2 pe-md-2">
        <div class="label">
            <label>Address</label>
        </div>
        <input type="text" name="child_address[]" class="form-control">
    </div>

    <div class="col-12 col-lg-2 pe-md-2">
        <div class="label">
            <label>Mother</label>
        </div>
        <input type="text" name="child_mother[]" class="form-control">
    </div>

    <div class="col-12 col-lg-2 pe-md-2">
        <div class="label">
            <label for="married_phone">Father</label>
        </div>
        <input type="text" name="child_father[]" class="form-control">
    </div>

    <div class="col-12 col-lg-2">
        <div class="row g-0">
            <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                <a class="btn addChild">
                    <span class="fas fa-plus-circle"></span>
                </a>
            </div>
            <div class="col-1 col-lg-12 mt-2 mt-lg-0 collapse">
                <a class="btn deleteChild">
                    <span class="fas fa-minus-circle"></span>
                </a>
            </div>
        </div>
    </div>

    <input type="hidden" name="child_relation[]" value="<?= $relation ?>">
</div>
