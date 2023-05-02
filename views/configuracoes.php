<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <div class="d-inline">
                    <h4>Configurações</h4>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item">
                        <a href="<?php echo BASE_URL ;?>dashboard"> <i class="fa fa-dashboard"></i> </a>
                    </li>
                    <li class="breadcrumb-item"><a href="<?php echo BASE_URL ;?>configuracoes">Configurações</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h5>Layout Menu</h5>
    </div>
                                                    <div class="card-block">
                                                        <form id="checkdrop" action="/" method="post" novalidate="">
                                                            <div class="form-group row">
                                                                <label class="col-sm-2">Radio Buttons</label>
                                                                <div class="col-sm-10">
                                                                    <div class="form-radio">
                                                                        <div class="radio radiofill radio-primary radio-inline">
                                                                            <label>
                                                        <input type="radio" name="member" value="free" data-bv-field="member">
                                                        <i class="helper"></i>Select here
                                                    </label>
                                                                        </div>
                                                                        <div class="radio radiofill radio-primary radio-inline">
                                                                            <label>
                                                        <input type="radio" name="member" value="personal" data-bv-field="member">
                                                        <i class="helper"></i>Another select
                                                    </label>
                                                                        </div>
                                                                    </div>
                                                                    <span class="messages"></span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row has-error">
                                                                <label class="col-sm-2">Select Checkbox</label>
                                                                <div class="col-sm-10">
                                                                    <div class="checkbox-fade fade-in-primary">
                                                                        <label>
                                                    <input type="checkbox" id="checkbox" name="Language" value="HTML" class="input-danger">
                                                    <span class="cr">
                                             <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                                </span>
                                                    <span>HTML</span>
                                                </label>
                                                                    </div>
                                                                    <div class="checkbox-fade fade-in-primary">
                                                                        <label>
                                                    <input type="checkbox" id="checkbox2" name="Language" value="CSS">
                                                    <span class="cr">
                                                <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                                </span>
                                                    <span>CSS</span>
                                                </label>
                                                                    </div>
                                                                    <span class="messages"><p class="text-danger error">Language can't be blank</p></span>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <label class="col-sm-2"></label>
                                                                <div class="col-sm-10">
                                                                    <button type="submit" class="btn btn-primary m-b-0">Submit</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>