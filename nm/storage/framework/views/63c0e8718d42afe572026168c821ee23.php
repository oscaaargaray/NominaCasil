<?php echo e(Form::model($attendanceEmployee, ['route' => ['attendanceemployee.update', $attendanceEmployee->id], 'method' => 'PUT'])); ?>

<div class="modal-body">
<div class="row">
    <div class="form-group col-lg-6 col-md-6 ">
        <?php echo e(Form::label('employee_id', __('Employee'), ['class' => 'col-form-label'])); ?>

        <?php echo e(Form::select('employee_id', $employees, null, ['class' => 'form-control select2'])); ?>

    </div>
    <div class="form-group col-lg-6 col-md-6">
        <?php echo e(Form::label('date', __('Date'), ['class' => 'col-form-label'])); ?>

        <?php echo e(Form::date('date', null, ['class' => 'form-control d_week','autocomplete'=>'off'])); ?>

    </div>

    <div class="form-group col-lg-6 col-md-6">
        <?php echo e(Form::label('clock_in', __('Clock In'), ['class' => 'col-form-label'])); ?>

        <?php echo e(Form::time('clock_in', null, ['class' => 'form-control pc-timepicker-2','id'=>'clock_in'])); ?>

    </div>

    <div class="form-group col-lg-6 col-md-6">
        <?php echo e(Form::label('clock_out', __('Clock Out'), ['class' => 'col-form-label'])); ?>

        <?php echo e(Form::time('clock_out', null, ['class' => 'form-control pc-timepicker-2 ','id'=>'clock_out'])); ?>

    </div>
</div>
</div>
<div class="modal-footer">
    <input type="button" value="Cancel" class="btn btn-light" data-bs-dismiss="modal">
    <input type="submit" value="<?php echo e(__('Edit')); ?>" class="btn btn-primary">
</div>
<?php echo e(Form::close()); ?>

<?php /**PATH /home/u313622454/domains/grupocasil.com/public_html/nm/resources/views/attendance/edit.blade.php ENDPATH**/ ?>