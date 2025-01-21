<?php
session_start();

if (!isset($_SESSION['board'])) {
    $_SESSION['board'] = [
        ['-', '-', '-'],
        ['-', '-', '-'],
        ['-', '-', '-']
    ];
    $_SESSION['turn'] = 'X';
    $_SESSION['winner'] = null;
}

if (isset($_POST['row'], $_POST['col']) && $_SESSION['winner'] === null) {
    $row = $_POST['row'];
    $col = $_POST['col'];

    if ($_SESSION['board'][$row][$col] == '-') {
        $_SESSION['board'][$row][$col] = $_SESSION['turn'];

        if (checkWinner($_SESSION['board'], $_SESSION['turn'])) {
            $_SESSION['winner'] = $_SESSION['turn'];
        } else {
            $_SESSION['turn'] = ($_SESSION['turn'] == 'X') ? 'O' : 'X';
        }
    }
}

if ($_SESSION['winner'] !== null || isDraw($_SESSION['board'])) {
    $message = $_SESSION['winner'] ? $_SESSION['winner'] . " a gagné" : "Match nul";
} else {
    $message = "C'est au tour de " . $_SESSION['turn'];
}

function checkWinner($board, $player) {
    for ($i = 0; $i < 3; $i++) {
        if ($board[$i][0] == $player && $board[$i][1] == $player && $board[$i][2] == $player) return true;
        if ($board[0][$i] == $player && $board[1][$i] == $player && $board[2][$i] == $player) return true;
    }
    if ($board[0][0] == $player && $board[1][1] == $player && $board[2][2] == $player) return true;
    if ($board[0][2] == $player && $board[1][1] == $player && $board[2][0] == $player) return true;
    return false;
}

function isDraw($board) {
    foreach ($board as $row) {
        foreach ($row as $cell) {
            if ($cell == '-') {
                return false;
            }
        }
    }
    return true;
}

if (isset($_POST['reset'])) {
    $_SESSION['board'] = [
        ['-', '-', '-'],
        ['-', '-', '-'],
        ['-', '-', '-']
    ];
    $_SESSION['turn'] = 'X';
    $_SESSION['winner'] = null;
    $message = "C'est au tour de X";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu du Morpion</title>
    <style>
        table {
            width: 300px;
            height: 300px;
            border-collapse: collapse;
        }
        td {
            text-align: center;
            vertical-align: middle;
            width: 100px;
            height: 100px;
            border: 1px solid black;
        }
        button {
            width: 100%;
            height: 100%;
            font-size: 24px;
        }
    </style>
</head>
<body>

<h1>Jeu du Morpion</h1>
<p><?php echo $message; ?></p>

<form method="post">
    <table>
        <?php
        for ($row = 0; $row < 3; $row++) {
            echo "<tr>";
            for ($col = 0; $col < 3; $col++) {
                echo "<td>";
                if ($_SESSION['board'][$row][$col] == '-') {
                    echo "<button type='submit' name='row' value='$row' name='col' value='$col'>-</button>";
                } else {
                    echo $_SESSION['board'][$row][$col];
                }
                echo "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</form>

<form method="post">
    <button type="submit" name="reset">Réinitialiser la partie</button>
</form>

</body>
</html>