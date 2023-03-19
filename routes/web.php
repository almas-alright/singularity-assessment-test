<?php

use Illuminate\Support\Facades\Route;
use AlmasAlright\SingularityAssessmentTest\Http\Controllers\TeamMemberController;

Route::resource('teamMembers', TeamMemberController::class);
