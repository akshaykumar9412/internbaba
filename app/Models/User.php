<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
//laravel relationships
//one to one
//one to many
//many to many
//has many through

//1. Student has one Table
//2. Student has many contacts details
//3. Contact details belongs to Student  

//   $table->forgien('student_id')->references('id')->on('students');

//App/Models/Student.php
// public function contactDetails){
//return $this->hasMany(ContactDetails::class);
// } 
//ager starting me forgien key et nahi ke ho or primari ke then ye cammand likho 
// return $this->hasOne(ContactDetails::class,'student_id','id');
// studnt_id is foreign key and id is primary key


    
            