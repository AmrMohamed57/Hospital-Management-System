@component('mail::message')
# مرحباً {{ $appointment->name }}

تم تأكيد حجزك بنجاح! 🎉  
### تفاصيل الحجز:
- **التاريخ والوقت:** {{ $appointment->appointment }}
- **البريد الإلكتروني:** {{ $appointment->email }}


شكراً لاستخدامك خدماتنا!  
@endcomponent
