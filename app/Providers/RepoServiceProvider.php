<?php

namespace App\Providers;

use App\Repository\Attendance\AttendanceRepository;
use App\Repository\Attendance\AttendanceRepositoryInterface;
use App\Repository\Exam\ExamRepository;
use App\Repository\Exam\ExamRepositoryInterface;
use App\Repository\FeeInvoice\FeeInvoicesRepository;
use App\Repository\FeeInvoice\FeeInvoicesRepositoryInterface;
use App\Repository\Fees\FeesRepository;
use App\Repository\Fees\FeesRepositoryInterface;
use App\Repository\Graduated\StudentGraduatedRepository;
use App\Repository\Graduated\StudentGraduatedRepositoryInterface;
use App\Repository\Library\LibraryRepository;
use App\Repository\Library\LibraryRepositoryInterface;
use App\Repository\Payment\PaymentRepository;
use App\Repository\Payment\PaymentRepositoryInterface;
use App\Repository\ProcessingFee\ProcessingFeeRepository;
use App\Repository\ProcessingFee\ProcessingFeeRepositoryInterface;
use App\Repository\Promotion\StudentPromotionRepository;
use App\Repository\Promotion\StudentPromotionRepositoryInterface;
use App\Repository\Question\QuestionRepository;
use App\Repository\Question\QuestionRepositoryInterface;
use App\Repository\Quizz\QuizzRepository;
use App\Repository\Quizz\QuizzRepositoryInterface;
use App\Repository\ReceiptStudents\ReceiptStudentsRepository;
use App\Repository\ReceiptStudents\ReceiptStudentsRepositoryInterface;
use App\Repository\Students\StudentRepository;
use App\Repository\Students\StudentRepositoryInterface;
use App\Repository\Subject\SubjectRepository;
use App\Repository\Subject\SubjectRepositoryInterface;
use App\Repository\TeacherRepository;
use App\Repository\TeacherRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(TeacherRepositoryInterface::class, TeacherRepository::class);
        $this->app->bind(StudentRepositoryInterface::class, StudentRepository::class);
        $this->app->bind(StudentPromotionRepositoryInterface::class, StudentPromotionRepository::class);
        $this->app->bind(StudentGraduatedRepositoryInterface::class, StudentGraduatedRepository::class);
        $this->app->bind(FeesRepositoryInterface::class, FeesRepository::class);
        $this->app->bind(FeeInvoicesRepositoryInterface::class, FeeInvoicesRepository::class);
        $this->app->bind(ReceiptStudentsRepositoryInterface::class, ReceiptStudentsRepository::class);
        $this->app->bind(ProcessingFeeRepositoryInterface::class, ProcessingFeeRepository::class);
        $this->app->bind(PaymentRepositoryInterface::class, PaymentRepository::class);
        $this->app->bind(AttendanceRepositoryInterface::class, AttendanceRepository::class);
        $this->app->bind(SubjectRepositoryInterface::class, SubjectRepository::class);
        $this->app->bind(QuizzRepositoryInterface::class, QuizzRepository::class);
        $this->app->bind(QuestionRepositoryInterface::class, QuestionRepository::class);
        $this->app->bind(LibraryRepositoryInterface::class, LibraryRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
