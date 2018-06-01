<?php $pacientas1 = getPatient(4); ?>

<br>
<h2> <?php echo "Paciento Nr." . "$pacientas1[id]"; ?></h2>
    <h3> <?php echo "paciento varadas ir pavarde: " . "$pacientas1[name]" . " " . "$pacientas1[lname]"; ?></h3>
    <h4><?php echo "sio paciento daktaro id: " . "$pacientas1[doctor_id]" ?></h4>
