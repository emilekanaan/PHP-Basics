<?php 
$course_name = "Web development";
$enrolled_students = 43;
$price = 99.99;
$on_discount = false;

echo "Course title: $course_name";
echo "<br>";
echo "Enrolled Students: $enrolled_students";
echo "<br>";
echo "Course price: $price$ USD";
echo "<br>";
if ($on_discount) {
    echo "Course on discount: Yes";
} else {
    echo "Course on discount: No";
}

?>