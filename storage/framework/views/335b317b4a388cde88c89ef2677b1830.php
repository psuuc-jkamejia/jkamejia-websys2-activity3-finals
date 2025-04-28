<?php $__env->startSection('content'); ?>
<div class="container mx-auto p-6">
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">

        <!-- Search Form -->
        <form action="<?php echo e(route('students.index')); ?>" method="GET" class="mb-6">
            <div class="flex">
                <input type="text" name="search" placeholder="Search by name" class="border rounded py-2 px-3 mr-2" value="<?php echo e(request()->query('search')); ?>">
                <button type="submit" class="text-black font-bold py-2 px-4 rounded">
                    Search
                </button>
            </div>
        </form>

       
        <br>

        <h3 class="text-xl font-semibold mb-4">STUDENT LIST</h3>
        <div class="flex justify-end">
            <button>
                <a href="/students/create" class="text-black font-bold py-2 px-4 rounded">
                    Add New Student
                </a>
            </button>
        </div> 

        <!-- Table for Student List -->
        <table class="table-auto w-full text-left border-collapse">
            <thead>
                <tr class="bg-gray-100">
                    <th class="py-2 px-4 border-b">First Name</th>
                    <th class="py-2 px-4 border-b">Last Name</th>
                    <th class="py-2 px-4 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="border-b">
                    <td class="py-2 px-4"><?php echo e($student->first_name); ?></td>
                    <td class="py-2 px-4"><?php echo e($student->last_name); ?></td>
                    <td class="py-2 px-4">
                        <a href="/students/<?php echo e($student->id); ?>" class="text-blue-500 hover:underline mr-2">View</a>
                        <a href="/students/<?php echo e($student->id); ?>/edit" class="text-yellow-500 hover:underline mr-2">Edit</a>
                        <form action="/students/<?php echo e($student->id); ?>" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this student?');">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="text-red-500 hover:underline">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\KENN Folder\QR Activity 3\resources\views/students/index.blade.php ENDPATH**/ ?>