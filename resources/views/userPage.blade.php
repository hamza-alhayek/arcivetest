@extends('layouts.app')
@section('content')
<div class="container">
  @guest

  @if (Route::has('login'))
  <h3>{{ __('You are not logged in Yet!') }}</h3>
  @endif


  @else

  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body" >
                  <form action="{{route('Archive')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                      <label>القسم :</label>
                      <select name="Maincat" id="Maincat">
                        <option value="it">نظم المعلومات</option>
                        <option value="HR">الموارد البشرية</option>
                        <option value="finance">المالية</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>نوع الوثيقة :</label>
                      <select name="keyword" id="keyword">
                        <option value="technical report">تقرير تقني</option>
                        <option value="HR report">تأمين صحي</option>
                        <option value="financal report">تقرير مالي</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <textarea id="subject" name="subject" rows="4" cols="50" placeholder="اكتب ملاحظاتك"></textarea>
                    </div>
                      <div class="custom-file">
                        <label>رفع الملف</label>
                        <input type="file" class="form-control" name="filepath"  placeholder="ادخل الملف المراد تحميله">
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-primary">ارسال</button>
                      </div>

                    </form>
                    
                </div>
            </div>
        </div>
    </div>
  </div>



  @endguest 
</div>
@endsection