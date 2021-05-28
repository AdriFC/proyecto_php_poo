<?php if(isset($_SESSION['pedido']) && $_SESSION['pedido'] == 'complete'): ?>

<h1>Tu pedido se ha confirmado</h1>
<p>
Tu pedido se guardó con éxito, una vez que realices la transferencia bancaria
con el coste del pedido, será procesado y enviado.
</p>

<?php elseif (isset($_SESSION['pedido']) && $_SESSION['pedido'] != 'complete') : ?>

    <h1>Tu pedido no ha podido procesarse</h1>

<?php endif; ?>