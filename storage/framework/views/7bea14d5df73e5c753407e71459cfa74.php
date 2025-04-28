<?php $__env->startSection('content'); ?>
<div class="container mx-auto p-6">
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <h2 class="text-2xl font-bold mb-6">Student Details</h2>

        <p class="mb-2"><strong>First Name:</strong> <?php echo e($student->first_name); ?></p>
        <p class="mb-2"><strong>Last Name:</strong> <?php echo e($student->last_name); ?></p>
        <p class="mb-2"><strong>Course:</strong> <?php echo e($student->course); ?></p>
        <p class="mb-2"><strong>Address:</strong> <?php echo e($student->address); ?></p>
        <p class="mb-2"><strong>Email:</strong> <?php echo e($student->email); ?></p>
        <p class="mb-6"><strong>Date of Birth:</strong> <?php echo e(\Carbon\Carbon::parse($student->date_of_birth)->format('M d, Y')); ?></p>

        <h3 class="text-xl font-semibold mb-4">QR Code:</h3>
        <div class="mb-4">
            <?php echo QrCode::size(200)->generate($qrData); ?>

        </div>

        <!-- Action Buttons -->
        <div class="flex space-x-4">
            <!-- Edit Button -->
            <button> 
                <a href="<?php echo e(route('students.edit', $student->id)); ?>" class="text-black font-bold py-2 px-4 rounded-lg transition ease-in-out duration-300 transform hover:scale-105">
                    Edit
                </a>
            </button>

            <!-- Download QR Code Button -->
            <button>
                <a href="data:image/png;base64, <?php echo base64_encode(QrCode::size(200)->generate($qrData)); ?>" download="student_qr_code.png" class=" text-black font-bold py-2 px-4 rounded-lg transition ease-in-out duration-300 transform hover:scale-105">
                    Download QR Code
                </a>
            </button>
        </div>

        <!-- Delete Button -->
        <form action="<?php echo e(route('students.destroy', $student->id)); ?>" method="POST" onsubmit="return confirm('Are you sure you want to delete this student?');">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button type="submit" class="text-black font-bold py-2 px-4 rounded-lg transition ease-in-out duration-300 transform hover:scale-105">
                Delete
            </button>
        </form>

        <!-- Back Button -->
        <button>
            <a href="/students" class="text-black font-bold py-2 px-4 rounded-lg">
                Back to Students List
            </a>
        </button>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\acer user\qrcode-crud\resources\views/students/show.blade.php ENDPATH**/ ?>