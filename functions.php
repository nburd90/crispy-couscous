<?php

//validate the math check
if (! validate_math($post['human'], 5)){
    return array( 'status' => 0, 'message' => 'Your math is supect');
}

//validate email
if (! validate_email($post))





//validate math
function validate_math( $value, $test) {
    if (intval( $value )) == $test ) {
        return true;
    }
        return false;                                           
}

