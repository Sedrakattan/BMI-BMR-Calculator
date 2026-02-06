<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI & BMR Calculator</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 py-10">

    <div class="text-center mb-10">
        <h1 class="text-3xl font-bold text-indigo-600">
            <?php echo 'Check Your Health'; ?>
        </h1>
    </div>

    <div class="max-w-2xl mx-auto bg-white p-8 rounded-xl shadow-md">
        <form action="index.php" method="POST" class="space-y-6">
            <div>
                <label class="block text-sm font-medium text-gray-700">الاسم</label>
                <input type="text" name="name" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 border p-2">
                <?php if (isset($errors['name'])): ?>
           <p class="text-red-500 text-xs mt-1"><?= $errors['name'] ?></p>
           <?php endif; ?>
            </div>
          
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700">العمر </label>
                    <input type="number" name="age" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 border p-2">
                      <?php if (isset($errors['age'])): ?>
           <p class="text-red-500 text-xs mt-1"><?= $errors['age'] ?></p>
           <?php endif; ?>
                </div> 
          


                <div>
                    <label class="block text-sm font-medium text-gray-700">الجنس </label>
                    <select name="gender" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 border p-2">
                        <option value="male">ذكر</option>
                        <option value="female">أنثى</option>
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700">الطول (سم) </label>
                    <input type="number" step="0.1" name="height" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 border p-2">
                      <?php if (isset($errors['height'])): ?>
           <p class="text-red-500 text-xs mt-1"><?= $errors['height'] ?></p>
           <?php endif; ?>
                </div>
                


                <div>
                    <label class="block text-sm font-medium text-gray-700">الوزن (كجم) </label>
                    <input type="number" step="0.1" name="weight" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 border p-2">
                      <?php if (isset($errors['weight'])): ?>
           <p class="text-red-500 text-xs mt-1"><?= $errors['weight'] ?></p>
           <?php endif; ?>
                </div>
                
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">مستوى النشاط </label>
                <select name="activity" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 border p-2">
                    <option value="1.2">خامل (Sedentary) </option>
                    <option value="1.375">نشاط خفيف (Lightly Active) </option>
                    <option value="1.55">نشاط متوسط (Moderately Active) </option>
                    <option value="1.725">نشاط عالي (Very Active) </option>
                </select>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">هدف اللياقة </label>
                <select name="goal" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 border p-2">
                    <option value="lose">خسارة وزن (Lose Weight) </option>
                    <option value="maintain">محافظة (Maintain Weight) </option>
                    <option value="gain">بناء عضلات (Gain Muscle) </option>
                </select>
            </div>

            <button type="submit" name="calculate" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 transition duration-200">
                احسب الآن
            </button>
        </form>
    </div>

</body>
</html>