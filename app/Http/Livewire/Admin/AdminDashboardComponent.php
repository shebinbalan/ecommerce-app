<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;

class AdminDashboardComponent extends Component
{
    public function deleteCategory($id)
    {
        $category = Category::find($id);
        $category->delete();
        session()->flash('message','Category has been deleted Successfully');
    }
    public function render()
    {
        return view('livewire.admin.admin-dashboard-component')->layout('layouts.base');
    }
}
