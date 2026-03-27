<?php

function checkDomain($domain) {
    return !checkdnsrr($domain, "A");
}