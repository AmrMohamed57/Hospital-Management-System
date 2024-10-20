<div>
    @if ($message == true)
        <div class="alert alert-info" id="successAlertAppointment">
             تم حجز الموعد بنجاح وسيتم إرسال تأكيد الحجز على البريد الإلكتروني الذي قمت بإدخاله شكرا .
        </div>
    @endif

    <form wire:submit.prevent="store">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                <input type="text" name="username" wire:model.live="name" placeholder="اسمك" required>
                <span class="icon fa fa-user"></span>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                <input type="email" name="email" wire:model.live="email" placeholder="البريد الإلكتروني" required>
                <span class="icon fa fa-envelope"></span>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                <label for="doctorSelect">الدكتور</label>
                <select name="doctor" wire:model.live="doctor" class="form-select" id="doctorSelect">
                    <option value="">-- اختار الدكتور --</option>
                    @foreach($doctors as $doctor)
                        <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                <label for="sectionSelect">القسم</label>
                <select class="form-select" name="section" wire:model.live="section" id="sectionSelect">
                    <option value="">-- اختار من القائمة --</option>
                    @foreach($sections as $section)
                        <option value="{{ $section->id }}">{{ $section->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-lg-12 col-md-6 col-sm-12 form-group">
                <input type="tel" name="phone" wire:model.live="phone" placeholder="رقم الهاتف" required>
                <span class="icon fas fa-phone"></span>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                <textarea name="notes" wire:model.live="notes" placeholder="ملاحظات"></textarea>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                <button class="theme-btn btn-style-two" type="submit">
                    <span class="txt">تأكيد</span>
                </button>
            </div>
        </div>
    </form>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        let alert = document.getElementById('successAlertAppointment');
        if (alert) {
            setTimeout(() => {
                alert.remove();
            }, 3000);
        }
    });
</script>