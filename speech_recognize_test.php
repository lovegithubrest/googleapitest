<?php

include 'glib/auth/service-account.php';
include 'glib/api/speech.php';

var_dump(speech_recognize('audio32KHz.flac','flac',32000));