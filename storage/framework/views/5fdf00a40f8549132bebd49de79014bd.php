<?php $__env->startSection('content'); ?>
<div class="container mx-auto p-6">
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <h2 class="text-2xl font-bold mb-6">Edit Student</h2>

        <form action="/students/<?php echo e($student->id); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <div class="mb-4">
                <input type="text" name="first_name" value="<?php echo e($student->first_name); ?>" required 
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                    placeholder="First Name">
            </div>

            <div class="mb-4">
                <input type="text" name="last_name" value="<?php echo e($student->last_name); ?>" required 
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                    placeholder="Last Name">
            </div>

            <div class="mb-4">
                <input type="text" name="address" value="<?php echo e($student->address); ?>" required 
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                    placeholder="Address">
            </div>

            <div class="mb-4">
                <input type="email" name="email" value="<?php echo e($student->email); ?>" required 
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                    placeholder="Email">
            </div>

            <div class="mb-4">
                <input type="date" name="date_of_birth" value="<?php echo e($student->date_of_birth); ?>" required 
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <input type="text" name="course" value="<?php echo e($student->course); ?>" required 
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                    placeholder="Course">
            </div>

            <div class="mb-4">
                <select name="status" required 
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="Active" <?php echo e($student->status == 'Active' ? 'selected' : ''); ?>>Undergraduate</option>
                    <option value="Inactive" <?php echo e($student->status == 'Inactive' ? 'selected' : ''); ?>>Graduate</option>
                </select>
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" 
                    class=" text-black font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Update Student
                </button>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\acer user\qrcode-crud\resources\views/students/edit.blade.php ENDPATH**/ ?>