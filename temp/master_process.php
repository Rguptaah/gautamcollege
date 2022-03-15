<?php
require_once("op_lib.php");
if (isset($_GET['task'])) {
    $task = $_GET['task'];
}

switch ($task) {


    case "send_contact_mail":
        extract($_POST);
        $msg1 = "A request is generated for query please concern him/her for the better approach.";
        $msg1 .= "<p>" . $message . "</p>";
        $msg2 = "Thank you for query, We will contact you soon";
        rtfmail($inst_email, $subject, $msg1, $_POST);
        $mail = rtfmail($email, 'Successfully Request Sent', $msg2, $_POST);
        if ($mail == "success") {
            $_SESSION['subject'] = $subject;
            $res['msg'] = "Thank you! Your request for $subject is submitted successfully,the concern person will contact you soon";
            $res['status'] = $mail;
        } else {
            $res['msg'] = "Sorry! Your request is not generated please try after some time.";
            $res['status'] = "error";
        }
        echo json_encode($res);
        break;
    default:
        echo "Invalid Action";
}
