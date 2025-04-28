<?php $__env->startSection('content'); ?>
<div class="container mx-auto p-6">
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <h2 class="text-2xl font-bold mb-6">Students List</h2>

        <!-- Search Form -->
        <form action="<?php echo e(route('students.index')); ?>" method="GET" class="mb-6">
            <div class="flex">
                <input type="text" name="search" placeholder="Search by name" class="border rounded py-2 px-3 mr-2" value="<?php echo e(request()->query('search')); ?>">
                <button type="submit" class="text-black font-bold py-2 px-4 rounded">
                    Search
                </button>
            </div>
        </form>

        <div class="flex justify-end">
            <button>
            <a href="/students/create" class="text-black font-bold py-2 px-4 rounded">
                Add New Student
            </a>
            </button>
        </div> <Br>

        <h2>STUDENT LIST</h2>
        <ul class="list-disc list-inside mb-6">
            <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="mb-2">
                    <a href="/students/<?php echo e($student->id); ?>" class="text-blue-500 hover:underline">
                        <?php echo e($student->first_name); ?> <?php echo e($student->last_name); ?>

                    </a>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>


    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\acer user\qrcode-crud\resources\views/students/index.blade.php ENDPATH**/ ?>