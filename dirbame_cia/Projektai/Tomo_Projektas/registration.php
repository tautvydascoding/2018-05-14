<?php
include("header.php");
session_start();
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
if(!empty($sessData['status']['msg'])){
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}
?>
<div class="container">
    <h2>Prisiregistruoti</h2>
    <?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
    <div class="regisFrm">
        <form action="userAccount.php" method="post">
            <input type="text" name="first_name" placeholder="Vardas" required="">
            <input type="text" name="last_name" placeholder="Pavardė" required="">
            <input type="email" name="email" placeholder="El. Paštas" required="">
            <input type="text" name="phone" placeholder="Telefono numeris" required="">
            <input type="password" name="password" placeholder="Slaptažodis" required="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}>"
            <input type="password" name="confirm_password" placeholder="Patvirtinti Slaptažodį" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}>" required="">
            <div class="send-button">
                <input type="submit" name="signupSubmit" value="REGISTRUOTIS">
            </div>
        </form>
    </div>
</div>
<?php include("footer.php"); ?>
