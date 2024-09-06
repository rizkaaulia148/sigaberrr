<?php
include "proses/connect.php";

$query = mysqli_query($conn, "SELECT Email FROM tb_pegawai");

if ($query->num_rows > 0) {
    // loop melalui hasil dan kirim email ke masing-masing
    while ($row = mysqli_fetch_assoc($query)) {
        $to = $row["Email"];
        $subject = "Scheduled Email";
        $message = "This is a test email sent by Task Scheduler.";
        $headers = "Sigaber";

        if (mail($to, $subject, $message, $headers)) {
            echo "Email sent to: " . $to . "\n";
        } else {
            echo "Failed to send email to: " . $to . "\n";
        }
    }
} else {
    echo "No email addresses found.";
}

$conn->close();
?>