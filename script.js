document.getElementById('bmiForm').addEventListener('submit', function(event) {
    // منع إرسال النموذج مؤقتاً لفحصه
    event.preventDefault();

    // جلب العناصر والرسالة
    const name = document.getElementById('name').value;
    const weight = document.getElementById('weight').value;
    const height = document.getElementById('height').value;
    const errorDiv = document.getElementById('error-message');

    // تفريغ رسالة الخطأ السابقة
    errorDiv.textContent = '';

    // التحقق من أن الحقول ليست فارغة وأن الأرقام موجبة
    if (name.trim() === "" || weight <= 0 || height <= 0) {
        errorDiv.textContent = "Please enter valid information. Fields cannot be empty or zero.";
    } else {
        // إذا كانت البيانات سليمة، نقوم بإرسال النموذج فعلياً
        this.submit();
    }
});