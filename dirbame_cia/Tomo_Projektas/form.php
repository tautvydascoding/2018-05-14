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
<div class="container kont">
    <?php
        if(!empty($sessData['userLoggedIn']) && !empty($sessData['userID'])){
            include 'user.php';
            $user = new User();
            $conditions['where'] = array(
                'id' => $sessData['userID'],
            );
            $conditions['return_type'] = 'single';
            $userData = $user->getRows($conditions);
    ?>
    <h2> <?php echo $userData['first_name']; ?></h2>
    <a href="userAccount.php?logoutSubmit=1" class="logout">Išeiti</a>
    <div class="regisFrm">
        <p><b>Vardas: </b><?php echo $userData['first_name'].' '.$userData['last_name']; ?></p>
        <p><b>El. Paštas: </b><?php echo $userData['email']; ?></p>
        <p><b>Telefonas: </b><?php echo $userData['phone']; ?></p>
    </div>
    <?php }else{ ?>
    <h2>Prisijungimas</h2>
    <?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
    <div class="regisFrm">
        <form action="userAccount.php" method="post">
            <input type="email" name="email" placeholder="El. Paštas" required="">
            <input type="password" name="password" placeholder="Slaptažodis" required="">
            <div class="send-button">
                <input type="submit" name="loginSubmit" value="PRISIJUNGTI">
            </div>
        </form>
        <p>Dar neprisiregistravai? <a href="registration.php">Registruokis</a></p>
    </div>
    <?php } ?>
</div>
<?php include("footer.php"); ?>
