<?php

/**
 * Helper functions
 */
class Helpers
{
    public function isLandingPage()
    {
        return ( ! is_home())
            ? 'landing-page'
            : null;
    }
}