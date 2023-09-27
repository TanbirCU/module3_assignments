<!-- Task 4: Multidimensional Array
Create a multidimensional array called $studentGrades to store the grades of three students. Each student has grades for three subjects: Math, English, and Science. Write a PHP function which takes "$studentGrades" as an argument to calculate and print the average grade for each student. -->

<?php
    $studentGrades = [
        'Student 1' => ['Math' => 85, 'English' => 92, 'Science' => 78],
        'Student 2' => ['Math' => 88, 'English' => 95, 'Science' => 90],
        'Student 3' => ['Math' => 75, 'English' => 80, 'Science' => 85],
    ];


    function calculateAndPrintAverageGrades($studentGrades) {
        foreach ($studentGrades as $student => $grades) {
            $averageGrade = array_sum($grades) / count($grades);
            echo "$student - Average Grade: $averageGrade\n";
        }
    }
    calculateAndPrintAverageGrades($studentGrades);

?>
