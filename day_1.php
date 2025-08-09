<?php

// This is a single line comment

# This is a single line comment too

/* This is a
multi line comment
*/

// php can be written within HTML/HTML tags but the reverse is impossible.


#echo "Hello World";
#echo "My name is Andrew";

#$age = 2;
# Use camel casing or Pascal casing or snake casing to name variables.
# Variables are case-sensitive. $age and $Age are two different variables.

#echo $age;

#var_dump(29);
#var_dump() is a function that outputs the data type of the value.

#Data Types
# 1. Null - A variable that stores nothing.
#If php can't find a define variable it will default to null.
# null keyword in case-insensitive.
#$data = null;
#var_dump($data);

# 2. Boolean
#$is_logged_in = True;
#$has_blog_posts;
#var_dump($is_logged_in);


# 3. Integers & Floats
#$data = 5_000_000;
#var_dump($data);

#$data = 123.45;
#var_dump($data);

# 4. String

//$last_name = 'Smith';
//$data = "{$last_name} John";
//var_dump($data[0]);


# 5. Arrays(same as lists in Python)
//$data = ["salad", "burger", "pizza"];
//var_dump($data); # echoes out indexes, items and length of each string.
//$data[1] = "chicken";
//var_dump($data);
//$data[] = "Tomato soup"; # Add this item at the end of the array
//var_dump($data);

# Named Keys/indexes in Arrays
//$food = ["John" => "salad", "Wendy" => "burger", "Andrew" => "pizza"];
//# Code above assigns John as the index to "Salad" string. This practice is uncommon though
//$food["bob"] = "Tomato soup";
//var_dump($food);

#Multidimensional Arrays- When an array stores another array, simply called a nested array.

//$food = [
//    "John" => ["salad", "burrito"],
//    "Wendy" => "burger",
//    "Andrew" => "pizza"
//
//];
//# Code above assigns John as the index to "Salad" string. This practice is uncommon though
//$food["bob"] = "Tomato soup";
//var_dump($food["James"][1]);


        # Type Casting - Changing the data type of an existing value

//// Booleans
//var_dump((bool) "");            // -> false
//var_dump((bool) "Some Text");    // -> true
//var_dump((boolean) "0");         // -> false
//var_dump((bool) "false");        // -> true
//var_dump((bool) 0);              // -> false
//var_dump((bool) 1);              // -> true
//var_dump((bool) -1);             // -> true
//var_dump((bool) null);           // -> false
//var_dump((bool) []);             // -> false
//var_dump((bool) ["hello"]);      // -> true

 //Integers
// var_dump((int) false);        // -> 0
// var_dump((integer) true);     // -> 1
// var_dump((int) "-1");         // -> -1
// var_dump((int) "Hello");      // -> 0
// var_dump((int) "12 months");  // -> 12
// var_dump((int) 12.7);         // -> 12
// var_dump((int) null);         // -> 0

// Float
// var_dump((float) false);      // -> 0
// var_dump((float) true);       // -> 1
// var_dump((float) "-1");       // -> -1
// var_dump((float) "Hello");    // -> 0
// var_dump((float) "2.5 Hour"); // -> 2.5
// var_dump((float) null);       // -> 0

// Strings
// var_dump((string) false);     // -> ""
// var_dump((string) true);      // -> "1"
// var_dump((string) 0);         // -> "0"
// var_dump((string) 1.353);     // -> "1.353"
// var_dump((string) []);        // -> "Array"
// var_dump((string) ["John"]);  // -> "Array"
// var_dump((string) null);      // -> ""

// Arrays
//var_dump((array) false);      // -> [false]
// var_dump((array) true);       // -> [true]
// var_dump((array) 0);          // -> [0]
// var_dump((array) 1.353);      // -> [1.353]
// var_dump((array) "John");     // -> ["John"]
// var_dump((array) null);       // -> []//

        # Type Juggling = This is when PHP automatically type casts your values without your permission. echo keyword is notorious of this
#echo 30;


        # Arithmentic Operators
#$data = 11 % 2; # same modulo operator as python
//$data = 1 + (2 - 3) * 4 / 5; #PEMDAS
//$data = 10 ** 2;
//var_dump($data);

    # Assignment operators
# = is the common one
//$data = 10;
//$data += 4; # Same as Python. Applies to all the other arithmentic operators
//var_dump($data);

        # Comparison operators: They produce boolean values.
//var_dump(1 == "1",); # Type juggling behavior. This is a comparison between two different  data types and gives True.
//var_dump(1 === "1"); # This gives comparison ensures the data types are matching


//var_dump(1 != 1,); # Not equal operator.
//var_dump(1 <> 1); # Same as Not equal operator. Just a variation os syntax for the same thing
//var_dump(1 !== "1"); # Not identical operator

//# Error Control Operator
//@var_dump(
//    (string)[1]
//); # We are type casting an array to a string which is not allowed and gives an error.
//# But when you add @ before var_dump, the error is supressed.

        # Increment and decrement operators
//$data = 5; # How do we add 1 to this?
//#$data += 1; # You can do this or:
//#$data++; # Applies to only addition and subtraction
//#var_dump($data);
//#Now check this out:
//#var_dump($data++); # $data remains 5. WHy? PHP is returning value before the addition.
//var_dump(++$data); # $data now become 6. The addition takes place first before returning value to console

     # Logical operators: They allow for multiple comparisons
//$age = 29;
//$data = $age > 18 && $age < 65;
//var_dump($data); # you can use 'and' or && for this operator

//$permission = "admin";
//$data = $permission === "admin" || $permission === "mod";
//var_dump($data); # You can use 'or' or use || for this operator

//$permission = "";
//$data = !$permission; # Checks for a false value. Add a ! mark before the value
//var_dump($data);

    # Operator Precedence: Remember PEMDASLR, from Python
#$a = 5 + 2 * 10;
//$a = 5 / 2 * 10;
//var_dump($a);

        # Constant
//$full_name = "John Smith";
//$full_name = 100;
//var_dump($full_name); #This code updates the value of a variable.

# How to set a variable that once give a value, you can;t update it. Attempts to update causes an error.

//const FULL_NAME = "John Smith";
//const FULL_NAME = "Mary Jane";
//var_dump(FULL_NAME);

    #String Concatenation
//$full_name = "John Smith";
//$full_name = 100;
//const FULL_NAME = "John Smith";
//$message = "Hello, my name is ";
//$message .= FULL_NAME;
//#var_dump("Hello, my name is " .FULL_NAME); # How to insert a constant into a string
//$message .= FULL_NAME; # A shorter way to concatenate
//var_dump($message);


?>
