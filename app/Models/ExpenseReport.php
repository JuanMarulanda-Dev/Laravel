<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExpenseReport extends Model
{
    //
    public function Expenses()
    {
        $this->hasMany(Expense::class);
    }
}
