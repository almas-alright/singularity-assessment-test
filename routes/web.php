<?php

use AlmasAlright\SingularityAssessmentTest\Http\Controllers\TeamMemberController;
use Illuminate\Support\Facades\Route;

Route::resource('teamMembers', TeamMemberController::class);
