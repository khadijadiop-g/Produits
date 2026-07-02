<?php

function saisie(string $message):string{
    return readline ($message);
}

function saisieInt(string $message):int{
    return (int)readline ($message);
}