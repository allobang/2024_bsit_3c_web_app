<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            color: aliceblue;
            font-family: sans-serif;
            background-color: darkmagenta;
        }

        table,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <h2>
        <?php
        // $students = ["Neo dela cruz", "Joshua", "Matt", "Lloyd", "blance", "Jane", "Racquel", "Silver", "Brent", "Glysdi", "Orio"];
        $studentInformation = [
            [
                "surName" => "dela cruz",
                "firstName" => "neo mark",
                "middleName" => "bumanglag",
                "sex" => "male",
                "yearLevel" => 3,
                "section" => "c",
                "specialization" => "WM",
                "subjects" => [
                    "web application" => 73,
                    "mobile application" => 70,
                    "networking 2" => 69,
                ],
            ],
            [
                "surName" => "pagsambungan",
                "firstName" => "joshua john",
                "middleName" => "pascual",
                "sex" => "male",
                "yearLevel" => 3,
                "section" => "c",
                "specialization" => "WM",
                "subjects" => [
                    "web application" => 73,
                    "mobile application" => 70,
                    "networking 2" => 69,
                ],
            ],
            [
                "surName" => "edra",
                "firstName" => "reymart",
                "middleName" => "delos santos",
                "sex" => "male",
                "yearLevel" => 3,
                "section" => "c",
                "specialization" => "WM",
                "subjects" => [
                    "web application" => 73,
                    "mobile application" => 70,
                    "networking 2" => 69,
                ],
            ],
            [
                "surName" => "blance",
                "imageAddress" => "blance",
                "firstName" => "mark",
                "middleName" => "frances",
                "sex" => "female",
                "yearLevel" => 3,
                "section" => "c",
                "specialization" => "WM",
                "subjects" => [
                    "web application" => 85,
                    "mobile application" => 83,
                    "networking 2" => 82,
                ],
            ],
            [
                "surName" => "manuel",
                "firstName" => "jane",
                "middleName" => "baniqued",
                "sex" => "female",
                "yearLevel" => 3,
                "section" => "c",
                "specialization" => "NS",
                "subjects" => [
                    "Virtual Systems and Services" => 89,
                    "Information Assurance and Security 1" => 83,
                    "networking 2" => 82,
                ],
            ],
            [
                "surName" => "francisco",
                "firstName" => "rubylyn",
                "middleName" => "lingaoad",
                "sex" => "female",
                "yearLevel" => 4,
                "section" => "a",
                "specialization" => "WM",
                "subjects" => [
                    "web application" => 89,
                    "Information Assurance and Security 1" => 83,
                ],
            ],
        ];

        function getAverage($subjects){
            $sum = 0;
            foreach($subjects as $subject => $grade){
                $sum += $grade;
            }
            $average = $sum / count($subjects);
            return $average;
        }

        function getStatus($average){
            if($average >= 75){
                $status = "Passed";
            }else{
                $status = "Failed";
            }
            return $status;
        }
        echo "This is the list of students:";
        ?>
    </h2>
    <table>
        <thead>
            <td>Last Name            </td>
            <td>First Name</td>
            <td>Middle Name</td>
            <td>Sex</td>
            <td>Year Level</td>
            <td>Section</td>
            <td>Specialization</td>
            <td>Subject</td>
            <td>GWA</td>
            <td>Equivalent</td>
            <td>Status</td>
        </thead>
        <?php foreach ($studentInformation as $student):
            $sum = 0;
            ?>
            <tr>
            <td><?php echo $student["surName"] ?></td>
            <td><?php echo $student["firstName"] ?></td>
            <td><?php echo $student["middleName"] ?></td>
            <td><?php echo $student["sex"] ?></td>
            <td><?php echo $student["yearLevel"] ?></td>
            <td><?php echo $student["section"] ?></td>
            <td><?php echo $student["specialization"] ?></td>
            <td>
                <ul>
                    <?php foreach($student["subjects"] as $subjectName => $grade):
                        $average = getAverage($student["subjects"]);
                        $status = getStatus($average);
                        ?>
                        <li><?php echo $subjectName . ": ". $grade; ?></li>
                    <?php endforeach; ?>
                </ul>
            </td>
            <td>
                <?= round($average,2);?>
            </td>
            <td></td>
            <td><?= $status ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>