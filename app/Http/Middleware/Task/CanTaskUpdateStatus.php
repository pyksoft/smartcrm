<?php

namespace App\Http\Middleware\Task;

use Closure;
use App\Settings;
use App\Tasks;

class CanTaskUpdateStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $task = Tasks::findOrFail($request->id);
        $isAdmin = auth()->user()->hasRole('administrator');
        $settings = Settings::all();
        $settingscomplete = $settings[0]['task_complete_allowed'];
        if ($isAdmin) {
            return $next($request);
        }
        if ($settingscomplete == 1  && auth()->user()->id != $task->fk_user_id_assign) {
            Session()->flash('flash_message_warning', 'Only assigned user are allowed to close Task.');
            return redirect()->back();
        }
        return $next($request);
    }
}
