<?php

namespace App\Providers;

use App\Interfaces\Ambulance\AmbulanceRepositoryInterface;
use App\Interfaces\doctor_dashboard\DiagnosisRepositoryInterface;
use App\Interfaces\doctor_dashboard\InvoicesRepositoryInterface;
use App\Interfaces\doctor_dashboard\LaboratoriesRepositoryInterface;
use App\Interfaces\doctor_dashboard\RayRepositoryInterface;
use App\Repository\Sections\SectionRepository;
use App\Interfaces\Sections\SectionRepositoryInterface;
use App\Repository\Doctors\DoctorRepository;
use App\Interfaces\Doctors\DoctorRepositoryInterface;
use App\Interfaces\Employee_dashboard\DisclosureRepositoryInterface;
use App\Interfaces\Finance\PaymentRepositoryInterface;
use App\Interfaces\Finance\ReceiptRepositoryInterface;
use App\Interfaces\Insurance\InsuranceRepositoryInterface;
use App\Interfaces\LaboratorieEmployee\LaboratorieEmployeeRepositoryInterface;
use App\Interfaces\patient_dashboard\PatientViewRepositoryInterface;
use App\Interfaces\Patients\PatientRepositoryInterface;
use App\Interfaces\RayEmployee\RayEmployeeRepositoryInterface;
use App\Interfaces\Services\SingleServiceRepositoryInterface;
use App\Repository\Ambulance\AmbulanceRepository;
use App\Repository\doctor_dashboard\DiagnosisRepository;
use App\Repository\doctor_dashboard\InvoicesRepository;
use App\Repository\doctor_dashboard\LaboratoriesRepository;
use App\Repository\doctor_dashboard\RayRepository;
use App\Repository\Employee_dashboard\DisclosureRepository;
use App\Repository\Finance\PaymentRepository;
use App\Repository\Finance\ReceiptRepository;
use App\Repository\Insurance\InsuranceRepository;
use App\Repository\LaboratorieEmployee\LaboratorieEmployeeRepository;
use App\Repository\patient_dashboard\PatientViewRepository;
use App\Repository\Patients\PatientRepository;
use App\Repository\RayEmployee\RayEmployeeRepository;
use App\Repository\Services\SingleServiceRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // admins
        $this->app->bind(SectionRepositoryInterface::class, SectionRepository::class);
        $this->app->bind(DoctorRepositoryInterface::class, DoctorRepository::class);
        $this->app->bind(SingleServiceRepositoryInterface::class , SingleServiceRepository::class);
        $this->app->bind(InsuranceRepositoryInterface::class , InsuranceRepository::class);
        $this->app->bind(AmbulanceRepositoryInterface::class , AmbulanceRepository::class);
        $this->app->bind(PatientRepositoryInterface::class , PatientRepository::class);
        $this->app->bind(ReceiptRepositoryInterface::class, ReceiptRepository::class);
        $this->app->bind(PaymentRepositoryInterface::class, PaymentRepository::class);
        
        //doctors
        $this->app->bind(InvoicesRepositoryInterface::class, InvoicesRepository::class);
        $this->app->bind(DiagnosisRepositoryInterface::class, DiagnosisRepository::class);
        $this->app->bind(RayRepositoryInterface::class, RayRepository::class);
        $this->app->bind(LaboratoriesRepositoryInterface::class, LaboratoriesRepository::class);

        //Employee
        $this->app->bind(RayEmployeeRepositoryInterface::class, RayEmployeeRepository::class);
        $this->app->bind(DisclosureRepositoryInterface::class, DisclosureRepository::class);
        $this->app->bind(DisclosureRepositoryInterface::class, DisclosureRepository::class);
        $this->app->bind(LaboratorieEmployeeRepositoryInterface::class, LaboratorieEmployeeRepository::class);

        //Dashboard_Laboratorie_Employee
        $this->app->bind('App\Interfaces\dashboard_lab_employee\DisclosureRepositoryInterface',
        'App\Repository\dashboard_lab_employee\DisclosureRepository');
        
        //patients
        $this->app->bind(PatientViewRepositoryInterface::class, PatientViewRepository::class);

        

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
