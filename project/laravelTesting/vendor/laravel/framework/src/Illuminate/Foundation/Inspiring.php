<?php

namespace Illuminate\Foundation;

use Illuminate\Support\Collection;

class Inspiring
{
    /**
     * Get an inspiring quote.
     *
     * Taylor & Dayle made this commit from Jungfraujoch. (11,333 ft.)
     *
     * May McGinnis always control the board. #LaraconUS2015
     *
     * @return string
     */
    public static function quote()
    {
        return Collection::make([
            'Mahirap magmahal, pero mahirap magpangalan sa variable - Drin Drin',
            'Kapag may problema ka, tandaan mo...WALA AKONG PAKE - Senpai Elron',
            '<tara shift> is the best solution to an immortal coding error - Senpai Elron',
            'Please, try to lend some time to purchase me - WinRar',
            'I did not hit her, that\'s bullshit, it\'s not true, I did naaat - Tommy Wiseau'
        ])->random();
    }
}
