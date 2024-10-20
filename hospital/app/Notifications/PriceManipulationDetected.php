<?php
namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class PriceManipulationDetected extends Notification
{
    use Queueable;

    protected $employee;
    protected $service;
    protected $manipulatedPrice;

    public function __construct($employee, $service, $manipulatedPrice)
    {
        $this->employee = $employee;
        $this->service = $service;
        $this->manipulatedPrice = $manipulatedPrice;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('تنبيه: محاولة تلاعب بالسعر')
                    ->line('تم اكتشاف محاولة تلاعب بالسعر من قبل الموظف: ' . $this->employee->name)
                    ->line('الخدمة: ' . $this->service->name)
                    ->line('السعر الذي حاول إدخاله: ' . $this->manipulatedPrice)
                    ->line('يرجى التحقق من هذا الأمر واتخاذ الإجراءات اللازمة.');
    }
}
