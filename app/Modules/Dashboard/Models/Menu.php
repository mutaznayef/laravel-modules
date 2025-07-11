<?php

namespace App\Modules\Dashboard\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    /** @use HasFactory<\Database\Factories\MenuFactory> */
    use HasFactory;

    protected $fillable = ['section', 'title', 'slug', 'icon_html', 'url', 'permission', 'parent_id'];


    // Children (submenus)
    public function children()
    {
        return $this->hasMany(Menu::class, 'parent_id')->with('children');
    }

    public function childrenRecursive()
    {
        return $this->children()->with('childrenRecursive');
    }

    // Parent
    public function parent()
    {
        return $this->belongsTo(Menu::class, 'parent_id');
    }

    // Optional: Check if a user can access this menu
    public function isVisibleFor($user)
    {
        return !$this->permission_name || $user->can($this->permission_name);
    }

    public function getIconHtmlAttribute($value)
    {
        return $value ?: '<span class="menu-bullet"><span class="bullet bullet-dot"></span></span>';
    }
}
