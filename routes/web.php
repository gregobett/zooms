<?php

use Illuminate\Support\Facades\Route;
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

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// for completing information of the student
// Route::get('home', function () {
//         return view('home');
//     })->middleware(['auth'])->name('home');
    





require __DIR__ . '/auth.php';


// ************************* USERS DASHBOARD ******************************************************

Route::get('dashboard',[DashboardController::class,'StudentDashboard'])
        ->middleware(['auth', 'verified','student-middleware'])->name('dashboard');

Route::get('faculty-dashboard',[DashboardController::class,'FacultyDashboard'])
        ->middleware(['auth', 'verified','faculty-middleware'])->name('faculty-dashboard');


Route::get('admin-dashboard',[DashboardController::class,'AdminDashboard'])
        ->middleware(['auth', 'verified','admin-middleware'])->name('admin-dashboard');



// ******************* ADMIN MIDDLEWARE ***************************************************

Route::get('student-all-list',[StudentController::class,'studentAllList'])
        ->middleware(['auth', 'verified','admin-middleware'])->name('student-all-list');

Route::get('edit-student/{id}',[StudentController::class,'editStudent'])
        ->middleware(['auth', 'verified','admin-middleware'])->name('edit-student');

Route::post('update-student',[StudentController::class,'updateStudent'])
        ->middleware(['auth', 'verified','admin-middleware']);

Route::get('faculty-all-list',[FacultyController::class,'facultyAllList'])
        ->middleware(['auth', 'verified','admin-middleware']);

Route::get('edit-faculty/{id}',[FacultyController::class,'editFaculty'])
        ->middleware(['auth', 'verified','admin-middleware'])->name('edit-faculty'); 

Route::post('update-faculty',[FacultyController::class,'updateFaculty'])
        ->middleware(['auth', 'verified','admin-middleware']);

Route::get('delete-student/{id}',[StudentController::class,'deleteStudent'])
        ->middleware(['auth', 'verified','admin-middleware']);



// ******************* STUDENT MIDDLEWARE ***************************************************

Route::get('add-student',[StudentController::class,'addStudent'])
        ->middleware(['auth', 'verified','student-middleware'])->name('add-student');


Route::post('save-student',[StudentController::class, 'saveStudent'])
        ->middleware(['auth', 'verified', 'student-middleware']);


Route::get('student-profile', [StudentController::class,'showStudentData'])
        ->middleware(['auth', 'verified','student-middleware'])->name('student-profile');

Route::post('student-profile-update',[StudentController::class,'updateStudent'])
        ->middleware(['auth', 'verified','student-middleware']);

Route::get('register-grade1',[FirstquarterController::class,'RegisterGrade1'])
        ->middleware(['auth', 'verified','student-middleware'])->name('register-grade1');

Route::post('save-firstquarter',[FirstquarterController::class, 'saveFirstquarter'])
        ->middleware(['auth', 'verified', 'student-middleware']);

Route::get('register-grade2',[SecondquarterController::class,'RegisterGrade2'])
        ->middleware(['auth', 'verified','student-middleware'])->name('register-grade2');

Route::post('save-secondquarter',[SecondquarterController::class, 'saveSecondquarter'])
        ->middleware(['auth', 'verified', 'student-middleware']);


Route::get('register-grade3',[ThirdquarterController::class,'RegisterGrade3'])
        ->middleware(['auth', 'verified','student-middleware'])->name('register-grade3');

Route::post('save-thirdquarter',[ThirdquarterController::class, 'saveThirdquarter'])
        ->middleware(['auth', 'verified', 'student-middleware']);

Route::get('register-grade4',[FourthquarterController::class,'RegisterGrade4'])
        ->middleware(['auth', 'verified','student-middleware'])->name('register-grade4');

Route::post('save-fourthquarter',[FourthquarterController::class, 'saveFourthquarter'])
        ->middleware(['auth', 'verified', 'student-middleware']);




Route::get('register-grade-senior1',[FirstquarterseniorController::class,'RegisterGradeSenior1'])
        ->middleware(['auth', 'verified','student-middleware'])->name('register-grade-senior1');

Route::post('save-firstquarter-senior',[FirstquarterseniorController::class, 'saveFirstquarterSenior'])
        ->middleware(['auth', 'verified', 'student-middleware']);

Route::get('register-grade-senior2',[SecondquarterseniorController::class,'RegisterGradeSenior2'])
        ->middleware(['auth', 'verified','student-middleware'])->name('register-grade-senior2');

Route::post('save-secondquarter-senior',[SecondquarterseniorController::class, 'saveSecondquarterSenior'])
        ->middleware(['auth', 'verified', 'student-middleware']);

Route::get('register-grade-senior3',[ThirdquarterseniorController::class,'RegisterGradeSenior3'])
        ->middleware(['auth', 'verified','student-middleware'])->name('register-grade-senior3');

Route::post('save-thirdquarter-senior',[ThirdquarterseniorController::class, 'saveThirdquarterSenior'])
        ->middleware(['auth', 'verified', 'student-middleware']);

Route::get('register-grade-senior4',[FourthquarterseniorController::class,'RegisterGradeSenior4'])
        ->middleware(['auth', 'verified','student-middleware'])->name('register-grade-senior4');

Route::post('save-fourthquarter-senior',[FourthquarterseniorController::class, 'saveFourthquarterSenior'])
        ->middleware(['auth', 'verified', 'student-middleware']);



Route::get('view-grades',[FirstquarterController::class,'viewGrades'])
        ->middleware(['auth', 'verified','student-middleware'])->name('view-grades');

// Route::get('view-grades',[SecondquarterController::class,'viewGrades2']);


Route::get('view-grades2',[SecondquarterController::class,'viewGrades2'])
        ->middleware(['auth', 'verified','student-middleware'])->name('view-grades2');

Route::get('view-grades3',[ThirdquarterController::class,'viewGrades3'])
        ->middleware(['auth', 'verified','student-middleware'])->name('view-grades3');

Route::get('view-grades4',[FourthquarterController::class,'viewGrades4'])
        ->middleware(['auth', 'verified','student-middleware'])->name('view-grades4');


// Route::get('dashboard',[FourthquarterController::class,'StudentDashboard'])
//         ->middleware(['auth', 'verified','student-middleware'])->name('dashboard');
// ******************* FACULTY MIDDLEWARE ***************************************************


Route::get('add-faculty',[FacultyController::class,'addFaculty'])
        ->middleware(['auth', 'verified','faculty-middleware'])->name('add-faculty');

Route::post('save-faculty',[FacultyController::class, 'saveFaculty'])
        ->middleware(['auth', 'verified', 'faculty-middleware']);

Route::get('student-all-faculty',[StudentController::class,'studentAllFaculty'])
        ->middleware(['auth', 'verified','faculty-middleware'])->name('student-all-faculty');

Route::get('edit-student-faculty/{id}',[StudentController::class,'editStudentFaculty'])
        ->middleware(['auth', 'verified','faculty-middleware'])->name('edit-student-faculty');

Route::post('update-student-faculty',[StudentController::class,'updateStudent'])
        ->middleware(['auth', 'verified','faculty-middleware']);



Route::get('faculty-profile', [FacultyController::class,'showFacultyData'])
        ->middleware(['auth', 'verified','faculty-middleware'])->name('faculty-profile');

Route::post('faculty-profile-update',[FacultyController::class,'updateFaculty'])
        ->middleware(['auth', 'verified','faculty-middleware']);



Route::get('edit-student-grade1/{user_id}',[FirstquarterController::class,'editStudentGrade1'])
        ->middleware(['auth', 'verified','faculty-middleware']);

Route::post('update-firstquarter',[FirstquarterController::class, 'updateFirstquarter'])
        ->middleware(['auth', 'verified', 'faculty-middleware']);

Route::get('edit-student-grade2/{user_id}',[SecondquarterController::class,'editStudentGrade2'])
        ->middleware(['auth', 'verified','faculty-middleware']);

Route::post('update-secondquarter',[SecondquarterController::class, 'updateSecondquarter'])
        ->middleware(['auth', 'verified', 'faculty-middleware']);

Route::get('edit-student-grade3/{user_id}',[ThirdquarterController::class,'editStudentGrade3'])
        ->middleware(['auth', 'verified','faculty-middleware']);

Route::post('update-thirdquarter',[ThirdquarterController::class, 'updateThirdquarter'])
        ->middleware(['auth', 'verified', 'faculty-middleware']);

Route::get('edit-student-grade4/{user_id}',[FourthquarterController::class,'editStudentGrade4'])
        ->middleware(['auth', 'verified','faculty-middleware']);

Route::post('update-fourthquarter',[FourthquarterController::class, 'updateFourthquarter'])
        ->middleware(['auth', 'verified', 'faculty-middleware']);




Route::get('edit-student-grade-senior1/{user_id}',[FirstquarterseniorController::class,'editStudentGradeSenior1'])
        ->middleware(['auth', 'verified','faculty-middleware']);

Route::post('update-firstquarter-senior',[FirstquarterseniorController::class, 'updateFirstquarterSenior'])
        ->middleware(['auth', 'verified', 'faculty-middleware'])->name('update-firstquarter-senior');

Route::get('edit-student-grade-senior2/{user_id}',[SecondquarterseniorController::class,'editStudentGradeSenior2'])
        ->middleware(['auth', 'verified','faculty-middleware']);

Route::post('update-secondquarter-senior',[SecondquarterseniorController::class, 'updateSecondquarterSenior'])
        ->middleware(['auth', 'verified', 'faculty-middleware']);

Route::get('edit-student-grade-senior3/{user_id}',[ThirdquarterseniorController::class,'editStudentGradeSenior3'])
        ->middleware(['auth', 'verified','faculty-middleware']);

Route::post('update-thirdquarter-senior',[ThirdquarterseniorController::class, 'updateThirdquarterSenior'])
        ->middleware(['auth', 'verified', 'faculty-middleware']);

Route::get('edit-student-grade-senior4/{user_id}',[FourthquarterseniorController::class,'editStudentGradeSenior4'])
        ->middleware(['auth', 'verified','faculty-middleware']);

Route::post('update-fourthquarter-senior',[FourthquarterseniorController::class, 'updateFourthquarterSenior'])
        ->middleware(['auth', 'verified', 'faculty-middleware']);




// ####################### ANNOUNCEMENTS ########################################################

Route::get('announcement-all-list',[AnnouncementController::class, 'announcementAllList']
        )->middleware(['auth', 'verified', 'admin-middleware']);


Route::post('save-announcement',[AnnouncementController::class, 'saveAnnouncement']
        )->middleware(['auth', 'verified', 'admin-middleware']);


Route::get('add-announcement',[AnnouncementController::class, 'announcementsfunc']
        )->middleware(['auth', 'verified', 'admin-middleware']);

Route::get('edit-announcement/{id}',[AnnouncementController::class, 'editAnnouncement']
        )->middleware(['auth', 'verified', 'admin-middleware']);

Route::post('update-announcement',[AnnouncementController::class, 'updateAnnouncement']
        )->middleware(['auth', 'verified', 'admin-middleware']);


Route::get('delete-announcement/{id}',[AnnouncementController::class,'deleteAnnouncement'])
        ->middleware(['auth', 'verified','admin-middleware']);


Route::get('view-announcement',[AnnouncementController::class,'studentHome'])
        ->middleware(['auth', 'verified','student-middleware'])->name('view-announcement');

// Route::get('view-announcement',[AnnouncementController::class,'facultyHome'])
//         ->middleware(['auth', 'verified','faculty-middleware'])->name('view-announcement');

Route::get('view-announcement-faculty',[AnnouncementController::class,'facultyHome'])
        ->middleware(['auth', 'verified','faculty-middleware'])->name('view-announcement-faculty');