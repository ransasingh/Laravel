<!DOCTYPE html>
<html>
<head>
    <title>Percentage and Grade Calculation</title>
</head>
<body>
    <div class="form_conatiner">
    <form method="POST">
        <label for="physics">1.Physics:</label>
        <input type="number" name="physics" id="physics" required> 

        <label for="chemistry">2.Chemistry:</label>
        <input type="number" name="chemistry" id="chemistry" required>

        <label for="biology">3.Biology:</label>
        <input type="number" name="biology" id="biology" required>

        <label for="mathematics">4.Mathematics:</label>
        <input type="number" name="mathematics" id="mathematics" required>

        <label for="computer">Computer:</label>
        <input type="number" name="computer" id="computer" required>

        <input type="submit" value="Calculate Percentage and Grade">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $physics = $_POST['physics'];
        $chemistry = $_POST['chemistry'];
        $biology = $_POST['biology'];
        $mathematics = $_POST['mathematics'];
        $computer = $_POST['computer'];

        $totalMarks = $physics + $chemistry + $biology + $mathematics + $computer;
        $percentage = ($totalMarks / 500) * 100;

        $grade = '';
        if ($percentage >= 90) {
            $grade = 'A+';
        } elseif ($percentage >= 80) {
            $grade = 'A';
        } elseif ($percentage >= 70) {
            $grade = 'B';
        } elseif ($percentage >= 60) {
            $grade = 'C';
        } elseif ($percentage >= 50) {
            $grade = 'D';
        } else {
            $grade = 'Fail';
        }

        echo "Total Marks: $totalMarks <br>";
        echo "Percentage: $percentage% <br>";
        echo "Grade: $grade";
    }
    ?>
</body>
</html>
