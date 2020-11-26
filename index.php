<?php

/**************************************************************************************************
 * Copyright (c) 2019.                                                                            *
 * bangameck.dev.                                                                                 *
 * Teknik Informatika UIN Suska Riau.                                                             *
 * rahmad.looker@gmail.com                                                                        *
 * @bangameck                                                                                     *
 * 7/10/19 1:17 AM.                                                                               *
 **************************************************************************************************/


include '_func/func.php';
//include 'lgn.php';

//include '_temp/dash.php';
if (empty($_SESSION['username']) AND empty($_SESSION['password'])) {
    include 'lgn.php';
} else {
    include 'dash.php';
}
