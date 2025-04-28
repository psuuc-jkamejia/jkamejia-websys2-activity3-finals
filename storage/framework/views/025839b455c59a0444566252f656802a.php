<?php $__env->startSection('content'); ?>
<div class="container mx-auto p-6">
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <h2 class="text-2xl font-bold mb-6">Add New Student</h2>

        <form action="/students" method="POST">
            <?php echo csrf_field(); ?>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label for="">First Name</label>
                    <input type="text" name="first_name" placeholder="First Name" required
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div>
                    <label for="">Last Name</label>
                    <input type="text" name="last_name" placeholder="Last Name" required
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
            </div>

            <div class="mb-4">
                <label for="">Address</label>
                <input type="text" name="address" placeholder="Address" required
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label for="">Email</label>
                    <input type="email" name="email" placeholder="Email" required
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div>
                    <label for="">Date of Birth</label>
                    <input type="date" name="date_of_birth" required
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label for="">Course</label>
                    <input type="text" name="course" placeholder="Course" required
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div>
                    <label for="">Status</label>
                    <select name="status" required
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <option value="">Select Status</option>
                        <option value="Active">Undergraduate</option>
                        <option value="Inactive">Graduate</option>
                    </select>
                </div>
            </div>

            <div class="flex items-center justify-between">
                <button type="submit"
                    class="text-black font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Save Student
                </button>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\acer user\qrcode-crud\resources\views/students/create.blade.php ENDPATH**/ ?>