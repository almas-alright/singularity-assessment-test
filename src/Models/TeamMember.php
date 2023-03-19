<?php

namespace AlmasAlright\SingularityAssessmentTest\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'address'];
}
