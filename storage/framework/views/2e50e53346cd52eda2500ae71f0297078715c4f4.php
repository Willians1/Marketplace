<h1>Criar Loja</h1>
<form action="/admin/stores/store" method="post">
    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
<div>
    <label>Nome Loja</label>
    <input type="text" name="name">
</div>
<div>
    <label>Descrição</label>
    <input type="text" name="description">
</div>
<div>
    <label>Telefone</label>
    <input type="text" name="phone">
</div>
<div>
    <label>Celular/Whatsapp</label>
    <input type="text" name="mobile_phone">
</div>
<div>
    <label>Slug</label>
    <input type="text" name="slug">
</div>
<div>
    <label>Usuário</label>
    <select name="user">
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
    </select>
</div>
<div>
    <button type="submit">Criar Loja</button>
</div>
</form>
<?php /**PATH /home/ww/novoProjeto/resources/views/admin/stores/create.blade.php ENDPATH**/ ?>