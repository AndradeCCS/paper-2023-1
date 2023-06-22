<?php
require_once 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM agendamentos WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    
    
    if ($stmt->execute()) {
      echo "Agendamento excluído com sucesso.";
   } else {
        echo "Ocorreu um erro ao excluir o agendamento: " . $stmt->error;
    }

    
   $stmt->close();
    $conn->close();
} else {
    echo "ID do agendamento não fornecido.";
}
?>

   
