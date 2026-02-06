<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>النتيجة</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 flex items-center justify-center min-h-screen font-sans">
    <div class="max-w-md w-full bg-white p-8 rounded-lg shadow-lg border border-gray-200 text-center">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">نتائجك الصحية</h2>
        
        <div class="space-y-4">
            <div class="pb-4 border-b">
                <p class="text-gray-600">مؤشر كتلة الجسم (BMI) </p>
                <p class="text-3xl font-black text-indigo-600"><?= number_format($bmiValue, 1) ?></p>
                <p class="text-sm font-bold text-indigo-400"><?= $bmiCategory ?> </p>
            </div>

            <div class="pb-4 border-b">
                <p class="text-gray-600">السعرات اليومية المقترحة </p>
                <p class="text-3xl font-black text-green-600"><?= number_format($dailyCalories, 0) ?></p>
                <p class="text-xs text-gray-400">بناءً على هدفك ونشاطك الحالي </p>
            </div>
        </div>

        <a href="index.php" class="mt-8 inline-block w-full py-3 bg-gray-800 text-white rounded-md hover:bg-gray-900 transition">
            حساب جديد
        </a>
    </div>
</body>
</html>