<?php

function hidden_string($string)
{
    return substr($string, 0, 4) . "****" . substr($string, 7, 4);
}