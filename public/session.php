<?php

function getCurrentStep() {
    //if not set
    if (!isset($_SESSION['step'])) {
        //set it to the first step
        return 'aboutYou';

    }

    //otherwise return the current step
    return $_SESSION['step'];
}