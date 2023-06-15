<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FirstquarterController;
use App\Http\Controllers\SecondquarterController;
use App\Http\Controllers\ThirdquarterController;
use App\Http\Controllers\FourthquarterController;
use App\Http\Controllers\FirstquarterseniorController;
use App\Http\Controllers\SecondquarterseniorController;
use App\Http\Controllers\ThirdquarterseniorController;
use App\Http\Controllers\FourthquarterseniorController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\GeneralAverageController;
use App\Http\Livewire\Gradesectiondropdown;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SeniorGeneralAverageController;
use App\Http\Controllers\FullCalenderController;



Route::get('/', function () {
    return view('welcome');
});



require __DIR__ . '/auth.php';


// ************************* USERS DASHBOARD ******************************************************

Route::get('dashboard',[DashboardController::class,'StudentDashboard'])
        ->middleware(['auth', 'verified','student-middleware'])->name('dashboard');

Route::get('faculty-dashboard',[DashboardController::class,'FacultyDashboard'])
        ->middleware(['auth', 'verified','faculty-middleware'])->name('faculty-dashboard');


Route::get('admin-dashboard',[DashboardController::class,'AdminDashboard'])
        ->middleware(['auth', 'verified','admin-middleware'])->name('admin-dashboard');



// ******************* ADMIN MIDDLEWARE ***************************************************

Route::middleware(['auth', 'verified', 'admin-middleware'])->group(function () {
        Route::get('student-all-list', [StudentController::class, 'studentAllList'])->name('student-all-list');
        Route::get('edit-student/{id}', [StudentController::class, 'editStudent'])->name('edit-student');
        Route::post('update-student', [StudentController::class, 'updateStudent']);
        Route::get('faculty-all-list', [FacultyController::class, 'facultyAllList']);
        Route::get('edit-faculty/{id}', [FacultyController::class, 'editFaculty'])->name('edit-faculty');
        Route::post('update-faculty', [FacultyController::class, 'updateFaculty']);
        Route::get('delete-student/{id}', [StudentController::class, 'deleteStudent']);
        Route::get('announcement-all-list', [AnnouncementController::class, 'announcementAllList']);
        Route::post('save-announcement', [AnnouncementController::class, 'saveAnnouncement']);
        Route::get('add-announcement', [AnnouncementController::class, 'announcementsfunc']);
        Route::get('edit-announcement/{id}', [AnnouncementController::class, 'editAnnouncement']);
        Route::post('update-announcement', [AnnouncementController::class, 'updateAnnouncement']);
        Route::get('delete-announcement/{id}', [AnnouncementController::class, 'deleteAnnouncement']);
    });
    


// ******************* STUDENT MIDDLEWARE ***************************************************
Route::middleware(['auth', 'verified', 'student-middleware'])->group(function () {
        Route::get('add-student', [StudentController::class, 'addStudent'])->name('add-student');
        Route::get('gradesectiondropdown', [Gradesectiondropdown::class, 'gradeSection'])->name('gradesectiondropdown');
        Route::post('save-student', [StudentController::class, 'saveStudent']);
        Route::get('student-profile', [StudentController::class, 'showStudentData'])->name('student-profile');
        Route::post('student-profile-update', [StudentController::class, 'updateStudent']);
        Route::get('ave', [GeneralAverageController::class, 'averageall'])->name('ave');
        Route::get('ave', [GeneralAverageController::class, 'showAverage'])->name('ave');
        Route::get('ave-senior', [SeniorGeneralAverageController::class, 'averageall2'])->name('ave-senior');
        Route::get('dashboard', [StudentController::class, 'studentSchedule'])->name('dashboard');
        Route::get('content', [StudentController::class, 'showGradesData'])->name('content');
        Route::get('view-announcement', [AnnouncementController::class, 'studentHome'])->name('view-announcement');
    });
    


// ******************* FACULTY MIDDLEWARE ***************************************************

Route::middleware(['auth', 'verified', 'faculty-middleware'])->group(function () {
        Route::get('add-faculty', [FacultyController::class, 'addFaculty'])->name('add-faculty');
        Route::post('save-faculty', [FacultyController::class, 'saveFaculty']);
        Route::get('student-all-faculty', [StudentController::class, 'studentAllFaculty'])->name('student-all-faculty');
        Route::get('edit-student-faculty/{id}', [StudentController::class, 'editStudentFaculty'])->name('edit-student-faculty');
        Route::post('update-student-faculty', [StudentController::class, 'updateStudent']);
        Route::get('faculty-profile', [FacultyController::class, 'showFacultyData'])->name('faculty-profile');
        Route::post('faculty-profile-update', [FacultyController::class, 'updateFaculty']);
        Route::get('edit-student-grade1/{user_id}', [FirstquarterController::class, 'editStudentGrade1']);
        Route::post('update-firstquarter', [FirstquarterController::class, 'updateFirstquarter']);
        Route::get('edit-student-grade2/{user_id}', [SecondquarterController::class, 'editStudentGrade2']);
        Route::post('update-secondquarter', [SecondquarterController::class, 'updateSecondquarter']);
        Route::get('edit-student-grade3/{user_id}', [ThirdquarterController::class, 'editStudentGrade3']);
        Route::post('update-thirdquarter', [ThirdquarterController::class, 'updateThirdquarter']);
        Route::get('edit-student-grade4/{user_id}', [FourthquarterController::class, 'editStudentGrade4']);
        Route::post('update-fourthquarter', [FourthquarterController::class, 'updateFourthquarter']);
        Route::get('faculty-dashboard', [FacultyController::class, 'facultySchedule'])->name('faculty-dashboard');
        Route::get('edit-student-grade-senior1/{user_id}', [FirstquarterseniorController::class, 'editStudentGradeSenior1']);
        Route::post('update-firstquarter-senior', [FirstquarterseniorController::class, 'updateFirstquarterSenior'])->name('update-firstquarter-senior');
        Route::get('edit-student-grade-senior2/{user_id}', [SecondquarterseniorController::class, 'editStudentGradeSenior2']);
        Route::post('update-secondquarter-senior', [SecondquarterseniorController::class, 'updateSecondquarterSenior']);
        Route::get('edit-student-grade-senior3/{user_id}', [ThirdquarterseniorController::class, 'editStudentGradeSenior3']);
        Route::post('update-thirdquarter-senior', [ThirdquarterseniorController::class, 'updateThirdquarterSenior']);
        Route::get('edit-student-grade-senior4/{user_id}', [FourthquarterseniorController::class, 'editStudentGradeSenior4']);
        Route::post('update-fourthquarter-senior', [FourthquarterseniorController::class, 'updateFourthquarterSenior']);
        Route::get('view-announcement-faculty',[AnnouncementController::class,'facultyHome']);
    });
    


Route::get('contactForm', [ContactController::class, 'index'])->name('contactForm');

Route::post('contact-us', [ContactController::class, 'store'])->name('contact.us.store');

Route::get('gradesectiondropdown', Gradesectiondropdown::class)->name('gradesectiondropdown');


Route::middleware(['auth', 'verified','admin-middleware'])->group(function () {
        Route::controller(FullCalenderController::class, '')->group(function () {
        Route::get('fullcalender', 'index');
        Route::post('fullcalenderAjax', 'ajax');
        });
    });

