<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadPrescriptionController extends Controller
{
    public function showUploadForm()
    {
        return view('upload.form');
    }

    public function uploadPrescription(Request $request)
{
    if ($request->hasFile('prescription_image')) {
        $image = $request->file('prescription_image');
        // قم بتنفيذ الإجراءات المطلوبة لحفظ الصورة ومعالجتها
        // يمكنك استخدام الدالة move() لنقل الصورة إلى مسار محدد على الخادم
        // على سبيل المثال:
        $image->move(public_path('images'), $image->getClientOriginalName());
        // بعد حفظ الصورة، يمكنك تنفيذ الإجراءات اللازمة الأخرى
        // مثل حفظ مسار الصورة في قاعدة البيانات أو معالجتها بطريقة أخرى
        // ومن ثم إرجاع الاستجابة المناسبة
        return redirect()->back()->withSuccess('تم تحميل الوصفة الطبية بنجاح');
    }
    // في حالة عدم توفر صورة للرفع، يمكنك إعادة التوجيه إلى الصفحة السابقة
    // مع رسالة خطأ مناسبة
    return redirect()->back()->withError('لم يتم تحديد صورة للرفع');
}
}
