<?php

namespace Illuminate\Foundation\Auth;

trait RedirectsUsers
{
    /**
     * Get the post register / login redirect path.
     *
     * @return string
     */
    public function redirectPath()
    {
        if (method_exists($this, 'redirectTo')) {
            return $this->redirectTo();
        }

        \Session::flash('message', 'Welcome to LVCC website,');

        return property_exists($this, 'redirectTo') ? $this->redirectTo : '/home';
    }
}
