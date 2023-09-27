<?php
function calculateAverageGrades($studentGrades) {
    foreach ($studentGrades as $student => $grades) {
        $total = array_sum($grades);
        $count = count($grades);
        $average = $total / $count;
        
        echo "Student $student Average Grade: $average\n";
    }
}

$studentGrades = [
    'Student1' => ['Math' => 85, 'English' => 92, 'Science' => 78],
    'Student2' => ['Math' => 88, 'English' => 95, 'Science' => 90],
    'Student3' => ['Math' => 75, 'English' => 80, 'Science' => 85],
];

calculateAverageGrades($studentGrades);
?>
