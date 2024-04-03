<?php
    $plan = Utility::getChatGPTSettings();
?>

<?php echo e(Form::model($companyPolicy, ['route' => ['company-policy.update', $companyPolicy->id],'method' => 'PUT','enctype' => 'multipart/form-data'])); ?>

<div class="modal-body">
    
    <?php if($plan->enable_chatgpt == 'on'): ?>
    <div class="text-end">
        <a href="#" class="btn btn-sm btn-primary" data-size="medium" data-ajax-popup-over="true"
            data-url="<?php echo e(route('generate', ['company-policy'])); ?>" data-bs-toggle="tooltip" data-bs-placement="top"
            title="<?php echo e(__('Generate')); ?>" data-title="<?php echo e(__('Generate Content With AI')); ?>">
            <i class="fas fa-robot"></i><?php echo e(__(' Generate With AI')); ?>

        </a>
    </div>
    <?php endif; ?>

    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="form-group">
                <?php echo e(Form::label('branch', __('Branch'), ['class' => 'form-label'])); ?>

                <div class="form-icon-user">
                    <?php echo e(Form::select('branch', $branch, null, ['class' => 'form-control', 'required' => 'required'])); ?>

                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="form-group">
                <?php echo e(Form::label('title', __('Title'), ['class' => 'form-label'])); ?>

                <div class="form-icon-user">
                    <?php echo e(Form::text('title', null, ['class' => 'form-control', 'placeholder' => __('Enter Company Policy Title')])); ?>

                </div>

            </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="form-group">
                <?php echo e(Form::label('description', __('Description'), ['class' => 'form-label'])); ?>

                <div class="form-icon-user">
                    <?php echo e(Form::textarea('description', null, ['class' => 'form-control', 'rows' => '3'])); ?>

                </div>
            </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="form-group">
                <?php echo e(Form::label('attachment', __('Attachment'), ['class' => 'col-form-label'])); ?>

                <div class="choose-files ">
                    <label for="attachment">
                        <div class=" bg-primary attachment "> <i
                                class="ti ti-upload px-1"></i><?php echo e(__('Choose file here')); ?>

                        </div>
                        <?php
                                $policyPath=\App\Models\Utility::get_file('uploads/companyPolicy/');
                                $logo=\App\Models\Utility::get_file('uploads/companyPolicy/');
                                
                             ?>
                        <input type="file" class="form-control file" name="attachment" id="attachment" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                        <img id="blah" alt="your image" width="100" src="<?php if($companyPolicy->attachment): ?><?php echo e($policyPath.$companyPolicy->attachment); ?><?php else: ?><?php echo e($logo.'avatar.png'); ?><?php endif; ?>" />
                    </label>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="modal-footer">
    <input type="button" value="Cancel" class="btn btn-light" data-bs-dismiss="modal">
    <input type="submit" value="<?php echo e(__('Update')); ?>" class="btn btn-primary">
</div>
<?php echo e(Form::close()); ?>


<?php /**PATH /home/u313622454/domains/grupocasil.com/public_html/nm/resources/views/companyPolicy/edit.blade.php ENDPATH**/ ?>