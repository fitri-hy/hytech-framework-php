<?php

// Function to include footer file
function includeFooter($footerFile) {
    include_once(__DIR__ . '/../views/' . $footerFile);
}
