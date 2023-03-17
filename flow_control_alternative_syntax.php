<?php
/*
This syntax involves changing opening braces to colons ( : ) and the
last closing brace to endif; , endwhile; , endfor; ,
endforeach; , or endswitch; respectively.
Let’s use an if statement to illustrate this. Suppose we want to
display different outputs based on the value of $a , we can use the
following if statement:
*/
$a = 5;
if($a==5):
    echo '<br>The value of $a is<br>';
    echo '$a';
else:
    echo 'Not five';
endif;
