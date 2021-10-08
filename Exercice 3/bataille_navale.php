<!DOCTYPE html>
<html>
    <body>
        <?php
        $grille = [[0,1,0],[0,1,0],[0,0,1]];

        if (isset($_GET['tir'])) {
            echo $grille['tir'][0];
            $ligne = $_GET['tir'][0];
            $colonne = $_GET['tir'][1];
            echo $ligne, ":", $colonne;
        }

        function aff($grille, $l, $c) {
            if (isset($_GET['tir']) && $_GET['tir'][0] == $l && $_GET['tir'][1] == $c) {
                if ($grille[$l][$c] == 1) return "TOUCH";
                return "PLOUF";
            }
            return "???";
        }
        ?>
    <form>
    <table>
        <tr>
            <td><button type='submit' name='tir' value='00'><?php echo aff($grille, 0, 0); ?></button> </td>
            <td><button type='submit' name='tir' value='01'><?php echo aff($grille, 0, 1); ?></button> </td>
            <td><button type='submit' name='tir' value='02'><?php echo aff($grille, 0, 2); ?></button> </td>
        </tr>
        <tr>
            <td><button type='submit' name='tir' value='10'><?php echo aff($grille, 1, 0); ?></button> </td>
            <td><button type='submit' name='tir' value='11'><?php echo aff($grille, 1, 1); ?></button> </td>
            <td><button type='submit' name='tir' value='12'><?php echo aff($grille, 1, 2); ?></button> </td>
        </tr>
        <tr>
            <td><button type='submit' name='tir' value='20'><?php echo aff($grille, 2, 0); ?></button> </td>
            <td><button type='submit' name='tir' value='21'><?php echo aff($grille, 2, 1); ?></button> </td>
            <td><button type='submit' name='tir' value='22'><?php echo aff($grille, 2, 2); ?></button> </td>
        </tr>
    </table>
    </form>
    </body>
</html>