<?php
include 'conn.php';

function index()
{
    $db = mysqli_connect('localhost', 'root', '', 'test');
    $_SESSION['survey'] = [];
    $query = "SELECT * FROM surveys;";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) > 0) {
        while ($row = $results->fetch_assoc()) {
            $_SESSION['survey'][] = $row;
        }
    }

    return $_SESSION['survey'];
}

function show($id)
{
    $db = mysqli_connect('localhost', 'root', '', 'test');
    $questions = [];
    $query = "SELECT * FROM survey_questions WHERE survey_id = '{$id}';";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) > 0) {
        while ($row = $results->fetch_assoc()) {
            $questions[] = $row;
        }
    }
    return $questions;
}

function create()
{
    $db = mysqli_connect('localhost', 'root', '', 'test');
    $surveys = index();
    $_SESSION['survey_errors'] = [];

    if (count($surveys) != count($_POST) - 1) {
        $_SESSION['survey_errors'][] = "Molim vas odgovorite na sva pitanja.";
    }

    if (count($surveys) == count($_POST) - 1) {
        foreach ($_POST as $key => $value) {
            $userId = $_SESSION['id'];
            $surveyId = (int)$key;
            $surveyQuestionId = (int)$value;
            $query = "INSERT INTO survey_user(user_id, survey_id, survey_question_id) 
                VALUES('{$userId}', '{$surveyId}', '{$surveyQuestionId}')";
            mysqli_query($db, $query);
        }
    }

    header('location: ankete.php');
}

if (isset($_POST['submit_survey'])) {
    create();
}

?>
