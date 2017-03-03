<?php $__env->startSection('title'); ?>
Admin area: edit user
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-12">
        
        <?php $message = Session::get('message'); ?>
        <?php if( isset($message) ): ?>
        <div class="alert alert-success"><?php echo $message; ?></div>
        <?php endif; ?>
        <?php if($errors->has('model') ): ?>
            <div class="alert alert-danger"><?php echo $errors->first('model'); ?></div>
        <?php endif; ?>
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="panel-title bariol-thin"><?php echo isset($user->id) ? '<i class="fa fa-pencil"></i> Edit' : '<i class="fa fa-user"></i> Create'; ?> user</h3>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <a href="<?php echo URL::route('users.profile.edit',['user_id' => $user->id]); ?>" class="btn btn-info pull-right" <?php echo ! isset($user->id) ? 'disabled="disabled"' : ''; ?>><i class="fa fa-user"></i> Edit profile</a>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <h4>Login data</h4>
                    <?php echo Form::model($user, [ 'url' => URL::route('users.edit')] ); ?>

                    
                    <?php echo Form::password('__to_hide_password_autocomplete', ['class' => 'hidden']); ?>

                    <!-- email text field -->
                    <div class="form-group">
                        <?php echo Form::label('email','Email: *'); ?>

                        <?php echo Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'user email', 'autocomplete' => 'off']); ?>

                    </div>
                    <span class="text-danger"><?php echo $errors->first('email'); ?></span>
                    <!-- password text field -->
                    <div class="form-group">
                        <?php echo Form::label('password',isset($user->id) ? "Change password: " : "Password: "); ?>

                        <?php echo Form::password('password', ['class' => 'form-control', 'autocomplete' => 'off', 'placeholder' => '']); ?>

                    </div>
                    <span class="text-danger"><?php echo $errors->first('password'); ?></span>
                    <!-- password_confirmation text field -->
                    <div class="form-group">
                        <?php echo Form::label('password_confirmation',isset($user->id) ? "Confirm change password: " : "Confirm password: "); ?>

                        <?php echo Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => '','autocomplete' => 'off']); ?>

                    </div>
                    <span class="text-danger"><?php echo $errors->first('password_confirmation'); ?></span>
                    <div class="form-group">
                        <?php echo Form::label("activated","User active: "); ?>

                        <?php echo Form::select('activated', ["1" => "Yes", "0" => "No"], (isset($user->activated) && $user->activated) ? $user->activated : "0", ["class"=> "form-control"] ); ?>

                    </div>
                    <div class="form-group">
                        <?php echo Form::label("banned","Banned: "); ?>

                        <?php echo Form::select('banned', ["1" => "Yes", "0" => "No"], (isset($user->banned) && $user->banned) ? $user->banned : "0", ["class"=> "form-control"] ); ?>

                    </div>
                    <?php echo Form::hidden('id'); ?>

                    <?php echo Form::hidden('form_name','user'); ?>

                    <a href="<?php echo URL::route('users.delete',['id' => $user->id, '_token' => csrf_token()]); ?>" class="btn btn-danger pull-right margin-left-5 delete">Delete user</a>
                    <?php echo Form::submit('Save', array("class"=>"btn btn-info pull-right ")); ?>

                    <?php echo Form::close(); ?>

                    </div>
                    <div class="col-md-6 col-xs-12">
                        <h4><i class="fa fa-users"></i> Groups</h4>
                        <?php echo $__env->make('laravel-authentication-acl::admin.user.groups', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                        
                        <h4><i class="fa fa-lock"></i> Permission</h4>
                        
                        <?php echo $__env->make('laravel-authentication-acl::admin.user.perm', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </div>
                </div>
            </div>
      </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer_scripts'); ?>
<script>
    $(".delete").click(function(){
        return confirm("Are you sure to delete this item?");
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('laravel-authentication-acl::admin.layouts.base-2cols', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>